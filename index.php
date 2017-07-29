<!--
#
# DIOGENES OLIVEIRA DOS SANTOS JUNIOR
# WWW.DIOGENESJUNIOR.COM.BR
# CONTATO@DIOGENESJUNIOR.COM.BR
#
-->
<!DOCTYPE html>
<html lang="pt-br"><head>
<title>Titulo da Página 2</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="theme-color" content="#053d4e">

<!-- DESCRIÇÃO DO SITE -->
<meta name="description" content="Coloque aqui a descrição do site" />
<!-- PALAVRAS CHAVE -->
<meta name="keywords" content="coloque aqui as palavras chave separadas por virgula" />

<!-- FAVICON -->
<link rel="shortcut icon" href="favicon.ico">

<link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="all" />

<link rel="stylesheet" type="text/css" href="css/style.css" />

<link rel="stylesheet" type="text/css" href="css/sweetalert2.min.css">
<!-- ICONES -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- ANIMATE -->
<link rel="stylesheet" type="text/css" href="css/animate.css">

<!-- DROPDOWN -->
<link href="css/bootstrap-dropdownhover.css" rel="stylesheet">


</head>
<body>


<!-- MENU MOBILE -->
<div id="menuMobile">

    <a href="#" class="active">Início</a><br>
    <a href="#">Produtos</a><br>
    <a href="#">Sobre</a><br>
    <a href="#">Look Book</a><br>
    <a href="#">Ajuda</a><br>
    <a href="#">Contato</a><br>

                     <a href="#">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>&nbsp;&nbsp;&nbsp;&nbsp;

                    <a href="#">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>&nbsp;&nbsp;&nbsp;&nbsp;

                    <a href="#">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>&nbsp;&nbsp;&nbsp;&nbsp;

    <br>

    <span onclick="$('#menuMobile').fadeOut('500');">[x] fechar</span>

</div>
<!-- MENU MOBILE -->



<!-- BARRA DE NAVEGAÇÃO MOBILE -->
<div class="barra-navegacao hidden-lg hidden-md hidden-sm">
  <div class="row">
    <div class="col-xs-3 coluna-barra">
      <a href="#""><i class="fa fa-home fa-2x" aria-hidden="true"></i><br><span>Início</span></a>
    </div>
    <div class="col-xs-3 coluna-barra">
      <a href="#"><i class="fa fa-heart-o fa-2x" aria-hidden="true"></i><br><span>Produtos</span></a>
    </div>
    <div class="col-xs-3 coluna-barra">
      <a href="#"><i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i><br><span>Carrinho</span></a>
    </div>
    <div class="col-xs-3 coluna-barra">
      <a onclick="$('#menuMobile').fadeIn('500');"><i class="fa fa-bars fa-2x" aria-hidden="true"></i><br><span>Mais</span></a>
    </div>
  </div>
</div>
<!-- BARRA DE NAVEGAÇÃO MOBILE -->





<div class="menu-desktop hidden-sm hidden-xs">        

            <a href="index.php" class="menu-pai">Home</a>
            <a href="empresa.php" class="menu-pai">Empresa</a>

            <span class="dropdown dropdown-inline">
                <a href="produtos.php" class="dropdown-toggle menu-pai" data-toggle="dropdown" data-hover="dropdown">Produtos <span class="caret"></span></a>

                <ul class="dropdown-menu dropdownhover-bottom" role="menu">

                  <li><a href="#">Categoria</a></li>
                  <li><a href="#">Categoria</a></li>

                  <li class="dropdown">
                    <a href="#">Categoria sub nivel <span class="caret"></span></a>

                        <ul class="dropdown-menu dropdownhover-right">
                          <li><a href="#">Sub Categoria</a></li>
                          <li><a href="#">Sub Categoria</a></li>
                          <li><a href="#">Sub Categoria</a></li>
                          <li><a href="#">Sub Categoria</a></li>
                          <li><a href="#">Sub Categoria</a></li>
                        </ul>

                  </li>    

                  <li><a href="#">Categoria</a></li>
                  <li><a href="#">Categoria</a></li>
                  <li><a href="#">Categoria</a></li>
                  <li><a href="#">Categoria</a></li>         
                  
                </ul>
            </span>            

            <a href="equipamentos.php"  class="menu-pai">Equipamentos</a>
            
            <span class="dropdown dropdown-inline">
                <a href="midia.php" class="dropdown-toggle menu-pai" data-toggle="dropdown" data-hover="dropdown">Mídia <span class="caret"></span></a>

                <ul class="dropdown-menu dropdownhover-bottom" role="menu">

                  <li><a href="#">Revistas</a></li>
                  <li><a href="#">Vídeos</a></li>
                  <li><a href="#">Internet</a></li>        
                  
                </ul>
            </span> 

            <a href="contato.php"  class="menu-pai">Contato</a>
                                    
</div>
	


    <script type="text/javascript" src="js/jquery-2.1.4.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
    <script type="text/javascript" src="js/sweetalert2.min.js"></script>
    <script type="text/javascript">
            // COMO FAZER A CHAMADA NO FORMULÁRIO onSubmit="return ajaxSubmit(this);"
            var ajaxSubmit = function(form) {
                // fetch where we want to submit the form to
                var url = $(form).attr('action');
                var flag = 9;

                var data = $(form).serializeArray();

                // setup the ajax request
                $.ajax({
                    url: url,
                    data: data,
                    dataType: 'json',
                    type:'POST'
                });

                swal("Obrigado!", 'Sua mensagem foi enviada com sucesso', "success");

                return false;
            }

    </script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script>
         new WOW().init();
    </script>
    
    <!-- DROPDOWN HOVER -->
    <script src="js/bootstrap-dropdownhover.js"></script>
    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</body>
</html>
