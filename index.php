<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/materialize.css">
    <title>REQUERIMENTO - IFCE</title>

</head>
<body>   
    <div class="container">
        <div class="row" >            
                <form action="verificar.php" method="post">
                    <div class="col s2 m6">
                        <h5 class="center-align">GUIA DE REQUERIMENTO</h5>
                    </div>
                    <div class="col s8 offset-s4 m3 offset-m9">
                        <label>Protocolo nº:</label> <input type="text" name="protocolo">
                    </div>                    
                    <div class="col s12 m6">
                        <label>Requerente:</label> <input type="text" name="requerente">
                    </div>
                    <div class="col s12 m3">
                        <label>Data Nascimento:</label> <input type="text" name="data_nascimento">
                    </div>
                    <div class="col s12 m3">
                        <label>Nº Matrícula:</label> <input type="text" name="matricula">
                    </div>
                    <div class="col s12 m8">
                        <label>Filiação:</label> <input type="text" name="filiacao">
                    </div>
                    <div class="col s12 m4">
                        <label>Naturalidade:</label> <input type="text" name="naturalidade">
                    </div>
                    <div class="col s12 m6">
                        <label>Curso:</label> <input type="text" name="curso">
                    </div>
                    <div class="col s12 m3">
                        <label>Período:</label> <input type="text" name="periodo">
                    </div>
                    <div class="col s12 m3">
                        <label>Turno:</label> <input type="text" name="turno">
                    </div>
                    <div class="col s12 m3">
                        <label">Telefone(s):</label> <input type="text" name="telefone">
                    </div>
                    <div class="col s12 m3">
                        <label>Telefone 2:</label> <input type="text" name="telefone2">
                    </div>
                    <div class="col s12 m6">
                        <label>E-mail:</label> <input type="email" name="email">
                    </div>
<!-- ======================================================================================================= -->
                    <div class="col s12">
                        <div> <p>ASSINALE:</p> </div>
                    </div>
                    <!-- ================================================================== -->
                    <div class="col s12 m6">
                        <div>
                            <label><input type="radio" class="with-gap" name="motivo_req" value="1"><span>2ª via (especificar) | CAA</span></label>
                        </div>                       
                        <div>
                            <label><input type="radio" class="with-gap" name="motivo_req" value="2"><span>Aproveitamento de Disciplina (anexar Histórico Escolar e Programa da Disciplina) | Coordenação do Curso</span> </label>
                        </div>                       
                        <div>
                            <label><input type="radio" class="with-gap" name="motivo_req" value="3"><span>Matrícula fora do prazo (justificar) | CAA</span> </label>
                        </div>                      
                        <div>
                            <label><input type="radio" class="with-gap" name="motivo_req" value="4"><span>Cancelamento da Matrícula | CAA</span></label>
                        </div>                       
                        <div>
                            <label> <input type="radio" class="with-gap" name="motivo_req" value="5"><span>Colação de Grau / Colação Especial(justificar) | CAA</span></label>
                        </div>                      
                        <div>
                            <label><input type="radio" class="with-gap" name="motivo_req" value="6"><span>Declaração (especificar) | CAA</span></label>
                        </div>                      
                        <div>
                            <label><input type="radio" class="with-gap" name="motivo_req" value="7"> <span>Diploma (especificar) | CAA</span> </label>
                        </div>                      
                        <div>
                            <label><input type="radio" class="with-gap" name="motivo_req" value="8"><span>Histórico Escolar | CAA</span> </label>
                        </div>
                        <div>
                            <label><input type="radio" class="with-gap" name="motivo_req" value="9"><span>Reabertura de Matrícula | CAA</span></label>
                        </div>                        
                        <div>
                            <label>
                                <input type="radio" class="with-gap" name="motivo_req" value="10"><span>Segunda Chamada (anexar justificativa e especificar) | Coordenação do Curso</span> </label>
                        </div>                       
                        <div>
                            <label><input type="radio" class="with-gap" name="motivo_req" value="11"><span>Reingresso | CAA</span></label>
                        </div>
                    </div>
