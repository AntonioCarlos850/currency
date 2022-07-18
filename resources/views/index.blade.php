@extends('layout.app')

@push('title')
    Home
@endpush

@push('styles')
    <link rel="stylesheet" href="{{asset("css/calculator.css")}}">
    <link rel="stylesheet" href="{{asset("css/index.css")}}">
@endpush

@section('content')
    <x-topbar :currencies="$currencies" />
    <x-calculator :javascript="$currency_javascript_format" :currencies="$currencies" />
@endsection