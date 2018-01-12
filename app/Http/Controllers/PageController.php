<?php

namespace App\Http\Controllers;
use App\Models\Dish;
use Illuminate\Http\Request;
use DB;
use App\Cart;
use Session;

class PageController extends Controller
{
    public function getIndex() {
                 
    	return view('clients.page.home');
    }

    public function getProduct(Request $re) {
       
    	return view('clients.page.product');
    }

    public function getCategory($type) {
       
    	return view('clients.page.category');
    }

    public function getContact() {

    	return view('clients.page.contact');
    }

    public function getTable() {
        
        return view('clients.page.table');
    }
}
