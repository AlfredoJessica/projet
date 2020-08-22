
<!DOCTYPE html>
<html class="client-nojs" lang="en" dir="ltr">
<head>
	<meta charset="UTF-8">
	<link rel="icon" href="../projet/images/1.jpg"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../projet/css/style.css" />
	
	<title>Appel à projets</title>
	
</head>
<body>
    <nav class="main-navigation">
       
       <ul class="nav-list">
           <li class="nav-list-item">
               <a href="../projet/principale.php" class="nav-link">Home</a>
           </li>
           <li class="nav-list-item">
               <a href="../projet/index.php" class="nav-link">Se connecter</a>
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
	<section>
		<div id= 'main-container'>
			<h1>Bienvenue sur notre site d'appels à projets</h1>
			<div></div>
			<p></p>
			<section class="search-sec">
				<div class="container">
					<form action="#" method="post" novalidate="novalidate">
						<div>
							<div class="search-container">
								<div class="search-items">
									<input type="text" class="form-control search-slt" placeholder="Nom">
								</div>
								<div class="search-items">
									<input type="text" class="form-control search-slt" placeholder="Specialité">
								</div>
								<div class="search-items">
									<select class="form-control search-slt" id="Zone geographique">
										<option>Localisation</option>
										<option>Example one</option>
										<option>Example one</option>
										<option>Example one</option>
										<option>Example one</option>
										<option>Example one</option>
										<option>Example one</option>
								
									</select>
								</div>
								<div class="search-items" id='button-search'>
									<button type="button" class="btn btn-danger wrn-btn">Search</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</section>
				
				<div class="slideshow-container">
					<div class="mySlides fade">
						
						<img src="../projet/images/5.jpg" style="width:100%">
						
					</div>

					<div class="mySlides fade">
						
						<img src="../projet/images/6.jpg" style="width:100%">
						
					</div>

					<div class="mySlides fade">
						
						<img src="../projet/images/7.jpg" style="width:100%">
						
					</div>

					<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
					<a class="next" onclick="plusSlides(1)">&#10095;</a>
				</div>
				<br>

				<div style="text-align:center">
					<span class="dot" onclick="currentSlide(1)"></span>
					<span class="dot" onclick="currentSlide(2)"></span>
					<span class="dot" onclick="currentSlide(3)"></span>
				</div>
		</div>					
	</section>
	
		
		   
	<div class="footer">
				<div class="footer1">
					<div class="container">
						<div class="row">
							
							<div class="col-md-3 widget">
								<h3 class="widget-title">Contact</h3>
								<div class="widget-body">
									<p>05 55 31 67 24<br>
										<a href="mailto:#">ebaaj@3il.fr</a><br>
										<br>
									 <p>43 Rue de Sainte-Anne, 87015 Limoges</p>
                                   </p>
								</div>
							</div>

							<div class="col-md-3 widget">
								<h3 class="widget-title">Suivez-nous</h3>
								<div class="widget-body">
									<p class="follow-me-icons clearfix">
										<a href=""><i class="fa fa-twitter fa-2"></i></a>
										<a href=""><i class="fa fa-dribbble fa-2"></i></a>
										<a href=""><i class="fa fa-github fa-2"></i></a>
										<a href=""><i class="fa fa-facebook fa-2"></i></a>
									</p>	
								</div>
							</div>

							<div class="col-md-6 widget">
								<h3 class="widget-title">Mission</h3>
								<div class="widget-body">
									<p>Nous avons créé ce moteur de recherche dans le but de recenser tous les appels à projets, appels à manifestations d’intérêt, concours ou encore dispositifs de mécénat qui concernent la région Hauts-de-France mais aussi les projets nationaux.</p>

                                    <p>L’idée est d’aider les porteurs de projets, associations et structures de l’économie sociale et solidaire à trouver des financements et des nouveaux partenaires pour développer leurs projets.</p>
									
								</div>
							</div>

						</div> <!-- /row of widgets -->
					</div>
				</div>

				<div class="footer2">
					<div class="container">
						<div class="row">
							
							<div class="col-md-6 widget">
								<div class="widget-body">
									<p class="simplenav">
										<a href="../principale.php">Accueil</a> | 
										<a href="../pages/about.php">A propos</a> |
										<a href="../pages/signup.php">S'inscrire</a> |
										<a href="../index.php">Se Connecter</a>
									</p>
								</div>
							</div>

							<div class="col-md-6 widget">
								<div class="widget-body">
									<p class="text-right">
										Copyright &copy; 3IL-2020 
									</p>
								</div>
							</div>

						</div> <!-- /row of widgets -->
					</div>
				</div>
            </div>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	<script type="text/javascript" src="../projet/js/script.js"></script>
</body>
</html>