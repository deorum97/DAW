<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    
    <link rel="stylesheet" href="style2.css">
  </head>
  <body>
    <header>
      <nav class="navbar">
        <div class="logo">
          <i><b>PayPay</b></i>
        </div>

        <ul class="nav-links">
          <li><a href="#">Contacto</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle">Documentación ▾</a>
            <ul class="dropdown-menu">
              <li><a href="#">Cómo empezar</a></li>
              <li><a href="#">Avanzado</a></li>
              <li><hr></li>
              <li><a href="#">Q&A</a></li>
            </ul>
          </li>
          <?php
            if(isset($_SESSION["usuario"])){
              ?>
                  <li>
                    <a href="#">
                      <?php
                        echo $_SESSION["usuario"];
                      ?>
                    </a>
                  </li>
                </ul>
                <div class="nav-buttons">
                  <a href="unLogin.php">
                    <button>
                      Desloguearse
                    </button>
                  </a>
                </div>
              <?php
            }else{
              ?>
        </ul>

        <div class="nav-buttons">
          <a href="login.html"><button>Loguearse</button></a>
          <a href="registro.html"><button>Registrarse</button></a>
        </div>
        <?php
              }
            ?>
      </nav>
    </header>
    <!--
    <header>
      <nav class="navbar navbar-expand-lg bg-secondary">
        <div class="container-fluid ms-6 me-6">
          <a class="navbar-brand" href="#"
            ><i><b>PayPay</b></i></a
          >
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="#">Contacto</a>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Documentación
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Cómo empezar</a></li>
                  <li><a class="dropdown-item" href="#">Avanzado</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li>
                    <a class="dropdown-item" href="#">Q&A</a>
                  </li>
                </ul>
              </li>
            <?php
              if(isset($_SESSION["usuario"])){
                ?>
                    <li class="nav-item">
                      <a class="nav-link" href="#">
                        <?php
                          echo $_SESSION["usuario"];
                        ?>
                      </a>
                    </li>
                  </ul>
                  <a href="unLogin.php">
                    <button class="btn btn-outline-dark" type="button">
                      Desloguearse
                    </button>
                  </a>

                <?php
              }else{
                ?>

            </ul>
            <a href="login.php">
              <button class="btn btn-outline-dark" type="button">
                Loguearse
              </button>
            </a>
            <a href="registro.php">
              <button class="btn btn-outline-dark ms-1" type="button">
                Registrarse
              </button>
            </a>
            <?php
              }
            ?>
          </div>
        </div>
      </nav>
    </header>-->
    <main>
      <h1>index</h1>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>
