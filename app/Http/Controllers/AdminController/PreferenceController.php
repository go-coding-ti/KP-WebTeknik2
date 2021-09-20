<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Preference;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PreferenceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('reset_pass');
    }
    
    public function index(){
        $preference = Preference::first();
        return view('adminpages.pengaturan.preferences', compact('preference'));
    }

    public function store(Request $request){
        $arrImage = [];
        
        $preference = Preference::first();
        $preference->nama_website_ina = $request->nama_website_ina;
        $preference->nama_website_eng = $request->nama_website_eng;
        $preference->footer_ina = $request->footer_ina;
        $preference->footer_eng = $request->footer_eng;

        if($request->logo!=""){
            $image_parts = explode(';base64', $request->logo);
            $image_type_aux = explode('image/', $image_parts[0]);
            $image_type = $image_type_aux[1];
            $image_base64 = base64_decode($image_parts[1]);
            $filename = uniqid().'.png';
            $fileLocation = '/image/preferences/logo';
            $path = $fileLocation."/".$filename;
            $preference->logo = '/storage'.$path;
            $preference->logo_name = $filename;
            Storage::disk('public')->put($path, $image_base64);
        }

        $detailina = $request->tentang_ina;
        $detaileng = $request->tentang_eng;
        libxml_use_internal_errors(true);
        $dom = new \domdocument();
        $dom->loadHtml($detailina, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $domeng = new \domdocument();
        $domeng->loadHtml($detaileng, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images = $dom->getElementsByTagName('img');
        $imageseng = $domeng->getElementsByTagName('img');

        foreach ($images as $count => $image) {
            $src = $image->getAttribute('src');
            if (preg_match('/data:image/', $src)) {
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimeType = $groups['mime'];
                $path = '/image/preferences/tentang/tentang_ina/'. uniqid('', true) . '.' . $mimeType;
                Storage::disk('public')->put($path, file_get_contents($src));
                $image->removeAttribute('src');
                $link = asset('storage'.$path);
                $image->setAttribute('src', $link);
                array_push($arrImage, $path);
            }
        }

        foreach ($imageseng as $count => $image) {
            $src = $image->getAttribute('src');
            if (preg_match('/data:image/', $src)) {
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimeType = $groups['mime'];
                $path = '/image/preferences/tentang/tentang_ina/'. uniqid('', true) . '.' . $mimeType;
                Storage::disk('public')->put($path, file_get_contents($src));
                $image->removeAttribute('src');
                $link = asset('storage'.$path);
                $image->setAttribute('src', $link);
                array_push($arrImage, $path);
            }
        }

        $detailina = $dom->savehtml();
        $preference->tentang_ina = $detailina;
        $detaileng = $domeng->savehtml();
        $preference->tentang_eng = $detaileng;


        $preference->save();
        return redirect('/admin/setting/preferences')->with('statusInput', 'Preferences berhasil disimpan');
    }
}