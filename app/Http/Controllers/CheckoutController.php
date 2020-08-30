<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\Transaction;
use App\TransactionDetail;

use Exception;
use Midtrans\Sanp;
use Midtrans\Config;
use Auth;

class CheckoutController extends Controller
{
    public function process(Request $request)
    {
        // dd($request->all());
        # save user 
        $user = Auth::user();
        $user->update($request->except('total_price'));
        # proses checkout
        $code = 'STORE-'.mt_rand(0000,9999);
        //wiith memanggil relasi user dan product
        $carts= Cart::with(['user','product'])->where('users_id',$user->id)->get();
        // dd($carts);
        
        #transaction create

        $transaction = Transaction::create([
            'users_id' => $user->id, 
            'inscurance_price' => 0, 
            'shipping_price' => 0, 
            'total_price' => $request->total_price, 
            'transaction_status' => 'pending', 
            'code' => $code,
        ]);


        foreach($carts as $cart){
            $trx = 'TRX-'.mt_rand(0000,9999);

            $transaction = TransactionDetail::create([
                'transactions_id' => $transaction->id, 
                'products_id' => $cart->product->id, 
                'price' => $cart->product->price, 
                'shipping_status' => 'pending', 
                'resi' => '', 
                'code' => $trx,
            ]);

        }

        //hapus cart
        Cart::with(['product','user'])->where('users_id',Auth::user()->id)->delete();

        // konfirmasi midtrans

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = 'SB-Mid-server-aZkJ42iSqYWiLufn8yFqmQoG';
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;


        //buat array untuk kirim ke midtrans

        $params = array(
                    'transaction_details' => array(
                        'order_id' => $code,
                        'gross_amount' => (int) $request->total_price,
                    ),
                    'customer_details' => array(
                        'first_name' => Auth::user()->name,
                        'email' => Auth::user()->email
                    ),
                    'enabled_payments' => array(
                        'gopay','bank_transfer'
                    ),
                    'vtweb' => []
                );

                try {
                  // Get Snap Payment Page URL
                  $paymentUrl = \Midtrans\Snap::createTransaction($params)->redirect_url;
                  
                  // Redirect to Snap Payment Page
                  return redirect()->away($paymentUrl);



                }
                catch (Exception $e) {
                  echo $e->getMessage();
                }



    }
    public function callback(Type $var = null)
    {
        # code...
    }
}