<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class DashboardController extends Controller
{
    public function index()
    {
    	$customer = User::count();
    	return view('pages.admin.dashboard',[
    		'customer' => $customer
    	]);
    }
}
