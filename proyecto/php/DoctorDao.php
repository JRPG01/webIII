<?php
class DoctorDAO {
    private $pdo;
    //Todo esta parametrizado para que no hayga pedo de inyeccion de codigo. No le muevan

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function nuevoDoctor(Doctor $doctor) {
        $query = "INSERT INTO doctor (userD, passD, nombreD, apellidosD, sexoD, edadD, especialidad, turno, telefono, correo) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $consulta = $this->pdo->prepare($query);
        $consulta->execute([$doctor->userD, $doctor->passD, $doctor->nombreD, $doctor->apellidosD, $doctor->sexoD, $doctor->edadD, $doctor->especialidad, $doctor->turno, $doctor->telefono, $doctor->correo]);
    }

    public function buscarUnoDoctor($idDoctor) {
        $query = "SELECT * FROM doctor WHERE idDoctor = ?";
        $consulta = $this->pdo->prepare($query);
        $consulta->execute([$idDoctor]);
        $row = $consulta->fetch();
        if ($row) {
            return new Doctor($row['userD'], $row['passD'], $row['nombreD'], $row['apellidosD'], $row['sexoD'], $row['edadD'], $row['especialidad'], $row['turno'], $row['telefono'], $row['correo'], $row['idDoctor']);
        }
        return null;
    }

    public function actualizarDoctor(Doctor $doctor) {
        $query = "UPDATE doctor SET userD = ?, passD = ?, nombreD = ?, apellidosD = ?, sexoD = ?, edadD = ?, especialidad = ?, turno = ?, telefono = ?, correo = ? WHERE idDoctor = ?";
        $consulta = $this->pdo->prepare($query);
        $consulta->execute([$doctor->userD, $doctor->passD, $doctor->nombreD, $doctor->apellidosD, $doctor->sexoD, $doctor->edadD, $doctor->especialidad, $doctor->turno, $doctor->telefono, $doctor->correo, $doctor->idDoctor]);
    }

    public function eliminarDoctor($idDoctor) {
        $query = "DELETE FROM doctor WHERE idDoctor = ?";
        $consulta = $this->pdo->prepare($query);
        $consulta->execute([$idDoctor]);
    }

    public function loginDoctor($userD, $passD) {
        $sql = "SELECT * FROM doctor WHERE userD = ? AND passD = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$userD, $passD]);
        $row = $stmt->fetch();
        if ($row) {
            //Regreso todo el cliente para que guarden lo que quieran en el session o en le local storage
            return new Doctor($row['userD'], $row['passD'], $row['nombreD'], $row['apellidosD'], $row['sexoD'], $row['edadD'], $row['especialidad'], $row['turno'], $row['telefono'], $row['correo'], $row['idDoctor']);
        }
        return null;
    }
}
?>
