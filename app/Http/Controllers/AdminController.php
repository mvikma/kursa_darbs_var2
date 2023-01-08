<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;


class AdminController extends Controller
{
    public function login(Request $request){
        if (empty($vards)) {
            echo "Vajag vārdu";
        }
        else if (empty($uzvards)) {
            echo "Vajag uzvārdu";
        }
        else if (empty($parole)) {
            echo "Vajag paroli";
        }
        // Validēt form info
        $validator = Validator::make($request->all(), [
        'vards' =>  'required',
        'uzvards' =>  'required',
        'parole' =>  'required',
    ]);
    // Pārbauda vai validācija izgāžas
    if ($validator->fails()) {
        echo "validacija izgazas";        
        return redirect()->back()
          ->withErrors($validator)
          ->withInput();
      }
        
    // Pārbauda vai admin ir datubāzē
    $admin = DB::table('admin')
      ->where('vards', $request->vards)
      ->where('uzvards', $request->uzvards)
      ->where('parole', $request->parole)
      ->first();

        // mēģina ielogoties
    if (Auth::attempt(['vards' => $request->vards,'uzvards' => $request->uzvards, 'parole' => $request->parole])) {
        // Ja veiksmīgs tiek vests uz sakumu
        return redirect()->intended('/');
      } else {
        // atpakaļ uz login ja izgāžas
        return redirect()->back()->withInput()->withErrors(['vards' => 'Nepareizi ievadīti dati']);
      }
    
}
public function store(Request $request)
    {
        // Validācija vai lauki ir aizpildīti
        $request->validate([
            'vards' => 'required',
            'uzvards' => 'required',
            'parole' => 'required',
        ]);

        // Saglabāšana
        $admin = new Admin;
        $admin->vards = $request->vards;
        $admin->uzvards = $request->uzvards;
        $admin->parole = $request->parole;
        $admin->save();
        
        return redirect('admin');
        
                         //->with('success', 'Admins veiksmīgi izveidots.');
    }
    function admin()
    {
        $data= Admin::all();

       return view('pages.admin',['admin'=>$data]);
    }
    function delete($admin_id)
    {
        $data= Admin::find($admin_id);
        $data->delete();
        return redirect('admin');
    }
    function edit($admin_id)
    {
        $data= Admin::find($admin_id);
        return view('pages.admin_edit',['data'=>$data]);
    }
    function update(Request $request)
    {
        $data=Admin::find($request->admin_id);
        $data->vards = $request->vards;
        $data->uzvards = $request->uzvards;
        $data->parole = $request->parole;
        $data->save();
        return redirect('admin');
    }
}