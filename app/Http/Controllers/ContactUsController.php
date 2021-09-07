<?php

namespace App\Http\Controllers;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index(){

        $data_contactus=ContactUs::get();
        $data=["data_contactus"=>$data_contactus];
        return view('contactus/index',$data);
    }
    public function add(){
        return view('contactus/add');
    }
    public function add_contactus(Request $request){
        $this->validate($request, [
            'alamat' => 'required',
            
            'email'=>'required',
            'nomor'=>'required',
            
        ]);

        $alamat = $request->input("alamat");
        
        $email = $request->input("email");
        $nomor = $request->input('nomor');
       
        $cek = ContactUs::get();

        $data = [
            "alamat" => $alamat,
            "email"=>$email,
           
            "nomor"=>$nomor,
        ];
        
        if(count($cek) >= 1) {
            return redirect()->back()->with('gagal', 'Maaf, data tidak berhasil di tambah. Status aktif maksimal hanya boleh 1');
        }
        else {
            $create_data = ContactUs::create($data);
            if($create_data) {
                return redirect('/contactus')->with('sukses', 'Data berhasil ditambahkan');
            }
            else {
                return redirect()->back()->with('gagal', 'Maaf ya, hanya satu aja');
            }
        }
    }

    public function edit($id)
    {
	// mengambil data pegawai berdasarkan id yang dipilih
	$data_contactus = ContactUs::where('id',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('contactus/update',['data_contactus' => $data_contactus]);
 
    }



    public function edit_contactus(Request $request,$id){
        $this->validate($request, [
            'alamat' => 'required',
           
            'email'=>'required',
            'nomor'=>'required',
            
        ]);

        $alamat = $request->input("alamat");
        
        $email = $request->input("email");
        $nomor = $request->input('nomor');
      
        $cek = ContactUs::get();

        $data = [
            "alamat" => $alamat,
            "email"=>$email,
            
            "nomor"=>$nomor,
        ];
        
        
        $update_data =ContactUs::where("id",$id)->update($data);
        if($update_data) {
            return redirect('/contactus')->with('sukses', 'Data berhasil di update');
        }
        else {
            return redirect()->back()->with('gagal', 'Data tidak berhasil di update');
        }
     
    }

    public function delete($id){
        $delete_data = ContactUs::find($id)->delete();
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
    
      
    $cari_contactus = ContactUs::where('alamat', 'like', "%".$cari."%")
    ->orWhere('email', 'like', "%".$cari."%")
    ->paginate(5);

    $data= ['data_contactus' => $cari_contactus];
        
    return view('index',$data);
    
    }
}
