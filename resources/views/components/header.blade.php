@props(['phone' => '', 'email' => '', 'socialMedia' => [], 'logoPath' => ''])

<header class="header-four header--sticky">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-top-wrapper">
                        <div class="left">
                            <div class="call">
                                <i class="fa-light fa-mobile"></i>
                                <a href="https://wa.me/{{ preg_replace('/[^0-9+]/', '', $phone) }}">{{ $phone }}</a>
                            </div>
                            <div class="call">
                                <i class="fa-solid fa-envelope"></i>
                                <a href="mailto:{{ $email }}">{{ $email }}</a>
                            </div>
                        </div>
                        <div class="right">
                            <div class="social-header">
                                <span>Cari kami di:</span>
                                <ul>
                                    @if($socialMedia['instagram'])
                                        <li><a href="{{ $socialMedia['instagram'] }}"><i
                                                    class="fa-brands fa-instagram"></i></a></li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="header-bottom">
                    <div class="logo-area">
                        <a href="/"><img src="{{ $logoPath }}" alt="logo"></a>
                    </div>
                    <div class="nav-area">
                        <ul class="mainmenu">
                            <li class="main-nav"><a href="#home">Beranda</a></li>
                            <li class="main-nav"><a href="#about">Tentang Kami</a></li>
                            <li class="main-nav"><a href="#service">Layanan</a></li>
                            <li class="main-nav"><a href="#contact">Kontak Kami</a></li>
                        </ul>
                    </div>
                    <div class="header-end">
                        <a href="#contact" class="rts-btn btn-primary">Konsultasi Sekarang</a>
                        <div class="nav-btn menu-btn" id="menu-btn">
                            <img src="{{ asset('public/assets/images/logo/bar.svg') }}" alt="nav-image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>