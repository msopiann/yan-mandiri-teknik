<div class="our-working-process-area-4 bg_image">
    <div class="marque-wrapper one" dir="ltr">
        <div class="marquee">
            <span>{{ $marqueeText }}&nbsp;</span>
            <span>{{ $marqueeText }}&nbsp;</span>
            <span>{{ $marqueeText }}&nbsp;</span>
            <span>{{ $marqueeText }}&nbsp;</span>
            <span>{{ $marqueeText }}&nbsp;</span>
            <span>{{ $marqueeText }}&nbsp;</span>
            <span>{{ $marqueeText }}&nbsp;</span>
            <span>{{ $marqueeText }}&nbsp;</span>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-center-wrapper-4">
                    <h2 class="title">{{ $title }}</h2>
                    <p class="disc">
                        {{ $description }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="working-process-mt-dec-4">
    <div class="container">
        <div class="row bd-process">
            @foreach($processes as $process)
                <div class="col-lg-3">
                    <div class="single-process-wrapper-4">
                        <span class="number">{{ $process['number'] }}</span>
                        <h5 class="title">{{ $process['title'] }}</h5>
                        <p class="disc">
                            {{ $process['description'] }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>