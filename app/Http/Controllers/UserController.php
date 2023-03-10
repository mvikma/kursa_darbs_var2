<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;


class UserController extends Controller
{
    //nosūta visus datus uz saiti
    function admin()
    {
        $data= User::all();

       return view('pages.admin',['admin'=>$data]);
    }
    
    //dzēš lietotāju
    function delete($id)
    {
        $data= User::find($id);
        $data->delete();
        return redirect('admin');
    }
    
    //nosūta rediģējamā datus us saiti
    function edit($id)
    {
        $data= User::find($id);
        return view('pages.admin_edit',['data'=>$data]);
    }
    
    //saglabā izmaiņas db
    function update(Request $request)
    {
        $data=User::find($request->id);
        $data->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        $data->save();
        return redirect('admin');
    }
}