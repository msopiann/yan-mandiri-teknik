<div id="about" class="rts-about-area bg-dark-large rts-section-gap">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6">
                <div class="about-four-left-wrapper">
                    <h2 class="title">{!! $title !!}</h2>
                    @foreach($paragraphs as $paragraph)
                        <p class="disc">
                            {{ $paragraph }}
                        </p>
                    @endforeach
                    <div class="counter-area-wrapper-about-4">
                        @foreach($counters as $counter)
                            <div class="single-counter">
                                <div class="icon">
                                    <img src="{{ asset('storage/' . $counter['icon']) }}" alt="about">
                                </div>
                                <div class="right-content-wrapper">
                                    <h2 class="counter title"><span class="odometer"
                                            data-count="{{ $counter['count'] }}">00</span>{{ $counter['suffix'] }}
                                    </h2>
                                    <span class="ss">{{ $counter['label'] }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div
                class="col-xl-6 d-flex mt_md--25 mt_sm--25 align-items-center justify-content-lg-end justify-content-md-start">
                <div class="about-right-wrapper-rour">
                    <div class="single-right-content bg-1 bg_image">
                        <div class="inner">
                            <h5 class="title">{{ $cta['title'] }}</h5>
                            <p class="disc">
                                {{ $cta['description'] }}
                            </p>
                            <a href="{{ $cta['button_link'] }}" class="rts-btn btn-white">{{ $cta['button_text'] }}</a>
                        </div>
                    </div>
                    <div class="single-right-content bg-2 bg_image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>