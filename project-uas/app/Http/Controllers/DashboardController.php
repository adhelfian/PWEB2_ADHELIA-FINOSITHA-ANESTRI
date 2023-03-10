<?php

namespace App\Http\Controllers;
use App\Models\tabel_penjualan;
use Illuminate\Http\Request;

// use App\Http\Controllers\Redirect;
// use Illuminate\Support\Facades\Redirect;

class DashboardController extends Controller
{
    public function tampil()
    {
        $tabel_penjualan = tabel_penjualan::all();
        // return view('Breeze.index',compact('tabel_penjualan'));
        return view('Breeze.index', compact('tabel_penjualan'));
    }

    public function tambahtiket()
    {
        return view('Breeze.tambah-tiket');
    }

    public function inserttiket(Request $request)
    {
        $data = $request->all();
        $tiket = new tabel_penjualan();
        $tiket->plat = $data['plat'];
        $tiket->jumlah_orang = $data['jumlah_orang'];
        $tiket->harga = $data['harga'];
        $tiket->total_harga = $data['total_harga'];
        // dd($tiket);
        $tiket->save();
        return redirect()->route('dashboard');
    }
    
    public function delete(string $id_jual)
    {
        tabel_penjualan::where('id_jual',$id_jual)->delete();
        return redirect()->to('dashboard')->with('success');
}
   
}
