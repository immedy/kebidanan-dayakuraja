<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\faskes;
use App\Models\pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use RealRashid\SweetAlert\Facades\Alert;

class PegawaiController extends Controller
{
    public function Login()
    {
        return view('Layout.login');
    }


    public function Pegawai()
    {
        $title = 'Delete User!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('PageDashboardRs.MasterData.Pegawai.HomePegawai', [
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
        if ($ValidasiAddPegawai) {
            Alert::Success('Berhasil');
        }
        return back();
    }

    public function deletePegawai(Request $request)
    {

        $id = Crypt::decryptString($request->input('filter'));
        $pegawai = Pegawai::find($id);
        $username = User::where('pegawai_id', $id)->first();
        // dd($username);
        if (!$pegawai) {
            // Handle case where Pegawai is not found
            return redirect()->back()->withErrors(['Pegawai not found']);
        }

        $pegawai->delete();
        if ($username) {
            # code...
            $username->delete();
        }
        Alert::success('Berhasil dihapus');

        return redirect()->back();
    }

    public function Username($id)
    {
        $username = pegawai::with('user')->find($id);
        return response()->json($username);
    }

    public function AddUsername(Request $request)
    {

        $request['status'] = 1;
        $ValidasiAddUsername = $request->validate([
            'pegawai_id' => 'required',
            'username' => 'required',
            'password' => 'required',
            'hak_akses' => 'required',
            'status' => 'required',
        ]);
        $ValidasiAddUsername['password'] = bcrypt($ValidasiAddUsername['password']);
        $pegawai_id = $ValidasiAddUsername['pegawai_id'];
        User::updateOrCreate(['pegawai_id' => $pegawai_id], $ValidasiAddUsername);
        if ($ValidasiAddUsername) {
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
        if (Auth::attempt($ValidasiLogin)) {
            $ValidasiLogin = Auth()->user();
            if ($ValidasiLogin->status == '1' && $ValidasiLogin->hak_akses == '1') {
                $request->session()->regenerate();
                Alert::Toast('Selamat Datang', 'success');
                return redirect()->route('DashboardRS');
            } elseif ($ValidasiLogin->status == '1' && $ValidasiLogin->hak_akses == '2') {
                $request->session()->regenerate();
                Alert::Toast('Selamat Datang', 'success');
                return redirect()->route('halamanutama');
            } else {
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

        return redirect()->route('login');
    }
}
