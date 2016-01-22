<?php
require("connection.php");

class Productos
{
    private $connection;
    
    public function __construct(){
        $this->connection = ConnectionTwitter::getInstance();
    }
    
    public function getProductos(){
        $query = "SELECT * FROM productos
                  ORDER BY ProductoDetalle ASC";                  
        $productos = array();
        if( $result = $this->connection->query($query) ){
            while($fila = $result->fetch_assoc()){
                $productos[] = $fila;
            }
            $result->free();
        }
        return $productos;
    }

    public function createProducto($request){
        $CodigoInterno = $this->connection->real_escape_string($request['CodigoInterno']);
        $PrecioVenta = $this->connection->real_escape_string($request['PrecioVenta']);
        $ProductoDetalle = $this->connection->real_escape_string($request['ProductoDetalle']);
        $query = "INSERT INTO productos VALUES (
                    DEFAULT,
                    '$CodigoInterno',
                    '$ProductoDetalle',
                    '$PrecioVenta')";
        if($this->connection->query($query)){
            $request['ProductoID'] = $this->connection->insert_id;
            return $request;
        }else{
            return false;
        }
    }

    public function updateProducto($request){
        $id = (int) $this->connection->real_escape_string($request['ProductoID']);
        $CodigoInterno = $this->connection->real_escape_string($request['CodigoInterno']);
        $PrecioVenta = $this->connection->real_escape_string($request['PrecioVenta']);
        $ProductoDetalle = $this->connection->real_escape_string($request['ProductoDetalle']);
        $query = "UPDATE productos SET
                    CodigoInterno = '$CodigoInterno',
                    PrecioVenta = '$PrecioVenta',
                    ProductoDetalle = '$ProductoDetalle'
                  WHERE ProductoID = $id";
        return $this->connection->query($query);
    }

    public function removeProducto($productoID){
        $id = (int) $this->connection->real_escape_string($productoID);
        $query = "DELETE FROM productos
                  WHERE ProductoID = $id";
        return $this->connection->query($query);
    }

}