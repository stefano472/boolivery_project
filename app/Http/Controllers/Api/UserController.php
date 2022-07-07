<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;


class UserController extends Controller
{
    //
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getUserEmail($id)
    {
        //

        $user = User::find($id);

        $result = [
                "results" => $user,
                "success" => true,
            ];

        return response()->json($result);
        

        
    }
}
