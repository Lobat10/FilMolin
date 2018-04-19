<?php

class Pelicula
{

    // codigo pelicula, siempre sera el mismo aunque este en diferentes salas
    public $filmCode;

    // Nombre Pelicula
    public $filmName;

    // Duracion de pelicula, nos servira para hacer los horarios de sala
    public $duration;

    // Imagen portada pelicula
    public $image;

    // Hora de comienzo de la pelicula
    public $timetable;

    // Codigo de la sala en la que se va a reproducir la película
    public $codeRoom;

    
    function __construct($filmCode, $filmName, $duration, $image, $timetable,$codeRoom){
        
        $this->roomCode=$proomCode;
        $this->capacity=$pcapacity;
        $this->imageSeatsRoom=$pimageSeatsRoom;
        $this->roomsList=$proomsList;
        $this->timeTableList=$ptimeTableList;
    }
    
    /**
     *
     * @return mixed
     */
    public function getFilmCode()
    {
        return $this->filmCode;
    }

    /**
     *
     * @return mixed
     */
    public function getFilmName()
    {
        return $this->filmName;
    }

    /**
     *
     * @return mixed
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     *
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     *
     * @return mixed
     */
    public function getTimetable()
    {
        return $this->timetable;
    }

    /**
     *
     * @return mixed
     */
    public function getCodeRoom()
    {
        return $this->codeRoom;
    }

    /**
     *
     * @param mixed $filmCode
     */
    public function setFilmCode($filmCode)
    {
        $this->filmCode = $filmCode;
    }

    /**
     *
     * @param mixed $filmName
     */
    public function setFilmName($filmName)
    {
        $this->filmName = $filmName;
    }

    /**
     *
     * @param mixed $duration
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
    }

    /**
     *
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     *
     * @param mixed $timetable
     */
    public function setTimetable($timetable)
    {
        $this->timetable = $timetable;
    }

    /**
     *
     * @param mixed $codeRoom
     */
    public function setCodeRoom($codeRoom)
    {
        $this->codeRoom = $codeRoom;
    }

    public function __toString()
    {
        return "<div class='container'> 
                <p>Codigo Pelicula: " . $this->filmCode . "</p>
                <p>Nombre Pelicula: " . $this->filmName . "</p>
                <p>Duración Pelicula: " . $this->filmCode . "</p>
                <p>Imagen Pelicula: " . $this->filmCode . "</p>
                <p>Horario Pelicula: " . $this->filmCode . "</p>
                <p>Codigo Sala: " . $this->filmCode . "</p>
                </div>";
    }
}
?>