<?php
require("connection.php");

class Remitos
{
    private $connection;
    
    public function __construct(){
        $this->connection = ConnectionTwitter::getInstance();
    }
    
    public function getRemitos(){
        $query = "SELECT * FROM remitos
                  ORDER BY RemitoNumero ASC";                  
        $remitos = array();
        if( $result = $this->connection->query($query) ){
            while($fila = $result->fetch_assoc()){
                $remitos[] = $fila;
            }
            $result->free();
        }
        return $remitos;
    }

    public function createRemito($request){
        $proveedorID = $this->connection->real_escape_string($request['ProveedorID']);        
        $remitoNumero = $this->connection->real_escape_string($request['remitoNumero']);
        $remitoFecha = $this->connection->real_escape_string($request['RemitoFecha']);
        
        $query = "INSERT INTO remitos VALUES (
                    DEFAULT,
                    '$proveedorID',
                    '$remitoNumero',
                    '$remitoFecha')";
        if($this->connection->query($query)){
            $request['RemitoID'] = $this->connection->insert_id;
            return $request;
        }else{
            return false;
        }
    }

    public function updateRemito($request){
        $id = (int) $this->connection->real_escape_string($request['RemitoID']);
        $proveedorID = $this->connection->real_escape_string($request['ProveedorID']);        
        $remitoNumero = $this->connection->real_escape_string($request['remitoNumero']);
        $remitoFecha = $this->connection->real_escape_string($request['RemitoFecha']);
        $query = "UPDATE remitos SET
                    proveedorID = '$proveedorID',
                    remitoNumero = '$remitoNumero',
                    remitoFecha = '$remitoFecha'
                  WHERE RemitoID = $id";
        return $this->connection->query($query);
    }

    public function removeRemito($remitoID){
        $id = (int) $this->connection->real_escape_string($remitoID);
        $query = "DELETE FROM remitos
                  WHERE RemitoID = $id";
        return $this->connection->query($query);
    }

}