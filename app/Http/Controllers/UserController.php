<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class UserController extends Controller
{
    //Ke halaman form tambah user
    public function create() {
        return view('users/create', [
            'users' => User::all()
        ]);
    }

    //Tambah user
    public function createUser(Request $request){

        $validator = Validator::make($request->all(), [
            'name'      => 'required | min:3',
            'email'     => 'required | email | unique:users',
            'phone'     => 'required | min:12 | max:12',
            'address'   => 'required | max:50',
            'role'      => 'required',
            'password'  => 'required|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])/',
            'avatar'    => 'required | image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($validator->fails()){
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }

        //ubah nama file
        $imageName = time() . '.' . $request->avatar->extension();

        //simpan file ke folder public/avatar
         Storage::putFileAs('public/avatar', $request->avatar, $imageName);

        $data = User::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'phone'     => $request->phone,
            'address'   => $request->address,
            'role'      => $request->role,
            'password'  => bcrypt($request->password),
            'avatar'    => $imageName,
        ]);

        return redirect('/dashboard')->with('success', ' User berhasil ditambah!');
    }

    //Ke halaman edit user
    public function edit($id) {
       
       $row = User::find($id);
       return view('users.update', compact('row'));
    }

    //Update user
    public function update(Request $request, $id) {

        if($request->hasFile('avatar')) {
            $old_image = User::find($id)->avatar;

            Storage::delete('public/avatar' . $old_image);

            $imageName = time() . '.' . $request->avatar->extension();

            Storage::putFileAs('public/avatar', $request->avatar, $imageName);

            User::where('id', $id)->update([
                'name'     => $request->name,
                'email'    => $request->email,
                'phone'    => $request->phone,
                'address'  => $request->address,
                'role'     => $request->role,
                'avatar'   => $imageName,
            ]);
        } else {
             User::where('id', $id)->update([
                'name'     => $request->name,
                'email'    => $request->email,
                'phone'    => $request->phone,
                'address'  => $request->address,
                'role'     => $request->role,
            ]);
        }

        return redirect('/dashboard')->with('edit', 'Data pengguna berhasil di-update!.');
    }

    //Ke halaman detail user
     public function detail($id) {

        $row = User::find($id);
        return view('users.detail', compact('row'));
    }

    //Delete user
    public function delete($id) {

        $user = User::find($id);
        $user->delete();

        return redirect('/dashboard')->with('delete', 'Data user berhasil dihapus');
    }
}