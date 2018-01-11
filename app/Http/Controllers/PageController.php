<?php

namespace App\Http\Controllers;
use App\Models\Dish;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex() {
    	return view('Clients.page.home', compact('new_product'));
    }

    public function getProduct() {
    	return view('Clients.page.product');
    }

    public function getCategory() {
    	return view('Clients.page.category');
    }

    public function getContact() {
    	return view('Clients.page.contact');
    }

    public function getTable() {
        return view('Clients.page.table');
    }
}
