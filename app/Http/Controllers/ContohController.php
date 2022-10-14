<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContohController extends Controller
{
    public function biodata()
    {
        echo "<h1>Biodata Mahasiswa</h1>";
        echo "NIM : <strong>nim anda</strong><br/>";
        echo "Nama : <strong>nama anda</strong><br/>";
        echo "Email : <strong>email anda</strong><br/>";
        echo "Alamat : <strong>alamat anda</strong><br/>";
    }

    public function dataDiri()
    {
        return view('biodata');
    }

    public function profil()
    {
        return view('profil', [
            'nama' => 'Ade Hendini',
            'alamat' => 'Pontianak, Kalimantan Barat'
        ]);
    }
}
