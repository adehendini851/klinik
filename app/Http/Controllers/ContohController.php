<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContohController extends Controller
{
    public function biodata()
    {
        echo "<h1>Perkenalkan</h1>";
        echo "Nama Saya Ade Hendini<br/>
        Saya tinggal di Pontianak, Kalimantan Barat";
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
