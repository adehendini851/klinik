<?php

namespace App\Http\Controllers;

use App\Services\MatematikaService;

class MatematikaController extends Controller
{
    public function index($n1, $n2)
    {
        $mtkService = new MatematikaService();
        $mtkService->nilai1 = $n1;
        $mtkService->nilai2 = $n2;
        return view('matematika', [
            'nilai_1' => $n1,
            'nilai_2' => $n2,
            'penjumlahan' => $mtkService->penjumlahan(),
            'pengurangan' => $mtkService->pengurangan(),
            'perkalian' => $mtkService->perkalian(),
            'pembagian' => $mtkService->pembagian(),
        ]);
    }
}
