<?php

namespace App\Http\Controllers;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class AuthController extends Controller
{
    public function login(Request $request){
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required'
        ]);

        $username = $request->input("username");
        $password = $request->input("password");

        $account_data=Users::where("username",$username)->first();
        if(!$account_data){
            return redirect()->back()->with('eror_login','username tidak ditemukan')->withInput($request->except('pasword'));
        }

        if(Hash::check($password,$account_data->password)){
            $request->session()->put('account_data',$account_data);
            return redirect('dashboard');
        }

        else{
            return redirect()->back();
        }
    }

    public function logout(Request $request){
        $request->session()->flush();
        return redirect('/admin');
    }

    public function showprofil(Request $request) {
        $account_data = $request->session()->get('account_data');
        return view('/users/view', [
            'account_data' => $account_data
        ]);
    }

    public function editprofil(Request $request) {
        $account_data = $request->session()->get('account_data');
        $users = Users::where('id', $account_data['id'])->get();
        return view('/users/update', [
            'users' => $users
        ]);
    }

    public function update(Request $request, $id) {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
            'profil' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $username = $request->input('username');
        $password = $request->input('password');
        $profil = $request->file('profil');
        $nama_profil = time()."_".$profil->getClientOriginalName();
        $profil->move(public_path().'/storage',$nama_profil);

        $data = [
            'username' => $username,
            'password' => password_hash($password, PASSWORD_ARGON2ID),
            'profil' => $nama_profil,
        ];

        $update_profil = Users::where('id', $id)->update($data);
        if($update_profil) {
            return redirect('/dashboard')->with('sukses', 'Profil berhasil di update');
        }
        else {
            return redirect()->back()->with('gagal', 'Profil tidak berhasil di update');
        }
    }

    
}
