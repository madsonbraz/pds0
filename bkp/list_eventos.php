<?php
/*
 * @author Cesar Szpak - Celke - cesar@celke.com.br
 * @pagina desenvolvida usando FullCalendar,
 * o código é aberto e o uso é free,
 * porém lembre-se de conceder os créditos ao desenvolvedor.
 */

include 'conexao.php';

$query_events = "SELECT prg_id, prg_Contrato, prg_DataPromessa FROM pds_Programacao group by prg_Contrato";
$resultado_events = $conn->prepare($query_events);
$resultado_events->execute();

$eventos = [];

while($row_events = $resultado_events->fetch(PDO::FETCH_ASSOC)){
    $id = $row_events['prg_id'];
    $title = $row_events['prg_Contrato'];
    $color = '#40e0d0';
    $start = $row_events['prg_DataPromessa'];
    $end = $row_events['prg_DataPromessa'];
    
    $eventos[] = [
        'id' => $id, 
        'title' => $title, 
        'color' => $color, 
        'start' => $start, 
        'end' => $end, 
        ];
}

echo json_encode($eventos);