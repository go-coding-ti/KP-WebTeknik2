<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\PengumumanKategori;
use App\Slide;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
class SlideController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('reset_pass');
    }
    
    public function index(){
        $data = Slide::where('deleted_at', NULL)->get();
        // dd(isset($data));
        return view('adminpages.slide.slide', compact('data'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title_ina' => 'required|min:3',
            'title_eng' => 'required|min:3'
        ]);

        if($validator->fails()){
            return back()->withInput()->withErrors($validator);
        }

        $slide = new Slide();
        $slide->title_ina = $request->title_ina;
        $slide->title_eng = $request->title_eng;
        if($request->file('logo')!=""){
            $file = $request->file('logo');
            $fileLocation = '/image/slideshow/'.$request->title_ina;
            $filename = $file->getClientOriginalName();
            $path = $fileLocation."/".$filename;
            $slide->slide_show = '/storage'.$path;
            Storage::disk('public')->put($path, file_get_contents($file));
        }

        $image_parts = explode(';base64', $request->logo);
        $image_type_aux = explode('image/', $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $filename = uniqid().'.png';
        $fileLocation = '/image/slideshow/'.$request->title_ina;
        $path = $fileLocation."/".$filename;
        $slide->slide_show = '/storage'.$path;
        Storage::disk('public')->put($path, $image_base64);
        $slide->save();

        return back()->with('statusInput', 'Slideshow berhasil ditambahkan');
    }

    public function edit($id)
    {
        $slide = Slide::find($id);
        return response()->json(['success' => 'Berhasil', 'slide' => $slide]);
    }

    public function update($id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'edit_slideshow_ina' => 'required|min:3',
            'edit_slideshow_eng' => 'required|min:3'
        ]);

        if($validator->fails()){
            return back()->withInput()->withErrors($validator);
        }
        
        $slide = Slide::find($id);

        $slide->title_ina = $request->edit_slideshow_ina;
        $slide->title_eng = $request->edit_slideshow_eng;
        if($request->edit_logo!=""){
            $image_parts = explode(';base64', $request->edit_logo);
            $image_type_aux = explode('image/', $image_parts[0]);
            $image_type = $image_type_aux[1];
            $image_base64 = base64_decode($image_parts[1]);
            $filename = uniqid().'.png';
            $fileLocation = '/image/slideshow/'.$request->title_ina;
            $path = $fileLocation."/".$filename;
            $slide->slide_show = '/storage'.$path;
            Storage::disk('public')->put($path, $image_base64);
        }
        $slide->update();

        return back()->with('statusInput', 'Slideshow berhasil diperbaharui');
    }


    public function destroy($id)
    {
        $slide = Slide::find($id);
        $slide->delete();
        return back()->with('statusInput', 'Slideshow berhasil dihapus');
    }
}
