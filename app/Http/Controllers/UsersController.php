<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\AddUserRequestAdmin;

class UsersController extends Controller
{
    public function index(){
        return view('admin.users.index');
    }
    public function create(){
        return view('admin.users.add');
    }
    protected function store(AddUserRequestAdmin $request ,$user)
    {
        \App\User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect('/adminpanel/user')->withFlashMassage('تمت اضافه العضو بنجاح ');
    }


}
