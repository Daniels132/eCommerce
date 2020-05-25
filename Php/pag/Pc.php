<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../CSS/bootstrap.css">
	<title>PC Gamer</title>
	<link rel="shortcut icon" type="image/x-icon" href="../Imagens/Logo.jpg">
	<link href="../CSS/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
	<script>
		function mudacor(obj, img) {
			obj.src = img;
		}

		function iniciar() {
			var obj1 = document.getElementById("img1");
			var obj2 = document.getElementById("img2");
			var obj3 = document.getElementById("img3");
			var obj4 = document.getElementById("img4");
			var obj5 = document.getElementById("img5");

			obj1.addEventListener("mouseover", function(event) {
				mudacor(this, "../Imagens/PC1.1.jpg");
			});
			obj1.addEventListener("mouseout", function(event) {
				mudacor(this, "../Imagens/PC1.jpg");
			});
			obj2.addEventListener("mouseover", function(event) {
				mudacor(this, "../Imagens/PC3.1.jpg");
			});
			obj2.addEventListener("mouseout", function(event) {
				mudacor(this, "../Imagens/PC3.jpg");
			});
			obj3.addEventListener("mouseover", function(event) {
				mudacor(this, "../Imagens/PC4.1.jpg");
			});
			obj3.addEventListener("mouseout", function(event) {
				mudacor(this, "../Imagens/PC4.jpg");
			});
			obj4.addEventListener("mouseover", function(event) {
				mudacor(this, "../Imagens/PC5.2.jpg");
			});
			obj4.addEventListener("mouseout", function(event) {
				mudacor(this, "../Imagens/PC5.jpg");
			});
			obj5.addEventListener("mouseover", function(event) {
				mudacor(this, "../Imagens/PC2.1.jpg");
			});
			obj5.addEventListener("mouseout", function(event) {
				mudacor(this, "../Imagens/PC2.jpg");
			});
		}
		window.addEventListener("load", iniciar);
	</script>
</head>

