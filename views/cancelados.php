<h1 style="text-align: center;"> CANCELADOS</h1>
<table class="table table-hover table-striped" id="cancelados">
    <thead style="text-align: center;">
        <tr>
            <th width=100>Data Promessa</th>
            <th width=25>Contrato</th>
            <th width=300>Equipamento</th>
            <th width=30>Qtd</th>
            <th width=300>Cliente</th>
            <th width=30>Consultor</th>
            <th width=100>Data Agendamento</th>
            <th width=30>Observações</th>
            <th width=30>Excluído em</th>
            <th width=30>Excluído Por</th>
            
        </tr>
    </thead>
    <tbody>
        <?php
            while($linha = mysqli_fetch_array($consulta_cld)){
                echo '<tr>';
                echo '<td>'.date('d/m/Y',strtotime($linha['prg_DataPromessa'])).'</td>';
                echo '<td>'.$linha['prg_Contrato'].'</td>';
                echo '<td>'.$linha['prg_Equipamento'].'</td>';
                echo '<td>'.$linha['prg_QtdeEquip'].'</td>';
                echo '<td>'.$linha['prg_Cliente'].'</td>';
                echo '<td>'.$linha['prg_Consultor'].'</td>';
                echo '<td>'.date('d/m/Y',strtotime($linha['prg_Data_Agendamento'])).'</td>';
                echo '<td>'.$linha['prg_Observacao'].'</td>';
                echo '<td>'.date('d/m/Y',strtotime($linha['prg_ExcluidoEm'])).'</td>';
                echo '<td>'.$linha['prg_ExcluidoUser'].'</td></tr>';
            }
            ?>
    </tbody>
</table>