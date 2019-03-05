<!-- Menghubungkan dengan view template Master -->
@extends('master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Halaman Kontak')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

        <p>Ini adalah Halaman Kontak</p>
        <table border="1">
            <tr>
                <td>Email</td>
                <td>:</td>
                <td>22ituhilmi@gmail.com</td>
            </tr>
            <tr>
                <td>Hp</td>
                <td>:</td>
                <td>0888-2301-276</td>
            </tr>

        </table>
@endSection
