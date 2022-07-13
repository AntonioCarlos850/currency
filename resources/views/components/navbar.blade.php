<ul id="nav-currency">
    @foreach ($currencies as $currency)
        <li class="row col-dt-2 col-mb-6 direction-column center">
            <h3 class="name">{{$currency->name}}</h3>
            <span class="value">R$ {{number_format(1/$currency->value, 3, ",", ".")}}</span>
            <time class="date">{{$currency->updated_at}}</time>
        </li>
    @endforeach
</ul>