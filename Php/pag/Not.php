<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../CSS/bootstrap.css">
	<title>Notbooks</title>
	<link rel="shortcut icon" type="image/x-icon" href="../Imagens/Logo.jpg">
	<link href="../CSS/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
	<script type="text/javascript">
		function mudacor(obj, img) {
			obj.src = img;
		}

		function iniciar() {
			var obj1 = document.getElementById("img1");
			var obj2 = document.getElementById("img2");
			var obj3 = document.getElementById("img3");
			var obj4 = document.getElementById("img4");
			obj1.addEventListener("mouseover", function(event) {
				mudacor(this, "../Imagens/Not1.1.png");
			});
			obj1.addEventListener("mouseout", function(event) {
				mudacor(this, "../Imagens/Not1.jpg");
			});
			obj2.addEventListener("mouseover", function(event) {
				mudacor(this, "../Imagens/Not2.1.jpg");
			});
			obj2.addEventListener("mouseout", function(event) {
				mudacor(this, "../Imagens/Not2.jpg");
			});
			obj3.addEventListener("mouseover", function(event) {
				mudacor(this, "../Imagens/Not3.1.png");
			});
			obj3.addEventListener("mouseout", function(event) {
				mudacor(this, "../Imagens/Not3.jpg");
			});
			obj4.addEventListener("mouseover", function(event) {
				mudacor(this, "../Imagens/Not4.1.jpg");
			});
			obj4.addEventListener("mouseout", function(event) {
				mudacor(this, "../Imagens/Not4.jpg");
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

						<a class="navbar-brand" href="../index.php">
							<img src="..\Imagens\Logo.png" width="150" height="100" class="d-inline-block align-top" alt="">
							<h1 align="center">Infotec</h1>

						</a>

						<nav class="navbar navbar-expand-lg navbar-light bg-light">
							<a class="navbar-brand" href="#"></a>
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>

							<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<ul class="navbar-nav mr-auto">
									<li class="nav-item active">
										<a class="nav-link" href="..\index.php">Home <span class="sr-only">(current)</span></a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="Pc.php">Pc gamer</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="Perifericos.php">Perifericos</a>
									</li>
									<li class="nav-item">
										<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Notebooks</a>
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

						<!--Modal Not1-->
						<div class="modal fade" id="Not1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLongTitle">Alienware</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<p align="middle"><img src="../Imagens/Not1.jpg"></p>
										<p align="middle">
											<ul>
												<li>Processador: Intel 7 3.5 GHz
												<li> Display: 1920x1080 pixel
												<li>Placa de Video: NVIDIA GeForce GTX 970
												<li>RAM: 16 GB
												<li>HD: 1 TB
												<li>Sistema Operecional: Windows 10
											</ul>
										</p>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
										<a href="#"><button type="button" class="btn btn-primary">R$3.500,99</button></a>
									</div>
								</div>
							</div>
						</div>

						<!--Modal Not2-->
						<div class="modal fade" id="Not2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLongTitle">Acer Gamer i7</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<p align="middle"><img src="../Imagens/Not2.jpg"></p>
										<p align="middle">
											<ul>
												<li>Processador: Intel 5 3.5 GHz
												<li> Display: 1920x1080 pixel
												<li>Placa de Video: NVIDIA GeForce GTX 1080
												<li>RAM: 32 GB
												<li>HD: 1 TB
												<li>Sistema Operecional: Windows 10
											</ul>
										</p>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
										<a href="#"><button type="button" class="btn btn-primary">R$3.500,99</button></a>
									</div>
								</div>
							</div>
						</div>

						<!--Modal Not3-->
						<div class="modal fade" id="Not3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLongTitle">Asus Gaming</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<p align="middle"><img src="../Imagens/Not3.jpg"></p>
										<p align="middle">
											<ul>
												<li>Processador: Intel 9 3.5 GHz
												<li> Display: 1920x1080 pixel
												<li>Placa de Video: NVIDIA GeForce GTX 1080
												<li>RAM: 64 GB
												<li>HD: 2 TB
												<li>Sistema Operecional: Windows 10
											</ul>
										</p>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
										<a href="#"><button type="button" class="btn btn-primary">R$3.500,99</button></a>
									</div>
								</div>
							</div>
						</div>

						<!--Modal Not4-->
						<div class="modal fade" id="Not4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLongTitle">Lenovo Legion </h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<p align="middle"><img src="../Imagens/Not4.jpg"></p>
										<p align="middle">
											<ul>
												<li>Processador: Intel 7 3.5 GHz
												<li> Display: 1920x1080 pixel
												<li>Placa de Video: NVIDIA GeForce GTX 1050
												<li>RAM: 8 GB
												<li>HD: 1 TB
												<li>Sistema Operecional: Windows 10
											</ul>
										</p>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
										<a href="#"><button type="button" class="btn btn-primary">R$3.500,99</button></a>
									</div>
								</div>
							</div>
						</div>
						<div class="container col-13">
							<img src="../Imagens/slide2.5.jpg" class="img-fluid" alt="Responsive image">
						</div>
						<!--Notebooks-->
						<div class="container-fluid">
							<a data-toggle="modal" data-target="#Not1">
								<img src="../Imagens/Not1.jpg" alt="..." class="img-thumbnail" id="img1" onmouseover="this.src='../Imagens/Not1.1.png';" onmouseout="this.src='../Imagens/Not1.jpg';">
							</a>
							<a data-toggle="modal" data-target="#Not2">
								<img src="../Imagens/Not2.jpg" alt="..." class="img-thumbnail" id="img2" onmouseover="this.src='../Imagens/Not2.1.jpg';" onmouseout="this.src='../Imagens/Not2.jpg';">
							</a>
							<a data-toggle="modal" data-target="#Not3">
								<img src="../Imagens/Not3.jpg" alt="..." class="img-thumbnail" id="img3" onmouseover="this.src='../Imagens/Not3.1.png';" onmouseout="this.src='../Imagens/Not3.jpg';">
							</a>
							<a data-toggle="modal" data-target="#Not4">
								<img src="../Imagens/Not4.jpg" alt="..." class="img-thumbnail" id="img4" onmouseover="this.src='../Imagens/Not4.1.jpg';" onmouseout="this.src='../Imagens/Not4.jpg';">
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