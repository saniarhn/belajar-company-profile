<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $data_home=Home::get();
        $data=["data_home"=>$data_home];
        return view('home/index',$data);
    }
    public function add(){
        return view('home/add');
    }
    public function add_home(Request $request){
        $this->validate($request, [
            'judul' => 'required',
            
            'subjudul'=>'required',
            'foto'=>'required',
            
        ]);

        $judul = $request->input("judul");
        
        $subjudul = $request->input("subjudul");
        $foto = $request->file('foto');
        $nama_foto = time()."_".$foto->getClientOriginalName();
        $foto->move(public_path().'/storage',$nama_foto);

        $cek = Home::get();

        $data = [
            "judul" => $judul,
            "subjudul"=>$subjudul,
           
            "foto"=>$nama_foto,
        ];
        
        if(count($cek) >= 1) {
            return redirect()->back()->with('gagal', 'Maaf, data tidak berhasil di tambah. Status aktif maksimal hanya boleh 1');
        }
        else {
            $create_data = Home::create($data);
            if($create_data) {
                return redirect('/home')->with('sukses', 'Data berhasil ditambahkan');
            }
            else {
                return redirect()->back()->with('gagal', 'Maaf ya, hanya sastu aja');
            }
        }
    }

    public function edit($id)
    {
	// mengambil data pegawai berdasarkan id yang dipilih
	$data_home = Home::where('id',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('home/update',['data_home' => $data_home]);
 
    }



    public function edit_home(Request $request,$id){
        $this->validate($request, [
            'judul' => 'required',
           
            'subjudul'=>'required',
            'foto'=>'required',
            
        ]);

        $judul = $request->input("judul");
        
        $subjudul = $request->input("subjudul");
        $foto = $request->file('foto');
        $nama_foto = time()."_".$foto->getClientOriginalName();
        $foto->move(public_path().'/storage',$nama_foto);
        
        $cek = Home::get();

        $data = [
            "judul" => $judul,
            "subjudul"=>$subjudul,
            
            "foto"=>$nama_foto,
        ];
        
        
        $update_data =Home::where("id",$id)->update($data);
        if($update_data) {
            return redirect('/home')->with('sukses', 'Data berhasil di update');
        }
        else {
            return redirect()->back()->with('gagal', 'Data tidak berhasil di update');
        }
     
    }

    public function delete($id){
        $delete_data = Home::find($id)->delete();
        if($delete_data) {
            return redirect()->back()->with('sukses','akan berhasil dihapus');
        }
        else {
            return redirect()->back()->with('gagal','akun berhasil dihapus');
        }

         return redirect()->back();
     }

     public function cari(Request $request)
    {
        $cari = $request->cari;
    // menangkap data pencarian
    
      
    $cari_fitur = Fitur::where('nama', 'like', "%".$cari."%")
    ->orWhere('pekerjaan', 'like', "%".$cari."%")
    ->paginate(5);

    $data= ['data_fitur' => $cari_fitur];
        
    return view('index',$data);
    
    }
}
