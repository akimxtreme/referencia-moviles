<?php

class Modelos {

    private $lng_idmodelo;
    private $str_modelo;
    private $blb_img_normal;
    private $blb_img_mini;
    private $blb_img_galeria1;
    private $blb_img_galeria2;
    private $blb_img_galeria3;
    private $dmt_fecha;
    private $lng_idusuario;
    private $lng_idmarca;
    private $lng_idtipo_equipo;
    private $lng_idgama;
    private $str_friendly_url;

    public function Modelos() {
        $this->lng_idmodelo = 0;
        $this->str_modelo = null;
        $this->blb_img_normal = null;
        $this->blb_img_mini = null;
        $this->blb_img_galeria1 = null;
        $this->blb_img_galeria2 = null;
        $this->blb_img_galeria3 = null;
        $this->lng_idusuario = 0;
        $this->lng_idmarca = 0;
        $this->lng_idtipo_equipo = 0;
        $this->lng_idgama = 0;
        $this->str_friendly_url = null;
    }

    public function getLng_idmodelo() {
        return $this->lng_idmodelo;
    }

    public function setLng_idmodelo($lng_idmodelo) {
        $this->lng_idmodelo = $lng_idmodelo;
    }

    public function getStr_modelo() {
        return $this->str_modelo;
    }

    public function setStr_modelo($str_modelo) {
        $this->str_modelo = $str_modelo;
    }

    public function getBlb_img_normal() {
        return $this->blb_img_normal;
    }

    public function setBlb_img_normal($blb_img_normal) {
        $this->blb_img_normal = $blb_img_normal;
    }

    public function getBlb_img_mini() {
        return $this->blb_img_mini;
    }

    public function setBlb_img_mini($blb_img_mini) {
        $this->blb_img_mini = $blb_img_mini;
    }

    public function getBlb_img_galeria1() {
        return $this->blb_img_galeria1;
    }

    public function setBlb_img_galeria1($blb_img_galeria1) {
        $this->blb_img_galeria1 = $blb_img_galeria1;
    }

    public function getBlb_img_galeria2() {
        return $this->blb_img_galeria2;
    }

    public function setBlb_img_galeria2($blb_img_galeria2) {
        $this->blb_img_galeria2 = $blb_img_galeria2;
    }

    public function getBlb_img_galeria3() {
        return $this->blb_img_galeria3;
    }

    public function setBlb_img_galeria3($blb_img_galeria3) {
        $this->blb_img_galeria3 = $blb_img_galeria3;
    }

    public function getDmt_fecha() {
        return $this->dmt_fecha;
    }

    public function setDmt_fecha($dmt_fecha) {
        $this->dmt_fecha = $dmt_fecha;
    }

    public function getLng_idusuario() {
        return $this->lng_idusuario;
    }

    public function setLng_idusuario($lng_idusuario) {
        $this->lng_idusuario = $lng_idusuario;
    }

    public function getLng_idmarca() {
        return $this->lng_idmarca;
    }

    public function setLng_idmarca($lng_idmarca) {
        $this->lng_idmarca = $lng_idmarca;
    }

    public function getLng_idtipo_equipo() {
        return $this->lng_idtipo_equipo;
    }

    public function setLng_idtipo_equipo($lng_idtipo_equipo) {
        $this->lng_idtipo_equipo = $lng_idtipo_equipo;
    }

    public function getLng_idgama() {
        return $this->lng_idgama;
    }

    public function setLng_idgama($lng_idgama) {
        $this->lng_idgama = $lng_idgama;
    }

    public function getStr_friendly_url() {
        return $this->str_friendly_url;
    }

    public function setStr_friendly_url($str_friendly_url) {
        $this->str_friendly_url = $str_friendly_url;
    }

}
