<?php
require("connection.php");

class Proveedores
{
    private $connection;
    
    public function __construct(){
        $this->connection = ConnectionTwitter::getInstance();
    }
    
    public function getProveedores(){
        $query = "SELECT * FROM proveedores
                  ORDER BY Nombre ASC";                  
        $proveedores = array();
        if( $result = $this->connection->query($query) ){
            while($fila = $result->fetch_assoc()){
                $proveedores[] = $fila;
            }
            $result->free();
        }
        return $proveedores;
    }

    public function createProveedores($request){
        $razonSocial = $this->connection->real_escape_string($request['RazonSocial']);
        $nombre = $this->connection->real_escape_string($request['Nombre']);
        $apellido = $this->connection->real_escape_string($request['Apellido']);
        $direccion = $this->connection->real_escape_string($request['Direccion']);
        $telefono = $this->connection->real_escape_string($request['Telefono']);
        $mail = $this->connection->real_escape_string($request['Mail']);
        $cuit = $this->connection->real_escape_string($request['Cuit']);
        $cuil = $this->connection->real_escape_string($request['Cuil']);
       
        $query = "INSERT INTO productos VALUES (
                    DEFAULT,
                    '$razonSocial',
                    '$nombre',
                    '$apellido',
                    '$direccion',
                    '$telefono',
                    '$mail',
                    '$cuit',
                    '$cuil')";
        if($this->connection->query($query)){
            $request['ProveedorID'] = $this->connection->insert_id;
            return $request;
        }else{
            return false;
        }
    }

    public function updateProveedores($request){
        $id = (int) $this->connection->real_escape_string($request['ProveedorID']);
        $razonSocial = $this->connection->real_escape_string($request['RazonSocial']);
        $nombre = $this->connection->real_escape_string($request['Nombre']);
        $apellido = $this->connection->real_escape_string($request['Apellido']);
        $direccion = $this->connection->real_escape_string($request['Direccion']);
        $telefono = $this->connection->real_escape_string($request['Telefono']);
        $mail = $this->connection->real_escape_string($request['Mail']);
        $cuit = $this->connection->real_escape_string($request['Cuit']);
        $cuil = $this->connection->real_escape_string($request['Cuil']);
        $query = "UPDATE proveedores SET
                    razonSocial = '$razonSocial',
                    nombre = '$nombre',
                    apellido = '$apellido',
                    direccion = '$direccion',
                    telefono = '$telefono',
                    mail = '$mail',
                    cuit = '$cuit',
                    cuil = '$cuil'
                  WHERE ProveedorID = $id";
        return $this->connection->query($query);
    }

    public function removeProveedores($proveedorID){
        $id = (int) $this->connection->real_escape_string($proveedorID);
        $query = "DELETE FROM proveedores
                  WHERE ProveedorID = $id";
        return $this->connection->query($query);
    }

}