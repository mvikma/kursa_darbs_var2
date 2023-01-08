<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    //
    function shop()
    {
        $data= Product::all();

       return view('pages.shop',['products'=>$data]);
    }
    function details($id)
    {
        $data =Product::find($id);
        return view('pages.details',['product'=>$data]);
    }
    public function store(Request $request)
    {
        // Validācija vai lauki ir aizpildīti
        $request->validate([
            'nosaukums' => 'required|max:255',
            'cena' => 'required',
            'kategorija' => 'required',
            'galerija' => 'required',
            'apraksts' => 'required',
        ]);

        // Saglabāšana
        $product = new Product;
        $product->nosaukums = $request->nosaukums;
        $product->cena = $request->cena;
        $product->kategorija = $request->kategorija;
        $product->galerija = $request->galerija;
        $product->apraksts = $request->apraksts;
        $data->autora_id = auth()->admins()->admin_id;
        $product->save();

        return redirect('shop');
                         //->with('success', 'Produkts veiksmīgi izveidots.');
    }
    function delete($id)
    {
        $data= Product::find($id);
        $data->delete();
        return redirect('shop');
    }
    function edit($id)
    {
        $data= Product::find($id);
        return view('pages.product_edit',['data'=>$data]);
    }
    function update(Request $request)
    {
        $data=Product::find($request->id);
        $data->nosaukums = $request->nosaukums;
        $data->cena = $request->cena;
        $data->kategorija = $request->kategorija;
        $data->galerija = $request->galerija;
        $data->apraksts = $request->apraksts;
        $data->autora_id = auth()->admins()->admin_id;
        $data->save();
        return redirect('shop');
    }
}