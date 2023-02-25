@extends('layouts.layout')

@section('content')
    <div class="text-center p-3">
        <p class="display-2">Pizza List</p>
        @foreach ($pizzas as $pizza)
            <p>{{ $loop->index }} - {{ $pizza['type'] }} - {{ $pizza['base'] }}</p>
        @endforeach
    </div>
@endsection