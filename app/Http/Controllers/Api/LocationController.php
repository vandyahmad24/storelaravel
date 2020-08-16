<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Province;
use App\Models\Regency;
class LocationController extends Controller
{
    public function provinces()
    {
    	return Province::all();
    }
    public function regencies(Request $request, $provinces_id)
    {
    	return Regency::where('province_id',$provinces_id)->get();
    }
}
