<?php

use CodeIgniter\BaseModel;

class model_latihan1 extends BaseModel
{
    //membuat variable untuk menampung nilai 
    public $nilai1, $nilai2, $nilai3;
    //method penjumblahan 
    public function jumlah($nil1 = null, $nil2 = null)
    {
        $this->nilai1 = nil1;
        $this->nilai2 = nil2;
        $this->hasil = $this->nilai1 + $this->nilai2;
        return $this->hasil;
    }
}
