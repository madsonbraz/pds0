<h1 style="text-align: center;">EQUIPAMENTOS</h1>
<table class="table table-hover table-striped" id="equipamentos">
    <thead>
        <tr>
            <th width=300>Equipamento</th>
            <th style="text-align:center;width=30">Tipo Chassi</th>
            <th style="text-align:center;width=30">Tempo Montagem</th>
            <th style="text-align:center;width=30">Qtd</th>
            <th style="text-align:center;width=30">Prazo de Produção</th>
            <th width=150>Inativo</th>
            <th style="text-align:center;width=100">Código</th>
        </tr>
    </thead>
    <tbody>
        <?php
            while($linha = mysqli_fetch_array($consulta_equip)){
                echo '<tr>';
                echo '<td>'.$linha['EQUIPAMENTOS'].'</td>';
                echo '<td style=text-align:center;>'.$linha['TIPO_CHASSI'].'</td>';
                echo '<td style=text-align:center;>'.$linha['TEMPO_MONTAGEM'].'</td>';
                echo '<td>'.$linha['QTDE_CHASSI'].'</td>';
                echo '<td style=text-align:center;>'.$linha['PRAZO_DE_PRODUCAO'].'</td>';
                echo '<td>'.$linha['INATIVO'].'</td>';
                echo '<td style=text-align:center;>'.$linha['CODPRODUTO'].'</td></tr>';
            }
            ?>
    </tbody>
</table>