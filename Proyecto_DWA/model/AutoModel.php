<?php
include("../Config/Database.php");
class ProductoModel
{
    private $id;
    private $placa;
    private $marcaMotor;
    private $chasis;
    private $combustible;
    private $año;
    private $estado;
    private $usuario;

    public function __construct()
    {

    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getPlaca()
    {
        return $this->placa;
    }

    public function setPlaca($placa)
    {
        $this->placa = $placa;

        return $this;
    }

    public function getMarcaMotor()
    {
        return $this->marcaMotor;
    }

    public function setMarcaMotor($marcaMotor)
    {
        $this->marcaMotor = $marcaMotor;

        return $this;
    }

    public function getChasis()
    {
        return $this->chasis;
    }

    public function setChasis($chasis)
    {
        $this->chasis = $chasis;

        return $this;
    }

    public function getCombustible()
    {
        return $this->combustible;
    }

    public function setCombustible($combustible)
    {
        $this->combustible = $combustible;

        return $this;
    }

    public function getAño()
    {
        return $this->año;
    }

    public function setAño($año)
    {
        $this->año = $año;

        return $this;
    }


    public function getEstado()
    {
        return $this->estado;
    }

    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    public function InsertarProducto()
    {
        $conn = new DataBase();

        $sql = "insert into vehiculo(id, placa, marca, chasis, combustible, anio,  estado, color, usuario) values (null,?,?,?,?,?,?,2,?)";
        $stmt = $conn->ms->prepare($sql);
        $stmt->bind_param("sississ", $this->placa, $this->marcaMotor, $this->chasis, $this->combustible, $this->año, $this->estado,$this->usuario);
        $stmt->execute();
        $id = $stmt->insert_id;
        return ("Se insertó con el id: " . $id." usuario: ". $this->usuario);
    }

    public function ActualizarProducto()
    {
        $conn = new DataBase();

        $sql = "update vehiculo set placa = ?, marca = ?, chasis = ?, combustible = ?, anio = ?, estado = ?, color=2 where id = ?;";
        $stmt = $conn->ms->prepare($sql);
        $stmt->bind_param("sissisi", $this->placa, $this->marcaMotor, $this->chasis, $this->combustible, $this->año, $this->estado, $this->id);
        $stmt->execute();
        return ("Se actualizó el id: " . $this->id);
    }

    public function EliminarProducto()
    {
        $conn = new DataBase();

        $sql = "delete from vehiculo where id = ?;";
        $stmt = $conn->ms->prepare($sql);
        $stmt->bind_param("i", $this->id);
        $stmt->execute();
        return ("Se eliminó el id: " . $this->id);
    }

    public function BuscarTodos()
    {
        $conn = new DataBase();

        $sql = "select * from vehiculo;";
        $stmt = $conn->ms->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all();
    }


    public function BuscarPorId()
    {
        $conn = new DataBase();

        $sql = "select * from vehiculo where id=?;";
        $stmt = $conn->ms->prepare($sql);
        $stmt->bind_param("i", $this->id);
        $stmt->execute();
        $result = $stmt->get_result();
        $result = $result->fetch_assoc();

        return json_encode($result);
    }

    

    /**
     * Get the value of usuario
     */ 
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set the value of usuario
     *
     * @return  self
     */ 
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }
}
