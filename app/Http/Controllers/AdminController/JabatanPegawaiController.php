<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\JabatanPegawai;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class JabatanPegawaiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('reset_pass');
    }
    
    public function index(){
        $data = JabatanPegawai::where('deleted_at', NULL)->get();
        // dd(isset($data));
        return view('adminpages.jabatan.jabatanpegawai', compact('data'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'jabatan_ina' => 'required|min:3',
            'jabatan_eng' => 'required|min:3',
            'sub_bidang' => 'required'
        ]);

        if($validator->fails()){
            return back()->withInput()->withErrors($validator);
        }

        $jabatan = new JabatanPegawai();
        $jabatan->jabatan_ina = $request->jabatan_ina;
        $jabatan->jabatan_eng = $request->jabatan_eng;
        $jabatan->sub_bidang = $request->sub_bidang;
        $jabatan->save();

        return back()->with('statusInput', 'Jabatan berhasil ditambahkan');
    }

    public function edit($id)
    {
        $jabatan = JabatanPegawai::find($id);
        return response()->json(['success' => 'Berhasil', 'jabatan' => $jabatan]);
    }

    public function update($id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'edit_jabatan_ina' => 'required|min:3',
            'edit_jabatan_eng' => 'required|min:3',
            'edit_sub_bidang' => 'required'
        ]);

        if($validator->fails()){
            return back()->withInput()->withErrors($validator);
        }
        
        $jabatan = JabatanPegawai::find($id);

        $jabatan->jabatan_ina = $request->edit_jabatan_ina;
        $jabatan->jabatan_eng = $request->edit_jabatan_eng;
        $jabatan->sub_bidang = $request->edit_sub_bidang;
        $jabatan->save();

        return back()->with('statusInput', 'Jabatan berhasil diperbaharui');
    }


    public function destroy($id)
    {
        $jabatan = JabatanPegawai::find($id);
        $jabatan->delete();
        return back()->with('statusInput', 'Jabatan berhasil dihapus');
    }
}
