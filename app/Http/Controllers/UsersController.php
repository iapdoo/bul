<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\AddUserRequestAdmin;

class UsersController extends Controller
{
    public function index(User $user){
        $user=$user->all();
        return view('admin.users.index',compact('user'));
    }
    public function create(){
        return view('admin.users.add');
    }
    protected function store(AddUserRequestAdmin $request ,User $user)
    {
        \App\User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect('/adminpanel/user')->withFlashMassage('تمت اضافه العضو بنجاح ');
    }

    //    public function edit($id , User $user){
    //      $user=$user->find($id);
    //    return view('admin.users.edit',compact('user'));
    //}
    public function edit($id)
    {
        $user=User::find($id);
        return view('admin.users.edit',compact('user'));
    }
    public function update($id , User $user , Request $request){
        $userUpdated=$user->find($id);
        $userUpdated->fill($request->all())->save();
        return Redirect::back()->withFlashMassage('تمت التعديل العضو بنجاح ');
    }


}
