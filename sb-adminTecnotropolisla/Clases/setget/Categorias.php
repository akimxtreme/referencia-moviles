<?php

class Categorias {

    private $lng_idcategoria;
    private $lng_idmarca;
    private $lng_idnoticia;
    private $lng_idusuario;

    public function Categorias() {
        $this->lng_idcategoria = 0;
        $this->lng_idmarca = 0;
        $this->lng_idnoticia = 0;
        $this->lng_idusuario = 0;
    }

    public function setLng_idcategoria($lng_idcategoria) {
        $this->lng_idcategoria = $lng_idcategoria;
    }

    public function getLng_idcategoria() {
        return $this->lng_idcategoria;
    }

    public function setLng_idmarca($lng_idmarca) {
        $this->lng_idmarca = $lng_idmarca;
    }

    public function getLng_idmarca() {
        return $this->lng_idmarca;
    }

    public function setLng_idnoticia($lng_idnoticia) {
        $this->lng_idnoticia = $lng_idnoticia;
    }

    public function getLng_idnoticia() {
        return $this->lng_idnoticia;
    }

    public function setLng_idusuario($lng_idusuario) {
        $this->lng_idusuario = $lng_idusuario;
    }

    public function getLng_idusuario() {
        return $this->lng_idusuario;
    }

}
