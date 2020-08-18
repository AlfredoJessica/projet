<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="../css/style.css" />
		<title>Enregistrement</title>
		
	</head>
<body>
<nav class="main-navigation">
       
       <ul class="nav-list">
           <li class="nav-list-item">
               <a href="../projet/principale.php" class="nav-link">Home</a>
           </li>
           <li class="nav-list-item">
               <a href="../projet/pages/signin.php" class="nav-link">Connexion</a>
           </li>
           <li class="nav-list-item">
               <a href="#" class="nav-link">Nos projets</a>
           </li>
           <li class="nav-list-item">
               <a href="../projet/pages/about.php" class="nav-link">A propos</a>
           </li>
           <li class="nav-list-item">
               <a href="#" class="nav-link">Contact</a>
           </li>
       </ul>

   </nav>
	<!-- container -->

	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.html">Accueil</a></li>
			<li class="active">  ENREGISTREMENT</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h2 class="page-title"> ENREGISTREMENT</h2>
				</header>
				
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center">Se connecter a un nouveau compte</h3>
							<p class="text-center text-muted">si vous avez deja un compte, <a href="../projet/tout/signin.php">S'identifier</a></p>
							<hr>

							<form>
								<div class="top-margin">
									<label>Noms</label>
									<input type="text" class="form-control">
								</div>
								<div class="top-margin">
									<label>Prenom</label>
									<input type="text" class="form-control">
								</div>
								<div class="top-margin">
									<label>Email <span class="text-danger">*</span></label>
									<input type="text" class="form-control">
								</div>

								<div class="row top-margin">
									<div class="col-sm-6">
										<label>Mot De Passe <span class="text-danger">*</span></label>
										<input type="text" class="form-control">
									</div>
									<div class="col-sm-6">
										<label>Confirmer le mot de passe <span class="text-danger">*</span></label>
										<input type="text" class="form-control">
									</div>
								</div>

								<hr>

								<div class="row">
									
									<div class="col-lg-4 text-right">
										<button class="btn btn-action" type="submit">S'enregistrer</button>
									</div>
								</div>
							</form>
						</div>
					</div>

				</div>
				
			</article>
			<!-- /Article -->

		</div>
	</div>	<!-- /container -->
	
	<?php include('../includes/footer.php'); ?>
    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>