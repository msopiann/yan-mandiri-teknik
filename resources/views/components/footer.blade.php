@props(['callToAction' => [], 'mapUrl' => '', 'openingHours' => [], 'email' => [], 'address' => [], 'companyName' => '', 'links' => [], 'logoPath' => ''])

<div id="contact" class="footer-area-four">
    <div class="container-1730">
        <div class="row">
            <div class="col-lg-12">
                <div class="footer-four-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="footer-float-right-4">
                                    <div class="left-content-area">
                                        <span>{{ is_array($callToAction) && isset($callToAction['title']) ? $callToAction['title'] : '' }}</span>
                                        <a
                                            href="https://wa.me/{{ preg_replace('/[^0-9+]/', '', $callToAction['phone']) }}">
                                            <h4 class="title">
                                                {{ is_array($callToAction) && isset($callToAction['phone']) ? $callToAction['phone'] : '' }}
                                            </h4>
                                        </a>
                                        <p>{{ is_array($callToAction) && isset($callToAction['description']) ? $callToAction['description'] : '' }}
                                        </p>
                                    </div>
                                    <div class="map-and-opening-area">
                                        <div class="map-area">
                                            <iframe src="{{ $mapUrl }}" width="200" height="366" style="border:0;"
                                                allowfullscreen="" loading="lazy"
                                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                        <div class="opening-area-wrapper">
                                            <div class="inner">
                                                <img src="{{ asset('assets/images/footer/clock.svg') }}" alt="">
                                                @if(is_array($openingHours))
                                                    @foreach($openingHours as $index => $hour)
                                                        <div class="opening-area {{ $index === 0 ? 'mt--30' : '' }}">
                                                            <span>{{ is_array($hour) && isset($hour['days']) ? $hour['days'] : '' }}</span>
                                                            <h6 class="title">
                                                                {{ is_array($hour) && isset($hour['hours']) ? $hour['hours'] : '' }}
                                                            </h6>
                                                        </div>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container ptb--100 pl_sm--15 pt_sm--50 pb_sm--50">
        <div class="row g-5">
            <div class="col-xl-5 col-lg-6">
                <div class="logo-area">
                    <img src="{{ $logoPath }}" alt="">
                </div>
            </div>
            <div class="col-xl-4 col-lg-6">
                <div class="footer-location-area-4">
                    <div class="icon">
                        <i class="fa-regular fa-envelope"></i>
                    </div>
                    <div class="inner-wrapper">
                        <h5 class="title">{{ is_array($email) && isset($email['title']) ? $email['title'] : '' }}</h5>
                        <div class="mail">
                            @if(is_array($email) && isset($email['addresses']) && is_array($email['addresses']))
                                @foreach($email['addresses'] as $emailAddress)
                                    <a href="mailto:{{ $emailAddress }}">{{ $emailAddress }}</a>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6">
                <div class="footer-location-area-4">
                    <div class="icon">
                        <i class="fa-light fa-location-dot"></i>
                    </div>
                    <div class="inner-wrapper">
                        <h5 class="title">{{ is_array($address) && isset($address['title']) ? $address['title'] : '' }}
                        </h5>
                        <div class="mail">
                            <a
                                href="https://maps.app.goo.gl/pSr5xhmek7xpZ91a8">{{ is_array($address) && isset($address['text']) ? $address['text'] : '' }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area-4-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-area-4">
                        <p class="mb-0">Copyright &copy;
                            {{date('Y')}}
                            {{ $companyName }}.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>