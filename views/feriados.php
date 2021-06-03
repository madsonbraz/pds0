<h1 style="text-align: center;">FERIADOS</h1>

<table class="table table-hover table-striped" id="feriados">
    <thead>
        <tr>
            <th width=100>Dara</th>
            <th width=300>Descrição</th>
            <th width=30>Local</th>
            <th width=30>Fixo</th>
            <th width=30>Laboral</th>
        </tr>
    </thead>
    <tbody>
        <?php
            while($linha = mysqli_fetch_array($consulta_feriados)){
                echo '<tr>';
                echo '<td>'.date('d/m/Y',strtotime($linha['fer_dtFeriado'])).'</td>';
                echo '<td>'.$linha['fer_DescFeriado'].'</td>';
                echo '<td>'.$linha['fer_Local'].'</td>';
                if($linha['fer_fixo'] == 1 ){
                    $chk = "checked";
                }else{$chk="";}
                echo '<td><input type=checkbox disabeld=disabled value=on '.$chk.'></td>';
                if($linha['fer_laboral'] == 1 ){
                    $chkl = "checked";
                }else{$chkl = "";}
                echo '<td><input type=checkbox value=on '.$chkl.'></td></tr>';
            }
            ?>
    </tbody>
</table>
