<?php
class Cliente {
    //Estos los pongo por si acaso los quisieran o llegaran a nesesitar
    public $idCliente;
    public $userC;
    public $passC;
    public $nombreC;
    public $apellidosC;
    public $sexoC;
    public $edadC;
    public $telefono;

    public function __construct($userC, $passC, $nombreC, $apellidosC, $sexoC, $edadC, $telefono, $idCliente = null) {
        $this->idCliente = $idCliente;
        $this->userC = $userC;
        $this->passC = $passC;
        $this->nombreC = $nombreC;
        $this->apellidosC = $apellidosC;
        $this->sexoC = $sexoC;
        $this->edadC = $edadC;
        $this->telefono = $telefono;
    }
}
?>
