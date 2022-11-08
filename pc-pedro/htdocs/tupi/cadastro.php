<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - TUPINAMBÁ</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic">
    <link rel="stylesheet" href="assets/css/styles.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">

</head>

<body id="page-top">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav">
        <div class="container"><a class="navbar-brand js-scroll-trigger" href="index.php">TUPINAMBÁ</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><i class="fa fa-align-justify"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="cadastro.php">Cadastro</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="consulta.php">consulta</a></li>
                </ul>
            </div>
        </div>
    </nav>
 
    <section id="about" class="bg-primary">
        <div class="container">
            <div class="row">
                <div class="col offset-lg-8 mx-auto text-center">
                    <h1 class="text-white section-heading" id="cadastro">CADASTRO DE CHAVES</h1>
                    <hr class="light my-4">
                    <p class="text-faded mb-4">Cadastre chaves no Banco de Dados</p>
				<form method="post" action="processa.php"><div class="col-lg-8 mx-auto">
                <p class="text-faded mb-5"></p>
				<input type="text" name="chave" class="campo" maxlength="40" required autofocus><br/><br/>
				<input type="submit" value="CADASTRAR" class="btn btn-light btn-xl js-scroll-trigger" ></div><br />
			</form>
			<br>
			<br>
            <form method="POST" action="processalista.php" enctype="multipart/form-data">
			<label>Arquivo</label>
			<input type="file" name="arquivo"><br><hr>
			<input type="submit" value="IMPORTAR LISTA" class="btn btn-light btn-xl js-scroll-trigger" ><hr >
			</form>
				</div>
            
			</div>
			
        </div>
    </section>
    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/script.min.js"></script>
	
	<div class="footer-dark">
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 item">
                    <h3>Serviços</h3>
                    <ul>
                        <li><a href="#cadastro">Cadastro</a></li>
                        <li><a href="#consulta">Consulta</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-3 item">
                    <h3>Equipe</h3>
                    <ul>
                        <li><a href="">Laboratório</a></li>
                        <li><a href="">Célula de Inovação</a></li>
                    </ul>
                </div>
                <div class="col-md-6 item text">
                    <h3>Projeto</h3>
                    <p>A ideia principal do projeto é otimizar o tempo no processo de customização dos equipamentos que acontece no laborátorio.</p>
                </div>
            </div>
            <p class="copyright">Projeto Tupinambá © 2022</p>
        </div>
    </footer>
</div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>
</body>

</html>