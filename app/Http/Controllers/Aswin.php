<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;

class Aswin extends Controller
{
    public function index()
    {
        $data = DB::table('kamar')
            ->join('dokter', 'id_dokter', '=', 'dokter.id')
            ->join('pasien', 'id_pasien', '=', 'pasien.id')
            ->select(
                'pasien.id as pasien_id',
                'dokter.id as dokter_id',
                'kamar.id as kamar_id',
                'pasien.nama as pasien_nama',
                'pasien.alamat as alamat',
                'dokter.jabatan as jabatan',
                'dokter.nama as dokter_nama'
            )
            ->get();

        return view('utama0130', ["datas" => $data]);
    }
    public function import(Request $request)
    {
        Excel::import(new UsersImport, $request->file('file'));

        return redirect('/')->with('success', 'All good!');
    }
}
