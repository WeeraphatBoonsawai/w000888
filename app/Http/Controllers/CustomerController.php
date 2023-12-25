<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index(){
        $Customers = Customer::orderBy('id', 'DESC') -> paginate(5);
        return view('customer.customer', ['Customers' => $Customers]);
    }
}
