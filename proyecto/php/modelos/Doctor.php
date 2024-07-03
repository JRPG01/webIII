<?php
class Doctor {

    
    //Estos los pongo por si acaso los quisieran o llegaran a nesesitar
    public $idDoctor;
    public $userD;
    public $passD;
    public $nombreD;
    public $apellidosD;
    public $sexoD;
    public $edadD;
    public $especialidad;
    public $turno;
    public $telefono;
    public $correo;

    public function __construct($userD, $passD, $nombreD, $apellidosD, $sexoD, $edadD, $especialidad, $turno, $telefono, $correo, $idDoctor = null) {
        $this->idDoctor = $idDoctor;
        $this->userD = $userD;
        $this->passD = $passD;
        $this->nombreD = $nombreD;
        $this->apellidosD = $apellidosD;
        $this->sexoD = $sexoD;
        $this->edadD = $edadD;
        $this->especialidad = $especialidad;
        $this->turno = $turno;
        $this->telefono = $telefono;
        $this->correo = $correo;
    }
}
?>
