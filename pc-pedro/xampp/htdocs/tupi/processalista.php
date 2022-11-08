<?php 

	include_once("conexao.php");
	//$dados =$_FILES ['arquivo'];
	//var_dump($dados);
?>	
	

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>CADASTRO - TUPINAMBÁ</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <link rel="stylesheet" href="assets/css/Search-Field-With-Icon.css">
</head>

<body id="page-top">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav">
        <div class="container"><a class="navbar-brand js-scroll-trigger" href="index.php">TUPINAMBÁ</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><i class="fa fa-align-justify"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="index.php">CONSULTA</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="cadastro.php">CADASTRO</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead text-center text-white d-flex" style="background-image:url('assets/img/header.jpg');">
        <div class="container my-auto">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h1 class="text-uppercase"><strong>CADASTRO DE CHAVES</strong></h1>
                    <hr>
                </div>
            </div>
            <form method="post" action="processa.php"><div class="col-lg-8 mx-auto">
                <p class="text-faded mb-5"></p>
				<h2 class="text-uppercase"><strong>CADASTRO REALIZADO COM SUCESSO</strong></h2>
			</form>
			<?php if(!empty($_FILES['arquivo']['tmp_name'])) {
		$arquivo = new DomDocument();
		$arquivo->load($_FILES['arquivo']['tmp_name']);
		//var_dump($arquivo);
		
		$linhas = $arquivo->getElementsByTagName("Row");
		//var_dump($linhas);
		
		foreach($linhas as $linha){
			$keycontent = $linha->getElementsByTagName("keycontent")->item(0)->nodeValue;
			//echo "Chave: $keycontent <br>";

			//echo"<hr>";	
			
			$result_arquivo = "INSERT INTO general_keys (keycontent) VALUES ('$keycontent')";
			$resultado_arquivo = mysqli_query($conexao, $result_arquivo);
		}
		
	}
	mysqli_close($conexao);
?>
			<BR />
			<a class="btn btn-primary btn-xl js-scroll-trigger" role="button" href="CADASTRO.php">CADASTRAR NOVA CHAVE</a></div>
            
        </div>
    </header>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/creative.js"></script>
</body>

</html>