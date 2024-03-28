<?php

namespace App\Controllers;

use App\Models\model_latihan1;

class contoh1 extends BaseController
{
    public function index()
    {
        echo "selamat datang.. selamat belajar web programming";
    }

    public function penjumlahan($n1, $n2)
    {
        $model = new model_latihan1(); // Membuat instance dari model
        $hasil = $model->jumlah($n1, $n2); // Memanggil method jumlah dari model
        echo "Hasil penjumlahan dari " . $n1 . " + " . $n2 . " = " . $hasil;
    }
}
