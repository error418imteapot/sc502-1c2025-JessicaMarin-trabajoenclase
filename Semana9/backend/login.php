<?php
require('db.php');
 
function login($username, $password){
    global $pdo;
 
    $sql = 'Select * from users where username = :username';
    $stmt = $pdo -> prepare($sql);
    $stmt -> execute(['username' => $username]);
    //para obtener informacion. retorna los datos como un array asociativo
    $user = $stmt -> fetch(PDO::FETCH_ASSOC); 
 
    if($user){
        //muestro los datos que estan en mi BD y fue resultado del fetch
        // echo $user['username'];
        // echo $user['email'];
        //estos echo se pueden eliminar para que no se vean los datos
        if(password_verify($password,$user['password'])){
            return true;
        }
    }
    return false;
}