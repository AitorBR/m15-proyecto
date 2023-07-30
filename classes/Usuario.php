<?php
namespace AutoTest;
class Usuario
{
    public $id;
    public $nombre;
    public $apellidos;
    public $fecha_nacimiento;
    public $telefono;
    public $direccion;
    public $dni;
    public $mail;
    public $pswd;
    public $carnetData;

    public function __construct($id, string $nombre, string $apellidos, string $fecha_nacimiento, $telefono, $direccion, $dni, $mail, $pswd, $carnetData)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->fecha_nacimiento = $fecha_nacimiento;
        $this->telefono = $telefono;
        $this->direccion = $direccion;
        $this->dni = $dni;
        $this->mail = $mail;
        $this->pswd = $pswd;
        $this->carnetData = $carnetData;
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
     * Get the value of apellidos
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }
    /**
     * Set the value of apellidos
     *
     * @return  self
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
        return $this;
    }
    /**
     * Get the value of fecha_nacimiento
     */
    public function getFecha_nacimiento()
    {
        return $this->fecha_nacimiento;
    }
    /**
     * Set the value of fecha_nacimiento
     *
     * @return  self
     */
    public function setFecha_nacimiento($fecha_nacimiento)
    {
        $this->fecha_nacimiento = $fecha_nacimiento;
        return $this;
    }
    /**
     * Get the value of telefono
     */
    public function getTelefono()
    {
        return $this->telefono;
    }
    /**
     * Set the value of telefono
     *
     * @return  self
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
        return $this;
    }
    /**
     * Get the value of dni
     */
    public function getDni()
    {
        return $this->dni;
    }
    /**
     * Set the value of dni
     *
     * @return  self
     */
    public function setDni($dni)
    {
        $this->dni = $dni;
        return $this;
    }
    /**
     * Get the value of mail
     */
    public function getMail()
    {
        return $this->mail;
    }
    /**
     * Set the value of mail
     *
     * @return  self
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
        return $this;
    }
    /**
     * Get the value of pswd
     */
    public function getPswd()
    {
        return $this->pswd;
    }
    /**
     * Set the value of pswd
     *
     * @return  self
     */
    public function setPswd($pswd)
    {
        $this->pswd = $pswd;
        return $this;
    }

    /**
     * Get the value of direccion
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set the value of direccion
     *
     * @return  self
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get the value of carnetData
     */
    public function getCarnetData()
    {
        return $this->carnetData;
    }

    /**
     * Set the value of carnetData
     *
     * @return  self
     */
    public function setCarnetData($carnetData)
    {
        $this->carnetData = $carnetData;

        return $this;
    }
}