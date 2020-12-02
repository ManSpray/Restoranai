<?php

namespace App\Http\Controllers;

use App\Models\restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index(Request $request){
        // return view('restaurants.index', ['restaurants' => restaurant::orderBy('title')->get()]);

        if(isset($request->menu_id) && $request->menu_id !== 0)
            $restaurant = \App\Models\restaurant::where('menu_id', $request->menu_id)->orderBy('title')->get();
        else
            $restaurant = \App\Models\restaurant::orderBy('title')->get();
        $menus = \App\Models\menu::orderBy('title')->get();
        return view('restaurants.index', ['restaurants' => $restaurant, 'menus' => $menus]);

    }
    // ATTENTION :: we need menus to be able to assign them
    public function create(){
        $menus = \App\Models\menu::orderBy('title')->get();
        return view('restaurants.create', ['menus' => $menus]);
    }
    public function store(Request $request){
        $restaurant = new restaurant();
        // can be used for seeing the insides of the incoming request
        // var_dump($request->all()); die();
        $restaurant->fill($request->all());
        $restaurant->save();
        return redirect()->route('restaurant.index');
    }
    public function show(restaurant $restaurant){
        //
    }
    // ATTENTION :: we need menus to be able to assign them
    public function edit(restaurant $restaurant){
        $menus = \App\Models\menu::orderBy('title')->get();
        return view('restaurants.edit', ['restaurant' => $restaurant, 'menus' => $menus]);
    }
    public function update(Request $request, restaurant $restaurant){
        $restaurant->fill($request->all());
        $restaurant->save();
        return redirect()->route('restaurant.index');
    }
    public function destroy(restaurant $restaurant){
        $restaurant->delete();
        return redirect()->route('restaurant.index');
    }

    // public function toeat($id){
    //     $restaurant = restaurant::find($id);
    //     return view('restaurant.toeat', ['restaurant' => $restaurant]);
    // }
}