<?php
    include_once("functions.php");
    header("Content-Type:application/json");
    if(isset($_POST["operation"])){
        $operation=$_POST["operation"];
        switch ($operation) {
            case "login":
                echo(login($_POST['email'],$_POST['password']));
                break;
       
            default :
                $data = ['error' => ['code'=>005,'message'=>'Operation non reconnue'], 'success' => false];
                echo json_encode($data);
                break;
        }
    } 
?>