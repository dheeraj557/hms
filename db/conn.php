<?php
 //   $host='localhost';
 //   $db='hms';
 //   $user='root';
 //   $pass='';
 //   $charset='utf8mb4';
    $host='remotemysql.com';
    $db='aI0MeTlhGG';
    $user='aI0MeTlhGG';
    $pass='zCds0oM07a';
    $charset='utf8mb4';
    
    $dsn="mysql:host=$host;dbname=$db;charset=$charset";
    try{
        $pdo=new PDO($dsn,$user,$pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e)
    {
        throw new PDOException($e->getMessage());
    }
    require_once'user.php';
    require_once'crud.php';
    $crud=new crud($pdo);
    $user=new user($pdo);
    $user->insertUser("admin","password");
?>