<?php

class Mahasiswa
{
    private $nim;
    private $nama;
    private $prodi;
    private $ipk;

    public function __construct($nim, $nama, $prodi, $ipk)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->prodi = $prodi;
        $this->ipk = $ipk;
    }

    public function info()
    {
        return "NIM: {$this->nim}<br>"
            . "Nama: {$this->nama}<br>"
            . "Prodi: {$this->prodi}<br>"
            . "IPK: {$this->ipk}";
    }

    public function predikat()
    {
        if ($this->ipk >= 3.50) {
            return "Cumlaude";
        } elseif ($this->ipk >= 3.00) {
            return "Sangat Memuaskan";
        } else {
            return "Memuaskan";
        }
    }
}