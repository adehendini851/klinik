<?php

namespace App\Services;

class MatematikaService
{
    public $nilai1;
    public $nilai2;

    public function penjumlahan()
    {
        return $this->nilai1 + $this->nilai2;
    }

    public function pengurangan()
    {
        return $this->nilai1 - $this->nilai2;
    }

    public function perkalian()
    {
        return $this->nilai1 * $this->nilai2;
    }

    public function pembagian()
    {
        return $this->nilai1 / $this->nilai2;
    }
}
