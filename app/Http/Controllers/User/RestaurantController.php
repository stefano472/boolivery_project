<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use App\User;
use App\Restaurant;

class RestaurantController extends Controller
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
        $restaurant = Restaurant::all();

        return view('user.restaurant.index', compact('restaurant','id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('user.restaurant.create');
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
            'name'=>'required|max:30',
            'address'=>'required|max:255',
            'motto'=>'max:255',
            'tax_id'=>'required|numeric',
            'phone_number'=>'required|numeric',
            'cover'=>'nullable|mimes:png,jpg',
            'logo'=>'nullable|mimes:png,jpg',
            'description'=>'nullable',
        ],[
            'name.required'=>'inserisci il nome',
            'name.max'=>'il nome può essere al massimo di 30 caratteri',
            'address.required'=>'inserisci un indirizzo',
            'address.max'=>'l\'indirizzo può essere al massimo di 255 caratteri',
            'motto.max'=>'il motto può essere al massimo di 255 caratteri',
            'tax_id.required'=>'inserisci la partita iva',
            'tax_id.max'=>'la partita iva è di 11 numeri',
            'phone_number'=>'inserisci un numero valido',
            'cover'=>'il file deve essere un\'immagine',
            'logo'=>'il file deve essere un\'immagine',
        ]);

        $id = Auth::id();
        $restaurantData = $request->all();

        if(array_key_exists('cover', $restaurantData)) {
            $img_path = Storage::put('uploads', $restaurantData['cover']);
            $restaurantData['cover'] = $img_path;
        }
        if(array_key_exists('logo', $restaurantData)) {
            $img_path = Storage::put('uploads', $restaurantData['logo']);
            $restaurantData['logo'] = $img_path;
        }

        $newRestaurant = new Restaurant();
        $newRestaurant->fill($restaurantData);

        $newRestaurant->user_id = $id;
        $newRestaurant->save();


        return redirect()->route('user.restaurant.index');
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
        $restaurant = Restaurant::find($id);

        return view('user.restaurant.edit', compact('restaurant'));
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
            'name'=>'required|max:30',
            'address'=>'required|max:255',
            'motto'=>'max:255',
            'tax_id'=>'required|numeric',
            'phone_number'=>'required|numeric',
            'cover'=>'nullable|mimes:png,jpg',
            'logo'=>'nullable|mimes:png,jpg',
            'description'=>'nullable',
        ],[
            'name.required'=>'inserisci il nome',
            'name.max'=>'il nome può essere al massimo di 30 caratteri',
            'address.required'=>'inserisci un indirizzo',
            'address.max'=>'l\'indirizzo può essere al massimo di 255 caratteri',
            'motto.max'=>'il motto può essere al massimo di 255 caratteri',
            'tax_id.required'=>'inserisci la partita iva',
            'tax_id.max'=>'la partita iva è di 11 numeri',
            'phone_number'=>'inserisci un numero valido',
            'cover'=>'il file deve essere un\'immagine',
            'logo'=>'il file deve essere un\'immagine',
        ]);


        $restaurantData = $request->all();

        if(array_key_exists('cover', $restaurantData)) {
            $img_path = Storage::put('uploads', $restaurantData['cover']);
            $restaurantData['cover'] = $img_path;
        }
        if(array_key_exists('logo', $restaurantData)) {
            $img_path = Storage::put('uploads', $restaurantData['logo']);
            $restaurantData['logo'] = $img_path;
        }

        $restaurant = Restaurant::find($id);

        $restaurant->fill($restaurantData);

        $restaurant->update();

        return redirect()->route('user.restaurant.index');
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
        $restaurant = Restaurant::find($id);

        $restaurant->delete();
        
        return redirect()->route('user.restaurant.index');
    }
}
