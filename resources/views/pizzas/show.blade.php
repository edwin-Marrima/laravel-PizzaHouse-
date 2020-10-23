
@extends('layouts.app')

@section('content')
    <div class="">
        <div class="wrapper pizza-details">
            <h1>Order for {{$pizza->name}}</h1>
            <p class="type">Type  -  {{$pizza->type}}</p>
            <p class="base">Base -   {{$pizza->base}}</p>
            <p class="toppings">Extra toppings</p>
            <ul>
                @foreach($pizza->toppings as $topping)
                    <li>{{$topping}}</li>
                @endforeach
            </ul>
        </div>

        <a href="/pizzas" class="back">Voltar pra pizzas</a>
        <br>
      <!-- <form action="/pizzas/{{$pizza->id}}" method="POST">-->
            <form action="{{route('pizzas.destroy',$pizza->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button>Delete order</button>
        </form>
    </div>
@endsection
