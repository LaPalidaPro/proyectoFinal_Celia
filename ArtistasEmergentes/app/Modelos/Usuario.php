<?php 

class Usuario {
    private $idUsario;
    private $idArtista;
    private $nombreUsuario;
    private $nombreCompleto;
    private $email;
    private $fechaRegisto;
    private $listaSeguidos;
    private $password;
    private $foto;
    private $sid;
    

   

    /**
     * Get the value of idUsario
     */
    public function getIdUsario()
    {
        return $this->idUsario;
    }

    /**
     * Set the value of idUsario
     */
    public function setIdUsario($idUsario): self
    {
        $this->idUsario = $idUsario;

        return $this;
    }

    /**
     * Get the value of idArista
     */
    public function getIdArtista()
    {
        return $this->idArtista;
    }

    /**
     * Set the value of idArista
     */
    public function setIdArista($idArtista): self
    {
        $this->idArtista = $idArtista;

        return $this;
    }

    /**
     * Get the value of nombreUsuario
     */
    public function getNombreUsuario()
    {
        return $this->nombreUsuario;
    }

    /**
     * Set the value of nombreUsuario
     */
    public function setNombreUsuario($nombreUsuario): self
    {
        $this->nombreUsuario = $nombreUsuario;

        return $this;
    }

    /**
     * Get the value of nombreCompleto
     */
    public function getNombreCompleto()
    {
        return $this->nombreCompleto;
    }

    /**
     * Set the value of nombreCompleto
     */
    public function setNombreCompleto($nombreCompleto): self
    {
        $this->nombreCompleto = $nombreCompleto;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     */
    public function setEmail($email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of fechaRegisto
     */
    public function getFechaRegisto()
    {
        return $this->fechaRegisto;
    }

    /**
     * Set the value of fechaRegisto
     */
    public function setFechaRegisto($fechaRegisto): self
    {
        $this->fechaRegisto = $fechaRegisto;

        return $this;
    }

    /**
     * Get the value of listaSeguidores
     */
    public function getListaSeguidores()
    {
        return $this->listaSeguidos;
    }

    /**
     * Set the value of listaSeguidores
     */
    public function setListaSeguidos($listaSeguidos): self
    {
        $this->listaSeguidos = $listaSeguidos;

        return $this;
    }

    /**
     * Get the value of password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     */
    public function setPassword($password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of foto
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * Set the value of foto
     */
    public function setFoto($foto): self
    {
        $this->foto = $foto;

        return $this;
    }

    /**
     * Get the value of sid
     */
    public function getSid()
    {
        return $this->sid;
    }

    /**
     * Set the value of sid
     */
    public function setSid($sid): self
    {
        $this->sid = $sid;

        return $this;
    }
}