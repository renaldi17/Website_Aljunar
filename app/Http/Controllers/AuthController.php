<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $req){
        $req->validate([
            'name' => 'required|string|max:250',
            'email' => 'required|email|max:250|unique:users',
            'password' => 'required|min:8'
        ]);
        $user = new User;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->name = $req->name;
        $user->save();
        $credentials = $req->only('email', 'password');
        Auth::attempt($credentials);
        $req->session()->regenerate();
        return redirect()->route('viewLogin')
        ->withSuccess('You have successfully registered & logged in!');
    }
    public function login(Request $req){
      $credentials = $req->validate([
        'email' => 'required|email',
        'password' => 'required'
      ]);

      if(Auth::attempt($credentials))
      {
        $req->session()->regenerate();
        $user = Auth::user();
        if($user->role == 'admin'){
          return redirect()->route('adminPanel')
            ->withSuccess('You have successfully logged in!');
        }
        return redirect()->route('home')
            ->withSuccess('You have successfully logged in!');
      }

      return back()->withErrors([
          'email' => 'Your provided credentials do not match in our records.',
      ])->onlyInput('email');

    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('home')
            ->withSuccess('You have logged out successfully!');;
    } 
}