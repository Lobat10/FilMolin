<?php

class SalaGrande
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
    
    //COMPROBAREMOS EL TIPO DE SALA CON 'INSTANCEOF'
    // ($sala INSTANCEOF 'SalaGrande') == true/false
    
    
    function __construct($proomCode, $pcapacity, $pimageSeatsRoom, $proomsList, $ptimeTableList){
        
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
        return "<p>Codigo Obra:" . $this->getCodigoObra() . "</p>
                <p>Nombre Obra:" . $this->getNombreObra() . "</p>
                <p>duracion:" . $this->getDuracion() . " </p>
                <p>Imagen:<img src='img/" . $this->getImagen() . "'></p>
                <p>codigo Autor:" . $this->getCodigoAutor() . " </p>";
    }
}
?>