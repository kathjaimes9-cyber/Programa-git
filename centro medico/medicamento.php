<?php
class Medicamento
{
    // Definición de Atributos
    private $idMedicamento;
    private $nombreMedicamento;
    private $detallesMedicamento;
    private $Conexion;

    // Método Constructor
    public function crearMedicamento($idMedicamento, $nombreMedicamento, $detallesMedicamento)
    {
        $this->idMedicamento = $idMedicamento;
        $this->nombreMedicamento = $nombreMedicamento;
        $this->detallesMedicamento = $detallesMedicamento;
    }

    // Métodos Get y Set (Accesores y Modificadores)
    public function setIdMedicamento($idMedicamento)
    {
        $this->idMedicamento = $idMedicamento;
    }
    
    public function getIdMedicamento()
    {
        return ($this->idMedicamento);
    }
    
    public function setNombreMedicamento($nombreMedicamento)
    {
        $this->nombreMedicamento = $nombreMedicamento;
    }
    
    public function getNombreMedicamento()
    {
        return ($this->nombreMedicamento);
    }
    
    public function setDetallesMedicamento($detallesMedicamento)
    {
        $this->detallesMedicamento = $detallesMedicamento;
    }
    
    public function getDetallesMedicamento()
    {
        return ($this->detallesMedicamento);
    }

    // Métodos Asociados al CRUD
    public function agregarMedicamento()
    {   
        $this->Conexion = Conectarse();
        $sql = "INSERT INTO medicamentos (medNombre, medDetalles) 
                VALUES ('$this->nombreMedicamento', '$this->detallesMedicamento')";
        $resultado = $this->Conexion->query($sql);
        $this->Conexion->close();
        return $resultado;  
    }

    public function consultarMedicamento($idMedicamento)
    {
        $this->Conexion = Conectarse();
        $sql = "SELECT * FROM medicamentos WHERE idMedicamento = '$idMedicamento'";
        $resultado = $this->Conexion->query($sql);
        $this->Conexion->close();
        return $resultado;  
    }
        
    public function actualizarMedicamento()
    {   
        $this->Conexion = Conectarse();
        $sql = "UPDATE medicamentos SET medNombre='$this->nombreMedicamento', medDetalles='$this->detallesMedicamento' WHERE idMedicamento = '$_POST[idMedicamento]'";
        $resultado = $this->Conexion->query($sql);
        $this->Conexion->close();
        return $resultado;  
    }

    public function listarMedicamentos()
    {
        $this->Conexion = Conectarse();
        $sql = "SELECT * FROM medicamentos";
        $resultado = $this->Conexion->query($sql);
        $this->Conexion->close();
        return $resultado;  
    }   
}
?>