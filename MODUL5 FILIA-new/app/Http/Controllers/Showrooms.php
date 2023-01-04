<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_Showrooms;

class Showrooms extends Controller
{
    public function index(){
        $products=M_Showrooms::orderBy('id')->get();
        return view('Home-Filia', compact('products'));
    }

    public function create(){
        return view('layouts.Add-Filia');
    }

    public function store(Request $request)
    {
        // $imgName = $request->img_path->getClientOriginalName() . '-' . time()
        //             . '.' . $request->img_path->extension();
        // $request->img_path->move(public_path('image'), $imgName);

        M_Showrooms::create([
            'name' => $request -> nama_mobil,
            'owner' => $request -> pemilik_mobil,
            'brand' => $request -> merk,
            'purchase_date' => $request -> tanggal_beli,
            'description' => $request -> deskripsi,
            'image' => $request -> foto_mobil,
            'status' => $request -> status_pembayaran
        ]);

        return redirect('/layouts');
    }

    // public function edit($id)
    // {
    //     $product = Product::find($id);

    //     return view('product.edit', compact('product'));
    // }

    // public function update(Request $request, $id)
    // {
    //     $product = product::find($id);

    //     $imgName = $product->img_path;
    //     if ($request->img_path) {
    //         $imgName = $request->img_path->getClientOriginalName() . "-" . time()
    //                     . "." . $request->img_path->extension();
    //         $request->img_path->move(public_path('image'), $imgName);
    //     }

    //     Product::find($id)->update([
    //         'nama' => $request -> name,
    //         'harga' => $request -> price,
    //         'gambar' => $imgName
    //     ]);

    //     return redirect('/product');

    // }

    // public function destroy($id)
    // {
    //     Product::find($id)->delete();

    //     return redirect('/product');
    // }
}
