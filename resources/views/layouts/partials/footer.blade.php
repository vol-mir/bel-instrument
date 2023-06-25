<!-- site__footer -->
<footer class="site__footer">
    <div class="site-footer">
        <div class="container">
            <div class="site-footer__widgets">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="site-footer__widget footer-contacts">
                            <h5 class="footer-contacts__title">{{ __('about_us') }}</h5>
                            @foreach($shops as $shop)
                                <div class="footer-contacts__text">
                                    <h6>{{ $shop->name }}</h6>
                                </div>
                                <ul class="footer-contacts__contacts">
                                    @if(!empty($shop->full_physical_address))
                                        <li><i class="footer-contacts__icon fas fa-globe-americas"></i><address class="footer-address">{{ $shop->full_physical_address  }}</address></li>
                                    @endif
                                    @if(!empty($shop->registration_number))
                                        <li><i class="footer-contacts__icon fas fa-indent"></i>{{ $shop->registration_number }}</li>
                                    @endif
                                    @if(!empty($shop->email))
                                       <li><i class="footer-contacts__icon fas fa-mail-bulk"></i>{{ $shop->email }}</li>
                                    @endif
{{--                                    <li><i class="footer-contacts__icon far fa-envelope"></i> stroyka@example.com</li>--}}
                                    @foreach($shop->phones as $item)
                                        <li><i class="footer-contacts__icon fas fa-mobile-alt"></i>{{ trans($item->operator) }} <a href="tel:{{ $item->phone }}">{{ $item->phone }}</a></li>
                                    @endforeach
{{--                                    <li><i class="footer-contacts__icon far fa-clock"></i> Mon-Sat 10:00pm - 7:00pm</li>--}}
                                </ul>
                                <br>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-6 col-md-3 col-lg-2">
                        <div class="site-footer__widget footer-links">
                            <h5 class="footer-links__title">{{ __('information') }}</h5>
                            <ul class="footer-links__list">
                                <li class="footer-links__item"><a href="{{ route('home') }}" class="footer-links__link">{{ __('home') }}</a></li>
                                <li class="footer-links__item"><a href="{{ route('about') }}" class="footer-links__link">{{ __('about_us') }}</a></li>
{{--                                <li class="footer-links__item"><a href="#" class="footer-links__link">{{ __('delivery_information') }}</a></li>--}}
{{--                                <li class="footer-links__item"><a href="#" class="footer-links__link">{{ __('privacy_policy') }}</a></li>--}}
{{--                                <li class="footer-links__item"><a href="#" class="footer-links__link">{{ __('brands') }}</a></li>--}}
                                <li class="footer-links__item"><a href="{{ route('contact') }}" class="footer-links__link">{{ __('contact_us') }}</a></li>
                                <li class="footer-links__item"><a href="{{ route('terms') }}" class="footer-links__link">{{ __('terms') }}</a></li>
{{--                                <li class="footer-links__item"><a href="#" class="footer-links__link">{{ __('returns') }}</a></li>--}}
                            </ul>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 col-lg-2">
                        <div class="site-footer__widget footer-links">
                            <h5 class="footer-links__title">{{ __('my_account') }}</h5>
                            <ul class="footer-links__list">
{{--                                <li class="footer-links__item"><a href="" class="footer-links__link">{{ __('store_location') }}</a></li>--}}
{{--                                <li class="footer-links__item"><a href="" class="footer-links__link">{{ __('order_history') }}</a></li>--}}
{{--                                <li class="footer-links__item"><a href="" class="footer-links__link">{{ __('wish_list') }}</a></li>--}}
{{--                                <li class="footer-links__item"><a href="" class="footer-links__link">{{ __('newsletter') }}</a></li>--}}
{{--                                <li class="footer-links__item"><a href="" class="footer-links__link">{{ __('specials') }}</a></li>--}}
{{--                                <li class="footer-links__item"><a href="" class="footer-links__link">{{ __('gift_certificates') }}</a></li>--}}
{{--                                <li class="footer-links__item"><a href="" class="footer-links__link">{{ __('affiliate') }}</a>--}}
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-4">
                        <div class="site-footer__widget footer-newsletter">
                            <h5 class="footer-newsletter__title">{{ __('newsletter') }}</h5>
{{--                            <div class="footer-newsletter__text">--}}
{{--                                Praesent pellentesque volutpat ex, vitae auctor lorem pulvinar mollis felis at--}}
{{--                                lacinia.--}}
{{--                            </div>--}}
{{--                            <form action="" class="footer-newsletter__form">--}}
{{--                                <label class="sr-only" for="footer-newsletter-address">Email Address</label>--}}
{{--                                <input type="text" class="footer-newsletter__form-input form-control"--}}
{{--                                       id="footer-newsletter-address" placeholder="Email Address...">--}}
{{--                                <button class="footer-newsletter__form-button btn btn-primary">Subscribe</button>--}}
{{--                            </form>--}}
                            <div class="footer-newsletter__text footer-newsletter__text--social">
                                {{ __('follow_social_networks') }}
                            </div>
                            <!-- social-links -->
                            <div class="social-links footer-newsletter__social-links social-links--shape--circle">
                                <ul class="social-links__list">

                                    @if(!empty($settings->telegram))
                                        <li class="social-links__item">
                                            <a class="social-links__link social-links__link--type--telegram"
                                               href="{{ $settings->telegram }}"
                                               target="_blank">
                                                <i class="fas fa-mouse-pointer"></i>
                                            </a>
                                        </li>
                                    @endif

                                    @if(!empty($settings->viber))
                                        <li class="social-links__item">
                                            <a class="social-links__link social-links__link--type--viber"
                                               href="{{ $settings->viber }}"
                                               target="_blank">
                                                <i class="fas fa-square"></i>
                                            </a>
                                        </li>
                                    @endif

                                    @if(!empty($settings->vk))
                                        <li class="social-links__item">
                                            <a class="social-links__link social-links__link--type--vk"
                                               href="{{ $settings->vk }}"
                                               target="_blank">
                                                <i class="fas fa-kiwi-bird"></i>
                                            </a>
                                        </li>
                                    @endif

                                    @if(!empty($settings->instagram))
                                        <li class="social-links__item">
                                            <a class="social-links__link social-links__link--type--instagram"
                                               href="{{ $settings->instagram }}"
                                               target="_blank">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                    @endif

                                    @if(!empty($settings->facebook))
                                        <li class="social-links__item">
                                            <a class="social-links__link social-links__link--type--facebook"
                                               href="{{ $settings->facebook }}"
                                               target="_blank">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                    @endif

                                    @if(!empty($settings->ok))
                                        <li class="social-links__item">
                                            <a class="social-links__link social-links__link--type--ok"
                                               href="{{ $settings->ok }}"
                                               target="_blank">
                                                <i class="fab fa-odnoklassniki"></i>
                                            </a>
                                        </li>
                                    @endif

                                    @if(!empty($settings->youtube))
                                        <li class="social-links__item">
                                            <a class="social-links__link social-links__link--type--youtube"
                                               href="{{ $settings->youtube }}"
                                               target="_blank">
                                                <i class="fab fa-youtube"></i>
                                            </a>
                                        </li>
                                    @endif

                                </ul>
                            </div>
                            <!-- social-links / end -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-footer__bottom">
                <div class="site-footer__copyright">
                    <!-- copyright -->
                    Copyright &copy; 2022-{{ now()->year }} <a href="{{ route('home') }}">bel-instrument.by</a>. All rights reserved.
                    <!-- copyright / end -->
                </div>
            </div>
        </div>
        <div class="totop">
            <div class="totop__body">
                <div class="totop__start"></div>
                <div class="totop__container container"></div>
                <div class="totop__end">
                    <button type="button" class="totop__button">
                        <svg width="13px" height="8px">
                            <use xlink:href="images/sprite.svg#arrow-rounded-up-13x8"></use>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- site__footer / end -->
