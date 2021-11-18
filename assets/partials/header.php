<?php 
// Set a same-site cookie for first-party contexts
 header('Set-Cookie: cookie1=value1; SameSite=Lax', false);
// Set a cross-site cookie for third-party contexts
 header('Set-Cookie: cookie2=value2; SameSite=None; Secure', false);
// Set a same-site cookie for first-party contexts
// setcookie('cookie1', 'value1', ['samesite' => 'Lax']);
// // Set a cross-site cookie for third-party contexts
// setcookie('cookie2', 'value2', ['samesite' => 'None', 'secure' => true]);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Irene Gruss es una de las poetas más importantes de Argentina.">
    <meta name="author" content="Gabriel Reches">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Irene Gruss</title>
    <style type="text/css" media="screen, print">
    @font-face {
      font-family: "Oswald";
      src: url("/assets/fonts/Oswald-Regular.ttf");
    }
  </style>
    
    <!-- CSS -->
  <!-- <link rel="stylesheet" href="/assets/css/bootstrap.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/estilos.css">
    <!-- fontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
    <link rel="icon" type="image/png"  href="/favicon.ico">
</head>

<body>
    <div class="container-fluid">
    <header>
        <!-- navbar-expand-lg navbar-light bg-light -->
        <!-- navbar-text navbar-default navbar-expand-lg fixed-top -->
        <nav class="navbar navbar-text navbar-dark navbar-expand-md fixed-top">
            <a id="nombre" href="index.php"><h1>IRENE GRUSS</h1>
            <h3>MUJER IRRESUELTA</h3>
          </a>
              <button class="navbar-toggler me-auto ms-sm-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav ms-2 align-items-end">
                  <!-- <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php">Inicio</a>
                  </li> -->
                  <li class="nav-item">
                    <a class="nav-link" href="por_que_gruss.php">¿Por qué mujer irresuelta?</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="biografia.php">Bio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="sobre_gruss.php">escrita x otrxs</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="proyecto.php">leida x otrxs</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="poemas.php">Poemas</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="puesta_sonora.php">sonorizada</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contacto.php">Contacto</a>
                  </li>
                </ul>
              </div>
            </div>
            
          </nav>
    </header>
