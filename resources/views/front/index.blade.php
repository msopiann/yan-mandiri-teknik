@extends('layouts.main')

@section('content')
    <x-banner-slider :heroSections="$heroSections" />
    <x-about-section title="{!! $about->name !!}" :paragraphs="$paragraphs" :counters="$counters" :cta="$cta" />

    <x-services-section title="Kami Menyediakan Layanan Terbaik" :services="$services" />

    <x-working-process marqueeText="WORKING PROCESS" title="Bagaimana Kami Bekerja"
        description="Pendekatan kami memastikan keberhasilan proyek Anda, mulai dari konsultasi awal hingga penyelesaian akhir, dengan komunikasi yang jelas di setiap tahap."
        :processes="[
            [
                'number' => '01',
                'title' => 'Konsultasi Awal',
                'description' => 'Kami memahami kebutuhan, visi, dan harapan Anda untuk menyusun rencana kerja yang jelas.'
            ],
            [
                'number' => '02',
                'title' => 'Perencanaan & Desain',
                'description' => 'Kami menyusun rencana detail dan desain sesuai masukan Anda, memastikan semua aspek teknis terpenuhi'
            ],
            [
                'number' => '03',
                'title' => 'Proses Produksi',
                'description' => 'Dengan rencana yang telah disetujui, kami menjalankan proses produksi dengan presisi sesuai standar kualitas.'
            ],
            [
                'number' => '04',
                'title' => 'Penyelesaian Akhir',
                'description' => 'Setelah pengecekan kualitas dan sentuhan akhir, kami menyerahkan hasil proyek dengan penuh kebanggaan.'
            ]
        ]" />

    <x-small-cta :schedule="$smallCta['schedule']" :message="$smallCta['message']" :link="$smallCta['link']"
        :linkText="$smallCta['linkText']" />

    <x-footer :callToAction="$callToAction" :mapUrl="$mapUrl" :openingHours="$openingHours" :email="$email"
        :address="$address" :companyName="$companyName" :links="$links" :logoPath="$logoPath" />
@endsection