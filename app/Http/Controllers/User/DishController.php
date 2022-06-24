<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use App\User;
use App\Restaurant;
use App\Dish;

class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $id = Auth::id();
        $dishes= Dish::all();

        return view('user.restaurant.dishes.index', compact('dishes', 'id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('user.restaurant.dishes.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $request->validate([
            'name'=>'required|max:50',
            'description'=>'nullable',
            'price'=>'required|numeric',
            'img'=>'nullable|mimes:png,jpg'
        ],[
            'name.required'=>'inserisci il nome',
            'name.max'=>'il nome può essere al massimo di 50 caratteri',
            'price.required'=>'inserisci il prezzo',
            'price.numeric'=>'inserisci il prezzo utilizzando solo numeri',
            'img'=>'il file deve essere un\'immagine',
        ]);

        $id = Auth::id();
        $dishData = $request->all();

        if(array_key_exists('img', $dishData)) {
            $img_path = Storage::put('uploads', $dishData['img']);
            $dishData['img'] = $img_path;
        }

        $newDish = new Dish();
        $newDish->fill($dishData);

        $newDish->restaurant_id = $id;
        $newDish->save();

        return redirect()->route('user.restaurant.dishes.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $dish = Dish::find($id);

        return view('user.restaurant.dishes.edit', compact('dish'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'name'=>'required|max:50',
            'description'=>'nullable',
            'price'=>'required|numeric',
            'img'=>'nullable|mimes:png,jpg'
        ],[
            'name.required'=>'inserisci il nome',
            'name.max'=>'il nome può essere al massimo di 50 caratteri',
            'price.required'=>'inserisci il prezzo',
            'price.numeric'=>'inserisci il prezzo utilizzando solo numeri',
            'img'=>'il file deve essere un\'immagine',
        ]);

        $dishData = $request->all();

        if(array_key_exists('img', $dishData)) {
            $img_path = Storage::put('uploads', $dishData['img']);
            $dishData['img'] = $img_path;
        }

        $dish = Dish::find($id);
        $dish->fill($dishData);

        $dish->update();

        return redirect()->route('user.restaurant.dishes.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $dish = Dish::find($id);
        $dish->delete();

        return redirect()->route('user.restaurant.dishes.index');

    }
}