<div id="service" class="rts-service-area rts-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-center-wrapper-4">
                    <h2 class="title">{{ $title }}</h2>
                </div>
            </div>
        </div>
        <div class="row g-24 mt--20">
            @foreach($services as $service)
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="single-service-style-4">
                        <div class="top">
                            <div class="icon">
                                <img src="{{ asset('storage/' . $service['icon']) }}" alt="service">
                            </div>
                            <a href="{{ $service['link'] }}">
                                <h5 class="title">{{ $service['title'] }}</h5>
                            </a>
                            <p class="disc">
                                {{ $service['description'] }}
                            </p>
                        </div>
                        <div class="thumbnail">
                            <img src="{{ asset('storage/' . $service['image']) }}" alt="">
                            <div class="hidden-content">
                                <a href="{{ $service['button_link'] }}"
                                    class="rts-btn btn-white">{{ $service['button_text'] }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>