<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "projet_inov";
    
    $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false, 
        ];
    try {
        
        $db = new PDO("mysql:host=$servername;dbname=$dbname","","projet_inov" , $options);
        }
    catch(PDOException $e)
        {
        echo "Connection failed: " . $e->getMessage();
        }
?>
