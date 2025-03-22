<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            // Logo
            ['name' => 'Logo Path', 'key' => 'logo_path', 'value' => 'assets/images/logo/logo.png'],

            // Company Information
            ['name' => 'Company Name', 'key' => 'company_name', 'value' => 'Yan Mandiri Teknik'],
            ['name' => 'Company Phone', 'key' => 'company_phone', 'value' => '+62 851-5840-0630'],
            ['name' => 'Company Address', 'key' => 'company_address', 'value' => 'Jl. Prepedan Raya RT 07/RW 09, Kamal, Kalideres, Jakarta Barat'],

            // Social media
            ['name' => 'Instagram URL', 'key' => 'instagram_url', 'value' => '#'],
            
            // Call to Action
            ['name' => 'CTA Title', 'key' => 'cta_title', 'value' => 'Hubungi kami di'],
            ['name' => 'CTA Description', 'key' => 'cta_description', 'value' => 'Kami tersedia dari Senin hingga Sabtu, pukul 09:00 - 17:00.'],
            
            // Opening Hours
            ['name' => 'Opening Days 1', 'key' => 'opening_days_1', 'value' => 'Senin - Sabtu'],
            ['name' => 'Opening Hours 1', 'key' => 'opening_hours_1', 'value' => '9:00 WIB - 17:00 WIB'],
            ['name' => 'Opening Days 2', 'key' => 'opening_days_2', 'value' => 'Minggu'],
            ['name' => 'Opening Hours 2', 'key' => 'opening_hours_2', 'value' => 'Tutup'],
            
            // Email
            ['name' => 'Email Title', 'key' => 'email_title', 'value' => 'Email Us'],
            ['name' => 'Email 1', 'key' => 'email_1', 'value' => 'info@yanmandiriteknik.com'],
            ['name' => 'Email 2', 'key' => 'email_2', 'value' => 'support@yanmandiriteknik.com'],
            
            // Address
            ['name' => 'Address Title', 'key' => 'address_title', 'value' => 'Our Location'],
            
            // Map URL
            ['name' => 'Google Map URL', 'key' => 'map_url', 'value' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.9459510358148!2d106.70503259184078!3d-6.1124916758613095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a0355a7384bf9%3A0xad13710848686ec3!2sBengkel%20bubut%20Yan%20Mandiri%20Teknik!5e0!3m2!1sid!2sid!4v1741982598270!5m2!1sid!2sid'],
            
            // Small CTA
            ['name' => 'Small CTA Schedule', 'key' => 'small_cta_schedule', 'value' => 'Senin - Sabtu: 9:00 WIB - 17:00 WIB'],
            ['name' => 'Small CTA Message', 'key' => 'small_cta_message', 'value' => 'Contact us today.'],
            ['name' => 'Small CTA Link', 'key' => 'small_cta_link', 'value' => '#contact'],
            ['name' => 'Small CTA Link Text', 'key' => 'small_cta_link_text', 'value' => 'Contact Us'],
        ];

        foreach ($settings as $setting) {
            Setting::create($setting);
        }
    }
}