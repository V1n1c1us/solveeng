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
<div class="container margin60">
  <div class="row">
    <div class="col-md-12">
      <h2 class="titulo">Notícias</h2>
    </div>

  <div class="row row1">
    <div class="col-md-3">
      <div class="hoverzoom-trabalhos"> <img src="images/trabalhos/trabalhos-01.png" alt="Inspeção e Manutenção">
        <a href="inspPredial"><div class="retina-trabalhos"><img src="images/trabalhos/trabalhos-icon-01.png" alt=""></div></a>
      </div>
      <div class="titulo"> <span>Inspeção e Manutenção Predial</span> </div>
    </div>
    <div class="col-md-3">
      <div class="hoverzoom-trabalhos"> <img src="images/trabalhos/trabalhos-02.png" alt="Inspeção e Manutenção">
        <a href="relatLaudos"><div class="retina-trabalhos"> <img src="images/trabalhos/trabalhos-icon-02.png" alt=""> </div></a>
      </div>
      <div class="titulo"> <span>Relatórios e Laudos Técnicos</span> </div>
    </div>
    <div class="col-md-3">
      <div class="hoverzoom-trabalhos"> <img src="images/trabalhos/trabalhos-03.png" alt="Inspeção e Manutenção">
        <a href="planoPreve"><div class="retina-trabalhos"> <img src="images/trabalhos/trabalhos-icon-03.png" alt=""> </div></a>
      </div>
      <div class="titulo"> <span>Plano de Prevenção contra Incêndio</span> </div>
    </div>
    <div class="col-md-3">
      <div class="hoverzoom-trabalhos"> <img src="images/trabalhos/trabalhos-04.png" alt="Inspeção e Manutenção">
        <div class="retina-trabalhos"> <img src="images/trabalhos/trabalhos-icon-04.png" alt=""> </div>
      </div>
      <div class="titulo"> <span>Projetos Civis e Elétricos</span> </div>
    </div>
  </div>
  <div class="row row2">
    <div class="col-md-3">
    <div class="hoverzoom-trabalhos"> <img src="images/trabalhos/trabalhos-05.png" alt="Inspeção e Manutenção">
        <div class="retina-trabalhos"> <img src="images/trabalhos/trabalhos-icon-07.png" alt=""> </div>
        <div class="titulo"> <span>Projetos de SPDA</span> </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="hoverzoom-trabalhos"> <img src="images/trabalhos/trabalhos-06.png" alt="Inspeção e Manutenção">
        <div class="retina-trabalhos"> <img src="images/trabalhos/trabalhos-icon-08.png" alt=""> </div>
      </div>
      <div class="titulo"> <span>Projetos de Sistema Fotovoltaico</span> </div>
    </div>
    <div class="col-md-3">
      <div class="hoverzoom-trabalhos"> <img src="images/trabalhos/trabalhos-07.png" alt="Inspeção e Manutenção">
        <div class="retina-trabalhos"> <img src="images/trabalhos/trabalhos-icon-05.png" alt=""> </div>
      </div>
      <div class="titulo"> <span>Regularização de Imóveis e Desmembramento</span> </div>
    </div>
    <div class="col-md-3">
      <div class="hoverzoom-trabalhos"> <img src="images/trabalhos/trabalhos-08.png" alt="Inspeção e Manutenção">
        <div class="retina-trabalhos"> <img src="images/trabalhos/trabalhos-icon-06.png" alt=""> </div>
      </div>
      <div class="titulo"> <span>Execução de Instalações Elétricas</span> </div>
    </div>            
  </div>
</div>
<div class="row">
	<div class="col-md-12">
	<div id="inspPredial">
    	<h2>Inspeção e Manutenção Predial</h2>
        <p>As edificações são projetadas e pensadas para durarem um certo período de tempo que chamamos de 
Vida útil. Este período pode ser aproveitado na sua totalidade ou pode ser reduzido drasticamente se não houver cuidados específicos com a edificação. Além de reduzir a vida útil, a falta de cuidados com os imó-
veis podem colocar em risco a vida de seus usuários, bem como depreciar o bem.

A SOLVE ENGENHARIA & CONSULTORIA conta com equipe profissional capacitada para realizar inspeções prediais a fim de orientar seus clientes da melhor forma para providenciar os reparos e ações conforme as reais necessidades do imóvel.

A empresa também pode orientar administradores de condomínios, gerenciadores, síndicos e proprietários 
a respeito das manutenções necessárias para seus imóveis, através da elaboração do plano de manutenção do edifício, tudo isso visando a valorização e conservação adequada do imóvel.</p>
    </div>
	<div id="relatLaudos">conteudo 2</div>
	<div id="planoPreve">conteudo 3</div>
	<div id="div4">conteudo 4</di	v>
	<div id="div5">conteudo 5</div>
   </div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script>
$(function(){

	$("div#relatLaudos").css("display", "none");
	$("div#planoPreve").css("display", "none");
	$("div#div4").css("display", "none");
	$("div#div5").css("display", "none");	
    $("div#inspPredial").addClass("active");

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