<?php

namespace App\Http\Controllers;

use App\Models\menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        return view('menus.index', ['menus' => menu::orderBy('price')->get()]);
    }

    public function create()
    {
        return view('menus.create');        
    }

    public function store(Request $request)
    {
        $menu = new menu();
        //can be used for seeomg the insides of the incoming request (or dd instead of var_dump)
        // var_dump($request->all()); die(); 
        $menu->fill($request->all());
        $menu->save();
        return redirect()->route('menu.index'); // cia biski nepagaunu kodel menu.i o ne menus.i
    }

    public function show(Menu $menu)
    {
        //
    }

    public function edit(Menu $menu)
    {
        return view('menus.edit', ['menu' => $menu]);
    }


    public function update(Request $request, Menu $menu)
    {
        $menu->fill($request->all());
        $menu->save();
        return redirect()->route('menu.index');
    }
    public function destroy(Menu $menu)
    {
        // if (count($menu->restaurants)){ 
        //     return back()->withErrors(['error' => ['Can\'t delete menu with restaurants assigned, please unassign cities first!']]);
        // }
        $menu->delete();
        return redirect()->route('menu.index');
    }
}

