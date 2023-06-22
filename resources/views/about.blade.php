<x-app-layout>
    <div class="block about-us">
        <div class="about-us__image"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-10">
                    <div class="about-us__body">
                        <h1 class="about-us__title">{{ __('about_us') }}</h1>
                        <div class="about-us__text typography">
                            @if(!empty($settings->description))
                                <p>{{ $settings->description }}</p>
                            @endif
                        </div>
                        <div class="about-us__team">
                            <h2 class="about-us__team-title">{{ __('our_shops') }}</h2>
                            <div class="about-us__teammates teammates">
                                <div class="owl-carousel">
                                    @foreach($shops as $shop)
                                    <div class="teammates__item teammate">
                                        @foreach($shop->images as $image)
                                            <div class="teammate__avatar">
                                                <img src="/storage/images/shops/{{$shop->slug}}/{{ $image->name }}" alt="">
                                            </div>
                                            @break
                                        @endforeach
                                        @if ($shop->name)
                                            <div class="teammate__name">{{ $shop->name }}</div>
                                        @endif
                                        @if ($shop->full_physical_address)
                                            <div class="teammate__position text-muted">{{ $shop->full_physical_address }}</div>
                                        @endif
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
