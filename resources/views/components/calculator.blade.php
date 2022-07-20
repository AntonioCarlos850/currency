<div class="row w-100 center my-dt-2 mt-sm-1" id="calculator">
    <div class="col-dt-9 col-mb-10 d-flex direction-column center p-1" id="calculator-content">
        <h2 id="calculator-tittle">Currency Calculator</h2>
        <time datetime="{{$currencies->first()->updated_at}}">{{$currencies->first()->updated_at}}</time>
        <h3 id="caption" class="my-1">Convert the currency</h3>
        <form class="row space-evenly align-baseline py-2">
            <div class="col-dt-2 col-mb-8 mb-sm-1">
                <label class="w-40">Value</label>
                <input type="number" step="0.01" min="0" id="amount" class="w-100" />
            </div>
            <div class="col-dt-3 col-mb-8 mb-sm-1">
                <label for="currency-1">Convert from</label>
                <select class="form-control w-100" id="currency-1" required>
                    @foreach ($currencies as $currency)
                        <option>{{$currency->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-dt-3 col-mb-8 mb-sm-2">
                <label for="currency-2">Convert to</label>
                <select class="form-control w-100" id="currency-2" required>
                    @foreach ($currencies as $currency)
                        <option>{{$currency->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-dt-1 col-mb-8">
                <button id="calculate-btn" class="btn btn-primary">Calculate!</button>
            </div>
        </form>
        <div class="row w-100 space-around">
            <div class="result col-dt-4 col-mb-9 mb-sm-1">
                <p><strong>Conversion of: </strong><span class="base-currency"></span></p>
                <p><strong>Value to convert: </strong><span class="given-amount"></span></p>
            </div>
            <div class="result col-dt-4 col-mb-9">
                <p><strong>To: </strong><span class="second-currency"></span></p>
                <p><strong>Conversion result: </strong><span class="final-result"></span></p>
            </div>
        </div>
    </div>
</div>

<script>
    var crrncy = {!! collect($javascript)->toJson() !!}
</script>
<script src="{{asset('js/calculator.js')}}"></script>