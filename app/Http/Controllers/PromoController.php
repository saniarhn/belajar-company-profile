<?php

namespace App\Http\Controllers;
use App\Models\Promo;
use App\Models\Paket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PromoController extends Controller
{
    public function index(){
        $data_promo = Promo::select('tbl_promo.id','tbl_promo.idpaket','tbl_paket.nama_paket', 'tbl_promo.harga_promo', 'tbl_promo.status')
        ->join('tbl_paket', 'tbl_paket.id', '=', 'tbl_promo.idpaket')->get();
        $data=["data_promo"=>$data_promo];
        return view('promo/index',$data);
    }

        
    
    public function add(){
        $data_promo=Promo::get();
        $data_paket=Paket::get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('promo/add',['data_promo' => $data_promo ,"data_paket"=>$data_paket,]);
       
    }
    public function add_promo(Request $request){
        $this->validate($request, [
            'idpaket' => 'required',
            'harga_promo' => 'required',
            'status' =>'required',
          
        ]);

        $idpaket = $request->input("idpaket");
        $harga_promo = $request->input("harga_promo");
        $status = $request->input("status");
       
        $data = [
            "idpaket" => $idpaket,
            "harga_promo" => $harga_promo,
            "status" => $status, 
          
        ];
        
       
            $create_data = Promo::create($data);
            if($create_data) {
                return redirect('/promo')->with('sukses', 'Data berhasil ditambahkan');
            }
            else {
                return redirect()->back()->with('gagal', 'Data tidak berhasil ditambahkan');
            }
        
    }

    public function edit($id)
    {
	// mengambil data pegawai berdasarkan id yang dipilih
	$data_promo = Promo::select('tbl_promo.id','tbl_promo.idpaket','tbl_paket.nama_paket', 'tbl_promo.harga_promo', 'tbl_promo.status')
    ->join('tbl_paket', 'tbl_paket.id', '=', 'tbl_promo.idpaket')->where('tbl_promo.id',$id)->get();
    $data_paket= Paket::get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('promo/update',
    ['data_promo' => $data_promo,
    'data_paket'=>$data_paket,]);
 
    }



    public function edit_promo(Request $request,$id){
        $this->validate($request, [
            'idpaket' => 'required',
            'harga_promo' => 'required',
            'status' => 'required',
            
        ]);
        $idpaket = $request->input("idpaket");
        $harga_promo = $request->input("harga_promo");
        $status = $request->input("status");
     
        $data = [
            "idpaket" => $idpaket,
            "harga_promo" => $harga_promo,
            "status" =>$status,
            
        ];

       
            $update_data = Promo::where("id",$id)->update($data);
            if($update_data) {
                return redirect('/promo')->with('sukses', 'Data berhasil di update');
            }
            else {
                return redirect()->back()->with('gagal', 'Data tidak berhasil di update');
            }
        
}

    public function delete($id){
        $delete_data=Promo::find($id)->delete();
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
    
      
    $cari_promo = Promo::where('idpaket', 'like', "%".$cari."%")
    ->orWhere('harga_promo', 'like', "%".$cari."%")
    ->paginate(5);

    $data= ['data_promo' => $cari_promo];
        
    return view('index',$data);
    
    }
}
