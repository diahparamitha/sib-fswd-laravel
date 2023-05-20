<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //Ke halaman form tambah user
    public function create() {
        return view('users/create');
    }

    //Tambah user
    public function createUser(Request $request) {
        $request->validate([
            'name'      => 'required',
            'email'     => 'required|email|unique:users',
            'phone'     => 'required|min:12|max:12',
            'address'   => 'required',
            'role'      => 'required',
            'password'  => 'required',
            'avatar'    => 'image|mimes:png,jpeg,jpg',
        ]);

        $data               = new User;
        $data-> name        = $request->name;
        $data-> email       = $request->email;
        $data-> phone       = $request->phone;
        $data-> address     = $request->address;
        $data-> role        = $request->role;
        $data-> password    = bcrypt($request->password);

        if($request->hasFile('avatar')){
            //    define image location in local path
            $location = public_path('/avatar');

            // ambil file image dan simpan ke local server
            $request->file('avatar')->move($location, $request->file('avatar')->getClientOriginalName());

            // simpan nama file di database
            $data->avatar = $request->file('avatar')->getClientOriginalName(); 
        }

        $data -> save();
        return redirect('/')->with('success', ' User berhasil ditambah!');
    }

    //Ke halaman edit user
    public function edit($id) {
       
       $row = User::find($id);
       return view('users.update', compact('row'));
    }

    //Update user
    public function update(Request $request, $id) {

        $row = User::find($id);

        $validated      = $request->validate([
            'name'      => 'required',
            'email'     => 'required | email',
            'phone'     => 'required | min:12 | max:12',
            'address'   => 'required',
            'role'      => 'required',
            'password'  => 'required',
            'avatar'    => 'image | file',
        ]);

        $row-> name     = $request->name;
        $row-> email    = $request->email;
        $row-> phone    = $request->phone;
        $row-> address  = $request->address;
        $row-> role     = $request->role;
        $row-> password = bcrypt($request->password);

      if($request->hasFile('avatar')){
            //    define image location in local path
            $location = public_path('/avatar');

            // ambil file image dan simpan ke local server
            $request->file('avatar')->move($location, $request->file('avatar')->getClientOriginalName());

            // simpan nama file di database
            $row->avatar = $request->file('avatar')->getClientOriginalName(); 
        }

        $row->save();
        return redirect('/')->with('edit', 'Data pengguna berhasil di-update!.');

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

        return redirect('/')->with('delete', 'Data user berhasil dihapus');
    }
}