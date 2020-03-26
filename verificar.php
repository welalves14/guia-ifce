<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>REQUERIMENTO - IFCE</title>
</head>
<body>
    <?php  

        //CASO TODOS OS CAMPOS FOREM PREENCHIDOS CORRETAMENTE, SERA DIRECIONADO PARA PAG mostra.php
        $veri = 1;
        if ($_POST['protocolo'] == "") {
            echo "Preencha o campo protocolo <br><br>";
            $veri = 2;
        }
        if ($_POST["requerente"] == "") {
            echo "Preencha o campo Requerente <br><br>";
            $veri = 2;
        }
        if ($_POST["data_nascimento"] == "") {
            echo "Preencha o campo data de nascimento <br><br>";
            $veri = 2;
        }
        if ($_POST["matricula"] == "") {
            echo "Preencha o campo matrícula do aluno <br><br>";
            $veri = 2;
        }
        if ($_POST["filiacao"] == "") {
            echo "Preencha o campo pai ou da mãe <br><br>";
            $veri = 2;
        }
        if ($_POST["naturalidade"] == "") {
            echo "Preencha o campo cidade natal <br><br>";
            $veri = 2;
        }
        if ($_POST["curso"] == "") {
            echo "Preencha o campo curso <br><br>";
            $veri = 2;
        }
        if ($_POST["periodo"] == "") {
            echo "Preencha o campo periodo <br><br>";
            $veri = 2;
        }
        if ($_POST["turno"] == "") {
            echo "Preencha o campo turno <br><br>";
            $veri = 2;
        }
        if ($_POST["telefone"] == "") {
            echo "Preencha o campo telefone <br><br>";
            $veri = 2;
        }
        if ($_POST["email"] == "") {
            echo "Preencha o campo email <br><br>";
            $veri = 2;
        }
//=========================================================
    if(!isset($_POST["motivo_req"])) {
        echo "Preencha a alternativa do motivo deste requerimento<br><br>";
        $veri = 2;
    } else {
        if($_POST["motivo_req"]==1 || $_POST["motivo_req"]==6 || $_POST["motivo_req"]==7 || $_POST["motivo_req"]==10 || $_POST["motivo_req"]==12 || $_POST["motivo_req"]==15 || $_POST["motivo_req"]==22) {
            if($_POST['especificacao'] == "") {
                echo "Preencha o campo  ESPECIFICAR.<br><br>";
                $veri = 2;
            }
        }
        if($_POST["motivo_req"]==3 || $_POST["motivo_req"]==5 || $_POST["motivo_req"]==10) {

            if($_POST['justificativa'] == "") {
                echo "Preencha o campo  JUSTIFICAR.<br><br>";
                $veri = 2;
            }

        }
    }
//=========================================================
if($_POST["ass_alu"] == "") {
    echo "Preencha o campo assinatura do requerente.<br><br>";
    $veri = 2;
}
if($_POST["ass_fun"] == "") {
    echo "Preencha o campo assinatura do funcionário.<br><br>";
    $veri = 2;
}
//=========================================================
if( !isset($_POST["visto_ass"]) ) {
    echo "Preencha o campo VISTO (COORDENAÇÃO DE ASSUNTOS ESTUDANTIS).<br><br>";
    $veri = 2;
} else {
    if($_POST["visto_ass"] == 2 && $_POST["obs_armario"] == "") {
        echo "Preencha o campo especificando qual chave esta devendo.<br><br>";
        $veri = 2;
    }
}
if($_POST["ass_resp"] == "") {
    echo "Preencha o campo Responsável (ass. Legível)(COORDENAÇÃO DE ASSUNTOS ESTUDANTIS).<br><br>";
    $veri = 2;
}
//=========================================================
if( !isset($_POST["visto_bib"]) ) {
    echo "Preencha o campo VISTO (BIBLIOTECA).<br><br>";
    $veri = 2;
} else {
    if($_POST["visto_bib"] == 2 && $_POST["obs_livro"] == "") {
        echo "Preencha o campo especificando qual livro esta devendo.<br><br>";
        $veri = 2;
    }
}

if($_POST["ass_bib"] == "") {
    echo "Preencha o campo Responsável (ass. Legível) (BIBLIOTECA).<br><br>";
    $veri = 2;
}
//=========================================================
    if($veri == 1){
        header("Location: mostrar.php");
    }

//=========================================================

?>
</body>
</html>