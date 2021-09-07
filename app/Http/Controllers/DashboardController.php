<?php

namespace App\Http\Controllers;
use App\Models\Users;
use App\Models\Clients;
use App\Models\Team;
use App\Models\Paket;
use App\Models\Promo;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function index(){

        $account_data=Users::get();
        $clients = Clients::all()->count();
        $team = Team::all()->count();
        $paket = Paket::all()->count();
        $promo = Promo::all()->count();
        $data=[
            "data_akun"=>$account_data,
            "clients" => $clients,
            "team" => $team,
            "paket" => $paket,
            "promo" => $promo,
        ];

        return view('users/index',$data);
    }


}
