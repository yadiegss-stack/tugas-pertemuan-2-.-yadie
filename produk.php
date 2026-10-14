<?php

class Produk
{
    private $nama;
    private $harga;
    private $stok;

    public function __construct($nama, $harga, $stok)
    {
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
    }

    public function totalNilai()
    {
        return $this->harga * $this->stok;
    }
}