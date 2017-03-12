<!DOCTYPE html>
<!--[if IE 8]>          <html <?php language_attributes(); ?> class="ie ie8"> <![endif]-->
<!--[if IE 9]>          <html <?php language_attributes(); ?> class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  <html <?php language_attributes(); ?> > <!--<![endif]-->
<head>
    <script>!function (a) { var b, c = "soclminer-jssdk", d = a.getElementsByTagName("script")[0]; a.getElementById(c) || (b = a.createElement("script"), b.src = "https://plugins.soclminer.com.br/v3/sdk/all.min.js", d.parentNode.insertBefore(b, d)) }(document), window.soclInit = function () { socl.start("587b7fc9-7d4e-456b-9684-1736252ca81e") };</script>
    <!-- Hotjar Tracking Code for http://www.telehelp.com.br -->
    <script>
        (function(h,o,t,j,a,r){
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
            h._hjSettings={hjid:121965,hjsv:5};
            a=o.getElementsByTagName('head')[0];
            r=o.createElement('script');r.async=1;
            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
            a.appendChild(r);
        })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
    </script>
    <title>Calculadora - Telehelp</title>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri (); ?>/images/favicon.png" />

    <!-- Meta Tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="keywords" content="TeleHelp" />
    <meta name="author" content="Empresa">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <!-- CSS for IE -->
    <!--[if lte IE 9]>
    <link rel="stylesheet" type="text/css" href="css/ie.css" />
    <![endif]-->


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script type='text/javascript' src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
    <![endif]-->

    <!-- Javascript Page Loader
    <script type="text/javascript" src="js/pace.min.js" data-pace-options='{ "ajax": false }'></script>
    <script type="text/javascript" src="js/page-loading.js"></script> -->

    <?php wp_head();?>
    <link rel="stylesheet" type="text/css" href="/telehelp-4/bower_components/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/telehelp-4/css/main.css" />
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-68223511-1', 'auto');
        ga('send', 'pageview');

    </script>
    <style>
        body {
            background: #ffffff;
        }
        .calc-header {
            position: relative;
            box-shadow: 0px 0px 7px 4px rgba(0, 0, 0, 0.7);
        }
        #contedorigth {
            float: none;
            width: 100%;
            border-left: none;

            padding: 15px 15px 35px;
            text-align: center;
            background: #f1f1f1;
            border-top: 5px solid #2a3866;
        }
        #calc-wrapper {
            background-color: #263460;
            padding: 30px;
        }
        #corpopagemeio {

        }
        .calc-footer {
            text-align: right;
            padding: 10px 15px;
            box-shadow: 0px 0px 7px 4px rgba(0, 0, 0, 0.7);
        }

        #camposefordeavaliacao {
            padding: 0px;
            text-align: center;
            background: transparent;
            border-top: none;
        }
    </style>
