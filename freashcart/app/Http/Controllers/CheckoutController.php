<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\OrderForm;
use App\Models\Product;
use App\Models\ProductOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderCreated;

class CheckoutController extends Controller
{
    public function checkout()
    {
        return view('checkout');
    }
    public function checkout_store()
    {
        return redirect(route('chekout.information'));
    }


    public function checkout_information(Request $request)
    {
        $name = $request->session()->get('name', '');
        $addr = $request->session()->get('addr', '');
        $date = $request->session()->get('date', '');
        $tel = $request->session()->get('tel', '');
        $re = $request->session()->get('re', '');

        return view('checkout-information', compact('name', 'addr', 'date', 'tel', 're'));
    }

    public function checkout_information_store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'addr' => 'required',
            'date' => 'required',
            'tel' => 'required|max:10',
            're' => 'required',
        ]);
        $request->session()->put('name', $request->name);
        $request->session()->put('addr', $request->addr);
        $request->session()->put('date', $request->date);
        $request->session()->put('tel', $request->tel);
        $request->session()->put('re', $request->re);
        // $request->session()->put([
        //     'date',$request->date,
        //     'tel',$request->tel,
        //     're',$request->re,
        // ]);
        // dd(session()->all());
        return redirect(route('chekout.pay'));
    }

    public function checkout_pay(Request $request)
    {
        return view('checkout-pay');
    }

    public function checkout_pay_store(Request $request)
    {

        $request->validate([
            'pay' => 'required',
        ]);
        return redirect(route('chekout.ok'));
    }

    public function checkout_ok()
    {
        return view('checkout-ok');
    }







    // other checkout

    public function other_checkout(Request $request)
    {
        $product = Cart::where('user_id', '=', $request->user()->id)->get();

        $total = 0;
        foreach ($product as $value) {
            $total += $value->product->price * $value->qty;
        }

        return view('otherCheckout/cardshop', compact('product', 'total'));
    }

    public function other_checkout_updateQty(Request $request)
    {

        $request->validate([
            'cart_id' => 'required|exists:carts,id',
            'qty' => 'required|numeric|min:1',
        ]);
        $cart = Cart::find($request->cart_id);

        $updateCart = $cart->update([
            'qty' => $request->qty,
        ]);


        return (object)[
            'code' => $updateCart ? 1 : 0,
            'price' => ($cart->product?->price ?? 0) * $cart->qty,
        ];
    }

    public function other_checkout_delete(Request $request)
    {
        $request->validate([
            'cart_id' => 'required|exists:carts,id'
        ]);

        $cart = Cart::find($request->cart_id)->delete();


        $carts = Cart::where('user_id', $request->user()->id)->get();
        $total = 0;
        foreach ($carts as $value) {
            $total += $value->product->price * $value->qty;
        }
        return (object)[
            'code' => $cart ? 1 : 0,
            'id' => $request->cart_id,
        ];
    }



    public function other_checkout_store(Request $request)
    {
        return redirect(route('other.checkout.delivery'));
    }

    public function other_checkout_delivery(Request $request)
    {
        $name = $request->session()->get('name', '');
        $addr = $request->session()->get('addr', '');
        $date = $request->session()->get('date', '');
        $tel = $request->session()->get('tel', '');
        $re = $request->session()->get('re', '');

        return view('otherCheckout/delivery', compact('name', 'addr', 'date', 'tel', 're'));
    }


    public function other_checkout_delivery_store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'addr' => 'required',
            'date' => 'required',
            'tel' => 'required|max:10',
            're' => 'required',
        ], [
            'tel.required' => '電話必填',
            'tel.max' => '電話字數超過10個字',
        ]);
        $request->session()->put('name', $request->name);
        $request->session()->put('addr', $request->addr);
        $request->session()->put('date', $request->date);
        $request->session()->put('tel', $request->tel);
        $request->session()->put('re', $request->re);
        return redirect(route('other.checkout.pay'));
    }

    public function other_checkout_pay(Request $request)
    {

        return view('otherCheckout/payment');
    }

    public function other_checkout_pay_store(Request $request)
    {

        $request->validate([
            'flexRadioDefault' => 'required|numeric',
        ]);

        // 找購物車屬於使用者的資料
        $itembuys = Cart::where('user_id', $request->user()->id)->get();

        $todayOrderCount = OrderForm::whereDate('created_at', today())->get()->count();

        $string = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';

        $shuffle = str_shuffle($string);

        $form = OrderForm::create([
            'order_id' => 'HW' . date("Ymd") . str_pad($todayOrderCount, 4, '0', STR_PAD_LEFT) . substr($shuffle, 0, 3),
            'user_id' => $request->user()->id,
            'name' => session()->get('name'),
            'address' => session()->get('addr'),
            'date' => session()->get('date'),
            'phone' => session()->get('tel'),
            'menu' => session()->get('re') ?? '',
            'pay' => $request->flexRadioDefault,
        ]);
        // 預設總價為0
        $total = 0;

        // 購物車有幾筆就執行幾次
        foreach ($itembuys as $value) {
            $total += $value->product->price * $value->qty;

            ProductOrder::create([
                'form_id' => $form->id,
                'qty' => $value->qty,
                'price' => $value->product->price,
                'name' => $value->product->name,
                'image' => $value->product->image,
                'desc' => $value->product->desc,
            ]);

            $value->delete();
        };

        $form->update([
            'total' => $total,
        ]);

        session()->forget(['name', 'addr', 'date', 'tel', 're']);

        $data = [
            'name' => $request->user()->name,
            'order_id' => $form->order_id,
            'total' => $total,
        ];
        // $request->user()->email
        Mail::to('m2337733@gmail.com')->send(new OrderCreated($data));

        if($request->flexRadioDefault == 1){
            return redirect(route('other.checkout.complete'));
        }
        else{
            return redirect(route('ecpay',['order_id' =>$form->id]));
        }

    }

    public function ec_pay(Request $request ,$order_id)
    {
        $user = $request->user();
        $order = OrderForm::where('user_id',$user->id)->find($order_id);

        $string = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';

        $shuffle = str_shuffle($string);
        if ($order){
            $data = (object)[
                'MerchantID' => '3002607',
                'MerchantTradeNo' => $order->order_id . substr($shuffle, 0, 3),
                'MerchantTradeDate' => date('Y/m/d H:i:s'),
                'PaymentType' => 'aio',
                'TotalAmount' => $order->total,
                'TradeDesc' => 'cable335',
                'ItemName' => 'cable335s : ',
                'ReturnURL' => route('ecpayReturn'),
                'ChoosePayment' => 'ALL',
                'CheckMacValue' => '',
                'EncryptType' => 1,
                'ClientBackURL' => route('shopping-car'),
                'IgnorePayment' => 'WebATM#CVS#BARCODE',
            ];
        }


        // 測試用
        $hashKey = 'pwFHCqoQZGmho4w6';
        // 測試用
        $hasIv ='EkRm7iFT261dpevs';


        $step1 = "ChoosePayment={$data->ChoosePayment}&ClientBackURL={$data->ClientBackURL}&EncryptType={$data->EncryptType}&IgnorePayment={$data->IgnorePayment}&ItemName={$data->ItemName}&MerchantID={$data->MerchantID}&MerchantTradeDate={$data->MerchantTradeDate}&MerchantTradeNo={$data->MerchantTradeNo}&PaymentType={$data->PaymentType}&ReturnURL={$data->ReturnURL}&TotalAmount={$data->TotalAmount}&TradeDesc={$data->TradeDesc}";

        $step2 = "HashKey={$hashKey}&{$step1}&HashIV={$hasIv}";

        $step3 = urlencode($step2);

        $step4 = strtolower($step3);

        $step5 = hash('sha256',$step4);

        $step6 = strtoupper($step5);

        $data->CheckMacValue = $step6;

        return view('ecPay',compact('data'));
    }

    public function ec_pay_return(Request $request)
    {
        // 綠界打不回來 因為我們是本地測試伺服器
    }

    public function other_checkout_complete()
    {
        return view('otherCheckout/complete');
    }



    public function oder_list(Request $request){

        $user = $request->user();
        $orders = OrderForm::where('user_id', $user->id)->orderBy('id','desc')->get();
        return view('userOrder',compact('orders'));
    }


    public function oder_detail(Request $request ,$order_forms_id){

        $user = $request->user();
        $order = OrderForm::where('user_id', $user->id)->find($order_forms_id);

        return view('orderDetail',compact('order'));
    }
}
