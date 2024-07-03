<?php
class Consulta {
    
    //Estos los pongo por si acaso los quisieran o llegaran a nesesitar
    public $idConsulta;
    public $fechaCita;
    public $idCliente;
    public $idDoctor;
    public $observaciones;
    public $medicamentos;

    public function __construct($fechaCita, $idCliente, $idDoctor, $observaciones, $medicamentos, $idConsulta = null) {
        $this->idConsulta = $idConsulta;
        $this->fechaCita = $fechaCita;
        $this->idCliente = $idCliente;
        $this->idDoctor = $idDoctor;
        $this->observaciones = $observaciones;
        $this->medicamentos = $medicamentos;
    }
}
?>
