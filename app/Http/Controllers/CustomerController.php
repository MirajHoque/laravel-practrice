<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    function customer(){
        $customers = Customer::all();
        return view('showCustomer', compact('customers'));
    }

    function trashed(){
        $data = Customer::onlyTrashed()->get();
        return view('trashed', compact('data'));
    }

    function delete($id){
        Customer::find($id)->delete();
        return redirect()->back();
    }

    function restore($id){
        Customer::onlyTrashed()->findOrFail($id)->restore();
        return redirect()->back();
    }

    function PermanentDelete($id){
        //
    }
}
