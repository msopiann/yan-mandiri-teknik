<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\HeroSection;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Statistic;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $settingsCollection = Setting::all();
        $settings = $settingsCollection->keyBy('key');

        $heroSections = HeroSection::orderBy('order')->get();
        
        $about = About::latest()->first();
        
        $paragraphs = array_filter(preg_split('/\r\n\r\n|\n\n/', $about->description));
        
        $statistics = Statistic::orderBy('id')->get();
        
        $counters = $statistics->map(function($statistic) {
            preg_match('/^(\d+\.?\d*)(.*)$/', $statistic->goal, $matches);
            
            $count = $matches[1] ?? $statistic->goal;
            $suffix = $matches[2] ?? 'k+';
            
            return [
                'icon' => $statistic->icon,
                'count' => $count,
                'suffix' => $suffix,
                'label' => $statistic->name
            ];
        })->toArray();

        $services = Service::orderBy('order')->get()->map(function($service) {
            return [
                'icon' => $service->icon,
                'title' => $service->name,
                'description' => $service->description,
                'image' => $service->image ?: 'assets/images/service/04.webp',
                'link' => $service->link ?: '#',
                'button_text' => $service->button_text ?: 'Learn More',
                'button_link' => $service->button_link ?: '#'
            ];
        })->toArray();
        
        $cta = [
            'title' => 'Mari Wujudkan Proyek Bersama',
            'description' => 'Kami mengutamakan keunggulan dalam setiap aspek pekerjaan, memastikan setiap komponen yang dihasilkan memenuhi standar kualitas.',
            'button_text' => 'Mari Bekerja Sama',
            'button_link' => '#contact'
        ];

        $callToAction = [
            'title' => $settings['cta_title']->value ?? 'For any inquiries, call us at',
            'phone' => $settings['company_phone']->value ?? '(555) 123-4567',
            'description' => $settings['cta_description']->value ?? 'We\'re available Monday through Friday, 9:00 AM - 5:00 PM'
        ];
        
        $openingHours = [
            [
                'days' => $settings['opening_days_1']->value ?? 'Senin - Sabtu',
                'hours' => $settings['opening_hours_1']->value ?? '9:00 WIB - 17:00 WIB'
            ],
            [
                'days' => $settings['opening_days_2']->value ?? 'Sunday',
                'hours' => $settings['opening_hours_2']->value ?? 'Closed'
            ]
        ];
        
        $email = [
            'title' => $settings['email_title']->value ?? 'Email Us',
            'addresses' => [
                $settings['email_1']->value ?? 'info@elever.com',
                $settings['email_2']->value ?? 'support@elever.com'
            ]
        ];
        
        $address = [
            'title' => $settings['address_title']->value ?? 'Our Location',
            'text' => $settings['company_address']->value ?? '123 Construction Ave, Building City, NY 10001'
        ];
        
        $companyName = $settings['company_name']->value ?? 'ABC Company';
        
        $links = [
            [
                'url' => $settings['footer_link_1_url']->value ?? '#',
                'text' => $settings['footer_link_1_text']->value ?? 'Privacy Policy'
            ],
            [
                'url' => $settings['footer_link_2_url']->value ?? '#',
                'text' => $settings['footer_link_2_text']->value ?? 'Terms of Service'
            ]
        ];
        
        $mapUrl = $settings['map_url']->value ?? 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.9459510358148!2d106.70503259184078!3d-6.1124916758613095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a0355a7384bf9%3A0xad13710848686ec3!2sBengkel%20bubut%20Yan%20Mandiri%20Teknik!5e0!3m2!1sid!2sid!4v1741982598270!5m2!1sid!2sid';
        
        $smallCta = [
            'schedule' => $settings['small_cta_schedule']->value ?? 'Senin - Sabtu: 9:00 WIB - 17:00 WIB',
            'message' => $settings['small_cta_message']->value ?? 'Contact us today.',
            'link' => $settings['small_cta_link']->value ?? '#contact',
            'linkText' => $settings['small_cta_link_text']->value ?? 'Contact Us'
        ];

        $headerPhone = $settings['company_phone']->value ?? '(555) 123-4567';

        $headerEmail = $settings['email_1']->value ?? 'info@elever.com';
        
        $socialMedia = [
            'instagram' => $settings['instagram_url']->value ?? '#',
        ];

        $logoPath = $settings['logo_path']->value;

        $sidebarHeadlineDesktop = $settings['sidebar-headline-desktop']->value;
        $sidebarSubheadlineDesktop = $settings['sidebar-subheadline-desktop']->value;
        

        return view('front.index', compact(
            'settings',
        'heroSections',
        'about',
        'paragraphs',
        'counters',
        'services',
        'cta',
        'callToAction',
        'openingHours',
        'email',
        'address',
        'companyName',
        'links',
        'mapUrl',
        'smallCta',
        'headerPhone',
        'headerEmail',
        'socialMedia',
        'logoPath',
        'sidebarHeadlineDesktop',
        'sidebarSubheadlineDesktop'
        ));
    }
}