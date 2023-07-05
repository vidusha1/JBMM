<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendSingleProduct extends Controller
{
        public function index(){
        return view('pages.frontend.product.single-product.index');
    }
}