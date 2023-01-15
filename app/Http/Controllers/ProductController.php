<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class ProductController extends Controller
{
    // nosūta uz saiti datus no db
    function shop()
    {
        $data= Product::all();

       return view('pages.shop',['products'=>$data]);
    }
    
    //nosūta uz saiti konkrēta produkta datus
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
        $product->autora_id = Auth::user()->id;;
        $product->save();

        return redirect('shop');
    }
    
    //dzēš produktu
    function delete($id)
    {
        $data= Product::find($id);
        $data->delete();
        return redirect('shop');
    }
    
    //nosūta rediģējamā produkta datus uz form
    function edit($id)
    {
        $data= Product::find($id);
        return view('pages.product_edit',['data'=>$data]);
    }
    
    //saglabā izmaiņas
    function update(Request $request, $id)
    {
        $data=Product::find($id);
        $data->nosaukums = $request->nosaukums;
        $data->cena = $request->cena;
        $data->kategorija = $request->kategorija;
        $data->galerija = $request->galerija;
        $data->apraksts = $request->apraksts;
        $data->autora_id = Auth::user()->id;
        $data->save();
        return redirect('shop');
    }
}