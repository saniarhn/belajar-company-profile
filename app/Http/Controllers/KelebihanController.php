<?php

namespace App\Http\Controllers;
use App\Models\Kelebihan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class KelebihanController extends Controller
{
    

    public function index(){

        $data_kelebihan=Kelebihan::get();
        $data=["data_kelebihan"=>$data_kelebihan];
        return view('kelebihan/index',$data);
    }
    public function add(){
        return view('kelebihan/add');
    }

    public function add_kelebihan(Request $request){
        $this->validate($request, [
            'kelebihan' => 'required',
            'foto' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'deskripsi' => 'required',
            'status' => 'required',
        ]);
        $kelebihan = $request->input("kelebihan");
        $foto = $request->file('foto');
        $deskripsi = $request->input("deskripsi");
        $status = $request->input("status");
        $nama_foto = time()."_".$foto->getClientOriginalName();
        $foto->move(public_path().'/storage',$nama_foto);
        $cek = Kelebihan::where('status', 'aktif')->get();
        $data = [
            "kelebihan" => $kelebihan,
            "foto" => $nama_foto,
            "deskripsi" => $deskripsi,
            "status" => $status,
        ];

        if($status === 'aktif') {
            if(count($cek) >= 3) {
                return redirect()->back()->with('gagal', 'Maaf, data tidak berhasil di tambah. Status aktif maksimal hanya boleh 3');
            }
            else {
                $create_data = Kelebihan::create($data);
                if($create_data) {
                    return redirect('/kelebihan')->with('sukses', 'Data berhasil ditambahkan');
                }
                else {
                    return redirect()->back()->with('gagal', 'Data tidak berhasil ditambahkan');
                }
            }
        }
        else {
            $create_data = Kelebihan::create($data);
            if($create_data) {
                return redirect('/kelebihan')->with('sukses', 'Data berhasil ditambahkan');
            }
            else {
                return redirect()->back()->with('gagal', 'Data tidak berhasil ditambahkan');
            }
        }
        
    }

    public function edit($id)
    {

	// mengambil data pegawai berdasarkan id yang dipilih
	$data_kelebihan = Kelebihan::where('id',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('kelebihan/update',['data_kelebihan' => $data_kelebihan]);
 
    }



    public function edit_kelebihan(Request $request,$id){
        $this->validate($request, [
            'kelebihan' => 'required',
            'foto' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'deskripsi' => 'required',
            'status' => 'required',
        ]);
        $kelebihan = $request->input("kelebihan");
        $foto = $request->file('foto');
        $deskripsi = $request->input("deskripsi");
        $status = $request->input("status");
        $nama_foto = time()."_".$foto->getClientOriginalName();
        $foto->move(public_path().'/storage',$nama_foto);
        $cek = Kelebihan::where('status', 'aktif')->get();
        $data = [
            "kelebihan" => $kelebihan,
            "foto" => $nama_foto,
            "deskripsi" => $deskripsi,
            "status" => $status,
        ];

        if($status === 'aktif') {
            if(count($cek) >= 4) {
                return redirect()->back()->with('gagal', 'Maaf, status aktif hanya boleh maksimal 4');
            }
            else {
                $update_data = Kelebihan::where("id", $id)->update($data);
                if($update_data) {
                    return redirect('/kelebihan')->with('sukses', 'Data berhasil di update');
                }
                else {
                    return redirect()->back()->with('gagal', 'Data tidak berhasil di update');
                }
            }
        }
        else {
            $update_data = Kelebihan::where("id",$id)->update($data);
            if($update_data) {
                return redirect('/kelebihan')->with('sukses', 'Data berhasil di update');
            }
            else {
                return redirect()->back()->with('gagal', 'Data tidak berhasil di update');
            }
        }

    }

    public function delete($id){
        $delete_data=Kelebihan::find($id)->delete();
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
    
      
    $cari_kelebihan = Kelebihan::where('kelebihan', 'like', "%".$cari."%")
    ->orWhere('deskripsi', 'like', "%".$cari."%")
    ->paginate(5);

    $data= ['data_kelebihan' => $cari_kelebihan];
        
    return view('index',$data);
    
    }
}
