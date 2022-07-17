<div class="swiper-slide">
    <h3 class="name">{{$currency->name}}</h3>
    <span class="value">R$ {{number_format(1/$currency->value, 3, ",", ".")}}</span>
    <time class="date">{{$currency->updated_at}}</time>
</div>