<?php
require("connection.php");

class Usuario
{
    private $connection;
    
    public function __construct(){
        $this->connection = ConnectionTwitter::getInstance();
    }
    
    public function getUser($id){  
        $query = "SELECT * FROM usuarios WHERE UsuarioID = '$id'";
        $r = $this->connection->query($query);
        return $r->fetch_assoc();
    }

    public function validateUser($id,$password){   
        $query = "SELECT * FROM usuarios WHERE UserName = '$id' AND Password = '$password'";
        $r = $this->connection->query($query);
        return $r->fetch_assoc();
    }

    public function validateMail($mail){
        $query = "SELECT * FROM usuarios WHERE Email = '$mail'";                 
        $r = $this->connection->query($query);
        return $r->fetch_assoc();
    }

    public function validateUserName($userName){
        $query = "SELECT * FROM usuarios WHERE UserName = '$userName'";                 
        $r = $this->connection->query($query);
        return $r->fetch_assoc();
    }

    public function createUser($user){
        $perfilId = $this->connection->real_escape_string($user['PerfilID']);
        $nombre = $this->connection->real_escape_string($user['Nombre']);
        $apellido = $this->connection->real_escape_string($user['Apellido']);
        $userName = $this->connection->real_escape_string($user['UserName']);
        $telefono = $this->connection->real_escape_string($user['Telefono']);
        $email = $this->connection->real_escape_string($user['Email']);
        $password = $this->connection->real_escape_string($user['Password']);

        $query = "INSERT INTO usuarios VALUES (
                    DEFAULT,
                    '$perfilId',
                    '$nombre',
                    '$apellido',
                    '$userName',
                    '$telefono',
                    '$email',
                    '$password')";

        if($this->connection->query($query)){
            $user['UsuarioID'] = $this->connection->insert_id;
            return $user;
        }else{
            return false;
        }
    }

    public function updateUser($user){
        $usuarioID = $this->connection->real_escape_string($user['UsuarioID']);
        $perfilId = $this->connection->real_escape_string($user['PerfilID']);
        $nombre = $this->connection->real_escape_string($user['Nombre']);
        $apellido = $this->connection->real_escape_string($user['Apellido']);
        $userName = $this->connection->real_escape_string($user['UserName']);
        $telefono = $this->connection->real_escape_string($user['Telefono']);
        $email = $this->connection->real_escape_string($user['Email']);
        $password = $this->connection->real_escape_string($user['Password']);
       
        $query = "UPDATE usuarios SET 
                    PerfilID = '$perfilId',
                    Nombre = '$nombre',
                    Apellido = '$apellido',
                    UserName = '$userName',
                    Telefono = '$telefono',
                    Email = '$email',
                    Password = '$password'
                    WHERE UsuarioID = '$usuarioID'";

        if($this->connection->query($query)){
            return true;
        }else{
            return false;
        }
    }

}