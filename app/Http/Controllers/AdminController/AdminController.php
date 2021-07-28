<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Admin;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('reset_pass');
    }

    public function index()
    {
        $admin = Admin::get();
        return view('adminpages.auth.admin', compact('admin'));
    }
    // Access only on API
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nip' => 'required|min:18|unique:admins',
            // 'password' => 'required|min:8',
            // 'repeat_password' => 'required|min:5|same:password',
            'nama' => 'required|min:5',
            'role' => 'required',
        ],[
            'nip.min' => "Masukkan NIP yang benar",
            'nip.unique' => "nip telah terpakai",
            // 'password.min' => "Password minimal terdiri dari 8 karakter",
            'nama.min' => "Nama minimal terdiri dari 5 huruf",
            // 'repeat_password.same' => "Konfirmasi password baru tidak sesuai",
        ]);

        if($validator->fails()){
            return back()->withErrors($validator);
        }
        $user = new Admin();
        $user->nama = $request->nama;
        $user->nip = $request->nip;
        $user->password = bcrypt($request->nip);
        $user->role = $request->role;
        $user->save();

        return redirect('admin/admins')->with('statusInput', 'Admin Berhasil Ditambahkan');
    }

    public function destroy($id){
        $admin = Admin::find($id);
        $admin->delete();
        return redirect('admin/desa')->with('statusInput', 'Admin Berhasil Dihapus');
    }

    public function role($id, $role)
    {
        $admin = Admin::find($id);
        $admin->role = $role;
        $admin->update();
        return response()->json(['success' => 'berhasil terganti']);
    }

    public function reset($id)
    {
        $admin = Admin::find($id);
        $admin->password = bcrypt($admin->nip);
        $admin->update();
        return response()->json(['success' => 'berhasil terganti']);
    }
}