</head>
<body>
<div id="corpopage" >
    <div class="calc-header">
        <div id="terceirotitulo">
            <h2 class="title-default">
                <img style="margin-right: 20px;" src="http://telehelp.com.br/wp-content/themes/telehelp/images/logo-tele.png" alt="TeleHelp" title="TeleHelp">
                Pense na sua tranquilidade e segurança!
            </h2>
        </div>
    </div>
    <div id="calc-wrapper">
        <div id="corpopagemeio" class="atendimentos-reias">
            <div class="rowno" id="contedorigth">

                <div id="conteudoavalicao">
                    <div id="camposefordeavaliacao">
                        <!-- multistep form -->
                        <form id="msform" method="post" action="javascript:void(0)">

                            <fieldset data-id="1" class="nextfield">
                                <!--<h2 class="fs-title">Create your account</h2>-->
                                <li id="pergunta1">
                                    <h2>1. Qual é a idade?</h2>

                                    <div id="slogadaidade">
                                        Digite a idade aqui
                                        <span></span>
                                    </div>

                                    <input type="text" class="resultado_s" name="idade" id="idade" placeholder="Exemplo: 45" />
                                    <input type="hidden" name="passo1" id="passo1" value="">
                                </li>
                            </fieldset>
                            <fieldset style="display:none" data-id="2" class="nextfield">
                                <h2>2. Costuma ficar sozinho(a) na residência?</h2>
                                <li id="pergunta2">
                                    <div class="btn-group" data-toggle="buttons">
                                        <label onclick="jQuery('#passo2').val(1);resultados(event,inicial+1)" class="btn btn-default">
                                            <input type="radio" id="q156" value="1" /> Sempre fica sozinho(a)
                                        </label>
                                        <label onclick="jQuery('#passo2').val(2);resultados(event,inicial+1)" class="btn btn-default">
                                            <input type="radio" id="q157" value="2" /> Fica sozinho(a) por alguns dias e/ou períodos do dia
                                        </label>

                                        <label onclick="jQuery('#passo2').val(3);resultados(event,inicial+1)" class="btn btn-default">
                                            <input type="radio" id="q158" value="3" /> Nunca fica sozinho(a)
                                        </label>

                                    </div>
                                    <input type="hidden" name="passo2" id="passo2" value="">

                                </li>


                            </fieldset>

                            <fieldset style="display:none" data-id="3" class="nextfield">
                                <h2>3. Sofreu alguma queda nos últimos 12 meses?</h2>
                                <li id="pergunta3">
                                    <div class="btn-group" data-toggle="buttons">
                                        <label onclick="jQuery('#passo3').val(1);resultados(event,inicial+1)" class="btn btn-default">
                                            <input type="radio" value="sim" /> Não
                                        </label>
                                        <label onclick="jQuery('#passo3').val(2);resultados(event,inicial+1)" class="btn btn-default">
                                            <input type="radio" value="nao" /> Sim
                                        </label>
                                    </div>
                                    <input type="hidden" name="passo3" id="passo3" value="">

                                </li>

                            </fieldset>

                            <fieldset style="display:none" data-id="4" class="nextfield">
                                <li id="pergunta4">
                                    <label >
                                        <input type="radio" name="perg4[]" onclick="jQuery('#passo4').val(this.value);resultados(event,inicial+1)" value="1" /> Não tem nenhum problema de saúde
                                    </label>
                                    <label >
                                        <input type="radio" name="perg4[]" onclick="jQuery('#passo4').val(this.value);resultados(event,inicial+1)" value="2" /> Faz uso de alguns medicamentos regulares para controle
                                    </label>
                                    <label >
                                        <input type="radio" name="perg4[]" onclick="jQuery('#passo4').val(this.value);resultados(event,inicial+1)" value="3" /> Sofre de alguma doença crônica (diabetes, hipertensão, etc)
                                    </label>
                                    <label >
                                        <input type="radio" name="perg4[]" onclick="jQuery('#passo4').val(this.value);resultados(event,inicial+1)" value="4" /> Tem problemas de saúde que necessitam acompanhamento frequente/diário
                                    </label>
                                    <input type="hidden" name="passo4" id="passo4" value="">

                                </li>

                            </fieldset>

                            <fieldset style="display:none" data-id="5" class="nextfield">
                                <h2>5. Costuma sair de casa desacompanhado(a)
                                    pelo menos 2x por semana?</h2>
                                <li id="pergunta5">
                                    <div class="btn-group" data-toggle="buttons">
                                        <label class="btn btn-default" onclick="jQuery('#passo5').val(0);resultados(event,6)">
                                            <input type="radio" name="perg5[]"  value="0" /> Não
                                        </label>
                                        <label class="btn btn-default" onclick="jQuery('#passo5').val(1);resultados(event,6)">
                                            <input type="radio" name="perg5[]" value="1" /> Sim
                                        </label>

                                        <input type="hidden" name="passo5" id="passo5" value="">
                                    </div>

                                </li>
                            </fieldset>

                            <div id="progressbar">
                                <script>var inicial = 1;</script>
                                <li class=""><input type="button" name="next" onclick="go_step(inicial-1)" class="next action-button" id="btn_passoprev" value="< VOLTAR" /></li>
                                <li class="pa1 active">1</li>
                                <li class="pa2 ">2</li>
                                <li class="pa3 ">3</li>
                                <li class="pa4 ">4</li>
                                <li class="pa5 ">5</li>
                                <li class=""><input type="button" name="next" onclick="resultados(event,inicial+1)" class="next action-button" id="btn_passonext" value="PRÓXIMA >" /></li>
                                <li class=""><input type="button" name="next" onclick="resultados(event,6)" class="next action-button" id="btn_passofim" value="FINALIZAR" /></li>
                            </div>
                        </form>
                    </div>

                    <div id="clear"></div>
                </div>
            </div>

            <div class="rowsi" style="display:none;" id="contedorigth">
                <div id="terceirotitulo">
                    <h2 class="title-default">A TeleHelp é indicada para este caso</h2>
                </div>

                <div id="conteudoavalicao">

                    <div id="camposefordeavaliacao">


                        <div class="row">
                            <div class="col-md-6">
                                <div id="graficorisco">
                                    <li>
                                        <span>Nível de Risco:</span>
                                        <strong class="r_risco r_riscoa" style="display:none">Alto</strong>
                                        <strong class="r_risco r_riscom" style="display:none">Médio</strong>
                                        <strong class="r_risco r_riscob" style="display:none">Baixo</strong>
                                        <div id="clear"></div>
                                    </li>

                                    <i>

                                        <img class="r_risco r_riscoa" style="display:none" src="<?php echo get_template_directory_uri (); ?>/images/grafico-alto.png" alt="resultado-alto" title="Resultado Alto" />
                                        <img class="r_risco r_riscom" style="display:none" src="<?php echo get_template_directory_uri (); ?>/images/grafico-medio.png" alt="resultado-medio" title="Resultado Médio" />
                                        <img class="r_risco r_riscob" style="display:none" src="<?php echo get_template_directory_uri (); ?>/images/grafico-baixo.png" alt="resultado-baixo" title="Resultado Baixo" />

                                    </i>

                                </div>

                            </div>
                            <div class="col-md-6">
                                <div id="textoresultado">
                                    <div class="r_risco r_riscob">
                                        <strong><?php echo get_field('sub-titulo_texto_risco_baixo',$idpos_t) ;?></strong><br />
                                        <p><?php echo get_field('texto_risco_baixo',$idpos_t) ;?></p>
                                    </div>
                                    <div class="r_risco r_riscom">
                                        <strong><?php echo get_field('sub-titulo_texto_risco_medio',$idpos_t) ;?></strong><br />
                                        <p><?php echo get_field('texto_risco_medio',$idpos_t) ;?></p>
                                    </div>
                                    <div class="r_risco r_riscoa">
                                        <strong><?php echo get_field('sub-titulo_texto_risco_alto',$idpos_t) ;?></strong><br />
                                        <p><?php echo get_field('texto_risco_alto',$idpos_t) ;?></p>
                                    </div>
                                </div>

                                <div id="planoresuldatdo">
                                    <div class="form-container">
                                        <h2 class="pink form-heading">
                                            <strong>
                                                Se preferir entraremos em contato<br>
                                            </strong>
                                        </h2>
                                        <form method="post" action="/telehelp-4/send-2.php">
                                            <div class="form-row">
                                                <input name="name" placeholder="Nome" type="text" required/>
                                            </div>
                                            <div class="form-row clearfix">
                                                <div class="form-column col3">
                                                    <input name="ddd" placeholder="DDD" type="number" required min="0" max="99"
                                                           maxlength="2"/>
                                                </div>
                                                <div class="form-column col4">
                                                    <input name="phone" placeholder="Telefone" type="tel" required/>
                                                </div>
                                                <div class="form-column col5">
                                                    <input type="submit" class="btn" value="Ligaremos já!"/>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="form-footer">
                                            ou ligue <strong class="form-phone">0800 014 2001</strong>
                                        </div>
                                    </div>

                                    <?php //planobma(8,'r_riscob','baixo');?>
                                    <?php //planobma(9,'r_riscom','plus');?>
                                    <?php //planobma(10,'r_riscoa','master');?>
                                </div>

                            </div>

                        </div>



                        <div id="ajudacomresultado">
                            <h2>Como a TeleHelp pode lhe ajudar:</h2>

                            <figure>

                                <li class="r_risco r_riscoa r_riscob r_riscom">
                                    <i><img src="<?php echo get_template_directory_uri (); ?>/images/servicos-resultado_0004_imagem.jpg" alt="central-de-atendimento" title="Central de Atendimento" />

            <span>TeleHelp Aviso
