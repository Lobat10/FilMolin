<?php

class SalaMediana
{

    // Codigo de la sala
    public $roomCode;

    // Capacidad maxima de la sala
    public $capacity; 

    // Imagen de sala (asientos libres, ocupado , reservando...)
    public $imageSeatsRoom;

    // Lista de las peliculas que va a ofrecer en el dia de hoy dicha sala
    public $roomsList;

    // Lista de horas que hay sesiones en el dia de hoy( muchas dudas, muchas muchas)
    public $timeTableList;

    // COMPROBAREMOS EL TIPO DE SALA CON 'INSTANCEOF'
    // ($sala INSTANCEOF 'SalaGrande') == true/false
    function __construct($proomCode, $pimageSeatsRoom, $proomsList)
    {
        $this->roomCode = $proomCode;
        $this->capacity = 80;
        $this->imageSeatsRoom = $pimageSeatsRoom;
        $this->roomsList = $proomsList;
        // Clave = sesiones de hoy, 1� sesion a las 10, 2� sesion a las 12:30...(HORAS FIJAS)
        
        $this->timeTableList = array(
            1 => "10:15",
            2 => "12:45",
            3 => "15:15",
            4 => "17:45",
            5 => "20:15",
            6 => "23:00"
        );
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
     * @return mixed
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     *
     * @return mixed
     */
    public function getImageSeatsRoom()
    {
        return $this->imageSeatsRoom;
    }

    /**
     *
     * @return mixed
     */
    public function getRoomsList()
    {
        return $this->roomsList;
    }

    /**
     *
     * @return mixed
     */
    public function getTimeTableList()
    {
        return $this->timeTableList;
    }

    /**
     *
     * @param mixed $roomCode
     */
    public function setRoomCode($roomCode)
    {
        $this->roomCode = $roomCode;
    }

    /**
     *
     * @param mixed $capacity
     */
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;
    }

    /**
     *
     * @param mixed $imageSeatsRoom
     */
    public function setImageSeatsRoom($imageSeatsRoom)
    {
        $this->imageSeatsRoom = $imageSeatsRoom;
    }

    /**
     *
     * @param mixed $roomsList
     */
    public function setRoomsList($roomsList)
    {
        $this->roomsList = $roomsList;
    }

    /**
     *
     * @param mixed $timeTableList
     */
    public function setTimeTableList($timeTableList)
    {
        $this->timeTableList = $timeTableList;
    }

    public function __toString()
    {
        return "<div class='container'>
                <p>Codigo Sala: " . $this->filmCode . "</p>
                <p>Capacidad de la Sala: " . $this->filmName . " asientos.</p>
                <p>Imagen asientos sala: " . $this->filmCode . "</p>
                <p>Listado peliculas de hoy: " . $this->filmCode . "</p>
                <p>Lista horarios de sesiones: " . $this->filmCode . "</p>
                </div>";
    }
}
?>