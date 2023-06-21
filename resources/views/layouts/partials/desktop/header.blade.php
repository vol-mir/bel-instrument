<!-- desktop site__header -->
<header class="site__header d-lg-block d-none">
    <div class="site-header">
        <!-- .topbar -->
        <div class="site-header__topbar topbar">
            <div class="topbar__container container">
                <div class="topbar__row">
{{--                    <div class="topbar__item topbar__item--link">--}}
{{--                        <a class="topbar-link" href="#">{{ __('about_us') }}</a>--}}
{{--                    </div>--}}
                    <div class="topbar__item topbar__item--link">
                        <a class="topbar-link" href="{{ route('contact') }}">{{ __('contacts') }}</a>
                    </div>
{{--                    <div class="topbar__item topbar__item--link">--}}
{{--                        <a class="topbar-link" href="#">{{ __('track_order') }}</a>--}}
{{--                    </div>--}}
{{--                    <div class="topbar__item topbar__item--link">--}}
{{--                        <a class="topbar-link" href="#">{{ __('blog') }}</a>--}}
{{--                    </div>--}}
                    <div class="topbar__spring"></div>
                </div>
            </div>
        </div>
        <!-- .topbar / end -->
        <div class="site-header__middle container">
            <div class="site-header__logo">
                <a href="{{ route('home') }}">
                    <!-- logo -->
                    <img width="180px" src="{{asset('images/logo.png')}}" alt="{{ $settings?->name }}">
                    <!-- logo / end -->
                </a>
            </div>
            <div class="site-header__search">
                <div class="search search--location--header ">
                    <div class="search__body">
                        <form class="search__form" action="">
                            <select class="search__categories" aria-label="Category">
                                <option value="all">Все категории</option>
                                <option>Электроинструменты</option>
                                <option>&nbsp;&nbsp;&nbsp;&nbsp;Аккумуляторная техника</option>
                                <option>&nbsp;&nbsp;&nbsp;&nbsp;Бороздоделы</option>
                                <option>&nbsp;&nbsp;&nbsp;&nbsp;Бороздоделы</option>
                                <option>&nbsp;&nbsp;&nbsp;&nbsp;Фрезеры</option>
                                <option>&nbsp;&nbsp;&nbsp;&nbsp;Монтажные пилы</option>
                                <option>&nbsp;&nbsp;&nbsp;&nbsp;Монтажные пилы</option>
                                <option>Садовая техника</option>
                                <option>&nbsp;&nbsp;&nbsp;&nbsp;Мотокосы и тримеры</option>
                                <option>&nbsp;&nbsp;&nbsp;&nbsp;Газонокосилки электро и ручные</option>
                                <option>&nbsp;&nbsp;&nbsp;&nbsp;Газонокосилки бензиновые</option>
                                <option>&nbsp;&nbsp;&nbsp;&nbsp;Газонокосилки аккумуляторные</option>
                                <option>&nbsp;&nbsp;&nbsp;&nbsp;Цепные пилы</option>
                                <option>&nbsp;&nbsp;&nbsp;&nbsp;Кусторезы, секаторы, ножницы для травы</option>
                                <option>Гидравлическое оборудование</option>
                                <option>Тепловое оборудование</option>
                                <option>Оснастка</option>
                                <option>Ручной инструмент</option>
                                <option>Строительное оборудование</option>
                                <option>Сварочное оборудование</option>
                                <option>Системы хранения</option>
                                <option>Садовые принадлежности</option>
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
                            <div class="departments  {{ Route::is('home') ? 'departments--open' : '' }} departments--fixed "
                                 data-departments-fixed-by=".block-slideshow">
                                <div class="departments__body">
                                    <div class="departments__links-wrapper">
                                        <div class="departments__submenus-container"></div>
                                        <ul class="departments__links">
                                            <li class="departments__item">
                                                <a class="departments__item-link" href="">
                                                    Электроинструменты
{{--                                                    <svg class="departments__item-arrow" width="6px" height="9px">--}}
{{--                                                        <use--}}
{{--                                                            xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>--}}
{{--                                                    </svg>--}}
                                                </a>
{{--                                                <div--}}
{{--                                                    class="departments__submenu departments__submenu--type--megamenu departments__submenu--size--xl">--}}
{{--                                                    <!-- .megamenu -->--}}
{{--                                                    <div class="megamenu  megamenu--departments ">--}}
{{--                                                        <div class="megamenu__body"--}}
{{--                                                             style="background-image: {{ asset('images/megamenu/megamenu-1.jpg') }}">--}}
{{--                                                            <div class="row">--}}
{{--                                                                <div class="col-3">--}}
{{--                                                                    <ul class="megamenu__links megamenu__links--level--0">--}}
{{--                                                                        <li class="megamenu__item  megamenu__item--with-submenu ">--}}
{{--                                                                            <a href="">Электроинструменты</a>--}}
{{--                                                                            <ul class="megamenu__links megamenu__links--level--1">--}}
{{--                                                                                <li class="megamenu__item"><a--}}
{{--                                                                                        href="">Engravers</a></li>--}}
{{--                                                                                <li class="megamenu__item"><a--}}
{{--                                                                                        href="">Drills</a></li>--}}
{{--                                                                                <li class="megamenu__item"><a--}}
{{--                                                                                        href="">Wrenches</a></li>--}}
{{--                                                                                <li class="megamenu__item"><a--}}
{{--                                                                                        href="">Plumbing</a></li>--}}
{{--                                                                                <li class="megamenu__item"><a--}}
{{--                                                                                        href="">Wall Chaser</a></li>--}}
{{--                                                                                <li class="megamenu__item"><a--}}
{{--                                                                                        href="">Pneumatic Tools</a>--}}
{{--                                                                                </li>--}}
{{--                                                                                <li class="megamenu__item"><a--}}
{{--                                                                                        href="">Milling Cutters</a>--}}
{{--                                                                                </li>--}}
{{--                                                                            </ul>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li class="megamenu__item ">--}}
{{--                                                                            <a href="">Workbenches</a>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li class="megamenu__item ">--}}
{{--                                                                            <a href="">Presses</a>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li class="megamenu__item ">--}}
{{--                                                                            <a href="">Spray Guns</a>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li class="megamenu__item ">--}}
{{--                                                                            <a href="">Riveters</a>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="col-3">--}}
{{--                                                                    <ul class="megamenu__links megamenu__links--level--0">--}}
{{--                                                                        <li class="megamenu__item  megamenu__item--with-submenu ">--}}
{{--                                                                            <a href="">Hand Tools</a>--}}
{{--                                                                            <ul class="megamenu__links megamenu__links--level--1">--}}
{{--                                                                                <li class="megamenu__item"><a--}}
{{--                                                                                        href="">Screwdrivers</a>--}}
{{--                                                                                </li>--}}
{{--                                                                                <li class="megamenu__item"><a--}}
{{--                                                                                        href="">Handsaws</a></li>--}}
{{--                                                                                <li class="megamenu__item"><a--}}
{{--                                                                                        href="">Knives</a></li>--}}
{{--                                                                                <li class="megamenu__item"><a--}}
{{--                                                                                        href="">Axes</a></li>--}}
{{--                                                                                <li class="megamenu__item"><a--}}
{{--                                                                                        href="">Multitools</a></li>--}}
{{--                                                                                <li class="megamenu__item"><a--}}
{{--                                                                                        href="">Paint Tools</a></li>--}}
{{--                                                                            </ul>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li class="megamenu__item  megamenu__item--with-submenu ">--}}
{{--                                                                            <a href="">Garden Equipment</a>--}}
{{--                                                                            <ul class="megamenu__links megamenu__links--level--1">--}}
{{--                                                                                <li class="megamenu__item"><a--}}
{{--                                                                                        href="">Motor Pumps</a></li>--}}
{{--                                                                                <li class="megamenu__item"><a--}}
{{--                                                                                        href="">Chainsaws</a></li>--}}
{{--                                                                                <li class="megamenu__item"><a--}}
{{--                                                                                        href="">Electric Saws</a>--}}
{{--                                                                                </li>--}}
{{--                                                                                <li class="megamenu__item"><a--}}
{{--                                                                                        href="">Brush Cutters</a>--}}
{{--                                                                                </li>--}}
{{--                                                                            </ul>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="col-3">--}}
{{--                                                                    <ul class="megamenu__links megamenu__links--level--0">--}}
{{--                                                                        <li class="megamenu__item  megamenu__item--with-submenu ">--}}
{{--                                                                            <a href="">Machine Tools</a>--}}
{{--                                                                            <ul class="megamenu__links megamenu__links--level--1">--}}
{{--                                                                                <li class="megamenu__item"><a--}}
{{--                                                                                        href="">Thread Cutting</a>--}}
{{--                                                                                </li>--}}
{{--                                                                                <li class="megamenu__item"><a--}}
{{--                                                                                        href="">Chip Blowers</a>--}}
{{--                                                                                </li>--}}
{{--                                                                                <li class="megamenu__item"><a--}}
{{--                                                                                        href="">Sharpening--}}
{{--                                                                                        Machines</a></li>--}}
{{--                                                                                <li class="megamenu__item"><a--}}
{{--                                                                                        href="">Pipe Cutters</a>--}}
{{--                                                                                </li>--}}
{{--                                                                                <li class="megamenu__item"><a--}}
{{--                                                                                        href="">Slotting--}}
{{--                                                                                        machines</a></li>--}}
{{--                                                                                <li class="megamenu__item"><a--}}
{{--                                                                                        href="">Lathes</a></li>--}}
{{--                                                                            </ul>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="col-3">--}}
{{--                                                                    <ul class="megamenu__links megamenu__links--level--0">--}}
{{--                                                                        <li class="megamenu__item  megamenu__item--with-submenu ">--}}
{{--                                                                            <a href="">Instruments</a>--}}
{{--                                                                            <ul class="megamenu__links megamenu__links--level--1">--}}
{{--                                                                                <li class="megamenu__item"><a--}}
{{--                                                                                        href="">Welding--}}
{{--                                                                                        Equipment</a></li>--}}
{{--                                                                                <li class="megamenu__item"><a--}}
{{--                                                                                        href="">Power Tools</a></li>--}}
{{--                                                                                <li class="megamenu__item"><a--}}
{{--                                                                                        href="">Hand Tools</a></li>--}}
{{--                                                                                <li class="megamenu__item"><a--}}
{{--                                                                                        href="">Measuring Tool</a>--}}
{{--                                                                                </li>--}}
{{--                                                                            </ul>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <!-- .megamenu / end -->--}}
{{--                                                </div>--}}
                                            </li>
                                            <li class="departments__item">
                                                <a class="departments__item-link" href="">
                                                    Садовая техника
{{--                                                    <svg class="departments__item-arrow" width="6px" height="9px">--}}
{{--                                                        <use--}}
{{--                                                            xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>--}}
{{--                                                    </svg>--}}
                                                </a>
{{--                                                <div--}}
{{--                                                    class="departments__submenu departments__submenu--type--megamenu departments__submenu--size--lg">--}}
{{--                                                    <!-- .megamenu -->--}}
{{--                                                    <div class="megamenu  megamenu--departments ">--}}
{{--                                                        <div class="megamenu__body"--}}
{{--                                                             style="background-image: url('images/megamenu/megamenu-2.jpg');">--}}
{{--                                                            <div class="row">--}}
{{--                                                                <div class="col-4">--}}
{{--                                                                    <ul class="megamenu__links megamenu__links--level--0">--}}
{{--                                                                        <li class="megamenu__item  megamenu__item--with-submenu ">--}}
{{--                                                                            <a href="">Hand Tools</a>--}}
{{--                                                                            <ul class="megamenu__links megamenu__links--level--1">--}}
{{--                                                                                <li class="megamenu__item"><a--}}
{{--                                                                                        href="">Screwdrivers</a>--}}
{{--                                                                                </li>--}}
{{--                                                                                <li class="megamenu__item"><a--}}
{{--                                                                                        href="">Handsaws</a></li>--}}
{{--                                                                                <li class="megamenu__item"><a--}}
{{--                                                                                        href="">Knives</a></li>--}}
{{--                                                                                <li class="megamenu__item"><a--}}
{{--                                                                                        href="">Axes</a></li>--}}
{{--                                                                                <li class="megamenu__item"><a--}}
{{--                                                                                        href="">Multitools</a></li>--}}
{{--                                                                                <li class="megamenu__item"><a--}}
{{--                                                                                        href="">Paint Tools</a></li>--}}
{{--                                                                            </ul>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li class="megamenu__item  megamenu__item--with-submenu ">--}}
{{--                                                                            <a href="">Garden Equipment</a>--}}
{{--                                                                            <ul class="megamenu__links megamenu__links--level--1">--}}
{{--                                                                                <li class="megamenu__item"><a--}}
{{--                                                                                        href="">Motor Pumps</a></li>--}}
{{--                                                                                <li class="megamenu__item"><a--}}
{{--                                                                                        href="">Chainsaws</a></li>--}}
{{--                                                                                <li class="megamenu__item"><a--}}
{{--                                                                                        href="">Electric Saws</a>--}}
{{--                                                                                </li>--}}
{{--                                                                                <li class="megamenu__item"><a--}}
{{--                                                                                        href="">Brush Cutters</a>--}}
{{--                                                                                </li>--}}
{{--                                                                            </ul>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="col-4">--}}
{{--                                                                    <ul class="megamenu__links megamenu__links--level--0">--}}
{{--                                                                        <li class="megamenu__item  megamenu__item--with-submenu ">--}}
{{--                                                                            <a href="">Machine Tools</a>--}}
{{--                                                                            <ul class="megamenu__links megamenu__links--level--1">--}}
{{--                                                                                <li class="megamenu__item"><a--}}
{{--                                                                                        href="">Thread Cutting</a>--}}
{{--                                                                                </li>--}}
{{--                                                                                <li class="megamenu__item"><a--}}
{{--                                                                                        href="">Chip Blowers</a>--}}
{{--                                                                                </li>--}}
{{--                                                                                <li class="megamenu__item"><a--}}
{{--                                                                                        href="">Sharpening--}}
{{--                                                                                        Machines</a></li>--}}
{{--                                                                                <li class="megamenu__item"><a--}}
{{--                                                                                        href="">Pipe Cutters</a>--}}
{{--                                                                                </li>--}}
{{--                                                                                <li class="megamenu__item"><a--}}
{{--                                                                                        href="">Slotting--}}
{{--                                                                                        machines</a></li>--}}
{{--                                                                                <li class="megamenu__item"><a--}}
{{--                                                                                        href="">Lathes</a></li>--}}
{{--                                                                            </ul>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="col-4">--}}
{{--                                                                    <ul class="megamenu__links megamenu__links--level--0">--}}
{{--                                                                        <li class="megamenu__item  megamenu__item--with-submenu ">--}}
{{--                                                                            <a href="">Instruments</a>--}}
{{--                                                                            <ul class="megamenu__links megamenu__links--level--1">--}}
{{--                                                                                <li class="megamenu__item"><a--}}
{{--                                                                                        href="">Welding--}}
{{--                                                                                        Equipment</a></li>--}}
{{--                                                                                <li class="megamenu__item"><a--}}
{{--                                                                                        href="">Power Tools</a></li>--}}
{{--                                                                                <li class="megamenu__item"><a--}}
{{--                                                                                        href="">Hand Tools</a></li>--}}
{{--                                                                                <li class="megamenu__item"><a--}}
{{--                                                                                        href="">Measuring Tool</a>--}}
{{--                                                                                </li>--}}
{{--                                                                            </ul>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <!-- .megamenu / end -->--}}
{{--                                                </div>--}}
                                            </li>
                                            <li class="departments__item">
                                                <a class="departments__item-link" href="">
                                                    Гидравлическое оборудование
{{--                                                    <svg class="departments__item-arrow" width="6px" height="9px">--}}
{{--                                                        <use--}}
{{--                                                            xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>--}}
{{--                                                    </svg>--}}
                                                </a>
{{--                                                <div--}}
{{--                                                    class="departments__submenu departments__submenu--type--megamenu departments__submenu--size--nl">--}}
{{--                                                    <!-- .megamenu -->--}}
{{--                                                    <div class="megamenu  megamenu--departments ">--}}
{{--                                                        <div class="megamenu__body"--}}
{{--                                                             style="background-image: url('images/megamenu/megamenu-3.jpg');">--}}
{{--                                                            <div class="row">--}}
{{--                                                                <div class="col-6">--}}
{{--                                                                    <ul class="megamenu__links megamenu__links--level--0">--}}
{{--                                                                        <li class="megamenu__item  megamenu__item--with-submenu ">--}}
{{--                                                                            <a href="">Hand Tools</a>--}}
{{--                                                                            <ul class="megamenu__links megamenu__links--level--1">--}}
{{--                                                                                <li class="megamenu__item"><a--}}
{{--                                                                                        href="">Screwdrivers</a>--}}
{{--                                                                                </li>--}}
{{--                                                                                <li class="megamenu__item"><a--}}
{{--                                                                                        href="">Handsaws</a></li>--}}
{{--                                                                                <li class="megamenu__item"><a--}}
{{--                                                                                        href="">Knives</a></li>--}}
{{--                                                                                <li class="megamenu__item"><a--}}
{{--                                                                                        href="">Axes</a></li>--}}
{{--                                                                                <li class="megamenu__item"><a--}}
{{--                                                                                        href="">Multitools</a></li>--}}
{{--                                                                                <li class="megamenu__item"><a--}}
{{--                                                                                        href="">Paint Tools</a></li>--}}
{{--                                                                            </ul>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li class="megamenu__item  megamenu__item--with-submenu ">--}}
{{--                                                                            <a href="">Garden Equipment</a>--}}
{{--                                                                            <ul class="megamenu__links megamenu__links--level--1">--}}
{{--                                                                                <li class="megamenu__item"><a--}}
{{--                                                                                        href="">Motor Pumps</a></li>--}}
{{--                                                                                <li class="megamenu__item"><a--}}
{{--                                                                                        href="">Chainsaws</a></li>--}}
{{--                                                                                <li class="megamenu__item"><a--}}
{{--                                                                                        href="">Electric Saws</a>--}}
{{--                                                                                </li>--}}
{{--                                                                                <li class="megamenu__item"><a--}}
{{--                                                                                        href="">Brush Cutters</a>--}}
{{--                                                                                </li>--}}
{{--                                                                            </ul>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="col-6">--}}
{{--                                                                    <ul class="megamenu__links megamenu__links--level--0">--}}
{{--                                                                        <li class="megamenu__item  megamenu__item--with-submenu ">--}}
{{--                                                                            <a href="">Instruments</a>--}}
{{--                                                                            <ul class="megamenu__links megamenu__links--level--1">--}}
{{--                                                                                <li class="megamenu__item"><a--}}
{{--                                                                                        href="">Welding--}}
{{--                                                                                        Equipment</a></li>--}}
{{--                                                                                <li class="megamenu__item"><a--}}
{{--                                                                                        href="">Power Tools</a></li>--}}
{{--                                                                                <li class="megamenu__item"><a--}}
{{--                                                                                        href="">Hand Tools</a></li>--}}
{{--                                                                                <li class="megamenu__item"><a--}}
{{--                                                                                        href="">Measuring Tool</a>--}}
{{--                                                                                </li>--}}
{{--                                                                            </ul>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <!-- .megamenu / end -->--}}
{{--                                                </div>--}}
                                            </li>
                                            <li class="departments__item">
                                                <a class="departments__item-link" href="">
                                                    Тепловое оборудование
{{--                                                    <svg class="departments__item-arrow" width="6px" height="9px">--}}
{{--                                                        <use--}}
{{--                                                            xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>--}}
{{--                                                    </svg>--}}
                                                </a>
{{--                                                <div--}}
{{--                                                    class="departments__submenu departments__submenu--type--megamenu departments__submenu--size--sm">--}}
{{--                                                    <!-- .megamenu -->--}}
{{--                                                    <div class="megamenu  megamenu--departments ">--}}
{{--                                                        <div class="megamenu__body">--}}
{{--                                                            <div class="row">--}}
{{--                                                                <div class="col-12">--}}
{{--                                                                    <ul class="megamenu__links megamenu__links--level--0">--}}
{{--                                                                        <li class="megamenu__item  megamenu__item--with-submenu ">--}}
{{--                                                                            <a href="">Hand Tools</a>--}}
{{--                                                                            <ul class="megamenu__links megamenu__links--level--1">--}}
{{--                                                                                <li class="megamenu__item"><a--}}
{{--                                                                                        href="">Screwdrivers</a>--}}
{{--                                                                                </li>--}}
{{--                                                                                <li class="megamenu__item"><a--}}
{{--                                                                                        href="">Handsaws</a></li>--}}
{{--                                                                                <li class="megamenu__item"><a--}}
{{--                                                                                        href="">Knives</a></li>--}}
{{--                                                                                <li class="megamenu__item"><a--}}
{{--                                                                                        href="">Axes</a></li>--}}
{{--                                                                                <li class="megamenu__item"><a--}}
{{--                                                                                        href="">Multitools</a></li>--}}
{{--                                                                                <li class="megamenu__item"><a--}}
{{--                                                                                        href="">Paint Tools</a></li>--}}
{{--                                                                            </ul>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li class="megamenu__item  megamenu__item--with-submenu ">--}}
{{--                                                                            <a href="">Garden Equipment</a>--}}
{{--                                                                            <ul class="megamenu__links megamenu__links--level--1">--}}
{{--                                                                                <li class="megamenu__item"><a--}}
{{--                                                                                        href="">Motor Pumps</a></li>--}}
{{--                                                                                <li class="megamenu__item"><a--}}
{{--                                                                                        href="">Chainsaws</a></li>--}}
{{--                                                                                <li class="megamenu__item"><a--}}
{{--                                                                                        href="">Electric Saws</a>--}}
{{--                                                                                </li>--}}
{{--                                                                                <li class="megamenu__item"><a--}}
{{--                                                                                        href="">Brush Cutters</a>--}}
{{--                                                                                </li>--}}
{{--                                                                            </ul>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <!-- .megamenu / end -->--}}
{{--                                                </div>--}}
                                            </li>
                                            <li class="departments__item">
                                                <a class="departments__item-link" href="">
                                                    Оснастка
{{--                                                    <svg class="departments__item-arrow" width="6px" height="9px">--}}
{{--                                                        <use--}}
{{--                                                            xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>--}}
{{--                                                    </svg>--}}
                                                </a>
{{--                                                <div class="departments__submenu departments__submenu--type--menu">--}}
{{--                                                    <!-- .menu -->--}}
{{--                                                    <div class="menu menu--layout--classic ">--}}
{{--                                                        <div class="menu__submenus-container"></div>--}}
{{--                                                        <ul class="menu__list">--}}
{{--                                                            <li class="menu__item">--}}
{{--                                                                <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->--}}
{{--                                                                <div class="menu__item-submenu-offset"></div>--}}
{{--                                                                <a class="menu__item-link" href="">--}}
{{--                                                                    Soldering Equipment--}}
{{--                                                                    <svg class="menu__item-arrow" width="6px"--}}
{{--                                                                         height="9px">--}}
{{--                                                                        <use--}}
{{--                                                                            xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>--}}
{{--                                                                    </svg>--}}
{{--                                                                </a>--}}
{{--                                                                <div class="menu__submenu">--}}
{{--                                                                    <!-- .menu -->--}}
{{--                                                                    <div class="menu menu--layout--classic ">--}}
{{--                                                                        <div class="menu__submenus-container"></div>--}}
{{--                                                                        <ul class="menu__list">--}}
{{--                                                                            <li class="menu__item">--}}
{{--                                                                                <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->--}}
{{--                                                                                <div--}}
{{--                                                                                    class="menu__item-submenu-offset"></div>--}}
{{--                                                                                <a class="menu__item-link" href="">--}}
{{--                                                                                    Soldering Station--}}
{{--                                                                                </a>--}}
{{--                                                                            </li>--}}
{{--                                                                            <li class="menu__item">--}}
{{--                                                                                <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->--}}
{{--                                                                                <div--}}
{{--                                                                                    class="menu__item-submenu-offset"></div>--}}
{{--                                                                                <a class="menu__item-link" href="">--}}
{{--                                                                                    Soldering Dryers--}}
{{--                                                                                </a>--}}
{{--                                                                            </li>--}}
{{--                                                                            <li class="menu__item">--}}
{{--                                                                                <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->--}}
{{--                                                                                <div--}}
{{--                                                                                    class="menu__item-submenu-offset"></div>--}}
{{--                                                                                <a class="menu__item-link" href="">--}}
{{--                                                                                    Gas Soldering Iron--}}
{{--                                                                                </a>--}}
{{--                                                                            </li>--}}
{{--                                                                            <li class="menu__item">--}}
{{--                                                                                <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->--}}
{{--                                                                                <div--}}
{{--                                                                                    class="menu__item-submenu-offset"></div>--}}
{{--                                                                                <a class="menu__item-link" href="">--}}
{{--                                                                                    Electric Soldering Iron--}}
{{--                                                                                </a>--}}
{{--                                                                            </li>--}}
{{--                                                                        </ul>--}}
{{--                                                                    </div>--}}
{{--                                                                    <!-- .menu / end -->--}}
{{--                                                                </div>--}}
{{--                                                            </li>--}}
{{--                                                            <li class="menu__item">--}}
{{--                                                                <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->--}}
{{--                                                                <div class="menu__item-submenu-offset"></div>--}}
{{--                                                                <a class="menu__item-link" href="">--}}
{{--                                                                    Light Bulbs--}}
{{--                                                                </a>--}}
{{--                                                            </li>--}}
{{--                                                            <li class="menu__item">--}}
{{--                                                                <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->--}}
{{--                                                                <div class="menu__item-submenu-offset"></div>--}}
{{--                                                                <a class="menu__item-link" href="">--}}
{{--                                                                    Batteries--}}
{{--                                                                </a>--}}
{{--                                                            </li>--}}
{{--                                                            <li class="menu__item">--}}
{{--                                                                <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->--}}
{{--                                                                <div class="menu__item-submenu-offset"></div>--}}
{{--                                                                <a class="menu__item-link" href="">--}}
{{--                                                                    Light Fixtures--}}
{{--                                                                </a>--}}
{{--                                                            </li>--}}
{{--                                                            <li class="menu__item">--}}
{{--                                                                <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->--}}
{{--                                                                <div class="menu__item-submenu-offset"></div>--}}
{{--                                                                <a class="menu__item-link" href="">--}}
{{--                                                                    Warm Floor--}}
{{--                                                                </a>--}}
{{--                                                            </li>--}}
{{--                                                            <li class="menu__item">--}}
{{--                                                                <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->--}}
{{--                                                                <div class="menu__item-submenu-offset"></div>--}}
{{--                                                                <a class="menu__item-link" href="">--}}
{{--                                                                    Generators--}}
{{--                                                                </a>--}}
{{--                                                            </li>--}}
{{--                                                            <li class="menu__item">--}}
{{--                                                                <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->--}}
{{--                                                                <div class="menu__item-submenu-offset"></div>--}}
{{--                                                                <a class="menu__item-link" href="">--}}
{{--                                                                    UPS--}}
{{--                                                                </a>--}}
{{--                                                            </li>--}}
{{--                                                        </ul>--}}
{{--                                                    </div>--}}
{{--                                                    <!-- .menu / end -->--}}
{{--                                                </div>--}}
                                            </li>
                                            <li class="departments__item">
                                                <a class="departments__item-link" href="">
                                                    Ручной инструмент
                                                </a>
                                            </li>
                                            <li class="departments__item">
                                                <a class="departments__item-link" href="">
                                                    Строительное оборудование
                                                </a>
                                            </li>
                                            <li class="departments__item">
                                                <a class="departments__item-link" href="">
                                                    Сварочное оборудование
                                                </a>
                                            </li>
                                            <li class="departments__item">
                                                <a class="departments__item-link" href="">
                                                    Системы хранения
                                                </a>
                                            </li>
                                            <li class="departments__item">
                                                <a class="departments__item-link" href="">
                                                    Измерительный инструмент
                                                </a>
                                            </li>
                                            <li class="departments__item">
                                                <a class="departments__item-link" href="">
                                                    Садовые принадлежности
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <button class="departments__button">
                                    <svg class="departments__button-icon" width="18px" height="14px">
                                        <use xlink:href="images/sprite.svg#menu-18x14"></use>
                                    </svg>
                                    Все товары
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
{{--                                <li class="nav-links__item  nav-links__item--has-submenu ">--}}
{{--                                    <a class="nav-links__item-link" href="index.html">--}}
{{--                                        <div class="nav-links__item-body">--}}
{{--                                            Магазин--}}
{{--                                            <svg class="nav-links__item-arrow" width="9px" height="6px">--}}
{{--                                                <use xlink:href="images/sprite.svg#arrow-rounded-down-9x6"></use>--}}
{{--                                            </svg>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                    <div class="nav-links__submenu nav-links__submenu--type--menu">--}}
{{--                                        <!-- .menu -->--}}
{{--                                        <div class="menu menu--layout--classic ">--}}
{{--                                            <div class="menu__submenus-container"></div>--}}
{{--                                            <ul class="menu__list">--}}
{{--                                                <li class="menu__item">--}}
{{--                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->--}}
{{--                                                    <div class="menu__item-submenu-offset"></div>--}}
{{--                                                    <a class="menu__item-link" href="index.html">--}}
{{--                                                        О нас--}}
{{--                                                    </a>--}}
{{--                                                </li>--}}
{{--                                                <li class="menu__item">--}}
{{--                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->--}}
{{--                                                    <div class="menu__item-submenu-offset"></div>--}}
{{--                                                    <a class="menu__item-link" href="index-2.html">--}}
{{--                                                        Бренды--}}
{{--                                                    </a>--}}
{{--                                                </li>--}}
{{--                                                <li class="menu__item">--}}
{{--                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->--}}
{{--                                                    <div class="menu__item-submenu-offset"></div>--}}
{{--                                                    <a class="menu__item-link" href="index-3.html">--}}
{{--                                                        Возвраты--}}
{{--                                                    </a>--}}
{{--                                                </li>--}}
{{--                                                <li class="menu__item">--}}
{{--                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->--}}
{{--                                                    <div class="menu__item-submenu-offset"></div>--}}
{{--                                                    <a class="menu__item-link" href="index-4.html">--}}
{{--                                                        Home 2 Finder--}}
{{--                                                    </a>--}}
{{--                                                </li>--}}
{{--                                                <li class="menu__item">--}}
{{--                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->--}}
{{--                                                    <div class="menu__item-submenu-offset"></div>--}}
{{--                                                    <a class="menu__item-link" href="offcanvas-cart.html">--}}
{{--                                                        Offcanvas Cart--}}
{{--                                                    </a>--}}
{{--                                                </li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                        <!-- .menu / end -->--}}
{{--                                    </div>--}}
{{--                                </li>--}}
                                <li class="nav-links__item">
                                    <a class="nav-links__item-link" href="{{ route('contact') }}">
                                        <div class="nav-links__item-body">
                                            {{ __('contacts') }}
{{--                                            <svg class="nav-links__item-arrow" width="9px" height="6px">--}}
{{--                                                <use xlink:href="images/sprite.svg#arrow-rounded-down-9x6"></use>--}}
{{--                                            </svg>--}}
                                        </div>
                                    </a>
{{--                                    <div--}}
{{--                                        class="nav-links__submenu nav-links__submenu--type--megamenu nav-links__submenu--size--nl">--}}
{{--                                        <!-- .megamenu -->--}}
{{--                                        <div class="megamenu ">--}}
{{--                                            <div class="megamenu__body">--}}
{{--                                                <div class="row">--}}
{{--                                                    <div class="col-6">--}}
{{--                                                        <ul class="megamenu__links megamenu__links--level--0">--}}
{{--                                                            <li class="megamenu__item  megamenu__item--with-submenu ">--}}
{{--                                                                <a href="">Power Tools</a>--}}
{{--                                                                <ul class="megamenu__links megamenu__links--level--1">--}}
{{--                                                                    <li class="megamenu__item"><a--}}
{{--                                                                            href="">Engravers</a></li>--}}
{{--                                                                    <li class="megamenu__item"><a--}}
{{--                                                                            href="">Wrenches</a></li>--}}
{{--                                                                    <li class="megamenu__item"><a href="">Wall--}}
{{--                                                                            Chaser</a></li>--}}
{{--                                                                    <li class="megamenu__item"><a href="">Pneumatic--}}
{{--                                                                            Tools</a></li>--}}
{{--                                                                </ul>--}}
{{--                                                            </li>--}}
{{--                                                            <li class="megamenu__item  megamenu__item--with-submenu ">--}}
{{--                                                                <a href="">Machine Tools</a>--}}
{{--                                                                <ul class="megamenu__links megamenu__links--level--1">--}}
{{--                                                                    <li class="megamenu__item"><a href="">Thread--}}
{{--                                                                            Cutting</a></li>--}}
{{--                                                                    <li class="megamenu__item"><a href="">Chip--}}
{{--                                                                            Blowers</a></li>--}}
{{--                                                                    <li class="megamenu__item"><a href="">Sharpening--}}
{{--                                                                            Machines</a></li>--}}
{{--                                                                    <li class="megamenu__item"><a href="">Pipe--}}
{{--                                                                            Cutters</a></li>--}}
{{--                                                                    <li class="megamenu__item"><a href="">Slotting--}}
{{--                                                                            machines</a></li>--}}
{{--                                                                    <li class="megamenu__item"><a href="">Lathes</a>--}}
{{--                                                                    </li>--}}
{{--                                                                </ul>--}}
{{--                                                            </li>--}}
{{--                                                        </ul>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-6">--}}
{{--                                                        <ul class="megamenu__links megamenu__links--level--0">--}}
{{--                                                            <li class="megamenu__item  megamenu__item--with-submenu ">--}}
{{--                                                                <a href="">Hand Tools</a>--}}
{{--                                                                <ul class="megamenu__links megamenu__links--level--1">--}}
{{--                                                                    <li class="megamenu__item"><a--}}
{{--                                                                            href="">Screwdrivers</a>--}}
{{--                                                                    </li>--}}
{{--                                                                    <li class="megamenu__item"><a--}}
{{--                                                                            href="">Handsaws</a></li>--}}
{{--                                                                    <li class="megamenu__item"><a href="">Knives</a>--}}
{{--                                                                    </li>--}}
{{--                                                                    <li class="megamenu__item"><a href="">Axes</a>--}}
{{--                                                                    </li>--}}
{{--                                                                    <li class="megamenu__item"><a--}}
{{--                                                                            href="">Multitools</a></li>--}}
{{--                                                                    <li class="megamenu__item"><a href="">Paint--}}
{{--                                                                            Tools</a></li>--}}
{{--                                                                </ul>--}}
{{--                                                            </li>--}}
{{--                                                            <li class="megamenu__item  megamenu__item--with-submenu ">--}}
{{--                                                                <a href="">Garden Equipment</a>--}}
{{--                                                                <ul class="megamenu__links megamenu__links--level--1">--}}
{{--                                                                    <li class="megamenu__item"><a href="">Motor--}}
{{--                                                                            Pumps</a></li>--}}
{{--                                                                    <li class="megamenu__item"><a--}}
{{--                                                                            href="">Chainsaws</a></li>--}}
{{--                                                                    <li class="megamenu__item"><a href="">Electric--}}
{{--                                                                            Saws</a></li>--}}
{{--                                                                    <li class="megamenu__item"><a href="">Brush--}}
{{--                                                                            Cutters</a></li>--}}
{{--                                                                </ul>--}}
{{--                                                            </li>--}}
{{--                                                        </ul>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <!-- .megamenu / end -->--}}
{{--                                    </div>--}}
                                </li>
{{--                                <li class="nav-links__item  nav-links__item--has-submenu ">--}}
{{--                                    <a class="nav-links__item-link" href="shop-grid-3-columns-sidebar.html">--}}
{{--                                        <div class="nav-links__item-body">--}}
{{--                                            Доставка--}}
{{--                                            <svg class="nav-links__item-arrow" width="9px" height="6px">--}}
{{--                                                <use xlink:href="images/sprite.svg#arrow-rounded-down-9x6"></use>--}}
{{--                                            </svg>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                    <div class="nav-links__submenu nav-links__submenu--type--menu">--}}
{{--                                        <!-- .menu -->--}}
{{--                                        <div class="menu menu--layout--classic ">--}}
{{--                                            <div class="menu__submenus-container"></div>--}}
{{--                                            <ul class="menu__list">--}}
{{--                                                <li class="menu__item">--}}
{{--                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->--}}
{{--                                                    <div class="menu__item-submenu-offset"></div>--}}
{{--                                                    <a class="menu__item-link"--}}
{{--                                                       href="shop-grid-3-columns-sidebar.html">--}}
{{--                                                        Shop Grid--}}
{{--                                                        <svg class="menu__item-arrow" width="6px" height="9px">--}}
{{--                                                            <use--}}
{{--                                                                xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>--}}
{{--                                                        </svg>--}}
{{--                                                    </a>--}}
{{--                                                    <div class="menu__submenu">--}}
{{--                                                        <!-- .menu -->--}}
{{--                                                        <div class="menu menu--layout--classic ">--}}
{{--                                                            <div class="menu__submenus-container"></div>--}}
{{--                                                            <ul class="menu__list">--}}
{{--                                                                <li class="menu__item">--}}
{{--                                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->--}}
{{--                                                                    <div class="menu__item-submenu-offset"></div>--}}
{{--                                                                    <a class="menu__item-link"--}}
{{--                                                                       href="shop-grid-3-columns-sidebar.html">--}}
{{--                                                                        3 Columns Sidebar--}}
{{--                                                                    </a>--}}
{{--                                                                </li>--}}
{{--                                                                <li class="menu__item">--}}
{{--                                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->--}}
{{--                                                                    <div class="menu__item-submenu-offset"></div>--}}
{{--                                                                    <a class="menu__item-link"--}}
{{--                                                                       href="shop-grid-4-columns-full.html">--}}
{{--                                                                        4 Columns Full--}}
{{--                                                                    </a>--}}
{{--                                                                </li>--}}
{{--                                                                <li class="menu__item">--}}
{{--                                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->--}}
{{--                                                                    <div class="menu__item-submenu-offset"></div>--}}
{{--                                                                    <a class="menu__item-link"--}}
{{--                                                                       href="shop-grid-5-columns-full.html">--}}
{{--                                                                        5 Columns Full--}}
{{--                                                                    </a>--}}
{{--                                                                </li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <!-- .menu / end -->--}}
{{--                                                    </div>--}}
{{--                                                </li>--}}
{{--                                                <li class="menu__item">--}}
{{--                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->--}}
{{--                                                    <div class="menu__item-submenu-offset"></div>--}}
{{--                                                    <a class="menu__item-link" href="shop-list.html">--}}
{{--                                                        Shop List--}}
{{--                                                    </a>--}}
{{--                                                </li>--}}
{{--                                                <li class="menu__item">--}}
{{--                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->--}}
{{--                                                    <div class="menu__item-submenu-offset"></div>--}}
{{--                                                    <a class="menu__item-link" href="shop-right-sidebar.html">--}}
{{--                                                        Shop Right Sidebar--}}
{{--                                                    </a>--}}
{{--                                                </li>--}}
{{--                                                <li class="menu__item">--}}
{{--                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->--}}
{{--                                                    <div class="menu__item-submenu-offset"></div>--}}
{{--                                                    <a class="menu__item-link" href="product.html">--}}
{{--                                                        Product--}}
{{--                                                        <svg class="menu__item-arrow" width="6px" height="9px">--}}
{{--                                                            <use--}}
{{--                                                                xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>--}}
{{--                                                        </svg>--}}
{{--                                                    </a>--}}
{{--                                                    <div class="menu__submenu">--}}
{{--                                                        <!-- .menu -->--}}
{{--                                                        <div class="menu menu--layout--classic ">--}}
{{--                                                            <div class="menu__submenus-container"></div>--}}
{{--                                                            <ul class="menu__list">--}}
{{--                                                                <li class="menu__item">--}}
{{--                                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->--}}
{{--                                                                    <div class="menu__item-submenu-offset"></div>--}}
{{--                                                                    <a class="menu__item-link" href="product.html">--}}
{{--                                                                        Product--}}
{{--                                                                    </a>--}}
{{--                                                                </li>--}}
{{--                                                                <li class="menu__item">--}}
{{--                                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->--}}
{{--                                                                    <div class="menu__item-submenu-offset"></div>--}}
{{--                                                                    <a class="menu__item-link"--}}
{{--                                                                       href="product-alt.html">--}}
{{--                                                                        Product Alt--}}
{{--                                                                    </a>--}}
{{--                                                                </li>--}}
{{--                                                                <li class="menu__item">--}}
{{--                                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->--}}
{{--                                                                    <div class="menu__item-submenu-offset"></div>--}}
{{--                                                                    <a class="menu__item-link"--}}
{{--                                                                       href="product-sidebar.html">--}}
{{--                                                                        Product Sidebar--}}
{{--                                                                    </a>--}}
{{--                                                                </li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <!-- .menu / end -->--}}
{{--                                                    </div>--}}
{{--                                                </li>--}}
{{--                                                <li class="menu__item">--}}
{{--                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->--}}
{{--                                                    <div class="menu__item-submenu-offset"></div>--}}
{{--                                                    <a class="menu__item-link" href="cart.html">--}}
{{--                                                        Cart--}}
{{--                                                    </a>--}}
{{--                                                </li>--}}
{{--                                                <li class="menu__item">--}}
{{--                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->--}}
{{--                                                    <div class="menu__item-submenu-offset"></div>--}}
{{--                                                    <a class="menu__item-link" href="cart-empty.html">--}}
{{--                                                        Cart Empty--}}
{{--                                                    </a>--}}
{{--                                                </li>--}}
{{--                                                <li class="menu__item">--}}
{{--                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->--}}
{{--                                                    <div class="menu__item-submenu-offset"></div>--}}
{{--                                                    <a class="menu__item-link" href="checkout.html">--}}
{{--                                                        Checkout--}}
{{--                                                    </a>--}}
{{--                                                </li>--}}
{{--                                                <li class="menu__item">--}}
{{--                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->--}}
{{--                                                    <div class="menu__item-submenu-offset"></div>--}}
{{--                                                    <a class="menu__item-link" href="order-success.html">--}}
{{--                                                        Order Success--}}
{{--                                                    </a>--}}
{{--                                                </li>--}}
{{--                                                <li class="menu__item">--}}
{{--                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->--}}
{{--                                                    <div class="menu__item-submenu-offset"></div>--}}
{{--                                                    <a class="menu__item-link" href="wishlist.html">--}}
{{--                                                        Wishlist--}}
{{--                                                    </a>--}}
{{--                                                </li>--}}
{{--                                                <li class="menu__item">--}}
{{--                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->--}}
{{--                                                    <div class="menu__item-submenu-offset"></div>--}}
{{--                                                    <a class="menu__item-link" href="compare.html">--}}
{{--                                                        Compare--}}
{{--                                                    </a>--}}
{{--                                                </li>--}}
{{--                                                <li class="menu__item">--}}
{{--                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->--}}
{{--                                                    <div class="menu__item-submenu-offset"></div>--}}
{{--                                                    <a class="menu__item-link" href="#">--}}
{{--                                                        {{ __('track_order') }}--}}
{{--                                                    </a>--}}
{{--                                                </li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                        <!-- .menu / end -->--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="nav-links__item  nav-links__item--has-submenu ">--}}
{{--                                    <a class="nav-links__item-link" href="account-login.html">--}}
{{--                                        <div class="nav-links__item-body">--}}
{{--                                            Оплата--}}
{{--                                            <svg class="nav-links__item-arrow" width="9px" height="6px">--}}
{{--                                                <use xlink:href="images/sprite.svg#arrow-rounded-down-9x6"></use>--}}
{{--                                            </svg>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
                                    {{--                                        <div class="nav-links__submenu nav-links__submenu--type--menu">--}}
                                    {{--                                            <!-- .menu -->--}}
                                    {{--                                            <div class="menu menu--layout--classic ">--}}
                                    {{--                                                <div class="menu__submenus-container"></div>--}}
                                    {{--                                                <ul class="menu__list">--}}
                                    {{--                                                    <li class="menu__item">--}}
                                    {{--                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->--}}
                                    {{--                                                        <div class="menu__item-submenu-offset"></div>--}}
                                    {{--                                                        <a class="menu__item-link" href="account-login.html">--}}
                                    {{--                                                            Login--}}
                                    {{--                                                        </a>--}}
                                    {{--                                                    </li>--}}
                                    {{--                                                    <li class="menu__item">--}}
                                    {{--                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->--}}
                                    {{--                                                        <div class="menu__item-submenu-offset"></div>--}}
                                    {{--                                                        <a class="menu__item-link" href="account-dashboard.html">--}}
                                    {{--                                                            Dashboard--}}
                                    {{--                                                        </a>--}}
                                    {{--                                                    </li>--}}
                                    {{--                                                    <li class="menu__item">--}}
                                    {{--                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->--}}
                                    {{--                                                        <div class="menu__item-submenu-offset"></div>--}}
                                    {{--                                                        <a class="menu__item-link" href="account-profile.html">--}}
                                    {{--                                                            Edit Profile--}}
                                    {{--                                                        </a>--}}
                                    {{--                                                    </li>--}}
                                    {{--                                                    <li class="menu__item">--}}
                                    {{--                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->--}}
                                    {{--                                                        <div class="menu__item-submenu-offset"></div>--}}
                                    {{--                                                        <a class="menu__item-link" href="account-orders.html">--}}
                                    {{--                                                            Order History--}}
                                    {{--                                                        </a>--}}
                                    {{--                                                    </li>--}}
                                    {{--                                                    <li class="menu__item">--}}
                                    {{--                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->--}}
                                    {{--                                                        <div class="menu__item-submenu-offset"></div>--}}
                                    {{--                                                        <a class="menu__item-link" href="account-order-details.html">--}}
                                    {{--                                                            Order Details--}}
                                    {{--                                                        </a>--}}
                                    {{--                                                    </li>--}}
                                    {{--                                                    <li class="menu__item">--}}
                                    {{--                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->--}}
                                    {{--                                                        <div class="menu__item-submenu-offset"></div>--}}
                                    {{--                                                        <a class="menu__item-link" href="account-addresses.html">--}}
                                    {{--                                                            Address Book--}}
                                    {{--                                                        </a>--}}
                                    {{--                                                    </li>--}}
                                    {{--                                                    <li class="menu__item">--}}
                                    {{--                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->--}}
                                    {{--                                                        <div class="menu__item-submenu-offset"></div>--}}
                                    {{--                                                        <a class="menu__item-link" href="account-edit-address.html">--}}
                                    {{--                                                            Edit Address--}}
                                    {{--                                                        </a>--}}
                                    {{--                                                    </li>--}}
                                    {{--                                                    <li class="menu__item">--}}
                                    {{--                                                        <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->--}}
                                    {{--                                                        <div class="menu__item-submenu-offset"></div>--}}
                                    {{--                                                        <a class="menu__item-link" href="account-password.html">--}}
                                    {{--                                                            Change Password--}}
                                    {{--                                                        </a>--}}
                                    {{--                                                    </li>--}}
                                    {{--                                                </ul>--}}
                                    {{--                                            </div>--}}
                                    {{--                                            <!-- .menu / end -->--}}
                                    {{--                                        </div>--}}
{{--                                </li>--}}
{{--                                <li class="nav-links__item">--}}
{{--                                    <a class="nav-links__item-link" href="blog-classic.html">--}}
{{--                                        <div class="nav-links__item-body">--}}
{{--                                            Блог--}}
{{--                                            <svg class="nav-links__item-arrow" width="9px" height="6px">--}}
{{--                                                <use xlink:href="images/sprite.svg#arrow-rounded-down-9x6"></use>--}}
{{--                                            </svg>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                    <div class="nav-links__submenu nav-links__submenu--type--menu">--}}
{{--                                        <!-- .menu -->--}}
{{--                                        <div class="menu menu--layout--classic ">--}}
{{--                                            <div class="menu__submenus-container"></div>--}}
{{--                                            <ul class="menu__list">--}}
{{--                                                <li class="menu__item">--}}
{{--                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->--}}
{{--                                                    <div class="menu__item-submenu-offset"></div>--}}
{{--                                                    <a class="menu__item-link" href="blog-classic.html">--}}
{{--                                                        Blog Classic--}}
{{--                                                    </a>--}}
{{--                                                </li>--}}
{{--                                                <li class="menu__item">--}}
{{--                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->--}}
{{--                                                    <div class="menu__item-submenu-offset"></div>--}}
{{--                                                    <a class="menu__item-link" href="blog-grid.html">--}}
{{--                                                        Blog Grid--}}
{{--                                                    </a>--}}
{{--                                                </li>--}}
{{--                                                <li class="menu__item">--}}
{{--                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->--}}
{{--                                                    <div class="menu__item-submenu-offset"></div>--}}
{{--                                                    <a class="menu__item-link" href="blog-list.html">--}}
{{--                                                        Blog List--}}
{{--                                                    </a>--}}
{{--                                                </li>--}}
{{--                                                <li class="menu__item">--}}
{{--                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->--}}
{{--                                                    <div class="menu__item-submenu-offset"></div>--}}
{{--                                                    <a class="menu__item-link" href="blog-left-sidebar.html">--}}
{{--                                                        Blog Left Sidebar--}}
{{--                                                    </a>--}}
{{--                                                </li>--}}
{{--                                                <li class="menu__item">--}}
{{--                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->--}}
{{--                                                    <div class="menu__item-submenu-offset"></div>--}}
{{--                                                    <a class="menu__item-link" href="post.html">--}}
{{--                                                        Post Page--}}
{{--                                                    </a>--}}
{{--                                                </li>--}}
{{--                                                <li class="menu__item">--}}
{{--                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->--}}
{{--                                                    <div class="menu__item-submenu-offset"></div>--}}
{{--                                                    <a class="menu__item-link" href="post-without-sidebar.html">--}}
{{--                                                        Post Without Sidebar--}}
{{--                                                    </a>--}}
{{--                                                </li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                        <!-- .menu / end -->--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="nav-links__item  nav-links__item--has-submenu ">--}}
{{--                                    <a class="nav-links__item-link" href="">--}}
{{--                                        <div class="nav-links__item-body">--}}
{{--                                            Сервис--}}
{{--                                            <svg class="nav-links__item-arrow" width="9px" height="6px">--}}
{{--                                                <use xlink:href="images/sprite.svg#arrow-rounded-down-9x6"></use>--}}
{{--                                            </svg>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                    <div class="nav-links__submenu nav-links__submenu--type--menu">--}}
{{--                                        <!-- .menu -->--}}
{{--                                        <div class="menu menu--layout--classic ">--}}
{{--                                            <div class="menu__submenus-container"></div>--}}
{{--                                            <ul class="menu__list">--}}
{{--                                                <li class="menu__item">--}}
{{--                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->--}}
{{--                                                    <div class="menu__item-submenu-offset"></div>--}}
{{--                                                    <a class="menu__item-link" href="#">--}}
{{--                                                        {{ __('about_us') }}--}}
{{--                                                    </a>--}}
{{--                                                </li>--}}
{{--                                                <li class="menu__item">--}}
{{--                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->--}}
{{--                                                    <div class="menu__item-submenu-offset"></div>--}}
{{--                                                    <a class="menu__item-link" href="#">--}}
{{--                                                        {{ __('contact_us') }}--}}
{{--                                                    </a>--}}
{{--                                                </li>--}}
{{--                                                <li class="menu__item">--}}
{{--                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->--}}
{{--                                                    <div class="menu__item-submenu-offset"></div>--}}
{{--                                                    <a class="menu__item-link" href="#">--}}
{{--                                                        {{ __('contact_us_alt') }}--}}
{{--                                                    </a>--}}
{{--                                                </li>--}}
{{--                                                <li class="menu__item">--}}
{{--                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->--}}
{{--                                                    <div class="menu__item-submenu-offset"></div>--}}
{{--                                                    <a class="menu__item-link" href="#">--}}
{{--                                                        404--}}
{{--                                                    </a>--}}
{{--                                                </li>--}}
{{--                                                <li class="menu__item">--}}
{{--                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->--}}
{{--                                                    <div class="menu__item-submenu-offset"></div>--}}
{{--                                                    <a class="menu__item-link" href="terms-and-conditions.html">--}}
{{--                                                        Terms And Conditions--}}
{{--                                                    </a>--}}
{{--                                                </li>--}}
{{--                                                <li class="menu__item">--}}
{{--                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->--}}
{{--                                                    <div class="menu__item-submenu-offset"></div>--}}
{{--                                                    <a class="menu__item-link" href="faq.html">--}}
{{--                                                        FAQ--}}
{{--                                                    </a>--}}
{{--                                                </li>--}}
{{--                                                <li class="menu__item">--}}
{{--                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->--}}
{{--                                                    <div class="menu__item-submenu-offset"></div>--}}
{{--                                                    <a class="menu__item-link" href="components.html">--}}
{{--                                                        Components--}}
{{--                                                    </a>--}}
{{--                                                </li>--}}
{{--                                                <li class="menu__item">--}}
{{--                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->--}}
{{--                                                    <div class="menu__item-submenu-offset"></div>--}}
{{--                                                    <a class="menu__item-link" href="typography.html">--}}
{{--                                                        Typography--}}
{{--                                                    </a>--}}
{{--                                                </li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                        <!-- .menu / end -->--}}
{{--                                    </div>--}}
{{--                                </li>--}}
                            </ul>
                        </div>
                        <!-- .nav-links / end -->
{{--                        <div class="nav-panel__indicators">--}}
{{--                            <div class="indicator">--}}
{{--                                <a href="wishlist.html" class="indicator__button">--}}
{{--                                            <span class="indicator__area">--}}
{{--                                                <svg width="20px" height="20px">--}}
{{--                                                    <use xlink:href="images/sprite.svg#heart-20"></use>--}}
{{--                                                </svg>--}}
{{--                                                <span class="indicator__value">0</span>--}}
{{--                                            </span>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- desktop site__header / end -->
