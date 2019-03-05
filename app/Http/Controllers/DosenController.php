<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(){
        $nama = "Hilmi Aziz R";
        $pelajaran =["Algoritma", "Kalkulus", "Kimia", "Pemrograman Web"];
        return view('biodata', ['nama' =>$nama, 'matkul' => $pelajaran]);
    }
}
