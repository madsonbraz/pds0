<table class="table table-hover table-striped" id="listagem">
    <thead>
        <tr>
            <th width=100>Data Promessa</th>
            <th width=30>Contrato</th>
            <th width=300>Equipamento</th>
            <th width=30>Qtd</th>
            <th width=300>Cliente</th>
            <th width=30>Consultor</th>
            <th width=100>Data Agendamento</th>
            <th width=30>Observações</th>
            
        </tr>
    </thead>
    <tbody>
        <?php
            while($linha = mysqli_fetch_array($consulta)){
                echo '<tr>';
                echo '<td>'.date('d/m/Y',strtotime($linha['prg_DataPromessa'])).'</td>';
                echo '<td>'.$linha['prg_Contrato'].'</td>';
                echo '<td>'.$linha['prg_Equipamento'].'</td>';
                echo '<td>'.$linha['prg_QtdeEquip'].'</td>';
                echo '<td>'.$linha['prg_Cliente'].'</td>';
                echo '<td>'.$linha['prg_Consultor'].'</td>';
                echo '<td>'.date('d/m/Y',strtotime($linha['prg_Data_Agendamento'])).'</td>';
                echo '<td>'.$linha['prg_Observacao'].'</td></tr>';
            }
            ?>
    </tbody>
</table>