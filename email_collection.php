<?php
    $host = "MySQL.loheerebozo.com";
    $username = "xloheerebozo";
    $password = "haribol108";
    $db = "xloheerebozo-customers";
    $dsn = "mysql:host=$host;dbname=$db";
        
    
    try{
        $conn = new PDO($dsn, $username, $password)
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
    
        
        if(isset($_POST['submit'])){
            $email = $_POST['email_sign_up'];
        }
        else(die)

        $sql = "INSERT INTO email (email) VALUES ($email)";
        $conn->exec($sql);
    }
    catch(PDOException $e){
        echo $sql . "<br>" . $e->getMessage();
    }
        
?>