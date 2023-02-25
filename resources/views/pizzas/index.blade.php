@extends('layouts.layout')

@section('content')
<div class="text-center p-3 h-100">
    <p class="title mx-auto display-2 text-uppercase p-3">Pizza List</p>
    @foreach ($pizzas as $pizza)
        <div>
            {{ $pizza->name }} - {{ $pizza->type }} - {{ $pizza->base }}
        </div>
    @endforeach
</div>
@endsection