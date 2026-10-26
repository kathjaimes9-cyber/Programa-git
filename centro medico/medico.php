<?php
class Medico
{
    // Definición de Atributos
    private $identificacion;
    private $nombres;
    private $apellidos;
    private $especialidad;
    private $consultorio;
    private $Conexion;

    // Método Constructor / Inicializador
    public function crearMedico($identificacion, $nombres, $apellidos, $especialidad, $consultorio)
    {
        $this->identificacion = $identificacion;
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;
        $this->especialidad = $especialidad;
        $this->consultorio = $consultorio;
    }

    // Definición de Métodos 
    // Accesores-Consultores o Modificadores-Fijadores
    public function setIdentificacion($identificacion)
    {
        $this->identificacion = $identificacion;
    }
    
    public function getIdentificacion()
    {
        return ($this->identificacion);
    }
    
    public function setNombres($nombres)
    {
        $this->nombres = $nombres;
    }
    
    public function getNombres()
    {
        return ($this->nombres);
    }
    
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    }
    
    public function getApellidos()
    {
        return ($this->apellidos);
    }   
    
    public function setEspecialidad($especialidad)
    {
        $this->especialidad = $especialidad;
    }
    
    public function getEspecialidad()
    {
        return ($this->especialidad);
    }   
    
    public function setConsultorio($consultorio)
    {
        $this->consultorio = $consultorio;
    }
    
    public function getConsultorio()
    {
        return ($this->consultorio);
    }

    // Métodos Asociados al CRUD y Otros
    public function agregarMedico()
    {   
        $this->Conexion = Conectarse();
        $sql = "INSERT INTO medicos (medIdentificacion, medNombres, medApellidos, medEspecialidad, medConsultorio) 
                VALUES ('$this->identificacion', '$this->nombres', '$this->apellidos', '$this->especialidad', '$this->consultorio')";
        $resultado = $this->Conexion->query($sql);
        $this->Conexion->close();
        return $resultado;  
    }

    public function consultarMedico($identificacion)
    {
        $this->Conexion = Conectarse();
        $sql = "SELECT * FROM medicos WHERE medIdentificacion = '$identificacion'";
        $resultado = $this->Conexion->query($sql);
        $this->Conexion->close();
        return $resultado;  
    }
        
    public function actualizarMedico()
    {   
        $this->Conexion = Conectarse();
        $sql = "UPDATE medicos SET medIdentificacion='$this->identificacion', medNombres='$this->nombres', medApellidos='$this->apellidos', medEspecialidad='$this->especialidad', medConsultorio='$this->consultorio' WHERE idMedico = '$_POST[idMedico]'";
        $resultado = $this->Conexion->query($sql);
        $this->Conexion->close();
        return $resultado;  
    }

    public function listarMedicos()
    {
        $this->Conexion = Conectarse();
        $sql = "SELECT * FROM medicos";
        $resultado = $this->Conexion->query($sql);
        $this->Conexion->close();
        return $resultado;  
    }   
}
?>