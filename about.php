<?php
session_start();
include('php/funcoes.php');
if(!empty($_POST["login"]) && !empty($_POST["senha"])){
	$login = $_POST["login"];
	$senha = $_POST["senha"];
	logar($login,$senha);
}
if(isset($_GET['logout'])) {
	logout();
}
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>The Free Food-Point for Website Template | About :: w3layouts</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/slider-styles.css" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<link href='http://fonts.googleapis.com/css?family=Libre+Baskerville' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="wrap">
	<div class="top-head">
		<div class="welcome">Welcome To <span>Food Point</span></div>
		<div class="top-nav">
	        <ul>
	            <li><a href="index.php">Home</a></li>
	            <li><a href="gallery.php">Gallery</a></li>
	            <li><a href="#">Blog</a></li>
	            <li><a href="#">Login</a></li>
	            <li><a href="contact.php">Contact</a></li>
	        </ul>
	    </div>
	    <div class="clear"> </div>
    </div>
	<div class="header">
	<div class="logo"><a href="index.php"><img src="images/logo.png"  alt="Flowerilla"/></a></div>
    <div class="search">
     <?php if(empty($_SESSION['login_adm'])){ ?>
			    <form method="POST">
			    	<input type="text" name="login" placeholder="LOGIN"/>
			    	<br>
			    	<input type="password" name="senha" placeholder="SENHA"/>
			    	<br>
			    	<input type="submit" value="Logar" />
			    </form>    
		    <?php }else{ ?>
		    	<form method="GET">
				    Bem Vindo, <?php echo $_SESSION['login_adm']; ?> !
				    <input type="submit" value="Sair" name="logout" />
				</form>
		    <?php } ?>
    </div>
    <div class="clear"> </div>
	</div>
	<div class="nav">
        <ul>
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="cadastro.php">Cadastro</a></li>
            <li><a href="gallery.php">Galeria</a></li>
            <li><a href="#">Menu</a></li>
            <li><a href="contact.php">Contato</a></li>
            <?php if (isset($_SESSION['login_adm'])){ ?>
            	<li><a href="adm.php">Administração</a></li>
            <?php } ?>
            <div class="clear"> </div>
        </ul>
    </div>
	<div class="main-body">
	<div id="slider">
			<a href="#" target="_blank">
				<img src="images/slider-1.jpg" alt="Mini Ninjas" />
			</a>
			<a href="#" target="_blank">
				<img src="images/slider-2.jpg" alt="Price of Persia" />
			</a>
			<a href="#" target="_blank">
				<img src="images/slider-3.jpg" alt="Price of Persia" />
			</a>
	</div>
	<div clas="clear"> </div>
	<div class="grids">
		<ul>
			<h4>CADASTRO CLIENTES</h4>
			<p>
				<form method="POST">
					<input type="text" placeholder="NOME COMPLETO"/> <br><br>
					<input type="text" placeholder="EMAIL@EMAIL.COM.BR"/> <br><br>
					<input type="text" placeholder="(XX) XXXXX-XXXX"/> <br><br>
					<input type="password" placeholder="SENHA"/> <br><br>
					<input type="password" placeholder="CONFIRMA SENHA"/> <br><br>
					<select name="tipo_usuario">
						<option value="cliente">Cliente</option>
						<option value="funcionario">Funcionário</option>
						<option value="administrador">Administrador</option>
					</select><br><br>
					<input type="submit" value="CONFIRMAR" />
					<input type="reset" value="LIMPAR" /><br><br>
				</form>
			</p>
		<div class="clear"> </div>
		<br>
		<h4>Latest-Items</h4>
		<li>
			<h3>Ipsum simply</h3>
			<img src="images/thumb-3.jpg">
			<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit ame</p>
			<button>$12.58</button>
		</li>
		<li>
			<h3> Lorem Ipsum</h3>
			<img src="images/thumb-1.jpg">
			<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit ame</p>
			<button>$12.58</button>
		</li>
		<li class="last">
			<h3>Lorem simply</h3>
			<img src="images/thumb-7.jpg">
			<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit ame</p>
			<button>$12.58</button>
		</li>
			<a href="#">View all</a>
		</ul>
	<div class="clear"> </div>
</div>
	<div class="boxes">
		<div class="order">
		<ul>
			<li>
			<h3>ORDER</h3>
			<h4>No Products</h4>
			<p>shoping &nbsp;&nbsp;<span>$0:00</span></p>
			<p>Total &nbsp;&nbsp;<span>$0:00</span></p>
			<h5>Pricee and tax-include</h5>
			<h6><a href="#">Check-out</a></h6>
			<h6><a href="#">cart</a></h6>
		</li>
		</ul>
		</div>
		<div class="clear"> </div>
		<ul>
			<li>
			<h3>Restaurants Hours</h3>
			<h4>Breakfast </h4>
			<p>Monday - Friday &nbsp;&nbsp; 11 am - 03 pm</p>
			<p>Saturaday - Sunday &nbsp;&nbsp; 11 am - 04 pm</p>
			<h4>Lunch </h4>
			<p>Monday - Friday &nbsp;&nbsp; 11 am - 03 pm</p>
			<p>Saturaday - Sunday &nbsp;&nbsp; 11 am - 04 pm</p>
		</li>
		<li>
			<h3>News And Events</h3>
			<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit ame</p>
			<button>Read more</button>
			<h3>Lorem Ipsum is simply</h3>
			<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit ame</p>
			<button>Read more</button>
		</li>
			<div class="clear"> </div>
		</ul>
	</div>
	<div class="clear"> </div>
   </div>
</div>
<div class="footer1">
	<div class="wrap">
			<div class="footer-grids">
				<div class="footer-grid1">
					<h3>INFORMATION</h3>
						<ul>
							<li><a href="">Our Store</a></li>
							<li><a href="">Contact Us</a></li>
							<li><a href="">Delivery</a></li>
							<li><a href="">Legal Notice</a></li>
							<li><a href="">About Us</a></li>
						</ul>
				</div>
				<div class="footer-grid1">
					<h3>OUR OFFERS</h3>
						<ul>
							<li><a href="">specials</a></li>
							<li><a href="">New Products</a></li>
							<li><a href="">Top Sellers</a></li>
							<li><a href="">Manufacures</a></li>
							<li><a href="">Suplliers</a></li>
						</ul>
				</div>
				<div class="footer-grid1">
					<h3>YOURACCOUNT</h3>
						<ul>
							<li><a href="">Your Orders</a></li>
							<li><a href="">Your cradit slips</a></li>
							<li><a href="">Your Address</a></li>
							<li><a href="">Your personalinfo</a></li>
							<li><a href="">Your vochers</a></li>
						</ul>
			</div>
				<div class="footer-grid2">
					<h3>FALLOWS US</h3>
						<ul>
							<li><a href=""><img src="images/facebook.png" title="facebook"/></a></li>
							<li><a href=""><img src="images/twitter.png" title="twitter"></a></li>
							<li><a href=""><img src="images/rss.png" title="rss"></a></li>
						</ul>
				</div>
			</div>
			<div class="clear"> </div>
			<div class="copy">
    	<p>&copy; 2013 rights Reseverd | Design by <a href="http://w3layouts.com">W3Layouts.com</a></p>
    </div>
    </div>
			<div class="clear">
			</div>
		</div>
<script>
			$('#slider').coinslider();
		</script>

</body>
</html>