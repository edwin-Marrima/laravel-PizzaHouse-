
@extends('layouts.app')

@section('content')
<div class="">


    <div class="" style="color: #f7fafc">
        <center> <img src="/img/1.jpg" alt="Erro" width="70" height="70" style="border-radius: 50px"></center>

        <div class="title m-b-md">
          <!--  Pizza Mozambique-->

{{--            @for($i=0;$i<5;$i++)--}}
{{--                <p>o valor de i eh {{$i}}</p>--}}
{{--            @endfor--}}
{{--            @for($i=0;$i<count($pizzas);$i++)--}}
{{--                 <p>{{$pizzas[$i]['type']}}</p>--}}
{{--            @endfor--}}

        </div>
                <div style="color:black">
                    @foreach($pizzas as $pizza)
                        <p>
                            {{$pizza['name']}}-
                            {{$pizza->type}}-
                            {{$pizza->base}}


                        </p>
                    @endforeach
                </div>
    </div>
</div>
@endsection
