<?php

namespace App\Http\Controllers;
use App\Models\Maps;
use Illuminate\Http\Request;

class MapsController extends Controller
{
    public function index(){

        $data_maps=Maps::get();
        $data=["data_maps"=>$data_maps];
        return view('maps/index',$data);
    }
    public function add(){
        return view('maps/add');
    }
    public function add_maps(Request $request){
        $this->validate($request, [
            'alamat' => 'required',
            
      
            
        ]);

        $alamat = $request->input("alamat");
        
       
   

        $cek = Maps::get();

        $data = [
            "judul" => $alamat,
            
        ];
        
        if(count($cek) >= 1) {
            return redirect()->back()->with('gagal', 'Maaf, data tidak berhasil di tambah. Status aktif maksimal hanya boleh 1');
        }
        else {
            $create_data = Maps::create($data);
            if($create_data) {
                return redirect('/maps')->with('sukses', 'Data berhasil ditambahkan');
            }
            else {
                return redirect()->back()->with('gagal', 'Maaf ya, hanya satu aja');
            }
        }
    }

    public function edit($id)
    {
	// mengambil data pegawai berdasarkan id yang dipilih
	$data_maps = Maps::where('id',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('maps/update',['data_maps' => $data_maps]);
 
    }



    public function edit_maps(Request $request,$id){
        $this->validate($request, [
            'alamat' => 'required',
         
        ]);

        $alamat = $request->input("alamat");
        
       
        
        $cek = Maps::get();

        $data = [
            "alamat" => $alamat,
          
          
        ];
        
        
        $update_data =Maps::where("id",$id)->update($data);
        if($update_data) {
            return redirect('/maps')->with('sukses', 'Data berhasil di update');
        }
        else {
            return redirect()->back()->with('gagal', 'Data tidak berhasil di update');
        }
     
    }

    public function delete($id){
        $delete_data = Maps::find($id)->delete();
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
    
      
    $cari_maps = Maps::where('alamat', 'like', "%".$cari."%")
    ->paginate(5);

    $data= ['data_maps' => $cari_maps];
        
    return view('index',$data);
    
    }
}
