<?php
  //Llamo a la conexión.
  include 'conexion.php';
  $usuarios = "SELECT username FROM usuarios";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bienvenido</title>
    <link rel="stylesheet" href="style.css" />
    <script
      src="https://kit.fontawesome.com/7e5b2d153f.js"
      crossorigin="anonymous"
    ></script>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <header class="header">
      <nav class="nav">
        <a href="#" class="usuario nav-link">
          <?php
              if (isset($_GEt['userName'])) 
              {
              echo 'Hola, ';
              echo '<b>'.$_GET['userName']. '</b>.';

                  echo '<a href="login.php">salir</a>';
                  }
            ?>
          </a>
        <button class="nav-toggle" aria-label="Abrir menu">
          <i class="fas fa-bars"></i>
        </button>
        <ul class="nav-menu">
          <li class="nav-menu-item">
            <a href="formulario.php" class="nav-menu-link nav-link"
              >Crear Cliente</a
            >
          </li>
          <li class="nav-menu-item">
            <a href="consulta.php" class="nav-menu-link nav-link"
              >Ver Cliente</a
            >
          </li>
          <li class="nav-menu-item">
            <a href="servicios.html" class="nav-menu-link nav-link"
              >Servicios</a
            >
          </li>
        </ul>
      </nav>
    </header>
    <main>
      <h1>Aseguradora</h1>
      <img src="images/fondo.jpg" alt="">
    </main>
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
    <script>
      const navToggle = document.querySelector(".nav-toggle");
      const navMenu = document.querySelector(".nav-menu");

      navToggle.addEventListener("click", () => {
        navMenu.classList.toggle("nav-menu_visible");
        if (navMenu.classList.contains("nav-menu_visible")) {
          navToggle.setAttribute("aria_label", "Cerrar menu");
        } else {
          navToggle.setAttribute("aria_label", "Abrir menu");
        }
      });
    </script>
  </body>
</html>