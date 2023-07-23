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
                        <li class="breadcrumb-item active" aria-current="page">{{ __('return_products') }}</li>
                    </ol>
                </nav>
            </div>
            <div class="page-header__title">
                <h1>{{ __('return_products') }}</h1>
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
                                <h4>Возврат и обмен товара надлежащего качества</h4>
                                <p>В течение 3-х месяцев с момента приобретения вы имеете право без объяснения причины вернуть либо обменять товар при соблюдении следующих условий:</p>
                                <h5>Условия возврата товара надлежащего качества</h5>
                                <p>Товар надлежащего качества можно вернуть, если он:</p>
                                <ul>
                                    <li>не был в эксплуатации;</li>
                                    <li>сохранил внешний вид и потребительские свойства;</li>
                                    <li>находится в оригинальной заводской упаковке;</li>
                                    <li>имеет подтверждение совершения покупки в наших магазинах;</li>
                                    <li>не входит в Перечень непродовольственных товаров, не подлежащих обмену и возврату.</li>
                                </ul>
                                <p>Перечень непродовольственных товаров надлежащего качества, не подлежащих обмену и возврату, утвержден постановлением Совета Министров РБ от № 778 14.06.2002 г.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
