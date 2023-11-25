<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;



class UserController extends Controller
{

    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'phone' => ['required','numeric','digits:10'],
            'password' => ['required'],

        ]);
        $remember = false;
   
        if($request->remember == 'on')
        {
            $remember = true;
        }
 
        if (Auth::attempt($credentials,$remember)) {
            $request->session()->regenerate();
 
            return redirect()->intended()->with('status','Đăng nhập thành công');
        }
 
        return back()->withErrors([
            'phone' => "Số điện thoại chưa được đăng ký.",
        ])->onlyInput('phone');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/login')->with('status','Đăng xuất thành công');
    }
    //register
    public function register_account(Request $request){
        $credentials = $request->validate([
            'name' =>['required'],
            'phone' => ['required','numeric','digits:10'],
            'password' => ['required'],
        ]);
        $users = DB::table('users')->where('phone',$request->phone)->get();
        // var_dump(count($users));
        if(count($users) == 0)
        {
            $user_created = DB::table('users')->insert(
                [
                    'name'=> $request->name,
                    'phone'=> $request->phone,
                    'password'=> Hash::make($request->password),
                    'pwd2'=> $request->password,
                ]
            );
            return \redirect('login')->with('status','Đăng ký thành công!');

        }
        else{
            return back()->withErrors([
                'phone' => "Số điện thoại đã được đăng ký.",
            ]);
        }

 
       

        
    }
 
}
