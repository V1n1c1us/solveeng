<!DOCTYPE html>
<html lang="pt_br">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Solve Engenharia</title>
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
   <div class="banner-principal">
    <img class="banner" src="images/banner-2.png" alt="Banner Solve Engenharia">
        </div>
    </div>
  </div>
  <main>
  <div class="container margin60">
    <div class="row">
      <div class="col-md-12">
        <h2 class="titulo">Contato</h2>
      </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <h3>ENDEREÇO</h3>
          <ul class="lista-contato">
            <li> <i class="fa fa-map-marker"></i> Rua: André Marques, nº 766 </li>
            <li> <span class="end">CEP: 97010-040</span> </li>
            <li> <span class="end">Santa Maria - RS</span> </li>
          </ul>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <h3>CONTATO</h3>
          <ul class="lista-contato">
            <li><i class="fa fa-envelope-o" aria-hidden="true"></i><a
                                href="mailto:contato@solvesm.eng.br"> contato@solvesm.eng.br</a></li>
            <li><i class="fa fa-phone" aria-hidden="true"></i> (55) 9961-1333</a></li>
            <li><i class="fa fa-phone" aria-hidden="true"></i> (55) 9149-4057</a></li>
          </ul>
    </div>
  </div>
  </div>
    <div class="container">
          <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <form action="">
            <div class="form-group">
              <input type="nome" class="form-control contato-input" id="nome" placeholder="Nome">
            </div>
            <div class="form-group">
              <input type="email" class="form-control contato-input" id="email" placeholder="Email">
            </div>
            <div class="form-group">
              <input type="fone" class="form-control contato-input" id="fone" placeholder="Fone">
            </div>
            <div class="form-group">
              <textarea class="form-control contato-textarea" placeholder="Mensagem"></textarea>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 text-center">
            	<a href="" class="enviar-form" type="submit">Enviar</a>
            </div>
          </form>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div id="mapa"></div>
        </div>
      </div>
      </div>
<div class="contato">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <h3>ENDEREÇO</h3>
          <ul class="endereco">
            <li> <i class="fa fa-map-marker"></i> Rua: André Marques, nº 766 </li>
            <li class="hidden-xs"> <span class="end">CEP: 97010-040</span> </li>
            <li class="hidden-xs"> <span class="end">Santa Maria - RS</span> </li>            
            <li class="hidden-lg hidden-md"> <span class="end">CEP: 97010-040, Santa Maria - RS</span> </li>            
          </ul>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <h3>CONTATO</h3>
          <ul class="endereco">
            <li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:contato@solvesm.eng.br"> contato@solvesm.eng.br</a></li>
            <li class="hidden-xs"><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:(55) 9961-1333"> (55) 9961-1333</a></li>
            <li class="hidden-xs"><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:(55) 9149-4057"> (55) 9149-4057</a></li>

            <li class="hidden-lg hidden-md"><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:(55) 9961-1333"> (55) 9961-1333</a>  <i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:(55) 9149-4057"> (55) 9149-4057</li>            
          </ul>
        </div>
      </div>
    </div>
  </div>

  </main>


<!-- RODAPÉ -->
<div class="footer">
 	<?php include('inc/footer.php'); ?>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/custom.js"></script> 
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmJ4IPJMlsOm0lF2rsRSRYkCaGGhWKx9o&callback=initMap"></script> 
<script type="text/javascript">

    var map;
	var maker;
	var myLatLng = {lat: -29.685050, lng: -53.804822};
    function initMap() {
        map = new google.maps.Map(document.getElementById('mapa'), {
            center: myLatLng,
            zoom: 16
        });
		
		maker = new google.maps.Marker({
   			position: myLatLng,
		    map: map,
		    title: 'Solve Engenharia'
		});
    }

</script> 
</body>
</html>