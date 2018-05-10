<?php

class Asiento
{

    // codigo asiento, dentro de una fila
    public $seatCode ;

    // Fila donde se situa el asiento
    public $rowCode ;

    function __construct($pseatCode, $prowCode)
    {
        $this->seatCode = $pseatCode;
        $this->rowCode = $prowCode;
    }

    /**
     *
     * @return mixed
     */
    public function getSeatCode()
    {
        return $this->seatCode;
    }

    /**
     *
     * @return mixed
     */
    public function getRowCode()
    {
        return $this->rowCode;
    }

    /**
     *
     * @param mixed $seatCode
     */
    public function setSeatCode($seatCode)
    {
        $this->seatCode = $seatCode;
    }

    /**
     *
     * @param mixed $rowCode
     */
    public function setRowCode($rowCode)
    {
        $this->rowCode = $rowCode;
    }

    public function __toString()
    {
        return "<div class='container'>
                <p>Codigo asiento: " . $this->seatCode . "</p>
                <p>Codigo fila: " . $this->rowCode . "</p>
                </div>";
    }
}
?>