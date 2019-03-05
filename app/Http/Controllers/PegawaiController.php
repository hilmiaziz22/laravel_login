<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    public function index(){
        //Mengambil data dari table pegawai
        $pegawai = DB::table('pegawai')->paginate(10);

        //Mengirim data pegawai ke Page Index
        return view('index',['pegawai' => $pegawai]);
    }

    public function tambah(){
        //Memanggil view Tambah
        return view('tambah');
    }

    //Method insert data ke table pegawai
    public function store(Request $request){
            //Insert data ke table pegawai

        DB::table('pegawai')->insert([
           'pegawai_nama' => $request->nama,
           'pegawai_jabatan' => $request->jabatan,
           'pegawai_umur' => $request->umur,
           'pegawai_alamat' => $request->alamat

        ]);

        //Alihkan ke halaman pegawai
        return redirect('/pegawai');
    }

    public function edit($id){

        //Mengambil data pegawai berdasarkan id yang dipilih
        $pegawai = DB::table('pegawai')->where('pegawai_id', $id)->get();
        
        //Passing data pegawai yang didapat ke view edit.blade.php
        return view('edit',['pegawai'=> $pegawai]);

    }

    public function update(Request $request){
    
       //Update data pegawai
       DB::table('pegawai')->where('pegawai_id', $request->id)->update([
           'pegawai_nama' => $request->nama,
           'pegawai_jabatan' => $request->jabatan,
           'pegawai_umur' => $request->umur,
           'pegawai_alamat' => $request->alamat

       ]);
       //Alihkan ke Halaman Pegawai
       return redirect('/pegawai');
    }

    //Method untuk hapus data pegawai
    public function hapus($id){
        //Menghapus data pegawai berdasarkan id
        DB::table('pegawai')->where('pegawai_id', $id)->delete();
        
        return redirect('/pegawai');
    }

    public function cari(Request $request){

        //menangkap data dari pencarian
        $cari = $request->cari;

        //Mengambil data dari tabel pegawai sesuai value pada pencarian data
        $pegawai = DB::table('pegawai')
        ->where('pegawai_nama', 'like', "%".$cari."%")
        ->paginate();

        //mengirim data pegawai ke view index
        return view('index',['pegawai' => $pegawai]);
    

    }

}