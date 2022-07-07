<?php

namespace App\Http\Controllers\Api;

use App\Dish;
use App\Order;
use Braintree\Gateway;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\Orders\OrderRequest;
use App\Http\Requests\Orders\OrderTableRequest;

class OrderController extends Controller
{
    //
    public function payment(Request $request){
        $data = $request->all();
        // return($data);
        $request->validate([
            // 'name' => 'required|string|max:30',
            // 'surname' => 'required|string|max:30',
            // 'email' => 'required|string|max:255',
            // 'phone' => 'required|numeric',
            // 'address' => 'required|string|max:255',
            // 'restaurant_id' => 'required',
            // 'status' => 'required',
            // 'total' => 'required',

            'total' => 'required',
            'customer_address' => 'required|max:255',
            'customer_name' => 'required|max:30',
            'customer_surname' => 'required|max:30',
            'customer_phone' =>  'required|numeric',
            'special_request' => 'nullable',
            'payment_approval' => 'required',
            'restaurant_id' => 'required',
            'customer_email' => 'required|max:255',
            'restaurant_email' => 'required|max:255',
            'plates' => 'required',
        ],[
            'customer_name.required'=>'inserisci il nome',
            'customer_name.max'=>'il nome può essere al massimo di 30 caratteri',
            'customer_surname.required'=>'inserisci il cognome',
            'customer_surname.max'=>'il cognome può essere al massimo di 30 caratteri',
            'customer_address.required'=>'inserisci un indirizzo',
            'customer_address.max'=>'l\'indirizzo può essere al massimo di 255 caratteri',
            'customer_address.required'=>'inserisci una email valida',
            'customer_address.max'=>'l\'email può essere al massimo di 255 caratteri',
            'customer_phone'=>'inserisci un numero valido',


        ]);
    
        // $control = $validator->fails();
        // if($control){
        //         return response()->json([
        //                 "mess" => 'ERRORE MADORNALE',
        //                 "old" => $validator->errors(),
        //                 "status" => false,
        //             ]);
        // }
        $newOrder = new Order();
        $newOrder->fill($data);
        $newOrder->save();

        $dishes_id = [];
        $dishes_quantity = [];
        foreach($data['plates'] as $plate){
            $dishes_id[] = $plate['id'];
            $dishes_quantity[] = $plate['quantity'];
        }
    
        $sync_data = [];
        for($i = 0; $i < count($dishes_id); $i++)
            $sync_data[$dishes_id[$i]] = ['quantity' => $dishes_quantity[$i]];
    
        $newOrder->dishes()->sync($sync_data);

        if($newOrder){
            return 'data saved succesfully';
        } else {
            return 'data not sent';
        }
                    
                    
        //     if(isset($data['email']) && isset($data['user_email'])){
            //         $order->plates;
            //         Mail::to($data['email'])->send(new SendNewMail($order));
            //         Mail::to($data['user_email'])->send(new SendNewMail($order));
            // }
            
                // return response()->json([
                //         "mess" => 'creato',
                //         "status" => true,
                //     ]);
                // return response()->json($data);
            
    }
    
    public function generate(Request $request, Gateway $gateway){

        $token = $gateway->clientToken()->generate();

        $data = [
            
            'success' => true,

            'token' => $token
        
        ];

        return response()->json($data, 200);
	}

	public function makePayment(OrderRequest $request, Gateway $gateway){

        // $dish = Dish::find($request->dish);
        // return 'make payment';
        $result = $gateway->transaction()->sale([
            'amount' => $request->amount,
            'paymentMethodNonce' => $request->token,
            'options' => [
                'submitForSettlement' => true
            ]
        ]);

            if($result->success){

                $data = [
                
                    'success' => true,
            
                    'message' => ' Transazione eseguita'
                
                ];
                
                return response()->json($data, 200);
            
            }else{
            
                $data = [
                
                    'success' => false,
            
                    'message' => 'Transazione fallita'
                
                ];
                
                return response()->json($data, 401);
            
            }

	}

}
