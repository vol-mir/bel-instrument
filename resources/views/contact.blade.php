<x-app-layout>
    <div class="page-header">
        <div class="page-header__container container">
            <div class="page-header__breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('home') }}">{{ __('shop') }}</a>
                            <svg class="breadcrumb-arrow" width="6px" height="9px">
                                <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                            </svg>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{{ __('contact_us') }}</li>
                    </ol>
                </nav>
            </div>
            <div class="page-header__title">
                <h1>{{ __('contact_us') }}</h1>
            </div>
        </div>
    </div>
    <div class="block">
        <div class="container">
            <div class="card mb-0 contact-us">
                @foreach($shops as $shop)
                    @if($shop->google_map)
                    <div class="contact-us__map">
                        <iframe
                            src="{{ $shop->google_map }}"
                            width="600"
                            height="450"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                        >
                        </iframe>
                    </div>
                    @endif
                    <div class="card-body">
                        <div class="contact-us__container">
                            <div class="row">
                                <div class="col-12">
                                    <h4 class="contact-us__header card-title">{{ $shop->name }}</h4>
                                    <div class="contact-us__address">
                                        <ul class="footer-contacts__contacts">
                                            @if(!empty($shop->full_physical_address))
                                                <li>
                                                    <i class="footer-contacts__icon fas fa-globe-americas"></i>
                                                    <address class="footer-address">{{ $shop->full_physical_address }}</address>
                                                </li>
                                            @endif
                                            @foreach($shop->phones as $item)
                                                <li>
                                                    <i class="footer-contacts__icon fas fa-mobile-alt"></i>{{ trans($item->operator) }}
                                                    <a href="tel:{{ $item->phone }}">{{ $item->phone }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
