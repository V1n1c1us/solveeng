<!DOCTYPE html>
<html lang="pt_br">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Trabalhe Conosco</title>
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
  <div class="container margin60">
    <div class="row">
      <div class="col-md-12">
        <h2 class="titulo">Trabalhe Conosco</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <ul class="vagas">
          <li><a href="vagasDisponiveis">Vagas Disponíveis</a></li>
          <li><a href="formulario">Não Tenho Cadastro</a></li>
          <li><a href="jatenhoCadastro">Já Tenho Cadastro</a></li>
        </ul>
      </div>
      <div id="formulario">
        <div class="col-md-9">
          <ul class="vagas-itens">
            <li>1. Preencha o formulário abaixo para <span class="sub-titulo">Cadastramento de Candidato</span>, ou clique aqui
              para atualizar seu currículo</li>
            <li>2. Poderá verificar as vagas disponíveis e candidatar-se a elas.</li>
            <li>3. Caso seu cadastro seja selecionado para alguma vaga, a Solve entrará em contato.</li>
          </ul>
          <div class="formulario" >
            <div class="cabecalho">
              <h3>cadastramento de candidato</h3>
            </div>
              <form action="" method="post" enctype="multipart/form-data">
                <h5>Dados Pessoais</h5>
                <div class="row">
                  <div class="col-md-12">
                    <label for="">Nome:</label>
                    <input type="text" class="col-md-10">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <label for="">Sexo:</label>
                    <input type="radio" value="masculino" name="sexo">
                    Masculino
                    <input type="radio" value="feminino" name="sexo">
                    Masculino </div>
                  <div class="col-md-6">
                    <label for="">Data de Nascimento:</label>
                    <input type="text" class="col-lg-4">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <label for="">Estado Civil:</label>
                    <select name="estadoCivil" id="">
                      <option value="solteiro">--</option>
                      <option value="solteiro">Solteiro(a)</option>
                      <option value="solteiro">Casado(a)</option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <label for="">Escolaridade:</label>
                    <select name="escolaridade" id="">
                      <option value="">--</option>
                      <option value="ensFund">Ensino Fundamental</option>
                      <option value="ensMedio">?</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <label for="">Endereço:</label>
                    <input type="text" class="col-md-10">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <label for="">Bairro:</label>
                    <input type="text">
                  </div>
                  <div class="col-md-4">
                    <label for="">Cidade:</label>
                    <input type="text">
                  </div>
                  <div class="col-md-2">
                    <label for="">UF:</label>
                    <input type="text">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <label for="">CEP:</label>
                    <input type="text">
                  </div>
                  <div class="col-md-4">
                    <label for="">Tef.Residencial:</label>
                    <input type="text">
                  </div>
                  <div class="col-md-4">
                    <label for="">Celular:</label>
                    <input type="text">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <label for="">Email:</label>
                    <input type="email" class="col-md-10">
                  </div>
                </div>
                <h5>Dados Profissionais</h5>
                <br>
                <div class="row">
                  <div class="col-md-12">
                    <label for="">Empresa:</label>
                    <input type="text" class="col-md-10">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <label for="">Ínicio:</label>
                    <input type="text" name="inicio">
                  </div>
                  <div class="col-md-6">
                    <label for="">Término:</label>
                    <input type="text" name="termino">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <label for="">Cargo Exercido:</label>
                    <input type="email" class="col-md-8">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <label for="">Atividades Exercidas:</label>
                    <input type="email" class="col-md-8">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <label for="">Empresa:</label>
                    <input type="text" class="col-md-10">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <label for="">Ínicio:</label>
                    <input type="text" name="inicio">
                  </div>
                  <div class="col-md-6">
                    <label for="">Término:</label>
                    <input type="text" name="termino">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <label for="">Cargo Exercido:</label>
                    <input type="email" class="col-md-8">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <label for="">Atividades Exercidas:</label>
                    <input type="email" class="col-md-8">
                  </div>
                </div>
                <div class="cabecalho">
                  <h3>carregue seu curriculo aqui</h3>
                </div>
                <div class="col-md-12">
                  <input type="file" class="fileUpload">
                  <span class="sub-titulo">Atenção somente arquivos com extenção  word (.doc) e PDF (.pdf)</span> </div>
                <input class="send-form" type="submit" value="Enviar Formulário">
                </input>
              </form>
          </div>
        </div>
      </div>
      <div id="jatenhoCadastro">
        <div class="col-md-9">
          <ul class="vagas-itens">
            <li>1. <span class="sub-titulo">Atualize seu currículo</span> se caso já estiver cadastrado em nosso site. Caso não tenha se cadastrado, clique <span class="sub-titulo">aqui</span> para preencher o Cadastramento de Candidato</li>
            <li>2. Poderá verificar as vagas disponíveis e candidatar-se a elas.</li>
            <li>3. Caso seu cadastro seja selecionado para alguma vaga, a Solve entrará em contato.</li>
          </ul>
          <form method="post" action="" enctype="multipart/form-data">
            <div class="formulario">
              <div class="cabecalho">
                <h3>cadastramento de candidato</h3>
              </div>
              <div class="col-md-12">
                <label for="">Seleciono o arquivo do seu currículo:</label>
                <input type="file" class="fileUpload">
                <span class="sub-titulo">Atenção somente arquivos com extenção  word (.doc) e PDF (.pdf)</span> </div>
              <input class="send-form" type="submit" value="Enviar Formulário">
              </input>
            </div>
          </form>
        </div>
      </div>
      <div id="vagasDisponiveis">
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
          <table class="table table-responsive">
            <thead class="cabecalho">
            <th>Vaga</th>
              <th>Área</th>
              <th></th>
                </thead>
            <tbody>
              <tr>
                <td><span>Engenheiro Elétrico</span></td>
                <td><input type="text"></td>
                <td><a href="formulario"><input type="submit" class="candidatar" value="Candidatar-se"></a></td>
              </tr>
              <tr>
                <td>Engenheiro Elétrico</td>
                <td><input type="text"></td>
                <td><input type="submit" class="candidatar" value="Candidatar-se"></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="contato">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <h3>ENDEREÇO</h3>
          <ul class="endereco">
            <li> <i class="fa fa-map-marker"></i> Rua: André Marques, nº 766 </li>
            <li> <span class="end">CEP: 97010-040</span> </li>
            <li> <span class="end">Santa Maria - RS</span> </li>
          </ul>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <h3>CONTATO</h3>
          <ul>
            <li><i class="fa fa-envelope-o" aria-hidden="true"></i><a
                                href="mailto:contato@solvesm.eng.br"> contato@solvesm.eng.br</a></li>
            <li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:(55) 9961-1333"> (55)
              9961-1333</a></li>
            <li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:(55) 9149-4057"> (55)
              9149-4057</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</main>
<!-- RODAPÉ -->
<div class="footer">
  <div class="container">
    <p class="copy">HOTEL UMBERTO • © Copyright 2016 • Todos os Direitos Reservados</p>
    <a class="logo-iguana" href="http://iguanaweb.com.br" target="_blank"></a> </div>
</div>
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