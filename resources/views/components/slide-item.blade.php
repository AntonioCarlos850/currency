<div class="swiper-slide">
    <a href="{{route('currency', $currency->name)}}" class="row center direction-column">
        <h3 class="name">{{$currency->name}}</h3>
        <span class="value">R$ {{$currency->value}}</span>
        <time class="date">{{$currency->updated_at}}</time>
    </a>
</div>