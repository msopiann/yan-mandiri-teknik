@props(['sidebarHeadlineDesktop' => '', 'sidebarSubheadlineDesktop' => '', 'socialMedia' => []])

<div id="side-bar" class="side-bar header-two">
    <button class="close-icon-menu"><i class="far fa-times"></i></button>
    <!-- inner menu area desktop start -->
    <div class="inner-main-wrapper-desk">
        <div class="thumbnail">
            <img src="{{ asset('assets/images/banner/sidebar.jpg') }}" alt="Yan Mandiri Teknik">
        </div>
        <div class="inner-content">
            <h4 class="title">{{ $sidebarHeadlineDesktop }}</h4>
            <p class="disc">
                {{$sidebarSubheadlineDesktop}}
            </p>
            <div class="footer">
                <a href="#contact" class="rts-btn btn-primary">Make Appointment</a>
            </div>
        </div>
    </div>
    <!-- mobile menu area start -->
    <div class="mobile-menu d-block d-xl-none">
        <nav class="nav-main mainmenu-nav mt--30">
            <ul class="mainmenu metismenu" id="mobile-menu-active">
                <li>
                    <a href="/" class="main">Beranda</a>
                </li>
                <li>
                    <a href="/" class="main">Tentang Kami</a>
                </li>
                <li>
                    <a href="#service" class="main">Layanan</a>
                </li>
                <li>
                    <a href="#contact" class="main">Kontak Kami</a>
                </li>
            </ul>
        </nav>

        <div class="social-wrapper-one">
            <ul>
                @if($socialMedia['instagram'])
                    <li><a href="{{ $socialMedia['instagram'] }}"><i class="fa-brands fa-instagram"></i></a></li>
                @endif
            </ul>
        </div>
    </div>
    <!-- mobile menu area end -->
</div>