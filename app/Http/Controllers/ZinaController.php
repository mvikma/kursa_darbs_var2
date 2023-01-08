<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zina;
use Illuminate\Support\Facades\DB;


class ZinaController extends Controller
{
    public function store(Request $request)
    {
        // Validācija vai lauki ir aizpildīti
        $request->validate([
            'vards' => 'required|max:255',
            'e_pasts' => 'required',
            'tema' => 'required',
            'zina' => 'required',
        ]);

        // Saglabāšana
        $zina = new Zina;
        $zina->vards = $request->vards;
        $zina->e_pasts = $request->e_pasts;
        $zina->tema = $request->tema;
        $zina->zina = $request->zina;
        $zina->save();

        return redirect('');
                         //->with('success', 'Produkts veiksmīgi izveidots.');
    }
    
}