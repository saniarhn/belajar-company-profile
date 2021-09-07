<?php

namespace App\Http\Controllers;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index(){

        $data_users=Users::get();
        $data=["data_users"=>$data_users];
        return view('user/index',$data);
    }
    public function add(){
        return view('user/add');
    }
    public function add_user(Request $request){
        $this->validate($request, [
            'username' => 'required',
            'password'=>'required',
            'profil' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            
        ]);

        $username = $request->input("username");
        $password = $request->input("password");
        $profil = $request->file('profil');
        
        $nama_foto = time()."_".$profil->getClientOriginalName();
        $profil->move(public_path().'/storage',$nama_foto);
     
        $data = [
            "username" => $username,
            "password" => password_hash($password,PASSWORD_ARGON2ID),
            "profil" => $nama_foto,
            
        ];
        
        
        $create_data = Users::create($data);
        if($create_data) {
            return redirect('/user')->with('sukses','akun berhasil dibuat');
        }
        else {
            return redirect()->back()->with('gagal','akun gagal dibuat');
        }
    }

    public function edit($id)
    {
	// mengambil data pegawai berdasarkan id yang dipilih
	$data_users = Users::where('id',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('user/update',['data_users' => $data_users]);
 
    }



    public function edit_user(Request $request,$id){
        $this->validate($request, [
            'username' => 'required',
            'password'=>'required',
            'profil' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $username = $request->input("username");
        $password = $request->input("password");
        $profil = $request->file('profil');
        
        $nama_foto = time()."_".$profil->getClientOriginalName();
        $profil->move(public_path().'/storage',$nama_foto);
     
        $data = [
            "username" => $username,
            "password" => password_hash($password,PASSWORD_ARGON2ID),
            "profil" => $nama_foto,
        ];

        $update_data = Users::where("id",$id)->update($data);
        if($update_data) {
            return redirect('/user')->with('sukses','akun berhasil diedit');
        }
        else {
            return redirect()->back()->with('gagal','akun gagal diedit');
        }
}

    public function delete($id){
        $delete_data=Clients::find($id)->delete();
        if($delete_data) {
            return redirect()->back()->with('sukses','akun berhasil dihapus');
        }
        else {
            return redirect()->back()->with('gagal','akun berhasil dihapus');
        }

         return redirect()->back();
     }
}
