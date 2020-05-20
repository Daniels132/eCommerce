<!doctype html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
	<meta name="generator" content="Jekyll v3.8.6">
	<title>Home</title>
	<link rel="shortcut icon" type="image/x-icon" href="Imagens/Logo.png">
	<link href="CSS/bootstrap.css" rel="stylesheet">
	<link href="CSS/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
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
					<a href="pag/login.php">Login</a>
				</li>
				<li>
					<a href="pag/Form.php">Crie sua conta</a>
			</ul>
		</nav>

		<!-- Page Content -->
		<div id="content">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="container-fluid">

					<!--Barra de navegação-->
					<nav class="navbar navbar-light bg-light">
						<button type="button" id="sidebarCollapse">
							<img src="Imagens/3b.png" alt="">
						</button>
						<a class="navbar-brand" href="index.php">
							<img src="Imagens\Logo.png" width="150" height="100" class="d-inline-block align-top" alt="">
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
										<a class="nav-link disabled" href="../index.html" tabindex="-1" aria-disabled="true">Home</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="pag/Pc.php">PC Gamer</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="pag/Perifericos.php">Perifericos</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="pag/Not.php">Notebooks</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="pag/Monitores.php">Monitores</a>
									</li>

								</ul>
								<form class="form-inline my-2 my-lg-0">
									<input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Search">
									<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
								</form>
							</div>
						</nav>

						<div class="container col-13">
							<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
								<ol class="carousel-indicators">
									<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
									<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
									<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
								</ol>
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img src="Imagens/slide1.jpg" class="d-block w-100" alt="...">
									</div>
									<div class="carousel-item">
										<img src="Imagens/slide2.jpg" class="d-block w-100" alt="...">
									</div>
									<div class="carousel-item">
										<img src="Imagens/slide3.jpg" class="d-block w-100" alt="...">
									</div>
								</div>
								<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
						</div>
						<div class="container col-13">
							<a href="pag/Perifericos.php">
								<img src="Imagens/slide2.1.jpg" alt="..." class="img-thumbnail">
							</a>
							<a href="pag/Monitores.php">
								<img src="Imagens/slide2.2.jpg" alt="..." class="img-thumbnail">
							</a>
							<a href="pag/Perifericos.php">
								<img src="Imagens/slide2.3.jpg" alt="..." class="img-thumbnail">
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