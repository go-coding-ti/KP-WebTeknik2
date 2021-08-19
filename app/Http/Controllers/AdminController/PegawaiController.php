<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Jabatan;
use App\Prodi;
use App\StafBidang;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\JabatanPegawai;
use App\Pegawai;
use App\Staff;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator; 

class PegawaiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('reset_pass');
    }
    
    public function index(){

        $data = Pegawai::with('jabatan')->where('deleted_at', NULL)->get();
        return view('adminpages.pegawai.pegawai', compact('data'));
    }


    public function create(){
        $jabatan = JabatanPegawai::where('deleted_at', NULL)->get();
        return view('adminpages.pegawai.create', compact('jabatan'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|min:6|unique:staffs',
            'nip' => 'required|min:8',
            'tanggal' => 'required',
            'jabatan' => 'required',
            'email' => 'required|min:6',
            'telepon' => 'required|min:6',
            'alamat' => 'required|min:6',
            'biografi_ina' => 'required|min:8',
            'biografi_eng' => 'required|min:8',
            'foto' => 'required'
        ]);

        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $pegawai = new Pegawai();
        $pegawai->nama = $request->nama;
        $pegawai->nama_slug = Str::slug($request->nama);
        $pegawai->nip = $request->nip;
        $pegawai->tanggal_lahir = $request->tanggal;
        $pegawai->email = $request->email;
        $pegawai->nomor_telepon = $request->telepon;
        $pegawai->alamat = $request->alamat;
        $pegawai->biografi_ina = $request->biografi_ina;
        $pegawai->biografi_eng = $request->biografi_eng;
        $pegawai->id_jabatan = $request->jabatan;

        // if($request->file('foto')!=""){
        //     $file = $request->file('foto');
        //     $fileLocation = '/image/staff/'.$request->nip;
        //     $filename = $file->getClientOriginalName();
        //     $path = $fileLocation."/".$filename;
        //     $staf->foto = '/storage'.$path;
        //     $staf->foto_name = $filename;
        //     Storage::disk('public')->put($path, file_get_contents($file));
        // }

        $image_parts = explode(';base64', $request->foto);
        $image_type_aux = explode('image/', $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $filename = uniqid().'.png';
        $file = $request->file('foto');
        $fileLocation = '/image/pegawai/'.$request->nip;
        $path = $fileLocation."/".$filename;
        $pegawai->foto = '/storage'.$path;
        $pegawai->foto_name = $filename;
        Storage::disk('public')->put($path, $image_base64);

        $pegawai->save();
        return redirect('/admin/pegawai')->with('statusInput', 'Pegawai berhasil ditambahkan');
    }

    public function destroy($id)
    {
    	$pegawai = Pegawai::find($id);
        $pegawai->delete();
        return redirect('/admin/pegawai')->with('statusInput', 'Pegawai berhasil dihapus');
    }

    public function edit($id){
        $jabatans = JabatanPegawai::where('deleted_at', NULL)->get();
        $pegawai = Pegawai::find($id);
        return view('adminpages.pegawai.edit', compact('jabatans', 'pegawai'));
    }

    public function update($id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|min:6|unique:staffs',
            'nip' => 'required|min:8',
            'tanggal' => 'required',
            'jabatan' => 'required',
            'email' => 'required|min:6',
            'telepon' => 'required|min:6',
            'alamat' => 'required|min:6',
            'biografi_ina' => 'required|min:8',
            'biografi_eng' => 'required|min:8'
        ]);

        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $pegawai = Pegawai::find($id);
        $pegawai->nama = $request->nama;
        $pegawai->nama_slug = Str::slug($request->nama);
        $pegawai->nip = $request->nip;
        $pegawai->tanggal_lahir = $request->tanggal;
        $pegawai->email = $request->email;
        $pegawai->nomor_telepon = $request->telepon;
        $pegawai->alamat = $request->alamat;
        $pegawai->biografi_ina = $request->biografi_ina;
        $pegawai->biografi_eng = $request->biografi_eng;
        $pegawai->id_jabatan = $request->jabatan;

        if($request->file('foto')!=""){
            $image_parts = explode(';base64', $request->foto);
            $image_type_aux = explode('image/', $image_parts[0]);
            $image_type = $image_type_aux[1];
            $image_base64 = base64_decode($image_parts[1]);
            $filename = uniqid().'.png';
            $file = $request->file('foto');
            $fileLocation = '/image/pegawai/'.$request->nip;
            $path = $fileLocation."/".$filename;
            $pegawai->foto = '/storage'.$path;
            $pegawai->foto_name = $filename;
            Storage::disk('public')->put($path, $image_base64);
        }

        $pegawai->update();
        return redirect('/admin/pegawai')->with('statusInput', 'Pegawai berhasil diperbaharui');
    }


    public function show($id)
    {
        $pegawai = Pegawai::with('jabatan')->find($id);
        return view('adminpages.pegawai.show', compact('pegawai'));
    }

    //StafBidang Start
    public function bidangIndex($id){

        $data = StafBidang::where('deleted_at', NULL)->get();
        $staf = Staff::find($id);
        return view('adminpages.staff.bidang', compact('data', 'staf'));
    }

    public function bidangStore($id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'bidang' => 'required'
        ]);

        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $bidang = new StafBidang();
        $bidang->id_staf = $id;
        $bidang->bidang = $request->bidang;
        $bidang->save();

        return redirect('/admin/staf/bidang/'.$id)->with('statusInput', 'Bidang penelitian berhasil ditambahkan');
    }

    //StafBidang Start
    public function penelitianIndex($id){

        $data = StafPenelitian::where('deleted_at', NULL)->get();
        $staf = Staff::find($id);
        return view('adminpages.staff.penelitian', compact('data', 'staf'));
    }

    public function penelitianStore($id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'penelitian' => 'required'
        ]);

        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $penelitian = new StafPenelitian();
        $penelitian->id_staf = $id;
        $penelitian->penelitian = $request->penelitian;
        $penelitian->save();

        return redirect('/admin/staf/penelitian/'.$id)->with('statusInput', 'Penelitian berhasil ditambahkan');
    }
}