</span>
                                        <div id="clear"></div>
                                    </i>

                                    É um serviço exclusivo que funciona através de um aparelho instalado em sua residência e que, com um único toque, solicita ajuda no caso de uma emergência. Basta apertar o seu botão de emergência, em forma de relógio ou colar, e nossas atendentes avisarão as pessoas escolhidas por você e, se necessário, enviarão ajuda especializada. Agora você pode viver com independência e segurança dentro de sua própria casa.
                                </li>

                                <li class="r_risco r_riscoa r_riscob r_riscom">
                                    <i><img src="<?php echo get_template_directory_uri (); ?>/images/servicos-resultado_0003_imagem.jpg" alt="central-de-atendimento" title="Central de Atendimento" />

            <span>Orientação Médica Telefônica
</span>
                                        <div id="clear"></div>
                                    </i>

                                    As primeiras orientações logo após um acidente doméstico ou um mal-estar são fundamentais para que o ocorrido não tome proporções descabidas. Através deste serviço, você poderá contar com o aconselhamento médico por telefone, durante 24h por dia, todos os dias do ano. Mesmo que não se trate de uma emergência, nossos médicos estão á disposição para esclarecimentos e dúvidas e farão o possível para te ajudar em qualquer situação.
                                </li>

                                <li class="r_risco r_riscoa r_riscob r_riscom">
                                    <i><img src="<?php echo get_template_directory_uri (); ?>/images/resultado_detector.jpg" alt="resgate-medico" title="Resgate Médico" />

            <span>Detector de Fogo e Fumaça

