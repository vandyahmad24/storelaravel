<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TransactionDetail;
use App\User;
use Auth;


class DashboardController extends Controller
{
   public function index()
   {
	   	# code...
   		//memakses relasi di dalam relasi
   		//apakah datanya ada atau tidak whereHas
   		$transaction = TransactionDetail::with(['transaction.user','product.galleries'])
   						->whereHas('product',function($product){
   							$product->where('user_id',Auth::user()->id);
   						});
   						// ->get();
   		$revenue = $transaction->get()->reduce(function($carry, $item){
   						return $carry+$item->price;
   					});

   		$customer = User::count();


   						// dd($transaction);
	   	return view('pages.dashboard',[
	   		'transaction_count' => $transaction->count(),
	   		'transaction_data' => $transaction->get(),
	   		'revenue' => $revenue,
	   		'customer' => $customer
	   	]);
   }
}
