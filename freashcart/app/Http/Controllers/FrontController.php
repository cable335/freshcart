<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        // status
        $products = Product::Where('status','=', 1)->get();
        return view('shopping-car',compact('products'));
    }

    public function user_info(Request $request)
    {
        // 法一
        // dd(Auth::user());
        // $user = Auth::user();
        
        $user = $request->user();
        return view('userSetting',compact('user'));
    }

    public function user_info_update(Request $request)
    {
        //       檢查欄位函數
        $request->validate([
            'name' =>'required|max:255',
        ],[
            'name.required' => '必填',
            'name.max' => '字數過長',
        ]);

        $user = $request->user();
        $user->update([
            'name' => $request->name,
        ]);


        return redirect(route('infomation'));



        // $validator = Validator::make($request->all(),[
        //     'name' =>'required|max:255',
        // ]);
        // if ($validator->fails()){
        //     return redirect(route('user.info'))->withErrors(['nameError'=>'字數過多']);
        // }
    }
}
