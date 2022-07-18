<div id="nav-currency" class="swiper">
    <div class="swiper-wrapper">
        @foreach ($currencies as $currency)
            <x-slide-item :currency="$currency" />
        @endforeach
    </div>
</div>