<?php

  header("Cache-control: private");

  include "conn.php";  # aqui incluo o arquivo de conexão com o mysql

  $link = getConnDB(); # chamo a conexão

# passo os parametros de busca e armazeno nas variáveis php.
  $v_prg_DataPromessa                = Param($_POST["prg_DataPromessa"]);

 # aqui monto a query para trazer os dados de um processo
$sql    =   '   SELECT 
                pds_Programacao.prg_id, 
                pds_Programacao.prg_DataPromessa, 
                pds_Programacao.prg_Contrato, 
                pds_Programacao.prg_Equipamento, 
                pds_Programacao.prg_QtdeEquip, 
                pds_Programacao.prg_Cliente, 
                pds_Programacao.prg_Consultor, 
                pds_Programacao.[prg_Data Agendamento] as prg_Data_Agendamento, 
                pds_Programacao.prg_Observação,
                pds_Programacao.prg_user, 
                pds_Programacao.peg_maquina, 
                pds_CfgEquip.[TEMPO MONTAGEM] AS Tempo, 
                CDbl(Nz([tempo montagem]*Nz([prg_QtdeEquip],1))) AS [Tempo_Total], 
                pds_CfgEquip.[TIPO CHASSI] AS Chassis, 
                pds_cfgChassi.Chassi_qtdMes AS [Qtd_Chassi_Mes], 
                Nz([TempoTotal],0) AS [Qtd_Diario_Equip], 
                pds_cfgChassi.Chassi_desc AS [Descricao_do_Chassi], 
                Format([pds_Programacao].[prg_datapromessa],'mm/yyyy') AS Mes, 
                pds_CfgEquip.[PRAZO_DE_PRODUCAO], 
                pds_Programacao.prg_autoriza
                FROM qryPDS_SomaQtdDiaria 
                RIGHT JOIN (pds_users 
                RIGHT JOIN (pds_cfgChassi 
                RIGHT JOIN (pds_CfgEquip ]
                INNER JOIN pds_Programacao 
                ON pds_CfgEquip.EQUIPAMENTOS = pds_Programacao.prg_Equipamento) 
                ON pds_cfgChassi.chassi_id = pds_CfgEquip.[TIPO CHASSI]) 
                ON pds_users.usr_Nome = pds_Programacao.prg_Consultor) 
                ON qryPDS_SomaQtdDiaria.prg_DataPromessa = pds_Programacao.prg_DataPromessa';

           # neste trecho do codigo verifico se as variaveis que armazenam parametros foram
           prenchidas, e então adiciona seus valores na consulta acima.
  if ($v_prg_DataPromessa > 0)
  {
     $sql = $sql . " WHERE pds_Programacao.prg_DataPromessa = " . $v_num_proc;
  }
 
    // Perform Query
  $result = mysql_query($sql, $link);
# aqui verificamos se existe resultado e então o php inicia a montagem do XML.
  if ($result)
  {
     /* xml result */
     $xml = XMLHeader() . "<all>";

     while ($row = mysql_fetch_assoc($result))
     {
        $v_prg_id = $row['prg_id'];
        $v_prg_DataPromessa = $row['prg_DataPromessa']; 
        $v_prg_Contrato = $row['prg_Contrato']; 
        $v_prg_Equipamento = $row['prg_Equipamento']; 
        $v_prg_QtdeEquip = $row['prg_QtdeEquip']; 
        $v_prg_Cliente = $row['prg_Cliente']; 
        $v_prg_Consultor = $row['prg_Consultor'] ;
        $v_prg_Data_Agendamento = $row['prg_Data_Agendamento'];
        $v_prg_Observacao = $row['prg_Observação'];
        $v_prg_user = $row['prg_user'];
        $v_peg_maquina = $row['peg_maquina']; 
        $v_Tempo = $row['Tempo'];
        $v_Tempo_Total = $row['Tempo_Total']; 
        $v_Chassis = $row['Chassis'];
        $v_Qtd_Chassi_Mês = $row['Qtd_Chassi_Mes']; 
        $v_Qtd_Diario_Equip = $row['Qtd_Diario_Equip']; 
        $v_Descricao_do_Chassi = $row['Descricao_do_Chassi']; 
        $v_Mes = $row['Mes']; 
        $v_PRAZO_DE_PRODUCAO = $row['PRAZO_DE_PRODUCAO'];
        $v_prg_autoriza = $row['prg_autoriza'];
      

        $node = "<row" .
                      "  prg_id               = ".   QuotedStr( $v_prg_id    ).
                      "  prg_DataPromessa                = ".   QuotedStr( $v_prg_DataPromessa     ).
                      "  prg_Contrato                = ".   QuotedStr( $v_prg_Contrato     ).
                      "  prg_Equipamento                    = ".   QuotedStr( $v_prg_Equipamento         ).
                      "  prg_QtdeEquip                 = ".   QuotedStr( $v_prg_QtdeEquip      ).
                      "  prg_Cliente                  = ".   QuotedStr( $v_prg_Cliente       ).
                      "  prg_Consultor                = ".   QuotedStr( $v_prg_Consultor     ).
                      "  prg_Data_Agendamento                 = ".   QuotedStr( $v_prg_Data_Agendamento      ).
                      "  prg_Observação                 = ".   QuotedStr( $v_prg_Observacao      ).
                      "  prg_user                = ".   QuotedStr( $v_prg_user    ).
                      "  peg_maquina             = ".   QuotedStr( $v_peg_maquina  ).
                      "  Tempo                = ".   QuotedStr( $v_Tempo     ).
                      "  Tempo_Total                  = ".   QuotedStr( $v_Tempo_Total       ).
                      "  Chassis                  = ".   QuotedStr( $v_Chassis       ).
                      "  Qtd_Chassi_Mes                  = ".   QuotedStr( $v_Qtd_Chassi_Mes       ).
                      "  Qtd_Diario_Equip                = ".   QuotedStr( $v_Qtd_Diario_Equip    ).
                      "  Descricao_do_Chassi             = ".   QuotedStr( $v_Descricao_do_Chassi  ).
                      "  Mes             = ".   QuotedStr( $v_Mes  ).
                      "  PRAZO_DE_PRODUCAO             = ".   QuotedStr( $v_PRAZO_DE_PRODUCAO  ).
                      "  prg_autoriza             = ".   QuotedStr( $v_prg_autoriza  ).
                       "/>" ;
        $xml = $xml . $node;
     }
 # Aqui o php termina a montagem do xml
    $xml = $xml . "</all>" ;

    /* close statement */
    mysql_free_result($result);

    /* return result */
    echo $xml ;
  }
?>