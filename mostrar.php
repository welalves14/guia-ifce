<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>REQUERIMENTO - IFCE</title>
</head>
<body>
    <?php 
             
     echo '<h1>DADOS DO REQUERIMENTO</h1>';
     echo 'Número do protocolo: ' . $_POST['protocolo'] . '<br>';
     echo 'Nome: ' . $_POST['requerente'] . '<br>';
     echo 'Matrícula: ' . $_POST['matricula'] . '<br>';
     echo 'Data nascimento: ' . $_POST['data_nascimento'] . '<br>';
     echo 'Naturalidade: ' . $_POST['naturalidade'] . '<br>';
     echo 'Filiação: ' . $_POST['filiacao'] . '<br>';
     echo 'Curso: ' . $_POST['curso'] . '<br>';
     echo 'Período: ' . $_POST['periodo'] . '<br>';
     echo 'Turno: ' . $_POST['turno'] . '<br>';
     echo 'Telefone 1: ' . $_POST['telefone'] . '<br>';
     echo 'Telefone 2: ' . $_POST['telefone2'] . '<br>';
     echo 'Email: ' . $_POST['email'] . '<br>';
     
     //=========================================================
     $mot = intval($_POST['motivo_req']);
     $motivos = array(1 =>'2ª via',2 => 'Aproveitamento de Disciplina',3 => 'Matrícula fora do prazo',4 => 'Cancelamento da Matrícula',5 => 'Colação de Grau / Colação Especial',6 => 'Declaração',7 => 'Diploma',8 => 'Histórico Escolar',9 => 'Reabertura de Matrícula',10 => 'Segunda Chamada',11 => 'Reingresso',12 => 'Trancamento de Disciplina',13 => 'Trancamento de Matrícula',14 => 'Transferência para outra instituição',15 => 'Validação de Conhecimento',16 => 'Reajuste',17 => 'Recorreção de Prova',18 => 'AUXÍLIO - Transporte',19 => 'AUXÍLIO - Moradia',20 => 'AUXÍLIO - Óculos',21 => 'AUXÍLIO - Pais e Mães',22 => 'Outros');
     echo 'Motivo: ' . $motivos[$mot] . '<br>';
     
     //=========================================================
     echo 'Especificação: ' . $_POST['especificacao'] . '<br>';
     echo 'justificativa: ' . $_POST['justificativa'] . '<br>';
    //=========================================================
    if ($_POST['visto_ass'] == 1){
        echo 'O requerente NÃO deve chave de armário<br>';
    }else{
        echo 'O requerente deve chave do armário<br>';
        echo  'Obs: '.$_POST['obs_armario'].  '<br>';
    } 
    echo  'Responsável: '.$_POST['ass_resp'].  '<br>';
    //=========================================================
    if ($_POST['visto_bib'] == 1){
        echo 'O requerente NÃO deve livros na biblioteca<br>';
    }else{
        echo 'O requerente deve livros na biblioteca:<br>';
        echo  'Obs: '.$_POST['obs_livro'].  '<br>';
    }
    echo  'Responsável: '.$_POST['ass_bib'].  '<br>';
    //=========================================================

    ?>
</body>
</html>