<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="Home Page">
        <meta name="author" content="Hatim">
        <title>Custom Your Life - Accueil</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!-- START NAVBAR -->
        <nav class="navbar navbar-default main" role="navigation">
            <div class="container">
        	<!-- Brand and toggle get grouped for better mobile display -->
        	<div class="navbar-header">
        		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        			<span class="sr-only">Toggle navigation</span>
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
        		</button>
        		<a class="navbar-brand" href="">Star's Style</a>
        	</div>

        	<!-- Collect the nav links, forms, and other content for toggling -->
        	<div class="collapse navbar-collapse navbar-ex1-collapse">
        		<ul class="nav navbar-nav">
        			<li><a href="#">Accueil</a></li>
        			<li><a href="#">Homme</a></li>
        			<li><a href="#">Femme</a></li>
        			<li><a href="#">Accessoire</a></li>
        			<li class="active"><a href="#">Créer mon propre t-shirt</a></li>
        		</ul>

        		<ul class="nav navbar-nav navbar-right">
					<?php if (!isset($_SESSION["login"])): ?>
        			<li><a href="#">Se connecter</a></li>
        			<li><a href="#">S'inscrire</a></li>
					<?php else: ?>
        			<li class="dropdown">
        				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
        				<ul class="dropdown-menu">
        					<li><a href="#">Action</a></li>
        					<li><a href="#">Another action</a></li>
        					<li><a href="#">Something else here</a></li>
        					<li><a href="#">Separated link</a></li>
        				</ul>
        			</li>
					<?php endif; ?>
        		</ul>
        	</div><!-- /.navbar-collapse -->
            </div>
        </nav>
        <!-- END NAVBAR -->

		<!-- START HEADER -->
		<header class="main">
			<div id="container">
                <!--<img src="images/bg.png" alt="" class="img-responsive" width="100%">-->
                <div class="jumbotron img-responsive">
                	<div class="container">
                		<h2>DES T-SHIRT A VOTRE STYLE ET A VOTRE MESURE ! </h2>
                		<p>Marre d'acheter des vêtements qui ne vous conviennent pas. des couleurs qui ne vous plaisent pas, des vêtements qui ne sont pas résistants? </p>
                        <p>Alors vous êtes au bon endroit, vous pouvez créer votre propre style avec Custom Your Life, arrêtez de réfléchir et cliquez sur le bouton ci-dessous.</p>
						<br>
						<p>
                			<a class="btn btn-primary btn-lg">Créer Mon T-shirt <br> Maintenant !</a>
                		</p>
                	</div>
                </div><!-- END JUMBOTRON -->
            </div>
		</header>
		<!-- END HEADER -->

		<!-- START SECTION HOMME -->
		<section id="Products men">
			<h1 class="text-center">MEN</h1>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
						<article class="product">
							<header class="productHead">
								<h4 class="productTitle">T-shirt Noire "Joker" !</h4>
								<img src="images/1.png" class="img-responsive img-product" alt="">
							</header>
							<footer class="productFooter">
								<div class="col-lg-12 col-xs-12" id="taille">
									<label for="radio">Disponible en : </label>
									<br>
									<button role="radio" class="btn btn-default">XL</button>
									<button role="radio" class="btn btn-default">L</button>
									<button role="radio" class="btn btn-default">M</button>
									<button role="radio" class="btn btn-default">S</button>
								</div>
							</footer>
							<label for="#price" id="price">Prix : 139 MAD</label>
							<button role="button" class="btn btn-primary addcar">
								<i class="glyphicon glyphicon-shopping-cart"></i>
								&nbsp;Ajouter Au Panier
							</button>
							<button role="button" class="btn btn-default details">
								Plus de details
							</button>
						</article>
					</div><!-- PRODUCT 1 -->
					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
						<article class="product">
							<header class="productHead">
								<h4 class="productTitle">T-shirt Noire "Joker" !</h4>
								<img src="images/2.png" class="img-responsive img-product" alt="">
							</header>
							<footer class="productFooter">
								<div class="col-lg-12 col-xs-12" id="taille">
									<label for="radio">Disponible en : </label>
									<br>
									<button role="radio" class="btn btn-default">XL</button>
									<button role="radio" class="btn btn-default">L</button>
									<button role="radio" class="btn btn-default">M</button>
									<button role="radio" class="btn btn-default">S</button>
								</div>
							</footer>
							<label for="#price" id="price">Prix : 139 MAD</label>
							<button role="button" class="btn btn-primary addcar">
								<i class="glyphicon glyphicon-shopping-cart"></i>
								&nbsp;Ajouter Au Panier
							</button>
							<button role="button" class="btn btn-default details">
								Plus de details
							</button>
						</article>
					</div><!-- PRODUCT 2 -->
					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
						<article class="product">
							<header class="productHead">
								<h4 class="productTitle">T-shirt Noire "Joker" !</h4>
								<img src="images/3.png" class="img-responsive img-product" alt="">
							</header>
							<footer class="productFooter">
								<div class="col-lg-12 col-xs-12" id="taille">
									<label for="radio">Disponible en : </label>
									<br>
									<button role="radio" class="btn btn-default">XL</button>
									<button role="radio" class="btn btn-default">L</button>
									<button role="radio" class="btn btn-default">M</button>
									<button role="radio" class="btn btn-default">S</button>
								</div>
							</footer>
							<label for="#price" id="price">Prix : 139 MAD</label>
							<button role="button" class="btn btn-primary addcar">
								<i class="glyphicon glyphicon-shopping-cart"></i>
								&nbsp;Ajouter Au Panier
							</button>
							<button role="button" class="btn btn-default details">
								Plus de details
							</button>
						</article>
					</div><!-- PRODUCT 3 -->
					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
						<article class="product">
							<header class="productHead">
								<h4 class="productTitle">T-shirt Noire "Joker" !</h4>
								<img src="images/4.png" class="img-responsive img-product" alt="">
							</header>
							<footer class="productFooter">
								<div class="col-lg-12 col-xs-12" id="taille">
									<label for="radio">Disponible en : </label>
									<br>
									<button role="radio" class="btn btn-default">XL</button>
									<button role="radio" class="btn btn-default">L</button>
									<button role="radio" class="btn btn-default">M</button>
									<button role="radio" class="btn btn-default">S</button>
								</div>
							</footer>
							<label for="#price" id="price">Prix : 139 MAD</label>
							<button role="button" class="btn btn-primary addcar">
								<i class="glyphicon glyphicon-shopping-cart"></i>
								&nbsp;Ajouter Au Panier
							</button>
							<button role="button" class="btn btn-default details">
								Plus de details
							</button>
						</article>
					</div><!-- PRODUCT 4 -->
				</div>
			</div>
		</section>
		<!-- END SECTION HOMME -->


		<!-- START SECTION FEMME -->
		<section id="Products women">
			<h1 class="text-center">WOMEN</h1>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
						<article class="product">
							<header class="productHead">
								<h4 class="productTitle">T-shirt women "La vie en rose" !</h4>
								<img src="images/11.png" class="img-responsive img-product" alt="">
							</header>
							<footer class="productFooter">
								<div class="col-lg-12 col-xs-12" id="taille">
									<label for="radio">Disponible en : </label>
									<br>
									<button role="radio" class="btn btn-default">XL</button>
									<button role="radio" class="btn btn-default">L</button>
									<button role="radio" class="btn btn-default">M</button>
									<button role="radio" class="btn btn-default">S</button>
								</div>
							</footer>
							<label for="#price" id="price">Prix : 139 MAD</label>
							<button role="button" class="btn btn-primary addcar">
								<i class="glyphicon glyphicon-shopping-cart"></i>
								&nbsp;Ajouter Au Panier
							</button>
							<button role="button" class="btn btn-default details">
								Plus de details
							</button>
						</article>
					</div><!-- PRODUCT 1 -->
					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
						<article class="product">
							<header class="productHead">
								<h4 class="productTitle">T-shirt Noire "Joker" !</h4>
								<img src="images/22.png" class="img-responsive img-product" alt="">
							</header>
							<footer class="productFooter">
								<div class="col-lg-12 col-xs-12" id="taille">
									<label for="radio">Disponible en : </label>
									<br>
									<button role="radio" class="btn btn-default">XL</button>
									<button role="radio" class="btn btn-default">L</button>
									<button role="radio" class="btn btn-default">M</button>
									<button role="radio" class="btn btn-default">S</button>
								</div>
							</footer>
							<label for="#price" id="price">Prix : 139 MAD</label>
							<button role="button" class="btn btn-primary addcar">
								<i class="glyphicon glyphicon-shopping-cart"></i>
								&nbsp;Ajouter Au Panier
							</button>
							<button role="button" class="btn btn-default details">
								Plus de details
							</button>
						</article>
					</div><!-- PRODUCT 2 -->
					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
						<article class="product">
							<header class="productHead">
								<h4 class="productTitle">T-shirt Noire "Joker" !</h4>
								<img src="images/33.png" class="img-responsive img-product" alt="">
							</header>
							<footer class="productFooter">
								<div class="col-lg-12 col-xs-12" id="taille">
									<label for="radio">Disponible en : </label>
									<br>
									<button role="radio" class="btn btn-default">XL</button>
									<button role="radio" class="btn btn-default">L</button>
									<button role="radio" class="btn btn-default">M</button>
									<button role="radio" class="btn btn-default">S</button>
								</div>
							</footer>
							<label for="#price" id="price">Prix : 139 MAD</label>
							<button role="button" class="btn btn-primary addcar">
								<i class="glyphicon glyphicon-shopping-cart"></i>
								&nbsp;Ajouter Au Panier
							</button>
							<button role="button" class="btn btn-default details">
								Plus de details
							</button>
						</article>
					</div><!-- PRODUCT 3 -->
					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
						<article class="product">
							<header class="productHead">
								<h4 class="productTitle">T-shirt Noire "Joker" !</h4>
								<img src="images/44.png" class="img-responsive img-product" alt="">
							</header>
							<footer class="productFooter">
								<div class="col-lg-12 col-xs-12" id="taille">
									<label for="radio">Disponible en : </label>
									<br>
									<button role="radio" class="btn btn-default">XL</button>
									<button role="radio" class="btn btn-default">L</button>
									<button role="radio" class="btn btn-default">M</button>
									<button role="radio" class="btn btn-default">S</button>
								</div>
							</footer>
							<label for="#price" id="price">Prix : 139 MAD</label>
							<button role="button" class="btn btn-primary addcar">
								<i class="glyphicon glyphicon-shopping-cart"></i>
								&nbsp;Ajouter Au Panier
							</button>
							<button role="button" class="btn btn-default details">
								Plus de details
							</button>
						</article>
					</div><!-- PRODUCT 4 -->
				</div>
			</div>
		</section>
		<!-- END SECTION FEMME -->


		<!-- START SECTION ACCESSOIRE -->
		<section id="Products accesoiries">
			<h1 class="text-center">ACCESSOIRIES</h1>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
						<article class="product">
							<header class="productHead">
								<h4 class="productTitle">Bracelet Noire "Joker" !</h4>
								<img src="images/111.png" class="img-responsive img-product" alt="">
							</header>
							<footer class="productFooter">
								<div class="col-lg-12 col-xs-12" id="taille">
									<label for="radio">Disponible en : </label>
									<br>
									<button role="radio" class="btn btn-default">XL</button>
									<button role="radio" class="btn btn-default">L</button>
									<button role="radio" class="btn btn-default">M</button>
									<button role="radio" class="btn btn-default">S</button>
								</div>
							</footer>
							<label for="#price" id="price">Prix : 139 MAD</label>
							<button role="button" class="btn btn-primary addcar">
								<i class="glyphicon glyphicon-shopping-cart"></i>
								&nbsp;Ajouter Au Panier
							</button>
							<button role="button" class="btn btn-default details">
								Plus de details
							</button>
						</article>
					</div><!-- PRODUCT 1 -->
					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
						<article class="product">
							<header class="productHead">
								<h4 class="productTitle">Bracelet Noire "Joker"</h4>
								<img src="images/222.png" class="img-responsive img-product" alt="">
							</header>
							<footer class="productFooter">
								<div class="col-lg-12 col-xs-12" id="taille">
									<label for="radio">Disponible en : </label>
									<br>
									<button role="radio" class="btn btn-default">XL</button>
									<button role="radio" class="btn btn-default">L</button>
									<button role="radio" class="btn btn-default">M</button>
									<button role="radio" class="btn btn-default">S</button>
								</div>
							</footer>
							<label for="#price" id="price">Prix : 139 MAD</label>
							<button role="button" class="btn btn-primary addcar">
								<i class="glyphicon glyphicon-shopping-cart"></i>
								&nbsp;Ajouter Au Panier
							</button>
							<button role="button" class="btn btn-default details">
								Plus de details
							</button>
						</article>
					</div><!-- PRODUCT 2 -->
					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
						<article class="product">
							<header class="productHead">
								<h4 class="productTitle">Bracelet Noire "Joker"</h4>
								<img src="images/333.png" class="img-responsive img-product" alt="">
							</header>
							<footer class="productFooter">
								<div class="col-lg-12 col-xs-12" id="taille">
									<label for="radio">Disponible en : </label>
									<br>
									<button role="radio" class="btn btn-default">XL</button>
									<button role="radio" class="btn btn-default">L</button>
									<button role="radio" class="btn btn-default">M</button>
									<button role="radio" class="btn btn-default">S</button>
								</div>
							</footer>
							<label for="#price" id="price">Prix : 139 MAD</label>
							<button role="button" class="btn btn-primary addcar">
								<i class="glyphicon glyphicon-shopping-cart"></i>
								&nbsp;Ajouter Au Panier
							</button>
							<button role="button" class="btn btn-default details">
								Plus de details
							</button>
						</article>
					</div><!-- PRODUCT 3 -->
					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
						<article class="product">
							<header class="productHead">
								<h4 class="productTitle">Bracelet Noire "Joker"</h4>
								<img src="images/444.png" class="img-responsive img-product" alt="">
							</header>
							<footer class="productFooter">
								<div class="col-lg-12 col-xs-12" id="taille">
									<label for="radio">Disponible en : </label>
									<br>
									<button role="radio" class="btn btn-default">XL</button>
									<button role="radio" class="btn btn-default">L</button>
									<button role="radio" class="btn btn-default">M</button>
									<button role="radio" class="btn btn-default">S</button>
								</div>
							</footer>
							<label for="#price" id="price">Prix : 139 MAD</label>
							<button role="button" class="btn btn-primary addcar">
								<i class="glyphicon glyphicon-shopping-cart"></i>
								&nbsp;Ajouter Au Panier
							</button>
							<button role="button" class="btn btn-default details">
								Plus de details
							</button>
						</article>
					</div><!-- PRODUCT 4 -->
				</div>
			</div>
		</section>
		<!-- END SECTION ACCESSOIRE -->

		<!-- START CLIENT FEEDBACK -->
		<footer id="main">
			<div class="container">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
						<div id="aboutUs">
							<h3>About Us</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque et in nisi numquam ut? Aliquid assumenda at aut beatae enim est ex labore laborum minima molestias nihil pariatur porro, possimus quam quidem rem velit. A consectetur cumque deserunt dolorem exercitationem ipsum omnis provident quam sunt. Ex facilis iusto modi possimus reiciendis sit! A aliquid consequatur cupiditate delectus dolorum eligendi facilis minus, neque nulla, numquam obcaecati officia? Animi iusto nihil quo repellat tempore. Ab ad culpa distinctio eligendi esse illum, iste laborum magnam maxime minus nisi, praesentium, ratione rem repudiandae tempora. Animi beatae deserunt ea rem repudiandae sed sit temporibus! Maxime!</p>
						</div>
					</div><!-- end about us -->
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
						<div id="socialNetworks">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<h3>"Custom Your Life in Social Networks"</h3>
								<ul>
									<li><a href="#"><img src="images/facebook.png" alt="" class="img-responsive"></a></li>
									<li><a href="#"><img src="images/youtube.png" alt="" class="img-responsive"></a></li>
									<li><a href="#"><img src="images/insta.png" alt="" class="img-responsive"></a></li>

								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- END FOOTER -->

		<!-- START COPYRIGHT -->
		<footer id="copyright">
			<div class="container">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 copyright">
					<h5>All right reserved &copy; 2016</h5>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 designer">
					<a href="#"><h5>Designed by : LAGZAR Hatim</h5></a>
				</div>
			</div>
		</footer>
		<!-- END COPYYRIGHT -->

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>