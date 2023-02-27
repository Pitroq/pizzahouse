@extends('layouts.layout')

@section('content')
<div class="create-pizza container p-3 my-4">
    <h1>Create a new pizza</h1>
    <form action="/pizzas" method="POST">
        @csrf
        <label for="name">Your name:</label><br>
        <p><input type="text" id="name" name="name"></p>

        <label for="type">Choose pizza type:</label><br>
        <p><select name="type" id="type">
            <option value="margarita">Margarita</option>
            <option value="hawaiian">Hawaiian</option>
            <option value="veg supreme">Veg Supreme</option>
            <option value="volcano">Volcano</option>
        </select></p>
        
        <label for="type">Choose base type:</label><br>
        <p><select name="base" id="base">
            <option value="cheesy crust">Cheesy Crust</option>
            <option value="garlic crust">Garlic Crust</option>
            <option value="thin & crispy">Thin & crispy</option>
            <option value="thick">Thick</option>
        </select></p>
        <p><fieldset>
            <label>Extra toppings:</label><br>
            <input type="checkbox" class="mx-2" name="toppings[]" value="mushrooms">Muchrooms<br>
            <input type="checkbox" class="mx-2" name="toppings[]" value="peppers">Peppers<br>
            <input type="checkbox" class="mx-2" name="toppings[]" value="garlic">Garlic<br>
            <input type="checkbox" class="mx-2" name="toppings[]" value="olives">Muchrooms<br>
        </fieldset></p>
        <input type="submit" class="btn btn-dark btn-purple" value="Order Pizza">
    </form>
</div>
@endsection