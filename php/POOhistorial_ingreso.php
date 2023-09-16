<?php

class historial{

    public $idCono;
    public $tipoCono;
    public $DescCono;
    public $PosiSoluc;

    public function _construct($idCono) {
        $this->idCono= $idCono;
        $this->loadData();
    }
    private function loadData() {
        include("abrir_conexion.php");

    }
}




















?>