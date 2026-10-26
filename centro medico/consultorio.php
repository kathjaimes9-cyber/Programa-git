<?php
class Consultorio
{
    // Definición de Atributos
    private $idConsultorio;
    private $nombreConsultorio;
    private $estadoConsultorio;
    private $Conexion;

    // Método Constructor
    public function crearConsultorio($idConsultorio, $nombreConsultorio, $estadoConsultorio)
    {
        $this->idConsultorio = $idConsultorio;
        $this->nombreConsultorio = $nombreConsultorio;
        $this->estadoConsultorio = $estadoConsultorio;
    }

    // Métodos Get y Set (Accesores y Modificadores)
    public function setIdConsultorio($idConsultorio)
    {
        $this->idConsultorio = $idConsultorio;
    }
    
    public function getIdConsultorio()
    {
        return ($this->idConsultorio);
    }
    
    public function setNombreConsultorio($nombreConsultorio)
    {
        $this->nombreConsultorio = $nombreConsultorio;
    }
    
    public function getNombreConsultorio()
    {
        return ($this->nombreConsultorio);
    }
    
    public function setEstadoConsultorio($estadoConsultorio)
    {
        $this->estadoConsultorio = $estadoConsultorio;
    }
    
    public function getEstadoConsultorio()
    {
        return ($this->estadoConsultorio);
    }

    // Métodos Asociados al CRUD
    public function agregarConsultorio()
    {   
        $this->Conexion = Conectarse();
        $sql = "INSERT INTO consultorios (conNombre, conEstado) 
                VALUES ('$this->nombreConsultorio', '$this->estadoConsultorio')";
        $resultado = $this->Conexion->query($sql);
        $this->Conexion->close();
        return $resultado;  
    }

    public function consultarConsultorio($idConsultorio)
    {
        $this->Conexion = Conectarse();
        $sql = "SELECT * FROM consultorios WHERE idConsultorio = '$idConsultorio'";
        $resultado = $this->Conexion->query($sql);
        $this->Conexion->close();
        return $resultado;  
    }
        
    public function actualizarConsultorio()
    {   
        $this->Conexion = Conectarse();
        $sql = "UPDATE consultorios SET conNombre='$this->nombreConsultorio', conEstado='$this->estadoConsultorio' WHERE idConsultorio = '$_POST[idConsultorio]'";
        $resultado = $this->Conexion->query($sql);
        $this->Conexion->close();
        return $resultado;  
    }

    public function listarConsultorios()
    {
        $this->Conexion = Conectarse();
        $sql = "SELECT * FROM consultorios";
        $resultado = $this->Conexion->query($sql);
        $this->Conexion->close();
        return $resultado;  
    }   
}
?>