@extends('layouts.app')

@section('contentForwelcome')
<div class="flex-center position-ref full-height">

    <div class="content">
        <img class="photo" src="images/pizza-house.png" alt="this is pizza">
        <div class="title m-b-md">
            The North's Best Pizzas
        </div>
        <p class="message">{{ session('message') }}</p>
        <a href="{{ route('pizzas.create') }}">Order the pizza now.</a>
    </div>
</div>
@endsection
