<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // if($request->filled('keyword')){
        //     $products = Product::where('name', $request->keyword)->get();
        // }else{
        //     $products = Product::get();
        // }

            // 等待查詢
            $product = Product::query();

            $keyword = $request->keyword ?? '';

            // 查詢功能
            if ($request->filled('keyword')){
                //                      模糊查詢  "%   %" （中間是傳入值
                $product->where('name','like',"%$keyword%")->orWhere('desc',$keyword);
            }

            $products = $product->paginate(5);

            // 加了分頁器 需要架這串 不然在搜尋時換頁 會出錯
            $products->appends(compact('keyword'));


        return view ('cart',compact('products','keyword'));
        // return view ('cart',['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //                                                 file('image')是跟blade form表單裡面的input imge名稱一樣的
        $path = Storage::putFile('public/upload',$request->file('image'));
        Product::create([
            'name' => $request->name,
            'img_path' => str_replace('public','storage',$path),
            'price' => $request->price,
            'status' => $request->status,
            'desc' => $request->desc,
        ]);

    return redirect(route('cart'));
        // dd($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::find($id);
        if ($request->file('image')){
            $path = Storage::putFile('public/upload',$request->file('image'));
            Storage::delete(str_replace('storage','public',$product->img_path));

            $product->update([
                'name'=> $request->name,
                'price'=>$request->price,
                'status'=>$request->status,
                'desc'=>$request->desc,
                'img_path'=> str_replace('public','storage',$path),
            ]);
        }else{
            $product->update([
                'name'=> $request->name,
                'price'=>$request->price,
                'status'=>$request->status,
                'desc'=>$request->desc,
            ]);
        }

        return redirect(route('cart'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        Storage::delete(str_replace('storage','public',$product->img_path));
        $product->delete();
        return redirect(route('cart'));
    }
}
