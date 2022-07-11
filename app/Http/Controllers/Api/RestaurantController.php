<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Restaurant;
use App\Category;
use App\Dish;
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

        // $restaurants = Restaurant::all();

        // $result = [
        //     "results" => $restaurants,
        //     "success" => true,
        // ];


        return response()->json(['response' => Restaurant::with('categories')->get()]);
        // return response()->json(['response' => Restaurant::with('categories')->where('id', $id)->get()]);
        

        
    }

    public function filtered($id)
    {
        return response()->json(['response' => Restaurant::with('categories')->where('id', $id)->get()]);
    }

    public function dishes($id)
    {
        return response()->json(['response' => Dish::with('restaurant')->where('restaurant_id', $id)->orderBy('name', 'ASC')->get()]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        // $dishes = Dish::where('restaurant_id', $id)->get();

        return response()->json(['response' => Restaurant::where('id', $id)->get()]);
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
    }
}
