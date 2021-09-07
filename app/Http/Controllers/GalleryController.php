<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;


class GalleryController extends Controller
{
    public function index(){

        $data_gallery=Gallery::get();
        $data=["data_gallery"=>$data_gallery];
        return view('gallery/index',$data);
    }

    public function add(){
        return view('gallery/add');
    }

    public function add_gallery(Request $request){
        $this->validate($request, [
            'foto' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
           
        ]);

        $foto = $request->file('foto');
        $nama_foto = time()."_".$foto->getClientOriginalName();
        $foto->move(public_path().'/storage',$nama_foto);

        $data = [
            "foto" => $nama_foto,
            
          
        ];
        
    
        $create_data = Gallery::create($data);
        if($create_data) {
            return redirect('/gallery');
        }
        else {
            return redirect()->back();
        }
        
    }

    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $data_gallery= Gallery::where('id',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('gallery/update',['data_gallery' => $data_gallery]);
 
    }



    public function edit_gallery(Request $request,$id){
        $this->validate($request, [
            'foto' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            
        ]);
       
        $foto = $request->file('foto');

        $nama_foto = time()."_".$foto->getClientOriginalName();
        $foto->move(public_path().'/storage',$nama_foto);

       
       
        $data = [
            "foto" => $nama_foto,
        ];

        $update_data = Gallery::where("id", $id)->update($data);
        if($update_data) {
            return redirect('/gallery');
        }
        else {
            return redirect()->back();
        }
        
    }


    public function delete($id){
        $delete_data=Gallery::find($id)->delete();
        if($delete_data) {
            return redirect()->back()->with('sukses','akan berhasil dihapus');
        }
        else {
            return redirect()->back()->with('gagal','akun berhasil dihapus');
        }

         return redirect()->back();
    }
}
