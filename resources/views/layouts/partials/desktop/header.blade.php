<!-- desktop site__header -->
<header class="site__header d-lg-block d-none">
    <div class="site-header">
        <!-- .topbar -->
        <div class="site-header__topbar topbar">
            <div class="topbar__container container">
                <div class="topbar__row">
                    <div class="topbar__item topbar__item--link">
                        <a class="topbar-link" href="{{ route('about') }}">{{ __('about_us') }}</a>
                    </div>
                    <div class="topbar__item topbar__item--link">
                        <a class="topbar-link" href="{{ route('contact') }}">{{ __('contacts') }}</a>
                    </div>
                    <div class="topbar__item topbar__item--link">
                        <a class="topbar-link" href="{{ route('returnProducts') }}">{{ __('return_products') }}</a>
                    </div>
                    <div class="topbar__item topbar__item--link">
                        <a class="topbar-link" href="{{ route('delivery') }}">{{ __('delivery') }}</a>
                    </div>
                    <div class="topbar__spring"></div>
                </div>
            </div>
        </div>
        <!-- .topbar / end -->
        <div class="site-header__middle container">
            <div class="site-header__logo">
                <a href="{{ route('home') }}">
                    <!-- logo -->
                    <img width="90px" src="{{asset('images/logo.png')}}" alt="{{ $settings?->name }}">
                    <!-- logo / end -->
                </a>
            </div>
            <div class="site-header__search">
                <div class="search search--location--header ">
                    <div class="search__body">
                        <form class="search__form" action="">
                            <select class="search__categories" aria-label="Category">
                                <option value="all">Все категории</option>
                                @foreach($categories as $category)
                                    <option>{{ $category->name }}</option>
                                    @foreach($category->children as $item)
                                        <option>&nbsp;&nbsp;&nbsp;{{ $item->name }}</option>
                                    @endforeach
                                @endforeach
                            </select>
                            <input class="search__input" name="search" placeholder="Поиск"
                                   aria-label="Site search" type="text" autocomplete="off">
                            <button class="search__button search__button--type--submit" type="submit">
                                <svg width="20px" height="20px">
                                    <use xlink:href="{{ asset('images/sprite.svg#search-20') }}"></use>
                                </svg>
                            </button>
                            <div class="search__border"></div>
                        </form>
                        <div class="search__suggestions suggestions suggestions--location--header"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-header__nav-panel">
            <!-- data-sticky-mode - one of [pullToShow, alwaysOnTop] -->
            <div class="nav-panel nav-panel--sticky" data-sticky-mode="pullToShow">
                <div class="nav-panel__container container">
                    <div class="nav-panel__row">
                        <div class="nav-panel__departments">
                            <!-- .departments -->
                            <div class="departments {{ Route::is('home') ? 'departments--open departments--fixed' : '' }}"
                                 data-departments-fixed-by=".block-slideshow">
                                <div class="departments__body">
                                    <div class="departments__links-wrapper">
                                        <div class="departments__submenus-container"></div>
                                        <ul class="departments__links">
                                            @foreach($categories as $category)
                                                <li class="departments__item">
                                                    <a class="departments__item-link" href="">
                                                        {{ $category->name }}
                                                        @if($category->children->count() )
                                                            <svg class="departments__item-arrow" width="6px"
                                                                 height="9px">
                                                                <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                                                            </svg>
                                                        @endif
                                                    </a>
                                                    @if($category->children->count())
                                                        @php
                                                            $countItem = 11;
                                                            $count = $category->children->count() / 4 > $countItem ? ceil($category->children->count() / 4) : $countItem;

                                                            $size = match (true) {
                                                                $category->children->count() <= $count => 'sm',
                                                                $category->children->count() <= $count * 2 => 'nl',
                                                                $category->children->count() <= $count * 3 => 'lg',
                                                                default => 'xl',
                                                            };

                                                            $col = match (true) {
                                                                $category->children->count() <= $count => 'col-3',
                                                                $category->children->count() <= $count * 2 => 'col-6',
                                                                $category->children->count() <= $count * 3 => 'col-4',
                                                                default => 'col-3',
                                                            };
                                                        @endphp

                                                        <div class="departments__submenu departments__submenu--type--megamenu departments__submenu--size--{{ $size }}">
                                                            <!-- .megamenu -->
                                                            <div class="megamenu  megamenu--departments ">
                                                                <div class="megamenu__body"
                                                                     style="background-image: {{ asset('images/megamenu/megamenu-1.jpg') }}">
                                                                    <div class="row">
                                                                        @if (ceil($category->children->count() / 4) <= $countItem )
                                                                            <div class="{{ $col }}">
                                                                                <ul class="megamenu__links megamenu__links--level--0">
                                                                                    <li class="megamenu__item  megamenu__item--with-submenu ">
                                                                                        <ul class="megamenu__links megamenu__links--level--1">
                                                                                            @foreach($category->children as $key => $item)
                                                                                                @if ($key >= $countItem * 0 && $key < $countItem * 1)
                                                                                                    <li class="megamenu__item">
                                                                                                        <a href="">{{ $item->name }}</a>
                                                                                                    </li>
                                                                                                @endif
                                                                                            @endforeach
                                                                                        </ul>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        @endif

                                                                        @if (ceil($category->children->count() / 4) <= $countItem * 2 )
                                                                            <div class="{{ $col }}">
                                                                                <ul class="megamenu__links megamenu__links--level--0">
                                                                                    <li class="megamenu__item  megamenu__item--with-submenu ">
                                                                                        <ul class="megamenu__links megamenu__links--level--1">
                                                                                            @foreach($category->children as $key => $item)
                                                                                                @if ($key >= $countItem * 1 && $key < $countItem * 2)
                                                                                                    <li class="megamenu__item">
                                                                                                        <a href="">{{ $item->name }}</a>
                                                                                                    </li>
                                                                                                @endif
                                                                                            @endforeach
                                                                                        </ul>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        @endif

                                                                        @if (ceil($category->children->count() / 4) < $countItem * 3 )
                                                                            <div class="{{ $col }}">
                                                                                <ul class="megamenu__links megamenu__links--level--0">
                                                                                    <li class="megamenu__item  megamenu__item--with-submenu ">
                                                                                        <ul class="megamenu__links megamenu__links--level--1">
                                                                                            @foreach($category->children as $key => $item)
                                                                                                @if ($key >= $countItem * 2 && $key < $countItem * 3)
                                                                                                    <li class="megamenu__item">
                                                                                                        <a href="">{{ $item->name }}</a>
                                                                                                    </li>
                                                                                                @endif
                                                                                            @endforeach
                                                                                        </ul>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        @endif

                                                                        @if (ceil($category->children->count() / 4) < $countItem * 3 )
                                                                            <div class="{{ $col }}">
                                                                                <ul class="megamenu__links megamenu__links--level--0">
                                                                                    <li class="megamenu__item  megamenu__item--with-submenu ">
                                                                                        <ul class="megamenu__links megamenu__links--level--1">
                                                                                            @foreach($category->children as $key => $item)
                                                                                                @if ($key >= $countItem * 3 && $key < $countItem * 4)
                                                                                                    <li class="megamenu__item">
                                                                                                        <a href="">{{ $item->name }}</a>
                                                                                                    </li>
                                                                                                @endif
                                                                                            @endforeach
                                                                                        </ul>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <button class="departments__button">
                                    <svg class="departments__button-icon" width="18px" height="14px">
                                        <use xlink:href="images/sprite.svg#menu-18x14"></use>
                                    </svg>
                                    {{ __('products') }}
                                    <svg class="departments__button-arrow" width="9px" height="6px">
                                        <use xlink:href="images/sprite.svg#arrow-rounded-down-9x6"></use>
                                    </svg>
                                </button>
                            </div>
                            <!-- .departments / end -->
                        </div>
                        <!-- .nav-links -->
                        <div class="nav-panel__nav-links nav-links">
                            <ul class="nav-links__list">
                                <li class="nav-links__item">
                                    <a class="nav-links__item-link" href="{{ route('about') }}">
                                        <div class="nav-links__item-body">
                                            {{ __('about_us') }}
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-links__item">
                                    <a class="nav-links__item-link" href="{{ route('contact') }}">
                                        <div class="nav-links__item-body">
                                            {{ __('contacts') }}
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- desktop site__header / end -->
