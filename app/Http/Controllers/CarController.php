<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class CarController extends Controller
{
    public function newcar(Request $request){
        $obj_car = new Car();

 $request->validate([
     'make' => 'required',
     'model' => 'required',
     'produced_on' => 'required',            
 ]);

 $obj_car->make = $request->input('make');
 $obj_car->model = $request->input('model');
 $obj_car->produced_on = $request->input('produced_on');
 
 $obj_car->save();
 return back()->with('success','Car is successfully added.');

}
public function allcars(){
$cars =Car::all();
return view('cars.allcars',['cars'=>$cars]);

}
public function particularcar($id){

}
}