<!-- ======================================================================================================= -->
                    <div class="col s12 m6">
                        <div>
                            <label> <input type="radio" class="with-gap" name="motivo_req" value="12"> <span>Trancamento de Disciplina (especificar) | Coordenação dos Cursos </span></label>
                        </div> 
                        <div>
                            <label><input type="radio" class="with-gap" name="motivo_req" value="13"><span>Trancamento de Matrícula (anexar documentação comprobatória) | Coordenação Pedagógica</span></label>
                        </div>  
                        <div>
                            <label><input type="radio" class="with-gap" name="motivo_req" value="14"><span>Transferência para outra instituição | CAA</span></label>
                        </div>   
                        <div>
                            <label><input type="radio" class="with-gap" name="motivo_req" value="15"><span>Validação de Conhecimento(especificar) | Coordenação dos Cursos</span></label>
                        </div>  
                        <div>
                            <label><input type="radio" class="with-gap" name="motivo_req" value="16"><span>Reajuste | CAA</span></label>
                        </div>
                        <div>
                            <label><input type="radio" class="with-gap" name="motivo_req" value="17"><span>Recorreção de Prova | Coordenação do Curso</span></label>
                        </div>
                        <div>
                            <label><input type="radio" class="with-gap" name="motivo_req" value="18"><span>AUXÍLIO - Transporte | Serviço Social</span></label>
                        </div>
                        <div>
                            <label><input type="radio" class="with-gap" name="motivo_req" value="19"><span>AUXÍLIO - Moradia | Serviço Social</span></label>
                        </div>
                        <div>
                            <label><input type="radio" class="with-gap" name="motivo_req" value="20"><span>AUXÍLIO - Óculos | Serviço Social </span></label>
                        </div>
                        <div>
                            <label><input type="radio" class="with-gap" name="motivo_req" value="21"><span>AUXÍLIO - Pais e Mães | Serviço Social</span></label>
                        </div>
                        <div>
                            <label><input type="radio" class="with-gap" name="motivo_req" value="22"><span>Outros (especificar)</span></label>
                        </div>
                        
                    </div>
<!-- ======================================================================================================= -->
                    <div class="col s12">
                        <div>
                            <p>ESPECIFICAR:</p>
                        </div>
                    </div>
                    <div class="col s12">
                        <textarea name="especificacao"></textarea>
                    </div>

                    <div class="col s12">
                        <div>
                            <p>JUSTIFICAR:</p>
                        </div>
                    </div>
                    <div class="col s12">
                        <textarea name="justificativa"></textarea>
                    </div>

                    <div class="col s12 center-align">
                        <div>
                            <p>DECLARO CONHECER O REGIMENTO DESTA IFE, BEM COMO O PRAZO NECESSÁRIO À TRAMITAÇÃO DO PROCESSO</p>
                        </div>
                    </div>
                    <div class="col s12 m4 offset-m1 center-align">
                        <input type="text" name="ass_alu">
                        <label">REQUERENTE (ASS. LEGÍVEL)</label>
                    </div>
                    <div class="col s12 m4 offset-m2 center-align">
                        <input type="text" name="ass_fun">
                        <label>FUNCIONÁRIO (ASS. LEGÍVEL)</label>
                    </div>
<!-- ======================================================================================================= -->
                    <div class="col s12 center-align">
                        <?php
                            $aux = intval(date('m'));
                            $mes = array(1 => 'janeiro',2 => 'fevereiro',3 => 'março',4 => 'abril',5 => 'maio',6 => 'junho',7 => 'julho',8 => 'agosto',9 => 'setembro',10 => 'outubro',11 => 'novembro',12 => 'dezembro');
                            echo '<p>CEDRO, ' . date('d') . ' de ' . $mes[$aux] . ' de ' . date('Y') . '</p>';
                        ?>
                    </div>
<!-- ======================================================================================================= -->
                    <br>
                    <br>
                    <div class="col s12">      
                        <div class="col s12 m6">
                            <p class="center-align">VISTO (COORDENAÇÃO DE ASSUNTOS ESTUDANTIS)</p>
                            <p> <label><input class="with-gap" type="radio" name="visto_ass" value="1"/><span>O requerente NÃO deve chave de armário</span></label> </p>
                            <p><label><input class="with-gap" type="radio" name="visto_ass" value="2"/><span> O requerente deve chave do armário:</span> </label> </p>
                            <p><textarea name="obs_armario"></textarea></p>
                            <p class="center-align"><input type="text" name="ass_resp"><label>Responsável (ass. Legível)</label></p>
                        </div>

                        <div class="col s12 m6">
                            <p class="center-align">VISTO (BIBLIOTECA)</p>
                            <p><label><input class="with-gap" type="radio" name="visto_bib" value="1"/><span>O requerente NÃO deve livros na biblioteca</span></label></p>
                            <p><label><input class="with-gap" type="radio" name="visto_bib" value="2" /><span>O requerente deve livros na biblioteca:</span></label></p>
                            <p><textarea name="obs_livro"></textarea></p>
                            <p class="center-align"><input type="text" name="ass_bib"><label>Responsável (ass. Legível)</label></p>
                        </div>
                    </div>
                    <div class="col s12 center-align">
                        <br>
                        <br>
                        <button class="btn btn-lg btn-danger btn-block" type="submit" >Enviar</button>
                    </div>
                </form>
        </div>
    </div>
</body>
</html>