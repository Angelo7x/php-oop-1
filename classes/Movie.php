<?php

class Movie {
    public $titolo;
    public $durata;
    private $genere;
    public $anno;
    private $voto;

    public function __construct($_titolo,$_durata,$_genere,$_anno,$_voto)
    {
        $this->titolo=$_titolo;
        $this->durata=$_durata;
        $this->genere=$_genere;
        $this->anno=$_anno;
        $this->voto=$_voto;
    }
    public function getGenere()
    {
        return $this->genere;
    }
    public function getVoto()
    {
        return $this->voto;
    }
}