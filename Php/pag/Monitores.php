<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../CSS/bootstrap.css">
  <title>Monitores</title>
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
      var obj6 = document.getElementById("img6");
      obj1.addEventListener("mouseover", function(event) {
        mudacor(this, "../Imagens/Moni1.1.jpg");
      });
      obj1.addEventListener("mouseout", function(event) {
        mudacor(this, "../Imagens/Moni1.jpg");
      });
      obj2.addEventListener("mouseover", function(event) {
        mudacor(this, "../Imagens/Moni2.1.jpg");
      });
      obj2.addEventListener("mouseout", function(event) {
        mudacor(this, "../Imagens/Moni2.jpg");
      });
      obj3.addEventListener("mouseover", function(event) {
        mudacor(this, "../Imagens/Moni3.1.jpg");
      });
      obj3.addEventListener("mouseout", function(event) {
        mudacor(this, "../Imagens/Moni3.jpg");
      });
      obj4.addEventListener("mouseover", function(event) {
        mudacor(this, "../Imagens/Moni4.1.jpg");
      });
      obj4.addEventListener("mouseout", function(event) {
        mudacor(this, "../Imagens/Moni4.jpg");
      });
      obj5.addEventListener("mouseover", function(event) {
        mudacor(this, "../Imagens/Moni5.1.jpg");
      });
      obj5.addEventListener("mouseout", function(event) {
        mudacor(this, "../Imagens/Moni5.jpg");
      });
      obj6.addEventListener("mouseover", function(event) {
        mudacor(this, "../Imagens/Moni6.1.jpg");
      });
      obj6.addEventListener("mouseout", function(event) {
        mudacor(this, "../Imagens/Moni6.jpg");
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
          <a href="#">Crie sua conta</a>
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
              <h1>Infotec</h1>
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
                    <a class="nav-link" href="Not.php">Notebooks</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Monitores</a>
                  </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
                </form>
              </div>
            </nav>
            <!--Modal Moni1-->
            <div class="modal fade" id="Moni1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">LG 20M37AA-B</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p align="middle"><img src="../Imagens/Moni1.jpg"></p>
                    <p align="middle">
                      <UL>
                        <li>Tela: 19,5 Polegadas
                        <li>Contraste: 5.000.000:1
                        <li>Brilho: 200CD/M²
                        <li>Pixel Pitch: 0.3177 (H)x 0.307(V) (mm)
                        <li>Ângulo de visão: H:90°/ V:65°
                        <li>Frequencia vertical: 56~75 Hz
                        <li>Formato: 16:9 Widscreen
                        <li>Tempo de resposta: 5ms(GTG)
                        <li>Resoluçao maxima: 1366x768
                        <li>Suporte de cores: 16,7M
                      </UL>
                    </P>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <a href="..\pag\Form.php"><button type="button" class="btn btn-primary">R$1.298,99</button></a>
                  </div>
                </div>
              </div>
            </div>
            <!--Modal Moni2-->
            <div class="modal fade" id="Moni2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">LG Ultra amplo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p align="middle"><img src="../Imagens/Moni2.jpg"></p>
                    <p align="middle">
                      <UL>
                        <li>Tela: 34 Polegadas
                        <li>Contraste: 6.000.000:1
                        <li>Brilho: 200CD/M²
                        <li>Pixel Pitch: 0.3177 (H)x 0.307(V) (mm)
                        <li>Ângulo de visão: H:90°/ V:65°
                        <li>Frequencia vertical: 56~75 Hz
                        <li>Formato: 18:9 Widscreen
                        <li>Tempo de resposta: 5ms(GTG)
                        <li>Resoluçao maxima: 1466x830
                        <li>Suporte de cores: 19,7M
                      </UL>
                    </P>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <a href="..\pag\Form.php"><button type="button" class="btn btn-primary">R$1.298,99</button></a>
                  </div>
                </div>
              </div>
            </div>
            <!--Modal Moni3-->
            <div class="modal fade" id="Moni3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">LG 20M37AA</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p align="middle"><img src="../Imagens/Moni3.jpg"></p>
                    <p align="middle">
                      <UL>
                        <li>Tela: 25,5 Polegadas
                        <li>Contraste: 7.000.000:1
                        <li>Brilho: 200CD/M²
                        <li>Pixel Pitch: 0.3177 (H)x 0.307(V) (mm)
                        <li>Ângulo de visão: H:90°/ V:65°
                        <li>Frequencia vertical: 65~75 Hz
                        <li>Formato: 16:9 Widscreen
                        <li>Tempo de resposta: 6ms(GTG)
                        <li>Resoluçao maxima: 1766x968
                        <li>Suporte de cores: 16,7M
                      </UL>
                    </P>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <a href="..\pag\Form.php"><button type="button" class="btn btn-primary">R$1.298,99</button></a>
                  </div>
                </div>
              </div>
            </div>
            <!--Modal Moni4-->
            <div class="modal fade" id="Moni4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">FORTNITE</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p align="middle"><img src="../Imagens/Moni4.jpg"></p>
                    <p align="middle">
                      <UL>
                        <li>Tela: 19,5 Polegadas
                        <li>Contraste: 5.000.000:1
                        <li>Brilho: 200CD/M²
                        <li>Pixel Pitch: 0.3177 (H)x 0.307(V) (mm)
                        <li>Ângulo de visão: H:90°/ V:65°
                        <li>Frequencia vertical: 56~75 Hz
                        <li>Formato: 16:9 Widscreen
                        <li>Tempo de resposta: 5ms(GTG)
                        <li>Resoluçao maxima: 1466x768
                        <li>Suporte de cores: 18,7M
                      </UL>
                    </P>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <a href="..\pag\Form.php"><button type="button" class="btn btn-primary">R$1.298,99</button></a>
                  </div>
                </div>
              </div>
            </div>
            <!--Modal Moni5-->
            <div class="modal fade" id="Moni5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">AOC 23 6 LED Full HD</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p align="middle"><img src="../Imagens/Moni5.jpg"></p>
                    <p align="middle">
                      <UL>
                        <li>Tela: 15,6 Polegadas
                        <li>Contraste: 5.000.000:1
                        <li>Brilho: 200CD/M²
                        <li>Pixel Pitch: 0.3177 (H)x 0.307(V) (mm)
                        <li>Ângulo de visão: H:90°/ V:65°
                        <li>Frequencia vertical: 56~75 Hz
                        <li>Formato: 16:9 Widscreen
                        <li>Tempo de resposta: 5ms(GTG)
                        <li>Resoluçao maxima: 1366x768
                        <li>Suporte de cores: 16,7M
                      </UL>
                    </P>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <a href="..\pag\Form.php"><button type="button" class="btn btn-primary">R$1.298,99</button></a>
                  </div>
                </div>
              </div>
            </div>
            <!--Modal Moni6-->
            <div class="modal fade" id="Moni6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">AOC Led e970swnl</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p align="middle"><img src="../Imagens/Moni6.jpg"></p>
                    <p align="middle">
                      <UL>
                        <li>Tela: 20,5 Polegadas
                        <li>Contraste: 5.000.000:1
                        <li>Brilho: 200CD/M²
                        <li>Pixel Pitch: 0.3177 (H)x 0.307(V) (mm)
                        <li>Ângulo de visão: H:90°/ V:65°
                        <li>Frequencia vertical: 56~75 Hz
                        <li>Formato: 16:9 Widscreen
                        <li>Tempo de resposta: 5ms(GTG)
                        <li>Resoluçao maxima: 1366x768
                        <li>Suporte de cores: 18,7M
                      </UL>
                    </P>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <a href="..\pag\Form.php"><button type="button" class="btn btn-primary">R$1.298,99</button></a>
                  </div>
                </div>
              </div>
            </div>
            <img src="../Imagens/slide2.2.jpg" class="img-fluid" alt="Responsive image">

            <!--Monitores-->
            <div class="container-fluid">
              <a data-toggle="modal" data-target="#Moni1">
                <img src="../Imagens/Moni1.jpg" alt="..." class="img-thumbnail" id="img1" onmouseover="this.src='../Imagens/Moni1.1.jpg';" onmouseout="this.src='../Imagens/Moni1.jpg';">
              </a>
              <a data-toggle="modal" data-target="#Moni2">
                <img src="../Imagens/Moni2.jpg" alt="..." class="img-thumbnail" id="img2" onmouseover="this.src='../Imagens/Moni2.1.jpg';" onmouseout="this.src='../Imagens/Moni2.jpg';">
              </a>
              <a data-toggle="modal" data-target="#Moni3">
                <img src="../Imagens/Moni3.jpg" alt="..." class="img-thumbnail" id="img3" onmouseover="this.src='../Imagens/Moni3.1.jpg';" onmouseout="this.src='../Imagens/Moni3.jpg';">
                <a data-toggle="modal" data-target="#Moni4">
                  <img src="../Imagens/Moni4.jpg" alt="..." class="img-thumbnail" id="img4" onmouseover="this.src='../Imagens/Moni4.1.jpg';" onmouseout="this.src='../Imagens/Moni4.jpg';">
                </a>
                <a data-toggle="modal" data-target="#Moni5">
                  <img src="../Imagens/Moni5.jpg" alt="..." class="img-thumbnail" id="img5" onmouseover="this.src='../Imagens/Moni5.1.jpg';" onmouseout="this.src='../Imagens/Moni5.jpg';">
                  <a data-toggle="modal" data-target="#Moni6">
                    <img src="../Imagens/Moni6.jpg" alt="..." class="img-thumbnail" id="img6" onmouseover="this.src='../Imagens/Moni6.1.jpg';" onmouseout="this.src='../Imagens/Moni6.jpg';">
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