<?php

namespace App\Http\Controllers;
use App\Models\Paket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class PaketController extends Controller
{
    //

    public function index(){

        $data_paket=Paket::get();
        $data=["data_paket"=>$data_paket];
        return view('paket/index',$data);
    }
    public function add(){
        return view('paket/add');
    }
    public function add_paket(Request $request){
        $this->validate($request, [
            'nama_paket' => 'required',
            'foto' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'keterangan' => 'required',
            'status' => 'required',
            'harga_paket'=>'required',
          
        ]);

        $nama_paket = $request->input("nama_paket");
        $foto = $request->file('foto');
        $keterangan = $request->input("keterangan");
        $status = $request->input("status");
        $harga_paket = $request->input("harga_paket");
        $nama_foto = time()."_".$foto->getClientOriginalName();
        $foto->move(public_path().'/storage',$nama_foto);
       
        $data = [
            "nama_paket" => $nama_paket,
            "foto" => $nama_foto,
            "keterangan" => $keterangan,
            "status" =>$status,
            "harga_paket"=>$harga_paket,
           
        ];

        
            $create_data = Paket::create($data);
            if($create_data) {
                return redirect('/paket')->with('sukses', 'Data berhasil ditambahkan');
            }
            else {
                return redirect()->back()->with('gagal', 'Data tidak berhasil ditambahkan');
            }
        
        
        
    }

    public function edit($id)
    {

	// mengambil data pegawai berdasarkan id yang dipilih
	$data_paket = Paket::where('id',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('paket/update',['data_paket' => $data_paket]);
 
    }



    public function edit_paket(Request $request,$id){
        $this->validate($request, [
            'nama_paket' => 'required',
            'foto' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'keterangan' => 'required',
            'status'=>'required',
            'harga_paket'=>'required',
          
           
        ]);
        $nama_paket = $request->input("nama_paket");
        $foto = $request->file('foto');
        $keterangan = $request->input("keterangan");
        $status = $request->input("status");
        $harga_paket = $request->input("harga_paket");
        $nama_foto = time()."_".$foto->getClientOriginalName();
        $foto->move(public_path().'/storage',$nama_foto);
       
        $data = [
            "nama_paket" => $nama_paket,
            "foto" => $nama_foto,
            "keterangan" => $keterangan,
            "status" =>$status,
            "harga_paket"=>$harga_paket,
          
        ];

        
            $update_data = Paket::where("id",$id)->update($data);
            if($update_data) {
                return redirect('/paket')->with('sukses', 'Data berhasil di update');
            }
            else {
                return redirect()->back()->with('gagal', 'Data tidak berhasil di update');
            }
        
}

    public function delete($id){
        $delete_data=Paket::find($id)->delete();
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
    
      
    $cari_paket = Paket::where('nama_paket', 'like', "%".$cari."%")
    ->orWhere('keterangan', 'like', "%".$cari."%")
    ->paginate(5);

    $data= ['data_paket' => $cari_paket];
        
    return view('index',$data);
    
    }
}
