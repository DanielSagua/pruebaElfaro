<?php
class Articulo {
    private $id;
    private $titulo;
    private $contenido;
    private $autor;
    private $fechaPublicacion;

    // Constructor
    public function __construct($titulo, $contenido, $autor, $fechaPublicacion) {
        $this->titulo = $titulo;
        $this->contenido = $contenido;
        $this->autor = $autor;
        $this->fechaPublicacion = $fechaPublicacion;
    }

    // Métodos Getters
    public function getId() {
        return $this->id;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getContenido() {
        return $this->contenido;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function getFechaPublicacion() {
        return $this->fechaPublicacion;
    }

    // Métodos Setters
    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function setContenido($contenido) {
        $this->contenido = $contenido;
    }

    public function setAutor($autor) {
        $this->autor = $autor;
    }

    public function setFechaPublicacion($fechaPublicacion) {
        $this->fechaPublicacion = $fechaPublicacion;
    }
}
?>
