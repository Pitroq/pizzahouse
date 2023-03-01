@extends('layouts.layout')

@section('content')
<div class="text-center p-3 h-100">
    <img src="img/pizza-house.png">
    <p class="title mx-auto display-2 text-uppercase p-3">The north's best pizzas</p>
    <p class="message">{{ session('message') }}</p>
    <a href="{{ route('pizzas.create') }}">Order a pizza</a>
</div>
@endsection