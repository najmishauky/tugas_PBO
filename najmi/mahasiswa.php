<?php
 class mahasiswa{
    public $nim = "3214 5426";
    public $nama = "najmi";
    public $jurusan = "pplg";

    function tampil_biodata(){
        echo $this -> nim;
        echo $this -> nama;
        echo $this -> jurusan;

    }
 }
 $tampil = new mahasiswa();
 $tampil-> tampil_biodata();