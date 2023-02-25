@extends('layouts.layout')

@section('content')
<div class="text-center p-3 h-100">
    <p class="title mx-auto display-2 text-uppercase p-3">Pizza List</p>
    <p>{{ $name }}</p>
    <p>{{ $age }}</p>
    @foreach ($pizzas as $pizza)
        <p>{{ $loop->index }} - {{ $pizza['type'] }} - {{ $pizza['base'] }}</p>
    @endforeach
</div>
@endsection