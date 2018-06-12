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

    // Codigo de la sala en la que se va a reproducir la pel�cula
    public $roomCode;

    // Descripcion de la peli, spoiler
    public $description;

    /*function __construct($filmCode, $filmName, $duration, $image, $timetable, $roomcode, $description)
    {
        $this->filmCode = $filmCode;
        $this->filmName = $filmName;
        $this->duration = $duration;
        $this->image = $image;
        $this->timetable = $timetable;
        $this->roomCode = $roomcode;
        $this->description = $description;
    }*/

    /**
     *
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     *
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
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
     * @return mixed
     */
    public function getRoomCode()
    {
        return $this->roomCode;
    }

    /**
     *
     * @param mixed $roomCode
     */
    public function setRoomCode($roomCode)
    {
        $this->roomCode = $roomCode;
    }

    public function __toString()
    {
        return "<div class='container'> 
                <p>Codigo Pelicula: " . $this->filmCode . "</p>
                <p>Nombre Pelicula: " . $this->filmName . "</p>
                <p>Duraci�n Pelicula: " . $this->duration . "</p>
                <p>Descripción Pelicula: " . $this->description . "</p>                  
                <p>Imagen Pelicula: " . $this->image . "</p>
                <p>Horario Pelicula: " . $this->timetable . "</p>
                <p>Codigo Sala: " . $this->codeRoom . "</p>
                </div>";
    }
}
?>