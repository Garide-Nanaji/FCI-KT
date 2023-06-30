<?php
  
namespace App\Http\Controllers\Auth;
  
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
  
class AuthController extends Controller
{
   
    public function index()
    {
        return view('auth.login');
    }  
      
    
    public function registerform()
    {
        return view('auth.registration');
    }
      
   
    public function loginstore(LoginRequest $request)
    {
       
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->withSuccess('You have login Successfully');
        }
  
        return redirect("/")->withSuccess('Please enter valid credentials');
    }
      
    
    public function registerstore(RegisterRequest $request)
    {  
          
          $user = $this->create($request->all());
            
            $user->save();
            return redirect("/")->withSuccess(' You are Successfully Registered');
    }
    
    
    public function dashboard()
    {
        if(Auth::check()){
            return view('auth.dashboard');
        }
  
        return redirect("/")->withSuccess('Please login first before you enter into dashboard');
    }
    
   
    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
        'confirm_password' => Hash::make($data['confirm_password']),
        'phone' => $data['phone'],
        'dob' => $data['dob'],
      ]);
    }
    
    
    public function logout() {
        Session::flush();
        Auth::logout();
  
        return Redirect('/');
    }
}