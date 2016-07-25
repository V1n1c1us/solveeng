<!DOCTYPE html>
<html lang="pt_br">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Nossos Trabalhos</title>
<link href='https://fonts.googleapis.com/css?family=Oswald:700,400|Raleway' rel='stylesheet' type='text/css'>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<header>
  <?php include('inc/header.php'); ?>
</header>
<div class="container-fluid">
  <div class="row">
    <div class="banner-principal"> <img class="banner" src="images/banner-2.png" alt="Banner Solve Engenharia"> </div>
  </div>
</div>
<main>

</main>
<!-- RODAPÉ 
<div class="footer">
  <div class="container">
    <p class="copy">HOTEL UMBERTO • © Copyright 2016 • Todos os Direitos Reservados</p>
    <a class="logo-iguana" href="http://iguanaweb.com.br" target="_blank"></a> </div>
</div>-->
<div class="buttom-top hidden-xs">
  <div class="go-top"> <img src="images/button-top.png" alt="topo"> </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/owl.carousel.js"></script> 
<script src="js/custom.js"></script> 
<script>
$(function(){
	$("div#formulario").css("display", "none");
	$("div#jatenhoCadastro").css("display", "none");
	$("div#vagasDisponiveis").css("display", "none");
	$("div#formulario").addClass("active");

    $("a").on("click", function( e ){         
      e.preventDefault();
        
    	$("div").removeClass("active");
        var id = $(this).attr("href"); 
        $("#"+id+"").addClass("active");
        
    });
});
</script>
</body>
</html>