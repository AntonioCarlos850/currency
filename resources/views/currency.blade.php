@extends('layout.app')

@push('styles')
    <link rel="stylesheet" href="{{asset("css/currency.css")}}">
@endpush

@section('content')
    <div class="row direction-column p-2" id="content">
        <div class="col-10 center">
            <h1>Currency: {{$currency->name}}</h1>
            <h2>R$ 1,00 = {{$currency->value}}</h2>
        </article>
    </div>
@endsection