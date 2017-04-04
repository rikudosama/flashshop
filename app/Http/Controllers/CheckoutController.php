<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;


class CheckoutController extends Controller
{
    public function step1()
    {
    	if(Auth::check())
    		return redirect()->route("shipping_path");
    	return redirect('login');
    }
    public function shipping()
    {
    	return view('front.shipping-info');
    }
}
