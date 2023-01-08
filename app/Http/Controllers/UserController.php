<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class UserController extends Controller
{
    public function login(Request $request){
        if (empty($vards)) {
            echo "Vajag vārdu";
        }
        else if (empty($uzvards)) {
            echo "Vajag uzvārdu";
        }
        else if (empty($password)) {
            echo "Vajag paroli";
        }
        // Validēt form info
        $validator = Validator::make($request->all(), [
        'vards' =>  'required',
        'uzvards' =>  'required',
        'password' =>  'required',
    ]);
    // Pārbauda vai validācija izgāžas
    if ($validator->fails()) {
        echo "validacija izgazas";        
        return redirect()->back()
          ->withErrors($validator)
          ->withInput();
      }
        
    // Pārbauda vai admin ir datubāzē
    $user = DB::table('users')
      ->where('vards', $request->vards)
      ->where('uzvards', $request->uzvards)
      ->where('password', $request->password)
      ->first();

        // mēģina ielogoties
    if (Auth::attempt(['vards' => $request->vards,'uzvards' => $request->uzvards, 'password' => $request->password])) {
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
            'password' => 'required',
        ]);

        // Saglabāšana
        $user = new User;
        $user->vards = $request->vards;
        $user->uzvards = $request->uzvards;
        $user->password = $request->password;
        $user->save();
        
        return redirect('admin');
        
                         //->with('success', 'Admins veiksmīgi izveidots.');
    }
    function admin()
    {
        $data= User::all();

       return view('pages.admin',['admin'=>$data]);
    }
    function delete($admin_id)
    {
        $data= User::find($admin_id);
        $data->delete();
        return redirect('admin');
    }
    function edit($admin_id)
    {
        $data= User::find($admin_id);
        return view('pages.admin_edit',['data'=>$data]);
    }
    function update(Request $request)
    {
        $data=User::find($request->admin_id);
        $data->vards = $request->vards;
        $data->uzvards = $request->uzvards;
        $data->password = $request->password;
        $data->save();
        return redirect('admin');
    }
}