<?php

class Noticias {

    private $lng_idnoticia;
    private $str_titulo;
    private $str_subtitulo;
    private $str_contenido;
    private $blb_img_normal;
    private $blb_img_mini;
    private $lng_idusuario;

    public function Noticias() {
        $this->lng_idnoticia = 0;
        $this->str_titulo = "null";
        $this->str_subtitulo = "null";
        $this->str_contenido = "null";
        $this->blb_img_normal = "null";
        $this->blb_img_mini = "null";
        $this->lng_idusuario = 0;
    }

    public function getLng_idnoticia() {
        return $this->lng_idnoticia;
    }

    public function setLng_idnoticia($lng_idnoticia) {
        $this->lng_idnoticia = $lng_idnoticia;
    }

    public function getStr_titulo() {
        return $this->str_titulo;
    }

    public function setStr_titulo($str_titulo) {
        $this->str_titulo = $str_titulo;
    }

    public function getStr_subtitulo() {
        return $this->str_subtitulo;
    }

    public function setStr_subtitulo($str_subtitulo) {
        $this->str_subtitulo = $str_subtitulo;
    }

    public function getStr_contenido() {
        return $this->str_contenido;
    }

    public function setStr_contenido($str_contenido) {
        $this->str_contenido = $str_contenido;
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

    public function getLng_idusuario() {
        return $this->lng_idusuario;
    }

    public function setLng_idusuario($lng_idusuario) {
        $this->lng_idusuario = $lng_idusuario;
    }

}