<?php

class ModelosEspecificaciones {

    private $lng_idmodelo_especificacion;
    private $lng_idmodelo;
    private $lng_idespecificacion;
    private $str_valor;
    private $lng_idusuario;

    public function ModelosEspecificaciones() {
        $this->lng_idmodelo_especificacion = 0;
        $this->lng_idmodelo = 0;
        $this->lng_idespecificacion = 0;
        $this->str_valor = null;
        $this->lng_idusuario = 0;
    }

    public function getLng_idmodelo_especificacion() {
        return $this->lng_idmodelo_especificacion;
    }

    public function setLng_idmodelo_especificacion($lng_idmodelo_especificacion) {
        $this->lng_idmodelo_especificacion = $lng_idmodelo_especificacion;
    }

    public function getLng_idmodelo() {
        return $this->lng_idmodelo;
    }

    public function setLng_idmodelo($lng_idmodelo) {
        $this->lng_idmodelo = $lng_idmodelo;
    }

    public function getLng_idespecificacion() {
        return $this->lng_idespecificacion;
    }

    public function setLng_idespecificacion($lng_idespecificacion) {
        $this->lng_idespecificacion = $lng_idespecificacion;
    }

    public function getStr_valor() {
        return $this->str_valor;
    }

    public function setStr_valor($str_valor) {
        $this->str_valor = $str_valor;
    }

    public function getLng_idusuario() {
        return $this->lng_idusuario;
    }

    public function setLng_idusuario($lng_idusuario) {
        $this->lng_idusuario = $lng_idusuario;
    }

}
