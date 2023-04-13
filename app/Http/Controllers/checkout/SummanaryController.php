<?php

namespace App\Http\Controllers\checkout;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SummanaryController extends Controller
{
    public function index () {
        return view('pages.checkout.checkout-summary');
    }
}