<body>
	<div class="wrapper">
		<!-- Sidebar -->
		<nav id="sidebar">

			<div id="dismiss">
				<i class="fas fa-arrow-left"></i>
			</div>
			<?php
			if(isset($_SESSION['usuario'])):
			?>
			<div class="sidebar-header">
				<h3><?php echo $_SESSION['usuario']?></h3>
			</div>

			<ul class="list-unstyled components">
				<li class="active">
					<a href="logout.php">Sair</a>
				</li>
			<?php
			endif;
			if(!isset($_SESSION['usuario'])):
			?>
			<div class="sidebar-header">
				<h3>Entre na sua conta</h3>
			</div>

			<ul class="list-unstyled components">
				<li class="active">
					<a href="login.php">Login</a>
				</li>
				<li>
					<a href="Form.php">Crie sua conta</a>
			</ul>
			<?php
			endif;
			?>
		</nav>

		<!-- Page Content -->
		<div id="content">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="container-fluid">

					<!--Barra de navegação-->
					<nav class="navbar navbar-light bg-light">
						<button type="button" id="sidebarCollapse">
							<img src="../Imagens/3b.png" alt="">
						</button>
						<a class="navbar-brand" href="..\index.php">
							<img src="..\Imagens\Logo.png" width="150" height="100" class="d-inline-block align-top" alt="">
							<h1>Infotec</h1>
						</a>
						<nav class="navbar navbar-expand-lg navbar-light bg-light">
							<a class="navbar-brand" href="#"></a>
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>

							<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<ul class="navbar-nav mr-auto">
									<li class="nav-item">
										<a class="nav-link" href="..\index.php">Home</a>
									</li>
									<li class="nav-item">
										<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">PC gamer</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="Perifericos.php">Perifericos</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="Not.php">Notebooks</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="Monitores.php">Monitores</a>
									</li>

								</ul>
								<form class="form-inline my-2 my-lg-0">
									<input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Search">
									<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
								</form>
							</div>
						</nav>
						<!--Modal PC1-->
						<div class="modal fade" id="PC1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLongTitle">Prime</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<p align="middle"><img src="..\Imagens\PC1.jpg"></p>
										<p align="middle">
											<ul>
												<li>
													Processador:Intel® Core i5-9100F
												</li>
												<li>
													Placa de vídeo PC: GeForce GTX 1650 4GB

												</li>
												<li>
													Cooler: Air Cooler
												</li>
												<li>
													Placa mãe: Intel H310

												</li>
												<li>
													Memória RAM: 8GB DDR4 2666MHz

												</li>
												<li>
													HDD: HDD 1TB

												</li>
												<li>
													SSD PC: SSD M.2 240GB
												</li>
												<li>
													Fonte de alimentação: 500W 80 PLUS

												</li>
												<li>
													Gabinete: Archangel RGB
												</li>
												<li>
													Software: Windows 10 (Versão de testes 30 dias)

												</li>
											</ul>
										</p>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
										<a href="#"><button type="button" class="btn btn-primary">4.599,99</button></a>
									</div>
								</div>
							</div>
						</div>

						<!--Modal PC3-->
						<div class="modal fade" id="PC3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLongTitle">Nitro 50</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<p align="middle"><img src="..\Imagens\PC3.jpg"></p>
										<p align="middle">
											<ul>
												<li>
													Processador:Intel® Core i7-9100F
												</li>
												<li>
													Placa de vídeo PC: GeForce GTX 1050 4GB

												</li>
												<li>
													Cooler: Air Cooler
												</li>
												<li>
													Placa mãe: Intel H310

												</li>
												<li>
													Memória RAM: 8GB DDR4 2666MHz

												</li>
												<li>
													HDD: HDD 2TB

												</li>
												<li>
													SSD PC: SSD M.2 240GB
												</li>
												<li>
													Fonte de alimentação: 600W 80 PLUS

												</li>
												<li>
													Gabinete: TGT RGB
												</li>
												<li>
													Software: Windows 10 (Versão de testes 30 dias)

												</li>
											</ul>
										</p>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
										<a href="#"><button type="button" class="btn btn-primary">4.599,99</button></a>
									</div>
								</div>
							</div>
						</div>

						<!--Modal PC4-->
						<div class="modal fade" id="PC4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLongTitle">Rog</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<p align="middle"><img src="..\Imagens\PC4.jpg"></p>
										<p align="middle">
											<ul>
												<li>
													Processador:Intel® Core i3-9100F
												</li>
												<li>
													Placa de vídeo PC: GeForce GTX 750 4GB

												</li>
												<li>
													Cooler: Air Cooler
												</li>
												<li>
													Placa mãe: Intel H310

												</li>
												<li>
													Memória RAM: 4GB DDR4 2666MHz

												</li>
												<li>
													HDD: HDD 1TB

												</li>
												<li>
													SSD PC: SSD M.2 240GB
												</li>
												<li>
													Fonte de alimentação: 500W 80 PLUS

												</li>
												<li>
													Gabinete: Cylon RGB
												</li>
												<li>
													Software: Windows 10 (Versão de testes 30 dias)

												</li>
											</ul>
										</p>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
										<a href="#"><button type="button" class="btn btn-primary">4.599,99</button></a>
									</div>
								</div>
							</div>
						</div>

						<!--Modal PC5-->
						<div class="modal fade" id="PC5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLongTitle">Asus</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<p align="middle"><img src="..\Imagens\PC5.jpg"></p>
										<p align="middle">
											<ul>
												<li>
													Processador:Intel® Core i9-9100F
												</li>
												<li>
													Placa de vídeo PC: GeForce GTX 1650 4GB

												</li>
												<li>
													Cooler: Air Cooler
												</li>
												<li>
													Placa mãe: Intel H310

												</li>
												<li>
													Memória RAM: 16GB DDR4 2666MHz

												</li>
												<li>
													HDD: HDD 2TB

												</li>
												<li>
													SSD PC: SSD M.2 240GB
												</li>
												<li>
													Fonte de alimentação: 550W 80 PLUS

												</li>
												<li>
													Gabinete: TG5 RGB
												</li>
												<li>
													Software: Windows 10 (Versão de testes 30 dias)

												</li>
											</ul>
										</p>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
										<a href="#"><button type="button" class="btn btn-primary">4.599,99</button></a>
									</div>
								</div>
							</div>
						</div>

						<!--Modal PC2-->
						<div class="modal fade" id="PC2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLongTitle">Asus Rog</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<p align="middle"><img src="..\Imagens\PC2.jpg"></p>
										<p align="middle">
											<ul>
												<li>
													Processador:Intel® Core i7-9100F
												</li>
												<li>
													Placa de vídeo PC: GeForce GTX 1050 4GB

												</li>
												<li>
													Cooler: Air Cooler
												</li>
												<li>
													Placa mãe: Intel H310

												</li>
												<li>
													Memória RAM: 8GB DDR4 2666MHz

												</li>
												<li>
													HDD: HDD 3TB

												</li>
												<li>
													SSD PC: SSD M.2 240GB
												</li>
												<li>
													Fonte de alimentação: 650W 80 PLUS

												</li>
												<li>
													Gabinete: Rise Model RGB
												</li>
												<li>
													Software: Windows 10

												</li>
											</ul>
										</p>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
										<a href="#"><button type="button" class="btn btn-primary">4.599,99</button></a>
									</div>
								</div>
							</div>
						</div>
						<img src="../Imagens/slide2.4.jpg" class="img-fluid" alt="Responsive image">
						<!--PCs-->
						<div class="container-fluid">

							<a data-toggle="modal" data-target="#PC1">
								<img src="../Imagens/PC1.jpg" alt="..." class="img-thumbnail" id="img1">
							</a>
							<a data-toggle="modal" data-target="#PC3">
								<img src="../Imagens/PC3.jpg" alt="..." class="img-thumbnail" id="img2">
							</a>
							<a data-toggle="modal" data-target="#PC4">
								<img src="../Imagens/PC4.jpg" alt="..." class="img-thumbnail" id="img3">
							</a>
							<a data-toggle="modal" data-target="#PC5">
								<img src="../Imagens/PC5.jpg" alt="..." class="img-thumbnail" id="img4">
							</a>
							<a data-toggle="modal" data-target="#PC2">
								<img src="../Imagens/PC2.jpg" alt="..." class="img-thumbnail" id="img5">
							</a>
						</div>
				</div>
			</nav>
		</div>
		<!-- Dark Overlay element -->
		<div class="overlay"></div>
	</div>
	<!-- jQuery CDN - Slim version (=without AJAX) -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<!-- Popper.JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
	<!-- Bootstrap JS -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
	<!-- jQuery Custom Scroller CDN -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

	<script type="text/javascript">
		var bt = document.getElementById("sidebarCollapse");
		bt.style.border = "none";
		$(document).ready(function() {
			$("#sidebar").mCustomScrollbar({
				theme: "minimal"
			});

			$('#dismiss, .overlay').on('click', function() {
				$('#sidebar').removeClass('active');
				$('.overlay').removeClass('active');
			});

			$('#sidebarCollapse').on('click', function() {
				$('#sidebar').addClass('active');
				$('.overlay').addClass('active');
				$('.collapse.in').toggleClass('in');
				$('a[aria-expanded=true]').attr('aria-expanded', 'false');
			});
		});
	</script>

</body>

</html>