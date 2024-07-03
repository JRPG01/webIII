<?php
class ClienteDAO {
    //Todo esta parametrizado para que no hayga pedo de inyeccion de codigo. No le muevan

    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function nuevoCliente(Cliente $cliente) {
        $query = "INSERT INTO clientes (userC, passC, nombreC, apellidosC, sexoC, edadC, telefono) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $consulta = $this->pdo->prepare($query);
        $consulta->execute([$cliente->userC, $cliente->passC, $cliente->nombreC, $cliente->apellidosC, $cliente->sexoC, $cliente->edadC, $cliente->telefono]);
    }

    public function buscarUnoCliente($idCliente) {
        $query = "SELECT * FROM clientes WHERE idCliente = ?";
        $consulta = $this->pdo->prepare($query);
        $consulta->execute([$idCliente]);
        $row = $consulta->fetch();
        if ($row) {
            return new Cliente($row['userC'], $row['passC'], $row['nombreC'], $row['apellidosC'], $row['sexoC'], $row['edadC'], $row['telefono'], $row['idCliente']);
        }
        return null;
    }

    public function actulizarCliente(Cliente $cliente) {
        $query = "UPDATE clientes SET userC = ?, passC = ?, nombreC = ?, apellidosC = ?, sexoC = ?, edadC = ?, telefono = ? WHERE idCliente = ?";
        $consulta = $this->pdo->prepare($query);
        $consulta->execute([$cliente->userC, $cliente->passC, $cliente->nombreC, $cliente->apellidosC, $cliente->sexoC, $cliente->edadC, $cliente->telefono, $cliente->idCliente]);
    }

    public function eliminarCliente($idCliente) {
        $query = "DELETE FROM clientes WHERE idCliente = ?";
        $consulta = $this->pdo->prepare($query);
        $consulta->execute([$idCliente]);
    }

    public function loginCliente($userC, $passC) {
        $sql = "SELECT * FROM clientes WHERE userC = ? AND passC = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$userC, $passC]);
        $row = $stmt->fetch();
        if ($row) {
            //Regreso todo el cliente para que guarden lo que quieran en el session o en le local storage
            return new Cliente($row['userC'], $row['passC'], $row['nombreC'], $row['apellidosC'], $row['sexoC'], $row['edadC'], $row['telefono'], $row['idCliente']);
        }
        return null;
    }
}
?>
