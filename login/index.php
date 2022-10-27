<?php

session_start();
require_once('methods/verification.php');
verification('pages/login.page.php');

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    #subtitulo {
      color: #fd7e14;

    }
  </style>
  <title>Welcome
    <?php
    echo ($_COOKIE['loginDemo']);
    ?>
  </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body class="bg-light">
  <div class=" ">
    <nav class="d-flex flex-wrap justify-content-center py-3 mb-5 border-bottom bg-dark ">
      <a href="" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <img class="d-block mx-auto mb-4" src="img/cropped-mtec_logo-pref-cor-negativo-1-e1645217370765-pkpl8uu1xpfxy86jxethdo5hylwu5pb4z4uysup0fw.png" alt="" width="200   " height="57">
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a class="nav-link active" aria-current="page" href="methods/logout.php">Sair</a></li>

      </ul>
    </nav>

    <header class="masthead text-center text-dark d-flex mt-5 mb-5" style="background-image:url('assets/img/download.jpg');">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase"><strong>PROJETO TUPINAMBÁ</strong></h1>

          </div>
        </div>
        <div class="col-lg-8 mx-auto">
          <p class="text-faded mb-5">Projeto desenvolvido pelos colaboradores do laboratório e da célula de inovação.</p>
        </div>

      </div>



    </header>
    <div class="container text-center text-bg-dark py-4 rounded-4">
      <section id="about" class="mt-5">
        <div class="row align-items-start">
          <div class="col">
            <div class="mx-auto ">
              <h2 class=" section-heading  rounded-4" id="cadastro">CADASTRO DE CHAVES</h2>
              <hr class="light">
              <p id="subtitulo" class="text-faded mb-1">Cadastre chaves no Banco de Dados</p>
              <form action="" enctype="multipart/form-data" method="POST">
                <input type="file" name="excel" required>
                <button type="submit" name="import">Import</button>
                <?php
                if (isset($_POST["import"])) {
                  $fileName = $_FILES['excel']['name'];
                  $fileExtension = explode('.', $fileName);
                  $fileExtension = strtolower(end($fileExtension));
                  $newFileName = date("Y.m.d") . " - " . date("h.i.sa") . "." . $fileExtension;
                  $targetDirectory = "uploads/" . $newFileName;
                  move_uploaded_file($_FILES["excel"]["tmp_name"], $targetDirectory);
                  error_reporting(0);
                  ini_set('display_errors', 0);

                  require "imports/Excelreader/excel_reader2.php";
                  require "imports/Excelreader/SpreadsheetReader.php";
                  $reader = new SpreadsheetReader($targetDirectory);
                  foreach ($reader as $key => $row) {
                    $chaves = $row[0];
                    $status = $row[1];
                    $bancada = $row[2];
                  }
                }

                ?>
              </form>
            </div>
          </div>
          <div class="col">
            <div class="mx-auto">
              <h2 class="section-heading rounded-4" id="consulta">CONSULTA DE CHAVES</h2>
              <hr class="light ">
              <p id="subtitulo" class="text-faded mb-1">Consulta as chaves cadastradas no banco.</p><a class="btn btn-light btn-xl js-scroll-trigger" role="button" href="">CONSULTAR!</a>
            </div>
          </div>
        </div>
      </section>

    </div>

  </div>
</body>

</html>