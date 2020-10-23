
@extends('layouts.app')

@section('content')
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">

                <div class="title m-b-md">
                    <h1>Pizza House</h1>

                    <a style="background-color: transparent;font-size: 15px;border-radius: 40px; border:2px solid white" href="{{route('pizzas.create')}}">
                        Order a Pizza
                    </a>
                    <p class="mssg background-color: transparent;font-size: 15px;border-radius: 40px; border:2px solid white">
                        {{session('msg')}}
                    </p>
                </div>
            <div>

            </div>
                </div>

{{--        --}}
            </div>
        </div>
@endsection
