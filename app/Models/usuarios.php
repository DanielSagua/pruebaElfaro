<?php
class Usuario {
    private $id;
    private $nombre;
    private $email;
    private $contrasena;

    // Constructor
    public function __construct($nombre, $email, $contrasena) {
        $this->nombre = $nombre;
        $this->email = $email;
        $this->contrasena = $contrasena;
    }

    // Métodos Getters
    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getContrasena() {
        return $this->contrasena;
    }

    // Métodos Setters
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setContrasena($contrasena) {
        $this->contrasena = $contrasena;
    }

    // Método para validar la contraseña (solo como ejemplo, implementación básica)
    public function validarContrasena($contrasena) {
        return $this->contrasena === $contrasena;
    }
}
?>
