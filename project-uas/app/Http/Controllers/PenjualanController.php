<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tabel_penjualan;
class PenjualanController extends Controller
{
    public function index()
    {
        $penjualan = tabel_penjualan::all();
        return view('Breeze.template.pages.forms.penjualantiket',compact(['penjualan']));
    }

    public function store(Request $request)
    {
        penjualan::create($request->except(['_token','submit']));
        return redirect('/penjualan');
}
}
