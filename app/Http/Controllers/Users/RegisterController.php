<?php

namespace App\Http\Controllers\Users;
use Auth;
use Session;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function index(){
        return view('users.register', [
            'title' => 'Đăng ký tài khoản'
        ]);
    }
    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'cpassword' => 'required|same:password'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        Session::flash('success', 'Tài khoản đã được đăng ký thành công!');
        return redirect('/login');

    }
}
