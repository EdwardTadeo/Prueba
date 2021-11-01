<?php



class Trabajadores{
    private $IdCodigo,$Contraseña;
    function __construct($IdCodigo, $Contraseña) {
    $this->IdPedido = $IdCodigo;
    $this->IdCliente = $Contraseña;
    
}

function getIdCodigo() {
    return $this->IdCodigo;
}

function getContraseña() {
    return $this->Contraseña;
}

function setIdCodigo($IdCodigo) {
    $this->IdCodigo = $IdCodigo;
}

function setContraseña($Contraseña) {
    $this->Contraseña = $Contraseña;
}


}



