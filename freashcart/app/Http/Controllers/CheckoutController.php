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
        $name = $request->session()->get('name','');
        $addr = $request->session()->get('addr','');
        $date = $request->session()->get('date','');
        $tel = $request->session()->get('tel','');
        $re = $request->session()->get('re','');

        return view('checkout-information',compact('name','addr','date','tel','re'));
    }

    public function checkout_information_store(Request $request){
        $request->validate([
            'name' => 'required',
            'addr' => 'required',
            'date' => 'required',
            'tel' => 'required|max:10',
            're' => 'required',
        ]);
        $request->session()->put('name',$request->name);
        $request->session()->put('addr',$request->addr);
        $request->session()->put('date',$request->date);
        $request->session()->put('tel',$request->tel);
        $request->session()->put('re',$request->re);
        // $request->session()->put([
        //     'date',$request->date,
        //     'tel',$request->tel,
        //     're',$request->re,
        // ]);
        // dd(session()->all());
        return redirect(route('chekout.pay'));
    }

    public function checkout_pay(Request $request){
        return view('checkout-pay');
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

