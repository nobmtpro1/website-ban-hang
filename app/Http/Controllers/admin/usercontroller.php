<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Gate;
use Auth;

class usercontroller extends admincontroller
{
    public function list()
    {
        // Gate::authorize('admin');
        //
        $user = user::orderBy('id','desc')->orderBy('level','desc')->paginate(10);
        return view('admin.user.list',compact('user'));
    }

    public function delete($id)
    {
        $user = user::find($id)->delete();
        return redirect()->back();
    }

    public function add(request $request)
    {
        if (!Auth::user()->hasPermissionTo('Thêm người dùng')) {
            abort(403);
        }
        if ($request->isMethod('post')) {
            $this->validate($request,[
                'email'=>'email|required|unique:users,email'
            ],[
                'email.email'=>'Email không chính xác',
                'email.required'=>'Bạn chưa nhập email',
                'email.unique'=>'Email này đã tồn tại'
            ]);
            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->level = 1;
            $user->confirmed =1;
            $user->password = bcrypt($request->password);
            $user->save();
            $user->syncRoles($request->role);
            if ($request->has('permission')) {
                $user->syncPermissions($request->permission);
            }




            return redirect()->back()->with('message','Thêm thành công');
        }
        $permission = Permission::all();
        $role = Role::all();
        return view('admin.user.add',compact('role','permission'));
    }
    public function edit($id,request $request)
    {
        if ($request->isMethod('post')) {

            $user =  User::find($id);
            $user->name = $request->name;

            $user->phone = $request->phone;
            $user->address = $request->address;

            $user->save();
            $user->roles()->detach();
            $user->permissions()->detach();

            $user->syncRoles($request->role);
            if ($request->has('permission')) {
                $user->syncPermissions($request->permission);
            }


            return redirect()->back()->with('message','Sửa thành công');
        }
        $permission = Permission::all();
        $role = Role::all();
        $user = User::find($id);
        return view('admin.user.edit',compact('user','role','permission'));

    }

}
