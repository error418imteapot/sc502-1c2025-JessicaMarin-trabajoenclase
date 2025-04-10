<?php
//con esto en todos los archivos dependenmos de la conexion a la base de datos
require('db.php');

//entre parentesis los parametros que recibe
function userRegistry($username, $password, $email){
    //por si hay un error todo dentro de un try catch
    try{
        //vamos a usar la variable pdo global porque se accede de cualquier lado
        global $pdo;
        //encripta la clave
        $passwordHashed = password_hash($password, PASSWORD_BCRYPT);
        //en este insert los values los definimos luego cuando ejecutamos
        $sql = "INSERT INTO USERS (username, password, email) values (:username, :password, :email)";
        $stmt = $pdo -> prepare($sql);
        $stmt -> execute(['username' => $username, 'password' => $passwordHashed, 'email' => $email]);
        return "Usuario registrado";
        
    }catch(Exception $e){
 
    }
}