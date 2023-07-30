<?php

namespace AutoTest;

class Evento
{
    public $id;
    public $nombre;
    public $descripcion;
    public $imagen;
    public $fecha_inicio;
    public $fecha_final;
    public $fecha_publicacion;

    public function __construct(string $id, string $nombre, string $descripcion, string $imagen, string $fecha_inicio, string $fecha_final)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->imagen = $imagen;
        $this->fecha_inicio = $fecha_inicio;
        $this->fecha_final = $fecha_final;
        $this->fecha_publicacion = date('Y-m-d h:i:s', time());
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }
    /**
     * Set the value of nombre
     *
     * @return  self
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
        return $this;
    }


    /**
     * Get the value of descripcion
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set the value of descripcion
     *
     * @return  self
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get the value of imagen
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Set the value of imagen
     *
     * @return  self
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;

        return $this;
    }

    /**
     * Get the value of fecha_inicio
     */
    public function getFecha_inicio()
    {
        return $this->fecha_inicio;
    }

    /**
     * Set the value of fecha_inicio
     *
     * @return  self
     */
    public function setFecha_inicio($fecha_inicio)
    {
        $this->fecha_inicio = $fecha_inicio;

        return $this;
    }

    /**
     * Get the value of fecha_final
     */
    public function getFecha_final()
    {
        return $this->fecha_final;
    }

    /**
     * Set the value of fecha_final
     *
     * @return  self
     */
    public function setFecha_final($fecha_final)
    {
        $this->fecha_final = $fecha_final;

        return $this;
    }

    /**
     * Get the value of fecha_publicacion
     */
    public function getFecha_publicacion()
    {
        return $this->fecha_publicacion;
    }

    /**
     * Set the value of fecha_publicacion
     *
     * @return  self
     */
    public function setFecha_publicacion($fecha_publicacion)
    {
        $this->fecha_publicacion = $fecha_publicacion;

        return $this;
    }
}
