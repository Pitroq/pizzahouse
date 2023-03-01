@extends('layouts.layout')

@section('content')
<div class="pizza-details container p-3 my-4">
    <h1>Order for {{ $pizza->name }}</h1>
    <p class="type">Type - {{ $pizza->type }}</p>
    <p class="base">Base - {{ $pizza->base }}</p>
    <p class="toppings">Extra toppings:</p>
    <ul>
        @foreach ($pizza->toppings as $topping)
            <li>{{ $topping }}</li>
        @endforeach
    </ul>
    <form action="{{ route('pizzas.destroy', $pizza->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <input type="submit" class="btn btn-dark btn-purple" value="Complete order">
    </form>
</div>
<div class="text-center p-3">
    <a href="/pizzas" class="back"><- Back to all pizzas</a>
</div>
@endsection