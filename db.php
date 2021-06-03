<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$database = "u491401037_pds";
$conexao = mysqli_connect($servidor, $usuario, $senha, $database);

$query = sprintf('select * from pds_programacao where prg_datapromessa > \'2020-01-01\' order by prg_datapromessa desc, prg_contrato');

$consulta = mysqli_query($conexao, $query);

$query = sprintf('select * from pds_programacao_cld');

$consulta_cld = mysqli_query($conexao, $query);

$query = sprintf('SELECT * FROM pds_cfgchassi order by Chassi_desc');

$consulta_chassis = mysqli_query($conexao, $query);

$query = sprintf('SELECT * FROM pds_cfgequip');

$consulta_equip = mysqli_query($conexao, $query);

$query = sprintf('SELECT * FROM pds_feriado');

$consulta_feriados = mysqli_query($conexao, $query);