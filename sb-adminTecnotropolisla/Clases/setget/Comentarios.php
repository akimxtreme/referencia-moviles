<?php

class Comentarios {

    private $lng_idcomentario;
    private $str_asunto;
    private $str_contenido;
    private $lng_idmodelo;

    public function Comentarios() {
        $this->lng_idcomentario = 0;
        $this->str_asunto = null;
        $this->str_contenido = null;
        $this->lng_idmodelo = 0;
    }

    public function getLng_idcomentario() {
        return $this->lng_idcomentario;
    }

    public function setLng_idcomentario($lng_idcomentario) {
        $this->lng_idcomentario = $lng_idcomentario;
    }

    public function getStr_asunto() {
        return $this->str_asunto;
    }

    public function setStr_asunto($str_asunto) {
        $this->str_asunto = $str_asunto;
    }

    public function getStr_contenido() {
        return $this->str_contenido;
    }

    public function setStr_contenido($str_contenido) {
        $this->str_contenido = $str_contenido;
    }

    public function getLng_idmodelo() {
        return $this->lng_idmodelo;
    }

    public function setLng_idmodelo($lng_idmodelo) {
        $this->lng_idmodelo = $lng_idmodelo;
    }

}