</span>
                                        <div id="clear"></div>
                                    </i>

                                    Pequenos descuidos domésticos podem gerar grandes problemas. Instalações elétricas já ultrapassadas ou sobrecarregadas ou até mesmo uma torta esquecida no forno podem gerar um grande incêndio colocando em risco a vida de todos que moram na residência, sem contar os vizinhos. Fácil e rápido de instalar, este sensor não precisa de cabos e é compatível com o painel da TeleHelp.

                                </li>

                                <li class="r_risco r_risco5id">
                                    <i><img src="<?php echo get_template_directory_uri (); ?>/images/servicos-resultado_0001_imagem.jpg" alt="telehelp-id" title="TeleHelp ID" />

            <span>TeleHelp-ID

</span>
                                        <div id="clear"></div>
                                    </i>

                                    Seja facilmente identificado em situações de emergência fora de casa com a TeleHelp-ID. Uma pulseira ou colar de identificação com o telefone da Central de Atendimento 24H e o seu nome gravados. Em caso de emergência, quando você não puder falar por si mesmo, a TeleHelp falará por você. TeleHelp-ID pode salvar a sua vida.

                                </li>

                                <li class="r_risco r_risco5cel">
                                    <i><img src="<?php echo get_template_directory_uri (); ?>/images/resultado_celular.jpg" alt="telehelp-id" title="TeleHelp ID" />

            <span>TeleHelp Celular

</span>
                                        <div id="clear"></div>
                                    </i>

                                    Um aparelho muito fácil de usar! Teclas grandes, áudio amplificado e botão de emergência conectado 24h a Central de Atendimento da TeleHelp. Além disso, se precisar, a TeleHelp poderá te rastrear e passar sua localização as pessoas escolhidas por você.

                                </li>

                                <li class="r_risco r_riscoa r_riscob r_riscom">
                                    <i><img src="<?php echo get_template_directory_uri (); ?>/images/servicos-resultado_0000_imagem.jpg" alt="ligacao-diaria" title="Ligação Diária ou Semanal" />

            <span>Ligação Diária ou Semanal

</span>
                                        <div id="clear"></div>
                                    </i>
                                    Através deste serviço, as atendentes da Central de Atendimento 24h fazem uma ligação telefônica diária ou semanal em dias e horários pré-determinados para verificação de suas condições de saúde.
                                </li>
                            </figure>
                        </div>


                    </div>
                    <div id="clear"></div>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="calc-footer">
    <img height="70" style="margin-right: 20px;" src="http://telehelp.com.br/wp-content/themes/telehelp/images/logo-tele.png" alt="TeleHelp" title="TeleHelp">

    <span>Copyright &copy; 2016 Telehelp</span>
</div>

<!-- jQuery -->
<script src="http://thecodeplayer.com/uploads/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<!-- jQuery easing plugin -->
<script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>
<div id='sm-bounce' data-scope='email' style='display:none' ></div>
<script>
    var urlplug = "<?php echo plugins_url(); ?>/telehelp/";
</script>
<?php wp_footer(); ?>
</body>
</html>
