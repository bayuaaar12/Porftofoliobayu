<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Session\Session;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function portofoliodaftar()
    {
        if (empty(session('users'))) {
            session()->flash('error', 'Harap login terlebih dahulu');
            return redirect('loginakun');
        }
        $portofolio = DB::table('portofolio')
            ->orderBy('idportofolio', 'desc')->get();
        $data = [
            'title' => 'Daftar Portofolio',
            'portofolio' => $portofolio,
            'idwarga' => '',
        ];
        return view('admin/portofoliodaftar', $data);
    }
    public function portofoliotambah()
    {
        if (empty(session('users'))) {
            session()->flash('error', 'Harap login terlebih dahulu');
            return redirect('loginakun');
        }
        $data = [
            'title' => 'Tambah Portofolio',
        ];
        return view('admin/portofoliotambah', $data);
    }
    public function portofoliotambahsimpan(Request $request)
    {
        if (empty(session('users'))) {
            session()->flash('error', 'Harap login terlebih dahulu');
            return redirect('loginakun');
        }
        $judul = $request->input('judul');
        $deskripsi = $request->input('deskripsi');
        $tanggal = $request->input('tanggal');
        $foto = $request->file('foto')->getClientOriginalName();
        $request->file('foto')->move(public_path('foto'), $foto);
        DB::table('portofolio')->insert([
            'judul' => $judul,
            'deskripsiportofolio' => $deskripsi,
            'tanggal' => $tanggal,
            'foto' => $foto,
        ]);
        session()->flash('success', 'Berhasil menambahkan data!');
        return redirect('panel/portofoliodaftar');
    }
    public function portofolioedit($id)
    {
        if (empty(session('users'))) {
            session()->flash('error', 'Harap login terlebih dahulu');
            return redirect('loginakun');
        }
        $row = DB::table('portofolio')->where('idportofolio', $id)->first();
        $data = [
            'title' => 'Edit Portofolio',
            'row' => $row,
        ];
        return view('admin/portofolioedit', $data);
    }
    public function portofolioeditsimpan(Request $request, $id)
    {
        if (empty(session('users'))) {
            session()->flash('error', 'Harap login terlebih dahulu');
            return redirect('loginakun');
        }
        $data = [
            'judul' => $request->input('judul'),
            'deskripsiportofolio' => $request->input('deskripsi'),
            'tanggal' => $request->input('tanggal'),
        ];
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto')->getClientOriginalName();
            $request->file('foto')->move(public_path('foto'), $foto);
            $data['foto'] = $foto;
        }
        DB::table('portofolio')->where('idportofolio', $id)->update($data);
        session()->flash('success', 'Data berhasil diedit!');
        return redirect('panel/portofoliodaftar');
    }
    public function portofoliohapus($id)
    {
        if (empty(session('users'))) {
            session()->flash('error', 'Harap login terlebih dahulu');
            return redirect('loginakun');
        }
        DB::table('portofolio')->where('idportofolio', $id)->delete();
        session()->flash('success', 'Berhasil menghapus data!');
        return redirect('panel/portofoliodaftar');
    }
    public function logout()
    {
        session()->flush();
        return redirect('/loginakun');
    }
}
