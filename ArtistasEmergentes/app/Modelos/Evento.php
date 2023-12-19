<?php 
class Evento{
    private $idEvento;
    private $nombre;
    private $fechaHora;
    private $lugar;
    private $listaArtistas;
    private $precio;
    private $aforo;
    private $descripcion;
    private $categoria;
    private $cartel;

    


    /**
     * Get the value of idEvento
     */
    public function getIdEvento()
    {
        return $this->idEvento;
    }

    /**
     * Set the value of idEvento
     */
    public function setIdEvento($idEvento): self
    {
        $this->idEvento = $idEvento;

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
     */
    public function setNombre($nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of fechaHora
     */
    public function getFechaHora()
    {
        return $this->fechaHora;
    }

    /**
     * Set the value of fechaHora
     */
    public function setFechaHora($fechaHora): self
    {
        $this->fechaHora = $fechaHora;

        return $this;
    }

    /**
     * Get the value of lugar
     */
    public function getLugar()
    {
        return $this->lugar;
    }

    /**
     * Set the value of lugar
     */
    public function setLugar($lugar): self
    {
        $this->lugar = $lugar;

        return $this;
    }

    /**
     * Get the value of listaAristas
     */
    public function getListaArtistas()
    {
        return $this->listaArtistas;
    }

    /**
     * Set the value of listaAristas
     */
    public function setListaAristas($listaArtistas): self
    {
        $this->listaArtistas = $listaArtistas;

        return $this;
    }

    /**
     * Get the value of precio
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set the value of precio
     */
    public function setPrecio($precio): self
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get the value of aforo
     */
    public function getAforo()
    {
        return $this->aforo;
    }

    /**
     * Set the value of aforo
     */
    public function setAforo($aforo): self
    {
        $this->aforo = $aforo;

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
     */
    public function setDescripcion($descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get the value of categoria
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set the value of categoria
     */
    public function setCategoria($categoria): self
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get the value of cartel
     */
    public function getCartel()
    {
        return $this->cartel;
    }

    /**
     * Set the value of cartel
     */
    public function setCartel($cartel): self
    {
        $this->cartel = $cartel;

        return $this;
    }
}
?>