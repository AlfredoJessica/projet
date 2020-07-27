<?php
    session_start();
    if(isset($_SESSION["role"]) && $_SESSION["role"]=="admin"){
        header("location:admin/");
    }
    if(isset($_SESSION["role"]) && $_SESSION["role"]=="client"){
        header("location:public/");
    }
    
?>
<!DOCTYPE html>
<html lang="fr">

<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css" />
        <title>Se connecter</title>
  </head>

<body>
    <noscript>Sorry, your browser does not support JavaScript!</noscript>
    <div class="container">
        <div class="loginCard">
            <div class="semiBold">
                <p>
                    Bienvenue .<br /> Nous sommes là pour vous aider.
                </p>
            </div>
            <form class="form" onsubmit="login()">
                <div class="form-group">
                    <input class="form-control" value="" id="emailBox" type="email" placeholder="Adresse email" required autocomplete="username">
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <input class="form-control" type="password" value="" id="passwordBox" placeholder="Mot de passe" required autocomplete="current-password">
                        <div class="input-group-append">
                            <div class="input-group-text" onClick="showPassword()" id="eyeIcon" title="Afficher le mot de passe"><i class="fa fa-eye pointerOnHover"></i></div>
                        </div>
                    </div>
                </div>
                <div id="errorField" class="text-danger"></div>
                <button type="submit" class="btn btn-link positive" id="submitButton" href="" onclick="login()"><span id="connexion">Connexion</span></button>
            </form>
        </div>
    </div>
    <footer>
        © 3iL-Groupe 2020
    </footer>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>

</html>