<?php
    include_once 'config.php';
    session_start();

    function unquote(string $quoted){
        return stripslashes(substr($quoted, 1, -1));
    }


    function addUser($unsafeEmail,$unsafePassword,$unsafeName,$unsafeRole){
        global $db;
        if(!emailExist($unsafeEmail) && $_SESSION['role']=='admin'){
            $email=$db->quote($unsafeEmail);
            $name=$db->quote($unsafeName);
            $unhasedPassword=$db->quote($unsafePassword);
            $hasedPassword=password_hash($unhasedPassword, PASSWORD_DEFAULT);
            $role=$db->quote($unsafeRole);
            $sql = "INSERT INTO users (login, mdp, nom ,role) VALUES (:email, :hasedPassword ,:name, :role)";
            $query = $db->prepare($sql);
            if($query->execute(['email'=>unquote($email),'hasedPassword'=>$hasedPassword ,"name"=>unquote($name),"role"=>unquote($role)])){
                $data = ['error' => ['code'=>NULL,'message'=>NULL], 'success' => true];
            }
            else{
                $data = ['error' => ['code'=>003,'message'=>'requete non executée'], 'success' => false];
            }
        }else{
            if(!isset($_SESSION['role'])){
                $data = ['error' => ['code'=>004,'message'=>'Autorisation insifisante'], 'success' => false];
            }
            else{
                $data = ['error' => ['code'=>004,'message'=>'Cette adresse email est deja enregistrée'], 'success' => false];
            }
            
        }
        return json_encode( $data );
    }


    function recuperation($unsafeEmail,$unsafePassword,$unsafeName,$unsafeRole){
        global $db;
        if(!emailExist($unsafeEmail) && $_SESSION['role']=='admin'){
            $email=$db->quote($unsafeEmail);
            $name=$db->quote($unsafeName);
            $unhasedPassword=$db->quote($unsafePassword);
            $hasedPassword=password_hash($unhasedPassword, PASSWORD_DEFAULT);
            $role=$db->quote($unsafeRole);
            $sql = "INSERT INTO users (login, mdp, nom ,role) VALUES (:email, :hasedPassword ,:name, :role)";
            $query = $db->prepare($sql);
            if($query->execute(['email'=>unquote($email),'hasedPassword'=>$hasedPassword ,"name"=>unquote($name),"role"=>unquote($role)])){
                $data = ['error' => ['code'=>NULL,'message'=>NULL], 'success' => true];
            }
            else{
                $data = ['error' => ['code'=>003,'message'=>'requete non executée'], 'success' => false];
            }
        }else{
            if(!isset($_SESSION['role'])){
                $data = ['error' => ['code'=>004,'message'=>'Autorisation insifisante'], 'success' => false];
            }
            else{
                $data = ['error' => ['code'=>004,'message'=>'Cette adresse email est deja enregistrée'], 'success' => false];
            }
            
        }
        return json_encode( $data );
    }


?>