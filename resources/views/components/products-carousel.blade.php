@if(count($products) > 0)
    <div class="block block-products-carousel" data-layout="grid-4" data-mobile-grid-columns="2">
        <div class="container">
            <div class="block-header">
                <h3 class="block-header__title">Рекомендуемые продукты</h3>
                <div class="block-header__divider"></div>
                <ul class="block-header__groups-list">
                    <li>
                        <button type="button" class="block-header__group  block-header__group--active ">Все</button>
                    </li>
                </ul>
                <div class="block-header__arrows-list">
                    <button class="block-header__arrow block-header__arrow--left" type="button">
                        <svg width="7px" height="11px">
                            <use xlink:href="images/sprite.svg#arrow-rounded-left-7x11"></use>
                        </svg>
                    </button>
                    <button class="block-header__arrow block-header__arrow--right" type="button">
                        <svg width="7px" height="11px">
                            <use xlink:href="images/sprite.svg#arrow-rounded-right-7x11"></use>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="block-products-carousel__slider">
                <div class="block-products-carousel__preloader"></div>
                <div class="owl-carousel">
                    @foreach($products as $product)
                        <div class="block-products-carousel__column">
                            <div class="block-products-carousel__cell">
                                <div class="product-card product-card--hidden-actions ">
                                    <div class="product-card__image product-image">
                                        <a href="#" class="product-image__body">
                                            <img class="product-image__img" src="/storage/images/products/{{ $product->image }}"
                                                 alt="{{ $product->name }}">
                                        </a>
                                    </div>
                                    <div class="product-card__info">
                                        <div class="product-card__name">
                                            <a href="#">{{ $product->name }} ({{ $product->description }})</a>
                                        </div>
                                    </div>
                                    <div class="product-card__actions"></div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endif
