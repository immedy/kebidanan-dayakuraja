<?php

namespace App\Http\Controllers;

use App\Models\faskes;
use App\Models\pegawai;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class PegawaiController extends Controller
{
    public function Login()
    {
        return view('Layout.login');
    }


    public function Pegawai()
    {
        return view('PageDashboardRs.MasterData.Pegawai.HomePegawai',[
            'pegawai' => pegawai::all(),
            'faskes' => faskes::all()
        ]);
    }
    public function AddPegawai(Request $request)
    {
        $ValidasiAddPegawai = $request->validate([
            'nip' => 'required',
            'nama' => 'required',
            'faskes_id' => 'required'
        ]);
        $ValidasiAddPegawai['status'] = 1;
        pegawai::create($ValidasiAddPegawai);
        if($ValidasiAddPegawai){
            Alert::Success('Berhasil');
        }
        return back();
    }
    public function Username($id)
    {
        $username = pegawai::with('user')->find($id);
        return response()->json($username);
    }

    public function AddUsername(Request $request)
    {

        $request['status']= 1;
        $ValidasiAddUsername = $request->validate([
            'pegawai_id' => 'required',
            'username' => 'required',
            'password' => 'required',
            'hak_akses' => 'required',
            'status' => 'required',
        ]);
        $ValidasiAddUsername['password'] = bcrypt($ValidasiAddUsername['password']);
        $pegawai_id = $ValidasiAddUsername['pegawai_id'];
        User::updateOrCreate(['pegawai_id'=>$pegawai_id], $ValidasiAddUsername);
        if($ValidasiAddUsername){
            Alert::Success('Berhasil');
        }
        return back();

    }
    public function Autentikasi(Request $request)
    {
        $ValidasiLogin = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($ValidasiLogin)){
            $ValidasiLogin = Auth()->user();
            if ($ValidasiLogin->status == '1' && $ValidasiLogin->hak_akses == '1'){
                $request->session()->regenerate();
                Alert::Toast('Selamat Datang','success');
                return redirect('/DashboardRS');
            } elseif ($ValidasiLogin->status == '1' && $ValidasiLogin->hak_akses == '2') {
                $request->session()->regenerate();
                Alert::Toast('Selamat Datang','success');
                return redirect('/');
            }
            else {
                auth()->logout();
            }
        }
        Alert::error('Username Dan Password Salah');
        return back();
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
