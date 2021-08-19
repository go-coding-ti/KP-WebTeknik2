<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Prodi;
use App\StafBidang;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Staff;
use App\StafPenelitian;
use App\StafProdi;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator; 

class StaffController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('reset_pass');
    }
    
    public function index(){

        $data = Staff::where('deleted_at', NULL)->get();
        return view('adminpages.staff.staff', compact('data'));
    }


    public function create(){
        $prodi = Prodi::where('deleted_at', NULL)->get();
        return view('adminpages.staff.create', compact('prodi'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|min:6|unique:staffs',
            'nip' => 'required|min:8',
            'tanggal' => 'required',
            'prodi' => 'required',
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

        $staf = new Staff();
        $staf->nama = $request->nama;
        $staf->nama_slug = Str::slug($request->nama);
        $staf->nip = $request->nip;
        $staf->tanggal_lahir = $request->tanggal;
        $staf->email = $request->email;
        $staf->nomor_telepon = $request->telepon;
        $staf->pendidikan_s1 = $request->s1;
        $staf->pendidikan_s2 = $request->s2;
        $staf->jenis = $request->jenis;
        if($request->s3 !=""){
            $staf->pendidikan_s3 = $request->s3;
        }
        if($request->sinta != ""){
            $staf->sinta = $request->sinta;
        }
        if($request->scopus != ""){
            $staf->scopus = $request->scopus;
        }
        $staf->alamat = $request->alamat;
        $staf->biografi_ina = $request->biografi_ina;
        $staf->biografi_eng = $request->biografi_eng;

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
        $fileLocation = '/image/staff/'.$request->nip;
        $path = $fileLocation."/".$filename;
        $staf->foto = '/storage'.$path;
        $staf->foto_name = $filename;
        Storage::disk('public')->put($path, $image_base64);

        $staf->save();

        foreach($request->prodi as $data => $value){
            $staf_prodi = new StafProdi();
            $staf_prodi->id_prodi = $request->prodi[$data];
            $staf_prodi->id_staf = Staff::max('id');
            $staf_prodi->save();
        }

        return redirect('/admin/staf')->with('statusInput', 'Staf pengajar berhasil ditambahkan');
    }

    public function destroy($id)
    {
    	$staf = Staff::find($id);
        $staf->delete();
        return redirect('/admin/staf')->with('statusInput', 'Staf pengajar berhasil dihapus');
    }

    public function edit($id){
        $prodis = Prodi::where('deleted_at', NULL)->get();
        $staf = Staff::find($id);
        $stafprodis = StafProdi::where('id_staf', $staf->id)->get();
        return view('adminpages.staff.edit', compact('prodis', 'staf', 'stafprodis'));
    }

    public function update($id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|min:6',
            'nip' => 'required|min:8',
            'tanggal' => 'required',
            'prodi' => 'required',
            'email' => 'required|min:6',
            'telepon' => 'required|min:6',
            'alamat' => 'required|min:6',
            'biografi_ina' => 'required|min:8',
            'biografi_eng' => 'required|min:8',
            'jenis' => 'required'
        ]);

        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $staf = Staff::find($id);
        $staf->nama = $request->nama;
        $staf->nama_slug = Str::slug($request->nama);
        $staf->nip = $request->nip;
        $staf->tanggal_lahir = $request->tanggal;
        $staf->email = $request->email;
        $staf->nomor_telepon = $request->telepon;
        $staf->pendidikan_s1 = $request->s1;
        $staf->pendidikan_s2 = $request->s2;
        $staf->jenis = $request->jenis;
        if($request->s3 !=""){
            $staf->pendidikan_s3 = $request->s3;
        }
        if($request->sinta != ""){
            $staf->sinta = $request->sinta;
        }
        if($request->scopus != ""){
            $staf->scopus = $request->scopus;
        }
        $staf->alamat = $request->alamat;
        $staf->biografi_ina = $request->biografi_ina;
        $staf->biografi_eng = $request->biografi_eng;

        if($request->foto!=""){
            $image_parts = explode(';base64', $request->foto);
            $image_type_aux = explode('image/', $image_parts[0]);
            $image_type = $image_type_aux[1];
            $image_base64 = base64_decode($image_parts[1]);
            $filename = uniqid().'.png';
            $file = $request->file('foto');
            $fileLocation = '/image/staff/'.$request->nip;
            $path = $fileLocation."/".$filename;
            $staf->foto = '/storage'.$path;
            $staf->foto_name = $filename;
            Storage::disk('public')->put($path, $image_base64);
        }

        $staf->update();

        $stafprodis = StafProdi::where('id_staf', $staf->id)->get();
        foreach($stafprodis as $stafprodi){
            $stafprodi->delete();
        }

        foreach($request->prodi as $data => $value){
            $staf_prodi = new StafProdi();
            $staf_prodi->id_prodi = $request->prodi[$data];
            $staf_prodi->id_staf = Staff::max('id');
            $staf_prodi->save();
        }

        return redirect('/admin/staf')->with('statusInput', 'Staf pengajar berhasil diperbaharui');
    }


    public function show($id)
    {
        $staf = Staff::with('prodi')->find($id);
        return view('adminpages.staff.show', compact('staf'));
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
            'bidang' => 'required',
            'bidang_eng' => 'required'
        ]);

        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $bidang = new StafBidang();
        $bidang->id_staf = $id;
        $bidang->bidang = $request->bidang;
        $bidang->bidang_eng = $request->bidang_eng;
        $bidang->save();

        return redirect('/admin/staf/bidang/'.$id)->with('statusInput', 'Bidang penelitian berhasil ditambahkan');
    }

    public function bidangEdit($id)
    {
        $bidang = StafBidang::find($id);
        return response()->json(['success' => 'Berhasil', 'bidang' => $bidang]);
    }

    public function bidangUpdate($id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'edit_bidang_ina' => 'required|min:3',
            'edit_bidang_eng' => 'required|min:3'
        ]);

        if($validator->fails()){
            return back()->withInput()->withErrors($validator);
        }
        
        $bidang = StafBidang::find($id);

        $bidang->bidang = $request->edit_bidang_ina;
        $bidang->bidang_eng = $request->edit_bidang_eng;
        $bidang->save();

        return back()->with('statusInput', 'Bidang penelitian berhasil diperbaharui');
    }

    public function bidangDestroy($id)
    {
    	$bidang = StafBidang::find($id);
        $bidang->delete();
        return back()->with('statusInput', 'Bidang penelitian berhasil dihapus');
    }

    //StafPenelitian Start
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

    public function penelitianEdit($id)
    {
        $penelitian = StafPenelitian::find($id);
        return response()->json(['success' => 'Berhasil', 'penelitian' => $penelitian]);
    }

    public function penelitianUpdate($id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'edit_penelitian' => 'required|min:3'
        ]);

        if($validator->fails()){
            return back()->withInput()->withErrors($validator);
        }
        
        $penelitian = StafPenelitian::find($id);

        $penelitian->penelitian = $request->edit_penelitian;
        $penelitian->save();

        return back()->with('statusInput', 'Penelitian berhasil diperbaharui');
    }

    public function penelitianDestroy($id)
    {
    	$penelitian = StafPenelitian::find($id);
        $penelitian->delete();
        return back()->with('statusInput', 'Penelitian berhasil dihapus');
    }
}
