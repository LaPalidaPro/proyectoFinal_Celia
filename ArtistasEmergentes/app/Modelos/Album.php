<?php 
class Album{
private $idAlbum;
private $idArtista;
private $listaCanciones;
private $fechaLanzamiento;
private $numPistas;
private $duracionTotal;
private $generoMusical;
private $fotoPortada;



/**
 * Get the value of idAlbum
 */
public function getIdAlbum()
{
return $this->idAlbum;
}

/**
 * Set the value of idAlbum
 */
public function setIdAlbum($idAlbum): self
{
$this->idAlbum = $idAlbum;

return $this;
}

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
 * Get the value of listaCanciones
 */
public function getListaCanciones()
{
return $this->listaCanciones;
}

/**
 * Set the value of listaCanciones
 */
public function setListaCanciones($listaCanciones): self
{
$this->listaCanciones = $listaCanciones;

return $this;
}

/**
 * Get the value of fechaLanzamiento
 */
public function getFechaLanzamiento()
{
return $this->fechaLanzamiento;
}

/**
 * Set the value of fechaLanzamiento
 */
public function setFechaLanzamiento($fechaLanzamiento): self
{
$this->fechaLanzamiento = $fechaLanzamiento;

return $this;
}

/**
 * Get the value of numPistas
 */
public function getNumPistas()
{
return $this->numPistas;
}

/**
 * Set the value of numPistas
 */
public function setNumPistas($numPistas): self
{
$this->numPistas = $numPistas;

return $this;
}

/**
 * Get the value of duracionTotal
 */
public function getDuracionTotal()
{
return $this->duracionTotal;
}

/**
 * Set the value of duracionTotal
 */
public function setDuracionTotal($duracionTotal): self
{
$this->duracionTotal = $duracionTotal;

return $this;
}

/**
 * Get the value of generoMusical
 */
public function getGeneroMusical()
{
return $this->generoMusical;
}

/**
 * Set the value of generoMusical
 */
public function setGeneroMusical($generoMusical): self
{
$this->generoMusical = $generoMusical;

return $this;
}

/**
 * Get the value of fotoPortada
 */
public function getFotoPortada()
{
return $this->fotoPortada;
}

/**
 * Set the value of fotoPortada
 */
public function setFotoPortada($fotoPortada): self
{
$this->fotoPortada = $fotoPortada;

return $this;
}
}
?>