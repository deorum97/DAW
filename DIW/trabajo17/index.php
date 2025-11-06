<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
      crossorigin="anonymous"
    />
  </head>
  <body>
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
    </header>
    <main>
      <h1>index</h1>
    </main>
  </body>
</html>
