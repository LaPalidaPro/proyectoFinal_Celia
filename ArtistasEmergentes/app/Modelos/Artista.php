<?php 
class Artista {
    private $idArtista;
    private $NombreArtistico;
    private $cancionesPopulares;
    private $anoDebut;
    private $paisOrigen;
    private $biografia;
    private $imgArtista;
    private $listaSeguidores;
    private $albums;
    

   

    /**
     * Get the value of idArtista
     */
    public function getIdArtista()
    {
        return $this->idArtista;
    }

    /**
     * Set the value of idArtista
     */
    public function setIdArtista($idArtista): self
    {
        $this->idArtista = $idArtista;

        return $this;
    }

    /**
     * Get the value of NombreArtistico
     */
    public function getNombreArtistico()
    {
        return $this->NombreArtistico;
    }

    /**
     * Set the value of NombreArtistico
     */
    public function setNombreArtistico($NombreArtistico): self
    {
        $this->NombreArtistico = $NombreArtistico;

        return $this;
    }

    /**
     * Get the value of cancionesPopulares
     */
    public function getCancionesPopulares()
    {
        return $this->cancionesPopulares;
    }

    /**
     * Set the value of cancionesPopulares
     */
    public function setCancionesPopulares($cancionesPopulares): self
    {
        $this->cancionesPopulares = $cancionesPopulares;

        return $this;
    }

    /**
     * Get the value of anoDebut
     */
    public function getAnoDebut()
    {
        return $this->anoDebut;
    }

    /**
     * Set the value of anoDebut
     */
    public function setAnoDebut($anoDebut): self
    {
        $this->anoDebut = $anoDebut;

        return $this;
    }

    /**
     * Get the value of paisOrigen
     */
    public function getPaisOrigen()
    {
        return $this->paisOrigen;
    }

    /**
     * Set the value of paisOrigen
     */
    public function setPaisOrigen($paisOrigen): self
    {
        $this->paisOrigen = $paisOrigen;

        return $this;
    }

    /**
     * Get the value of biografia
     */
    public function getBiografia()
    {
        return $this->biografia;
    }

    /**
     * Set the value of biografia
     */
    public function setBiografia($biografia): self
    {
        $this->biografia = $biografia;

        return $this;
    }

    /**
     * Get the value of imgArtista
     */
    public function getImgArtista()
    {
        return $this->imgArtista;
    }

    /**
     * Set the value of imgArtista
     */
    public function setImgArtista($imgArtista): self
    {
        $this->imgArtista = $imgArtista;

        return $this;
    }

    /**
     * Get the value of listaSeguidores
     */
    public function getListaSeguidores()
    {
        return $this->listaSeguidores;
    }

    /**
     * Set the value of listaSeguidores
     */
    public function setListaSeguidores($listaSeguidores): self
    {
        $this->listaSeguidores = $listaSeguidores;

        return $this;
    }

    /**
     * Get the value of albums
     */
    public function getAlbums()
    {
        return $this->albums;
    }

    /**
     * Set the value of albums
     */
    public function setAlbums($albums): self
    {
        $this->albums = $albums;

        return $this;
    }
}
?>
