<h1 style="text-alig: center;">CHASSIS</h1>
<table class="table table-hover table-striped" id="chassis">
    <thead>
        <tr>
            <th width=100>ID</th>
            <th width=30>Descrição</th>
            <th width=300>Quantidade/Mês</th>
        </tr>
    </thead>
    <tbody>
        <?php
            while($linha = mysqli_fetch_array($consulta_chassis)){
                echo '<tr>';
                echo '<td>'.$linha['chassi_id'].'</td>';
                echo '<td>'.$linha['Chassi_desc'].'</td>';
                echo '<td>'.$linha['Chassi_qtdMes'].'</td></tr>';
            }
            ?>
    </tbody>
</table>