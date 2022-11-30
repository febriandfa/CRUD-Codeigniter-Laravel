<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index() {
        $mahasiswa = DB::table('tbl_mhs')
            ->join('tbl_jk', 'tbl_jk.id_jk', '=', 'tbl_mhs.jk')
            ->join('tbl_prodi', 'tbl_prodi.id_prodi', '=', 'tbl_mhs.prodi')
            ->get();
        return view('index', ['mahasiswa'=>$mahasiswa]);
    }

    public function tambah() {
        $jk = DB::table('tbl_jk')->get();
        $prodi = DB::table('tbl_prodi')->get();
        return view('tambah', ['jk'=>$jk, 'prodi'=>$prodi]);
    }

    public function store(Request $request) {
	    DB::table('tbl_mhs')->insert([
		    'nim' => $request->nim,
		    'nama_mhs' => $request->nama,
		    'jk' => $request->jk,
		    'alamat' => $request->alamat,
            'prodi' => $request->prodi,
            'foto' => $request->foto,
            'email' => $request->email
	    ]);
	    return redirect('mahasiswa');
    }

    public function hapus($id) {
	    DB::table('tbl_mhs')->where('id_mhs',$id)->delete();
	    return redirect('mahasiswa');
    }

    public function edit($id) {
	    $mahasiswa = DB::table('tbl_mhs')->where('id_mhs',$id)->get();
        $jk = DB::table('tbl_jk')->get();
        $prodi = DB::table('tbl_prodi')->get();
	    return view('edit', ['mahasiswa' => $mahasiswa, 'jk' => $jk, 'prodi' => $prodi]);
    }

    public function update(Request $request) {
	    DB::table('tbl_mhs')->where('id_mhs',$request->id)->update([
		    'nim' => $request->nim,
		    'nama_mhs' => $request->nama,
		    'jk' => $request->jk,
		    'alamat' => $request->alamat,
            'prodi' => $request->prodi,
            'foto' => $request->file,
            'email' => $request->email
	    ]);
	    return redirect('mahasiswa');
    }
}
