<x-app-layout>
    <div class="page-header">
        <div class="page-header__container container">
            <div class="page-header__breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('home') }}">{{ __('home') }}</a>
                            <svg class="breadcrumb-arrow" width="6px" height="9px">
                                <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                            </svg>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{{ __('delivery') }}</li>
                    </ol>
                </nav>
            </div>
            <div class="page-header__title">
                <h1>{{ __('delivery') }}</h1>
            </div>
        </div>
    </div>
    <div class="block">
        <div class="container">
            <div class="card mb-0">
                <div class="card-body">
                    <div class="contact-us__container">
                        <div class="row">
                            <div class="col-12">
                                <p>Доставка крупногабаритной техники по городу и в пределах 15 км за город бесплатно</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
