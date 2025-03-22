<div id="home" class="banner-two-swiper-main-wrapper industry-banner">
    <div class="swiper mySwiper-banner2" dir="ltr">
        <div class="swiper-wrapper">
            @foreach($heroSections as $slide)
                <div class="swiper-slide">
                    <div class="banner-area-start bg_banner-bg-area rts-section-gap {{ $slide->background_class }} bg_image"
                        style="background-image: url({{ asset('storage/' . $slide->background_image) }});">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="banner-two-inner">
                                        <h1 class="title">{!! $slide->heading !!}</h1>
                                        <p class="disc">
                                            {{ $slide->subheading }}
                                        </p>
                                        @if($slide->button_text && $slide->button_link)
                                            <div class="button-wrapper">
                                                <a href="{{ $slide->button_link }}"
                                                    class="rts-btn btn-primary">{{ $slide->button_text }} <img
                                                        src="{{ asset('assets/images/icons/arrow-up-right.svg') }}"
                                                        alt="arrow"></a>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="swiper-pagination"></div>
</div>