<div class="block block-brands">
    <div class="container">
        <div class="block-brands__slider">
            <div class="owl-carousel">
                @foreach($brands as $brand)
                    <div class="block-brands__item">
                        @if ($brand->url)
                            <a href="{{ $brand->url }}"><img class="brand-image" src="/storage/images/brands/{{ $brand->name }}" alt="{{ $brand->description }}"></a>
                        @else
                            <img class="brand-image" src="/storage/images/brands/{{ $brand->name }}" alt="{{ $brand->description }}">
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
