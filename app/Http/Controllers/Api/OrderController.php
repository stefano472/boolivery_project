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

        $add = DB::table('orders')->insert([
            'total'=> $data['total'], 
            'customer_address'=> $data['customer_address'], 
            'customer_name'=> $data['customer_name'],
            'customer_surname'=> $data['customer_surname'], 
            'customer_phone'=> $data['customer_phone'], 
            'special_request'=> $data['special_request'], 
            'payment_approval'=> $data['payment_approval'], 
            'restaurant_id'=> $data['restaurant_id'],
            'customer_email'=> $data['customer_email'],
        ]);

        if($add){
            return 'data saved succesfully';
        } else {
            return 'data not sent';
        }

        // dd($data);
        
            // $validator = Validator::make($data , [
            //         'name' => 'required|string|max:30',
            //         'surname' => 'required|string|max:30',
            //         'email' => 'required|string|max:255',
            //         'phone' => 'required|numeric',
            //         'address' => 'required|string|max:255',
            //         'restaurant_id' => 'required',
            //         'status' => 'required',
            //         'total' => 'required',
            //     ]);
            
            //     $control = $validator->fails();
            //     if($control){
            //             return response()->json([
            //                     "mess" => 'ERRORE MADORNALE',
            //                     "old" => $validator->errors(),
            //                     "status" => false,
            //                 ]);
            //     }
                    
            // $newOrder = new Order();
            // $newOrder->customer_name = $data['name'];
            // $newOrder->customer_surname = $data['surname'];
            // $newOrder->customer_email = $data['email'];
            // $newOrder->customer_phone = $data['phone'];
            // $newOrder->customer_address = $data['address'];
            // $newOrder->payment_approval = $data['status'];
            // $newOrder->total = $data['total'];
            // $newOrder->restaurant_id = $data['restaurant_id'];

            // // $newOrder->fill($data);
            

            // $newOrder->save();
                
                //     $plates_id = [];
                //     $plates_quantity = [];
                //     foreach($data['plates'] as $plate){
                    //         $plates_id[] = $plate['plate']['id'];
                    //         $plates_quantity[] = $plate['quantity'];
                    //     }
                    
                    //     $sync_data = [];
                    //     for($i = 0; $i < count($plates_id); $i++)
                    //         $sync_data[$plates_id[$i]] = ['quantity' => $plates_quantity[$i]];
                    
                    //     $order->plates()->sync($sync_data);
                    
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
            // return redirect()->route('guests.home');
            
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
