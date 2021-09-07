<?php

namespace App\Http\Controllers;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class TeamController extends Controller
{
    //
    public function index(){

        $data_team=Team::get();
        $data=["data_team"=>$data_team];
        return view('team/index',$data);
    }

    public function add(){
        return view('team/add');
    }

    public function add_team(Request $request){
        $this->validate($request, [
            'nama_team' => 'required',
            'pekerjaan' => 'required',
            'foto' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'link' => 'required',
            'status' => 'required',
           
        ]);

        $nama_team = $request->input("nama_team");
        $pekerjaan = $request->input("pekerjaan");
        $foto = $request->file('foto');
        $status= $request->input("status");
        $nama_foto = time()."_".$foto->getClientOriginalName();
        $foto->move(public_path().'/storage',$nama_foto);
        $link = $request->input("link");
       
        $data = [
            "nama_team" => $nama_team,
            "pekerjaan" => $pekerjaan,
            "foto" => $nama_foto,
            "link" => $link,
            "status" => $status,
          
        ];
        
        
     
            $create_data = Team::create($data);
            if($create_data) {
                return redirect('/team')->with('sukses', 'Data berhasil ditambahkan');
            }
            else {
                return redirect()->back()->with('gagal', 'Data tidak berhasil ditambahkan');
            }
        
    }

    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $data_team= Team::where('id',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('team/update',['data_team' => $data_team]);
 
    }



    public function edit_team(Request $request,$id){
        $this->validate($request, [
            'nama_team' => 'required',
            'pekerjaan' => 'required',
            'foto' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'link' => 'required',
            'status' => 'required',
            
        ]);
        $nama_team = $request->input("nama_team");
        $pekerjaan = $request->input("pekerjaan");
        $foto = $request->file('foto');
        $status = $request->input("status");
        $nama_foto = time()."_".$foto->getClientOriginalName();
        $foto->move(public_path().'/storage',$nama_foto);
        $link = $request->input("link");
       
        $data = [
            "nama_team" => $nama_team,
            "pekerjaan" => $pekerjaan,
            "foto" => $nama_foto,
            "link" => $link,
            "status" =>$status
           
        ];

       
            $update_data = Team::where("id",$id)->update($data);
            if($update_data) {
                return redirect('/team')->with('sukses', 'Data berhasil di update');
            }
            else {
                return redirect()->back()->with('gagal', 'Data tidak berhasil di update');
            }
        
        
    }


    public function delete($id){
        $delete_data=Team::find($id)->delete();
        if($delete_data) {
            return redirect()->back()->with('sukses', 'Data berhasil dihapus');
        }
        else {
            return redirect()->back()->with('gagal','Data tidak berhasil dihapus');
        }

         return redirect()->back();
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;
    // menangkap data pencarian
    
      
    $cari_team = Team::where('nama_team', 'like', "%".$cari."%")
    ->orWhere('pekerjaan', 'like', "%".$cari."%")
    ->paginate(5);

    $data= ['data_team' => $cari_team];
        
    return view('index',$data);
    
    }
}
