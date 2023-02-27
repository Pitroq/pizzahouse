@extends('layouts.layout')

@section('content')
<div class="text-center p-3 h-100">
    <p class="title mx-auto display-2 text-uppercase p-3">Pizza List</p>
    @foreach ($pizzas as $pizza)
        <div class="pizza-item container p-4">
            <img src="/img/pizza.png" alt="pizza icon">
            <h4>
                <a href="/pizzas/{{ $pizza->id }}">{{ $pizza->name }}</a>
            </h4>
        </div>
    @endforeach
</div>
@endsection