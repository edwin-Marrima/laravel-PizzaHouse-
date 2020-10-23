<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    public function __construct(){
//        $this->middleware('auth');
    }

    public function index(){
  $pizzas = Pizza::all();
// $pizzas = Pizza::orderBy('name','desc')->get();
// $pizzas = Pizza::latest()->get();
//$pizzas = Pizza::where('price','>',1000)->get();
//$pizzas = Pizza::where('price','>',1000,'and')->where('type','Calabresa')->get();

       $name = request('name');
       $age = request('age');

       return view('pizzas.index',[
           'pizzas'=>$pizzas,
           'name'=>$name,
           'age'=>$age,
       ]);
   }
   public  function show($id){
       //use the $id variable to query some info to the dataBase
        $pizza = Pizza::findOrFail($id);

       return view('pizzas.show',['pizza'=>$pizza]);
   }
   public  function create(){
       return view('pizzas.create');
   }
   public function  store(){

       //save data at database//////////
       $pizza = new Pizza();
       $pizza->name = request('name');
       $pizza->type = request('type');
       $pizza->base = request('base');
       $pizza->price = request('price');
       $pizza->toppings = request('toppings');
       $pizza->save();

//pra poder enviar mensagens no processo de redicionamento
       return redirect('/')->with('msg','Thanks for your order');
   }
   public function destroy($id){
      $pizza =  Pizza::findOrFail($id);
      $pizza->delete();

      return redirect('/pizzas');
   }
}
