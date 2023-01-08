<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }  
      
    public function customLogin(Request $request)
    {
        $request->validate([
            'vards' => 'required',
            'uzvards' => 'required',
            'parole' => 'required',
        ]);
   
        $credentials = $request->only('vards', 'uzvards', 'parole');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('');
        }
  
        return redirect("login")->withSuccess('Nepareizi ievadīti dati.');
    }
    
    public function dashboard()
    {
        if(Auth::check()){
            return view('');
        }
  
        return redirect("login")->withSuccess('Nepareizi ievadīti dati');
    }
    
    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('');
    }
}