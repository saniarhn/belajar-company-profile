<?php

namespace App\Http\Controllers;
use App\Models\Clients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ClientController extends Controller
{
    //

    public function index(){

        $data_client=Clients::get();
        $data=["data_client"=>$data_client];
        return view('client/index',$data);
    }
    public function add(){
        return view('client/add');
    }
    public function add_client(Request $request){
        $this->validate($request, [
            'nama' => 'required',
            'pekerjaan' => 'required',
            'foto' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'ulasan' => 'required',
            'status',
        ]);

        $nama = $request->input("nama");
        $pekerjaan = $request->input("pekerjaan");
        $foto = $request->file('foto');
        $ulasan = $request->input("ulasan");
        $status = $request->input("status");
        $nama_foto = time()."_".$foto->getClientOriginalName();
        $foto->move(public_path().'/storage',$nama_foto);
        $cek = Clients::where('status', 'aktif')->get();
        $data = [
            "nama" => $nama,
            "pekerjaan" => $pekerjaan,
            "foto" => $nama_foto,
            "ulasan" => $ulasan,
            'status'=> $status,
        ];
       
            $create_data = Clients::create($data);
            if($create_data) {
                return redirect('/client')->with('sukses', 'Data berhasil ditambahkan');
            }
            else {
                return redirect()->back()->with('gagal', 'Data tidak berhasil ditambahkan');
            }
        
    }

    public function edit($id)
    {
	// mengambil data pegawai berdasarkan id yang dipilih
	$data_clients = Clients::where('id',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('client/update',['data_clients' => $data_clients]);
 
    }



    public function edit_client(Request $request,$id){
        $this->validate($request, [
            'nama' => 'required',
            'pekerjaan' => 'required',
            'foto' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'ulasan' => 'required',
            'status'=>'required',
        ]);
        $nama = $request->input("nama");
        $pekerjaan = $request->input("pekerjaan");
        $foto = $request->file('foto');
        $ulasan = $request->input("ulasan");
        $status = $request->input("status");
        $nama_foto = time()."_".$foto->getClientOriginalName();
        $foto->move(public_path().'/storage',$nama_foto);
        $cek = Clients::where('status', 'aktif')->get();
        $data = [
            "nama" => $nama,
            "pekerjaan" => $pekerjaan,
            "foto" => $nama_foto,
            "ulasan" => $ulasan,
            'status'=> $status,
        ];

      
            $update_data = Clients::where("id",$id)->update($data);
            if($update_data) {
                return redirect('/client')->with('sukses', 'Data berhasil di update');
            }
            else {
                return redirect()->back()->with('gagal', 'Data tidak berhasil di update');
            }
        
}

    public function delete($id){
        $delete_data=Clients::find($id)->delete();
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
    
      
    $cari_client = Clients::where('nama', 'like', "%".$cari."%")
    ->orWhere('pekerjaan', 'like', "%".$cari."%")
    ->paginate(5);

    $data= ['data_client' => $cari_client];
        
    return view('index',$data);
    
    }
   
}
