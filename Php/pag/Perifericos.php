<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../CSS/bootstrap.css">
  <title>Perifericos</title>
  <link rel="shortcut icon" type="image/x-icon" href="../Imagens/Logo.jpg">
  <link href="../CSS/style.css" rel="stylesheet">
  <link href="../CSS/estilo.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
  <script>
    function mudaimg(obj, img) {
      obj.src = img;
    }

    function iniciar() {
      var obj1 = document.getElementById("img1");
      var obj2 = document.getElementById("img2");
      var obj3 = document.getElementById("img3");
      var obj4 = document.getElementById("img4");
      var obj5 = document.getElementById("img5");
      var obj6 = document.getElementById("img6");
      var obj7 = document.getElementById("img7");
      var obj8 = document.getElementById("img8");

      obj1.addEventListener("mouseover", function(event) {
        mudaimg(this, "../Imagens/PR1.1.jpg");
      });
      obj1.addEventListener("mouseout", function(event) {
        mudaimg(this, "../Imagens/PR1.jpg");
      });
      obj2.addEventListener("mouseover", function(event) {
        mudaimg(this, "../Imagens/PR2.1.jpg");
      });
      obj2.addEventListener("mouseout", function(event) {
        mudaimg(this, "../Imagens/PR2.jpg");
      });
      obj3.addEventListener("mouseover", function(event) {
        mudaimg(this, "../Imagens/PR3.1.jpg");
      });
      obj3.addEventListener("mouseout", function(event) {
        mudaimg(this, "../Imagens/PR3.jpg");
      });
      obj4.addEventListener("mouseover", function(event) {
        mudaimg(this, "../Imagens/PR4.1.jpg");
      });
      obj4.addEventListener("mouseout", function(event) {
        mudaimg(this, "../Imagens/PR4.jpg");
      });
      obj5.addEventListener("mouseover", function(event) {
        mudaimg(this, "../Imagens/PR5.1.jpg");
      });
      obj5.addEventListener("mouseout", function(event) {
        mudaimg(this, "../Imagens/PR5.jpg");
      });
      obj6.addEventListener("mouseover", function(event) {
        mudaimg(this, "../Imagens/PR6.1.jpg");
      });
      obj6.addEventListener("mouseout", function(event) {
        mudaimg(this, "../Imagens/PR6.jpg");
      });
      obj7.addEventListener("mouseover", function(event) {
        mudaimg(this, "../Imagens/PR7.1.jpg");
      });
      obj7.addEventListener("mouseout", function(event) {
        mudaimg(this, "../Imagens/PR7.jpg");
      });
      obj8.addEventListener("mouseover", function(event) {
        mudaimg(this, "../Imagens/PR8.1.jpg");
      });
      obj8.addEventListener("mouseout", function(event) {
        mudaimg(this, "../Imagens/PR8.jpg");
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
      if (isset($_SESSION['usuario'])) :
      ?>
        <div class="sidebar-header">
          <h3><?php echo $_SESSION['usuario'] ?></h3>
        </div>

        <ul class="list-unstyled components">
          <li class="active">
            <a href="logout.php">Sair</a>
          </li>
        <?php
      endif;
      if (!isset($_SESSION['usuario'])) :
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
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Perifericos</a>
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


            <!--Modal PR1-->
            <div class="modal fade" id="PR1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">HyperX Cloud Stinger</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p align="middle"><img src="../Imagens/PR1.jpg"></p>
                    <p align="middle">
                      <UL>
                        <li>Potência Máxima: 30 Miliwatts
                        <li>Comprimento do Cabo: 170,0 Cm
                      </UL>
                    </p>
                  </div>
                  <div class="modal-footer">
                    <form action="lg.php" method="POST">
                      <input type="text" name="input" value="HyperX Cloud Stinger">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                      <button type="submit" class="btn btn-primary">R$150,99</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>

            <!--Modal PR2-->
            <div class="modal fade" id="PR2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Warrior Ph219</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p align="middle"><img src="../Imagens/PR2.jpg"></p>
                    <p align="middle">
                      <ul>
                        <li>Potência Máxima: 30 Miliwatts
                        <li>Comprimento do Cabo: 170,0 Cm
                      </ul>
                    </p>
                  </div>
                  <div class="modal-footer">
                    <form action="lg.php" method="POST">
                      <input type="text" name="input" value="Warrior Ph219">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                      <button type="submit" class="btn btn-primary">R$150,99</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!--Modal PR3-->
            <div class="modal fade" id="PR3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Mouse Gamer Fortrek Spider</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p align="middle"><img src="../Imagens/PR3.jpg"></p>
                    <p align="middle">
                      <ul>
                        <li>Material: ABS
                        <li>Dimensões: 120x80x40mm
                        <li>Tensão: 5V
                        <li>Operação: Plug and Play
                        <li>Cor: Preto
                        <li>Resolução Máxima: 1200/1600/2400/3200 DPI
                        <li>Conector: USB
                        <li>Sensor: Óptico
                        <li>Número de Botões: 6 Botões + Scroll
                        <li>Compatibilidade: Win XP/Vista/7/8/10 MAC OS X 10.2 ou Superior
                      </ul>
                    </p>
                  </div>
                  <div class="modal-footer">
                    <form action="lg.php" method="POST">
                      <input type="text" name="input" value="Mouse Gamer Fortrek Spider">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                      <button type="submit" class="btn btn-primary">R$150,99</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!--Modal PR4-->
            <div class="modal fade" id="PR4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Mouser Gamer Fortrek M5</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p align="middle"><img src="../Imagens/PR4.jpg"></p>
                    <p align="middle">
                      <ul>
                        <li>Material: ABS
                        <li>Dimensões: 120x80x40mm
                        <li>Tensão: 5V
                        <li>Operação: Plug and Play
                        <li>Cor: Preto
                        <li>Resolução Máxima: 1200/1600/2400/3200 DPI
                        <li>Conector: USB
                        <li>Sensor: Óptico
                        <li>Número de Botões: 6 Botões + Scroll
                        <li>Compatibilidade: Win XP/Vista/7/8/10 MAC OS X 10.2 ou Superior
                  </div>
                  <div class="modal-footer">
                    <form action="lg.php" method="POST">
                      <input type="text" name="input" value="Mouser Gamer Fortrek M5">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                      <button type="submit" class="btn btn-primary">R$150,99</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!--Modal PR5-->
            <div class="modal fade" id="PR5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Teclado Gamer Warrior </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p align="middle"><img src="../Imagens/PR5.jpg"></p>
                    <p align="middle">
                      <ul>
                        <li>Padrão do Layout do teclado em Ingles
                        <li>Tempo de Resposta: 0,2ms
                        <li>Compativel com Windows
                        <li>Conexão: USB
                      </ul>
                    </p>
                  </div>
                  <div class="modal-footer">
                    <form action="lg.php" method="POST">
                      <input type="text" name="input" value="Teclado Gamer Warrior">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                      <button type="submit" class="btn btn-primary">R$150,99</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!--Modal PR6-->
            <div class="modal fade" id="PR6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Fnatic Ministreak</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p align="middle"><img src="../Imagens/PR6.jpg"></p>
                    <p align="middle">
                      <ul>
                        <li>Padrão do Layout do teclado em Ingles
                        <li>Tempo de Resposta: 0,2ms
                        <li>Compativel com Windows
                        <li>Conexão: USB
                      </ul>
                    </p>
                  </div>
                  <div class="modal-footer">
                    <form action="lg.php" method="POST">
                      <input type="text" name="input" value="Fnatic Ministreak">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                      <button type="submit" class="btn btn-primary">R$150,99</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!--Modal PR7-->
            <div class="modal fade" id="PR7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Multilaser Warrior Gamer PH101</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p align="middle"><img src="../Imagens/PR7.jpg"></p>
                    <p align="middle">Detalhes do Produto: Multilaser: Controle 3 em 1 sem fio PS4/PC Preto Multilaser</P>
                  </div>
                  <div class="modal-footer">
                    <form action="lg.php" method="POST">
                      <input type="text" name="input" value="Multilaser Warrior Gamer PH101">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                      <button type="submit" class="btn btn-primary">R$150,99</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!--Modal PR8-->
            <div class="modal fade" id="PR8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Joystick ps4</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p align="middle"><img src="../Imagens/PR8.jpg"></p>
                    <p align="middle">Detalhes do Produto: Amyove Controlador sem fio Bluetooth 4.0 Dual Shock Gamepads para PS4
                    </p>
                  </div>
                  <div class="modal-footer">
                    <form action="lg.php" method="POST">
                      <input type="text" name="input" value="Joystick ps4">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                      <button type="submit" class="btn btn-primary">R$150,99</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>

            <img src="../Imagens/slide2.1.jpg" class="img-fluid" alt="Responsive image">
            <!--Periféricos-->
            <div class="container-fluid">
              <a data-toggle="modal" data-target="#PR1">
                <img src="../Imagens/PR1.jpg" alt="..." class="img-thumbnail" id="img1">
              </a>
              <a data-toggle="modal" data-target="#PR2">
                <img src="../Imagens/PR2.jpg" alt="..." class="img-thumbnail" id="img2">
              </a>
              <a data-toggle="modal" data-target="#PR3">
                <img src="../Imagens/PR3.jpg" alt="..." class="img-thumbnail" id="img3">
              </a>
              <a data-toggle="modal" data-target="#PR4">
                <img src="../Imagens/PR4.jpg" alt="..." class="img-thumbnail" id="img4">
              </a>
              <a data-toggle="modal" data-target="#PR5">
                <img src="../Imagens/PR5.jpg" alt="..." class="img-thumbnail" id="img5">
              </a>
              <a data-toggle="modal" data-target="#PR6">
                <img src="../Imagens/PR6.jpg" alt="..." class="img-thumbnail" id="img6">
              </a>
              <a data-toggle="modal" data-target="#PR7">
                <img src="../Imagens/PR7.jpg" alt="..." class="img-thumbnail" id="img7">
              </a>
              <a data-toggle="modal" data-target="#PR8">
                <img src="../Imagens/PR8.jpg" alt="..." class="img-thumbnail" id="img8">
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