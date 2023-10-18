<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductType;
use App\Models\ProductTypeImg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $types = ProductType::with('ProductTypeImg')->get();
        return view('type.cart', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('type.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $type = ProductType::create([
            'name' => $request->name,
            'desc' => $request->desc,
        ]);
        foreach ($request->image ?? [] as $key => $value) {
            $path = Storage::putFile('public/upload', $value);
            ProductTypeImg::create([
                'img_path' => str_replace('public', 'storage', $path),
                'product_type_id' => $type->id,
            ]);
        };
        return redirect(route('type.index'));
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
        $type = ProductType::find($id);
        return view('type.edit', compact('type'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $type = ProductType::find($id);
        $type->update([
            'name' => $request->name,
            'desc' => $request->desc,
        ]);
        if ($request->hasFile('image')) {
            foreach ($type->productTypeImg ?? [] as $value) {

                // 刪除圖片
                Storage::delete(str_replace('storage', 'public', $value->img_path));

                // 刪除整筆資料
                $value->delete();
            }
            foreach ($request->image ?? [] as $value) { 

                // 上傳新圖片
                $path = Storage::putFile('public/upload', $value);

                // 上傳新筆資料
                ProductTypeImg::create([
                    // 圖片路徑
                    'img_path' => str_replace('public', 'storage', $path),
                    // 主資料表id
                    'product_type_id' => $id,
                ]);
            }
        }
        return redirect(route('type.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy($id)
    // {
    //     $type = ProductType::find($id);
    //     foreach($type->productTypeImg ?? [] as $value){
    //         Storage::delete(str_replace('storage','public',$value->img_path));
    //         $value->delete();
    //     }
    //     $type->delete();
    //     return redirect(route('type.index'));
    // }



    // params $id :產品類別的id
    // return 'success ' : 'fail' =>表示成功或失敗
    public function destroy($id)
    {
        $type = ProductType::find($id);
        $result = 'success';
        if ($type) {
            // foreach ($type->productTypeImg ?? [] as $value) {
            //     Storage::delete(str_replace('storage', 'public', $value->img_path));
            //     $value->delete();
            // }
        } else {
            $result = 'fail';
        }
        $type->delete();
        return $result;
    }
}
