<?php

namespace App\Http\Controllers\checkout;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DestinationCheckoutController extends Controller
{
    public function index () {
        return view('pages.checkout.destination-checkout');
    }
}
