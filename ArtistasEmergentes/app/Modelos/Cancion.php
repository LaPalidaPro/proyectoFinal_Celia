<?php 
class Cancion {
private $idCancion;
private $idArtista;
private $idAlbum;
private $Titulo;
private $duracion;
private $generoMusical;
private $enlaceArchivo;
private $fechaLanzamiento;
private $numReproducciones;



/**
 * Get the value of idCancion
 */
public function getIdCancion()
{
return $this->idCancion;
}

/**
 * Set the value of idCancion
 */
public function setIdCancion($idCancion): self
{
$this->idCancion = $idCancion;

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
 * Get the value of Titutlo
 */
public function getTitulo()
{
return $this->Titulo;
}

/**
 * Set the value of Titutlo
 */
public function setTitulo($Titulo): self
{
$this->Titulo = $Titulo;

return $this;
}

/**
 * Get the value of duracion
 */
public function getDuracion()
{
return $this->duracion;
}

/**
 * Set the value of duracion
 */
public function setDuracion($duracion): self
{
$this->duracion = $duracion;

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
 * Get the value of enlaceArchivo
 */
public function getEnlaceArchivo()
{
return $this->enlaceArchivo;
}

/**
 * Set the value of enlaceArchivo
 */
public function setEnlaceArchivo($enlaceArchivo): self
{
$this->enlaceArchivo = $enlaceArchivo;

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
 * Get the value of numReproducciones
 */
public function getNumReproducciones()
{
return $this->numReproducciones;
}

/**
 * Set the value of numReproducciones
 */
public function setNumReproducciones($numReproducciones): self
{
$this->numReproducciones = $numReproducciones;

return $this;
}
}

?>