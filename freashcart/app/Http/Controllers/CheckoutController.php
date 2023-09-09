<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkout(){
        return view('checkout');
    }
    public function checkout_store(){
        return redirect(route('chekout.information'));
    }


    public function checkout_information(Request $request){
        $information = $request->session()->get('information','');

        return view('checkout-information',compact('information'));
    }

    public function checkout_information_store(Request $request){
        $request->validate([
            'name' => 'required',
            'addr' => 'required',
            'date' => 'required',
            'tel' => 'required',
            're' => 'required',
        ]);
        $request->session()->put('name',$request->name);

        return redirect(route('chekout.pay'));
    }

    public function checkout_pay(Request $request){
        $name = $request->session()->get('name','');

        return view('checkout-pay',compact('name'));
    }

    public function checkout_pay_store(Request $request){

        $request->validate([
            'pay' => 'required',
        ]);
        return redirect(route('chekout.ok'));
    }

    public function checkout_ok(){
        return view('checkout-ok');
    }

}

