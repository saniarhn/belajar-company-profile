<?php

namespace App\Http\Controllers;
use App\Models\Clients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Paket;
use App\Models\Team;
use App\Models\Promo;
use App\Models\Kelebihan;
use App\Models\Fitur;
use App\Models\Gallery;
use App\Models\Home;

use App\Models\Navbar;
use App\Models\Maps;
use App\Models\ContactUs;

use App\Models\ContactForm;

class AppController extends Controller
{
    //

    public function index(){

        $data_client=Clients::where('status', 'aktif')->get();
        $data_paket=Paket::where('status', 'aktif')->limit(2)->get();
        $data_team=Team::where('status', 'aktif')->get();
        $data_kelebihan=Kelebihan::where('status', 'aktif')->get();
        $data_fitur=Fitur::where('status', 'aktif')->get();

        $data_promo = Promo::select('tbl_promo.id','tbl_promo.idpaket','tbl_paket.nama_paket', 'tbl_promo.harga_promo')
        ->join('tbl_paket', 'tbl_paket.id', '=', 'tbl_promo.idpaket')->where('tbl_promo.status', 'aktif')->get();
        $data_promo_paginate = Promo::select('tbl_promo.id','tbl_promo.idpaket','tbl_paket.nama_paket', 'tbl_promo.harga_promo')
        ->join('tbl_paket', 'tbl_paket.id', '=', 'tbl_promo.idpaket')->where('tbl_promo.status', 'aktif')->paginate(3);
        $data_gallery=Gallery::get();
        $data_home = Home::get();
       
        $data_navbar = Navbar::get();
        $data_maps = Maps::get();
        $data_contactus = ContactUs::get();
       

        $count_client=Clients::all()->where('status','aktif')->count();
        $count_team=Team::all()->where('status','aktif')->count();
        $count_paket=Paket::all()->where('status','aktif')->count();
        $data=["data_client"=>$data_client,
            "data_paket"=>$data_paket,
            "data_team"=>$data_team,
            "data_promo"=>$data_promo,
            "data_promo_paginate" => $data_promo_paginate,
            "data_kelebihan"=>$data_kelebihan,
            "data_gallery"=>$data_gallery,
            "data_home"=>$data_home,
            "data_navbar"=>$data_navbar,
            "data_maps"=>$data_maps,
            "data_contactus"=>$data_contactus,
            "count_client"=>$count_client,
            "count_paket"=>$count_paket,
            "count_team"=>$count_team,
            "data_fitur"=>$data_fitur,

        ];
        return view('/pages/home',$data);
    }
    
    public function add_contactform(Request $request){
        $this->validate($request, [
            'nama' => 'required',
            'email'=>'required',
            'pesan'=>'required',
            
        ]);

        $nama = $request->input("nama");
        $email = $request->input("email");
        $pesan = $request->input("pesan");
      

        $cek = ContactForm::get();

        $data = [
            "nama" => $nama,
            "email"=>$email,
            "pesan"=>$pesan,
        ];
    
            $create_data = ContactForm::create($data);
            if($create_data) {
                return redirect()->back()->with('sukses', 'Pesan berhasil dikirim');
            }
            else {
                return redirect()->back()->with('gagal', 'Maaf ya, hanya satu aja');
            }
        
    }

    public function paketreadmore() {
        $data_navbar = Navbar::get();
        $data_maps = Maps::get();
        $data_contactus = ContactUs::get();
        $data_home = Home::get();
        $data_paket = Paket::where('status', 'aktif')->paginate(3);
        $data_fitur = Fitur::get();
        $data=[
            "data_navbar"=>$data_navbar,
            "data_maps"=>$data_maps,
            "data_contactus"=>$data_contactus,
            "data_home" => $data_home,
            "data_paket" => $data_paket,
            "data_fitur" => $data_fitur,
        ];
        return view('/pages/readmore',$data);
    }

}
