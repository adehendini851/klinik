<?php

namespace App\Http\Controllers;

use App\Services\MatematikaService;
use Illuminate\Http\Request;

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

    public function operasi()
    {
        return view('form_matematika');
    }

    public function hasil(Request $request)
    {
        $nilai1 = $request->input('nilai_1');
        $nilai2 = $request->input('nilai_2');
        $mtkService = new MatematikaService();
        $mtkService->nilai1 = $nilai1;
        $mtkService->nilai2 = $nilai2;
        return view('hasil_matematika', [
            'nilai_1' => $nilai1,
            'nilai_2' => $nilai2,
            'penjumlahan' => $mtkService->penjumlahan(),
            'pengurangan' => $mtkService->pengurangan(),
            'perkalian' => $mtkService->perkalian(),
            'pembagian' => $mtkService->pembagian(),
        ]);
    }
}
