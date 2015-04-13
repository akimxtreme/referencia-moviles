<?php

class Usuarios {

    private $lng_idusuario;
    private $str_usuario;
    private $str_cedula;
    private $str_nombre;
    private $str_apellido;
    private $str_password;
    private $str_correo;
    private $str_telefono;
    private $lng_idrol;

    public function Usuarios() {
        $this->lng_idusuario = 0;
        $this->str_usuario = null;
        $this->str_cedula = null;
        $this->str_nombre = null;
        $this->str_apellido = null;
        $this->str_password = null;
        $this->str_correo = null;
        $this->str_telefono = null;
        $this->lng_idrol = 0;
    }

    public function getLng_idusuario() {
        return $this->lng_idusuario;
    }

    public function setLng_idusuario($lng_idusuario) {
        $this->lng_idusuario = $lng_idusuario;
    }

    public function getStr_usuario() {
        return $this->str_usuario;
    }

    public function setStr_usuario($str_usuario) {
        $this->str_usuario = $str_usuario;
    }

    public function getStr_cedula() {
        return $this->str_cedula;
    }

    public function setStr_cedula($str_cedula) {
        $this->str_cedula = $str_cedula;
    }

    public function getStr_nombre() {
        return $this->str_nombre;
    }

    public function setStr_nombre($str_nombre) {
        $this->str_nombre = $str_nombre;
    }

    public function getStr_apellido() {
        return $this->str_apellido;
    }

    public function setStr_apellido($str_apellido) {
        $this->str_apellido = $str_apellido;
    }

    public function getStr_password() {
        return $this->str_password;
    }

    public function setStr_password($str_password) {
        $this->str_password = $str_password;
    }

    public function getStr_correo() {
        return $this->str_correo;
    }

    public function setStr_correo($str_correo) {
        $this->str_correo = $str_correo;
    }

    public function getStr_telefono() {
        return $this->str_telefono;
    }

    public function setStr_telefono($str_telefono) {
        $this->str_telefono = $str_telefono;
    }

    public function getLng_idrol() {
        return $this->lng_idrol;
    }

    public function setLng_idrol($lng_idrol) {
        $this->lng_idrol = $lng_idrol;
    }

}
