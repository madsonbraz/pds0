<?php

include 'db.php';
 
include 'header.php';

if(isset($_GET['pagina'])){
    $pagina = $_GET['pagina'];
}
else{
    $pagina = 'agenda';
}

if($pagina == 'agenda'){
    include 'views/programacao.php';
}
elseif($pagina == 'listagem'){
    include 'views/listagem.php';
}
elseif($pagina == 'cancelados'){
    include 'views/cancelados.php';
}
elseif($pagina == 'chassis'){
    include 'views/chassis.php';
}
elseif($pagina == 'equipamentos'){
    include 'views/equipamentos.php';
}
elseif($pagina == 'feriados'){
    include 'views/feriados.php';
}
else{
    include 'views/home.php';
}
include 'footer.php';
