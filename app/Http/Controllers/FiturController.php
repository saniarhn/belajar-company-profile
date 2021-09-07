<?php

namespace App\Http\Controllers;
use App\Models\Fitur;
use App\Models\Paket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FiturController extends Controller
{
    public function index(){

        $data_fitur = Fitur::select('tbl_fitur.id_fitur','tbl_fitur.jenis_fitur','tbl_fitur.id_paket','tbl_paket.nama_paket', 'tbl_fitur.status')
        ->join('tbl_paket', 'tbl_paket.id', '=', 'tbl_fitur.id_paket')->get();
        $data=["data_fitur"=>$data_fitur];
        return view('fitur/index',$data);
    }
    public function add(){
        $data_fitur=Fitur::get();
        $data_paket=Paket::get();
        $data=["data_fitur"=>$data_fitur,
    "data_paket"=>$data_paket,];
        return view('fitur/add',$data);
    }
    public function add_fitur(Request $request){
        $this->validate($request, [
            'jenis_fitur' => 'required',
            'id_paket' => 'required',
            'status' => 'required',
        ]);

        $jenis_fitur = $request->input("jenis_fitur");
        $id_paket = $request->input("id_paket");
        $status = $request->input("status");
        $cek = Fitur::where('status', 'aktif')->get();
        $data = [
            "jenis_fitur" => $jenis_fitur,
            "id_paket" => $id_paket,
            "status" => $status,

        ];
        
        // if($status === 'aktif') {
        //     if(count($cek) >= 3) {
        //         return redirect()->back();
        //     }
        //     else {
                $create_data = Fitur::create($data);
                if($create_data) {
                    return redirect('/fitur')->with('sukses', 'Data berhasil di tambah');
                }
                else {
                    return redirect()->back()->with('gagal', 'Data tidak berhasil di tambah');
                }
        //     }
        // }
        // else {
        //     $create_data = Fitur::create($data);
        //     if($create_data) {
        //         return redirect('/fitur');
        //     }
        //     else {
        //         return redirect()->back();
        //     }
        // }
    }

    public function edit($id)
    {
	// mengambil data pegawai berdasarkan id yang dipilih
	$data_fitur = Fitur::select('tbl_fitur.id_fitur','tbl_fitur.jenis_fitur','tbl_fitur.id_paket','tbl_paket.nama_paket', 'tbl_fitur.status')
    ->join('tbl_paket', 'tbl_paket.id', '=', 'tbl_fitur.id_paket')->where('id_fitur',$id)->get();
    $data_paket= Paket::get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('fitur/update',['data_fitur' => $data_fitur,"data_paket"=>$data_paket,]);
 
    }



    public function edit_fitur(Request $request,$id){
        $this->validate($request, [
            'jenis_fitur' => 'required',
            'id_paket' => 'required',
            'status' => 'required',
        ]);
        $jenis_fitur = $request->input("jenis_fitur");
        $id_paket = $request->input("id_paket");
        $status = $request->input("status");
        $cek = Fitur::where('status', 'aktif')->get();
        $data = [
            "jenis_fitur" => $jenis_fitur,
            "id_paket" => $id_paket,
            "status" =>$status,
        ];

        // if($status === 'aktif') {
        //     if(count($cek) >= 4) {
        //         return redirect()->back()->with();
        //     }
        //     else {
                $update_data = Fitur::where("id_fitur", $id)->update($data);
                if($update_data) {
                    return redirect('/fitur')->with('sukses', 'Data berhasil di update');
                }
                else {
                    return redirect()->back()->with('gagal', 'Data tidak berhasil di update');
                }
            // }
        // }
        // else {
        //     $update_data = Fitur::where("id_fitur",$id)->update($data);
        //     if($update_data) {
        //         return redirect('/fitur');
        //     }
        //     else {
        //         return redirect()->back();
        //     }
        // }
}

    public function delete($id){
        $delete_data=Fitur::find($id)->delete();
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
    
      
    $cari_fitur = Fitur::where('jenis_fitur', 'like', "%".$cari."%")
    ->orWhere('id_paket', 'like', "%".$cari."%")
    ->paginate(5);

    $data= ['data_fitur' => $cari_fitur];
        
    return view('index',$data);
    
    }
}
