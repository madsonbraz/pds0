<!DOCTYPE html>
<html>
<head>
   <title>Programação de Saída</title>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" media="screen" href="lib/js/themes/start/jquery-ui.custom.css"></link>
   <link rel="stylesheet" type="text/css" media="screen" href="lib/js/jqgrid/css/ui.jqgrid.css"></link>
   <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
   <link rel="stylesheet" href="css/estilo.css">

   <script src="lib/js/jquery.min.js" type="text/javascript"></script>
	<script src="lib/js/jqgrid/js/i18n/grid.locale-en.js" type="text/javascript"></script>
	<script src="lib/js/jqgrid/js/jquery.jqGrid.min.js" type="text/javascript"></script>
	<script src="lib/js/themes/jquery-ui.custom.min.js" type="text/javascript"></script>
   <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
</head>
<body>
   <header>
      <div class="container">
           <img src="img/logo.png" title="Logo" alt="Logo">
           <nav>
              <ul>
                  <li><a href="?pagina=agenda">Agenda</a></li>
                  <li><a href="?pagina=listagem">Listagem</a></li>
                  <li><a href="?pagina=cancelados">Cancelados</a></li>
                  <li><a href="#">Configurações</a>
                     <ul>
                        <li><a href="?pagina=chassis">Chassis</a></li>
                        <li><a href="?pagina=equipamentos">Equipamentos</a></li>
                        <li><a href="?pagina=feriados">Feriados</a></li>
                     </ul>
                  </li>
               </ul>
            </nav>
      </div>
   </header>

   <div id="conteudo" class="container">
