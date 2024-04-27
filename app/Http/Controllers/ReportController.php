<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ReportController extends Controller
{
    public function index(){
        // Alert::toast('selamat datang di laporan diskriminasi','success');
        $status = 'diskriminasi';
        return view ('report', compact('status'));

    }
    public function create(Request $request){
        $tanggal_lahir = Carbon::createFromFormat('m/d/Y', $request->tanggal_lahir)->format('Y-m-d');
        $laporan = new Laporan();
        $laporan->nama = $request->name;
        $laporan->nomor_telepon = $request->phone;
        $laporan->jenis_kelamin = $request->jk;
        $laporan->tanggal_lahir = $tanggal_lahir;
        $laporan->laporan = $request->laporan;
        $laporan->save();
        Alert::toast('Laporan berhasil dikirim','success');
        return view ('report');
    }
}
