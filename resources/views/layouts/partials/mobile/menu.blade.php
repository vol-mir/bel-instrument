<div class="mobilemenu">
    <div class="mobilemenu__backdrop"></div>
    <div class="mobilemenu__body">
        <div class="mobilemenu__header">
            <div class="mobilemenu__title">{{ __('menu') }}</div>
            <button type="button" class="mobilemenu__close">
                <svg width="20px" height="20px">
                    <use xlink:href="images/sprite.svg#cross-20"></use>
                </svg>
            </button>
        </div>
        <div class="mobilemenu__content">
            <ul class="mobile-links mobile-links--level--0" data-collapse
                data-collapse-opened-class="mobile-links__item--open">
                <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                        <a href="{{ route('home') }}" class="mobile-links__item-link">{{ __('home') }}</a>
                    </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                        <a href="" class="mobile-links__item-link">{{ __('products') }}</a>
                        <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                            <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="mobile-links__item-sub-links" data-collapse-content>
                        <ul class="mobile-links mobile-links--level--1">

                            @foreach($categories as $category)
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="" class="mobile-links__item-link">{{ $category->name }}</a>
                                        @if($category->children->count() )
                                            <button class="mobile-links__item-toggle" type="button"
                                                    data-collapse-trigger>
                                                <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                                </svg>
                                            </button>
                                        @endif
                                    </div>
                                    @if($category->children->count() )
                                        @foreach($category->children as $item)
                                            <div class="mobile-links__item-sub-links" data-collapse-content>
                                                <ul class="mobile-links mobile-links--level--2">
                                                    <li class="mobile-links__item" data-collapse-item>
                                                        <div class="mobile-links__item-title">
                                                            <a href=""
                                                               class="mobile-links__item-link">{{ $item->name }}</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        @endforeach
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                        <a href="{{ route('about') }}" class="mobile-links__item-link">{{ __('about_us') }}</a>
                    </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title">
                        <a href="{{ route('contact') }}" class="mobile-links__item-link">{{ __('contacts') }}</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
