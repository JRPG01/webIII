<?php
class ConsultaDAO {
    private $pdo;
    //Todo esta parametrizado para que no hayga pedo de inyeccion de codigo. No le muevan

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function nuevaConsulta(Consulta $consulta) {
        $query = "INSERT INTO consultas (fechaCita, idCliente, idDoctor, observaciones, medicamentos) VALUES (?, ?, ?, ?, ?)";
        $consulta = $this->pdo->prepare($query);
        $consulta->execute([$consulta->fechaCita, $consulta->idCliente, $consulta->idDoctor, $consulta->observaciones, $consulta->medicamentos]);
    }

    public function buscarUno($idConsulta) {
        $query = "SELECT * FROM consultas WHERE idConsulta = ?";
        $consulta = $this->pdo->prepare($query);
        $consulta->execute([$idConsulta]);
        $row = $consulta->fetch();
        if ($row) {
            return new Consulta($row['fechaCita'], $row['idCliente'], $row['idDoctor'], $row['observaciones'], $row['medicamentos'], $row['idConsulta']);
        }
        return null;
    }

    public function actualizar(Consulta $consulta) {
        $query = "UPDATE consultas SET fechaCita = ?, idCliente = ?, idDoctor = ?, observaciones = ?, medicamentos = ? WHERE idConsulta = ?";
        $consulta = $this->pdo->prepare($query);
        $consulta->execute([$consulta->fechaCita, $consulta->idCliente, $consulta->idDoctor, $consulta->observaciones, $consulta->medicamentos, $consulta->idConsulta]);
    }

    public function eliminar($idConsulta) {
        $query = "DELETE FROM consultas WHERE idConsulta = ?";
        $consulta = $this->pdo->prepare($query);
        $consulta->execute([$idConsulta]);
    }
}
?>
