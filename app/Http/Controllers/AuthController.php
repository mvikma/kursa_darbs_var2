<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use Validator;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }  
      
    public function customLogin(Request $request)
    {
        $this->validate([
            'username' => 'required',
            'parole' => 'required',
        ]);
        $user_data = array(
            'username' => $request->get('username'),
            'password' => $request->get('password')
        );
        
        if(Auth::attempt($user_data))
        {
            return redirect('');
        }
        else
        {
            return back()->with('error', 'Nepareizi ievadīti dati');
        }
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