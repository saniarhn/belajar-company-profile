<?php

namespace App\Http\Controllers;
use App\Models\Navbar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class NavbarController extends Controller
{
    public function index(){

        $data_navbar=Navbar::get();
        $data=["data_navbar"=>$data_navbar];
        return view('navbar/index',$data);
    }
    public function add(){
        return view('navbar/add');
    }
    public function add_navbar(Request $request){
        $this->validate($request, [
       
            'foto'=>'required',
            'judul1'=>'required',
            'judul2'=>'required',
            'judul3'=>'required',
            'judul4'=>'required',
            'judul5'=>'required',
            'judul6'=>'required',
            
        ]);

       
        $foto = $request->file('foto');
        $nama_foto = time()."_".$foto->getClientOriginalName();
        $foto->move(public_path().'/storage',$nama_foto);

        $judul1 = $request->input("judul1");
        $judul2 = $request->input("judul2");
        $judul3 = $request->input("judul3");
        $judul4 = $request->input("judul4");
        $judul5 = $request->input("judul5");
        $judul6 = $request->input("judul6");
        

        $cek = Navbar::get();

        $data = [
           
            "foto"=>$nama_foto,
            "judul1"=>$judul1,
            "judul2"=>$judul2,
            "judul3"=>$judul3,
            "judul4"=>$judul4,
            "judul5"=>$judul5,
            "judul6"=>$judul6,
        ];
        
        if(count($cek) >= 1) {
            return redirect()->back()->with('gagal', 'Maaf, data tidak berhasil di tambah. Status aktif maksimal hanya boleh 1');
        }
        else {
            $create_data = Navbar::create($data);
            if($create_data) {
                return redirect('/navbar')->with('sukses', 'Data berhasil ditambahkan');
            }
            else {
                return redirect()->back()->with('gagal', 'Maaf ya, hanya satu aja');
            }
        }
    }

    public function edit($id)
    {
	// mengambil data pegawai berdasarkan id yang dipilih
	$data_navbar = Navbar::where('id',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('navbar/update',['data_navbar' => $data_navbar]);
 
    }



    public function edit_navbar(Request $request,$id){
        $this->validate($request, [
            'foto'=>'required',
            'judul1'=>'required',
            'judul2'=>'required',
            'judul3'=>'required',
            'judul4'=>'required',
            'judul5'=>'required',
            'judul6'=>'required',
            
        ]);

     
       
        $foto = $request->file('foto');
        $nama_foto = time()."_".$foto->getClientOriginalName();
        $foto->move(public_path().'/storage',$nama_foto);
        
        $judul1 = $request->input("judul1");
        $judul2 = $request->input("judul2");
        $judul3 = $request->input("judul3");
        $judul4 = $request->input("judul4");
        $judul5 = $request->input("judul5");
        $judul6 = $request->input("judul6");

        $cek = Navbar::get();

        $data = [
            
            "foto"=>$nama_foto,
            "judul1"=>$judul1,
            "judul2"=>$judul2,
            "judul3"=>$judul3,
            "judul4"=>$judul4,
            "judul5"=>$judul5,
            "judul6"=>$judul6,
        ];
        
        
        $update_data =Navbar::where("id",$id)->update($data);
        if($update_data) {
            return redirect('/navbar')->with('sukses', 'Data berhasil di update');
        }
        else {
            return redirect()->back()->with('gagal', 'Data tidak berhasil di update');
        }
     
    }

    public function delete($id){
        $delete_data = Navbar::find($id)->delete();
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
    
      
    $cari_navbar = Navbar::where('judul1', 'like', "%".$cari."%")
    ->orWhere('judul2', 'like', "%".$cari."%")
    ->paginate(5);

    $data= ['data_navbar' => $cari_navbar];
        
    return view('index',$data);
    
    }
}
