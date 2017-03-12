<?php 
$idpos_t = get_the_ID();
get_header (); ?>

<style>
  #header{
    box-shadow:1px 2px 10px -4px #ABAAAA;}
  </style>
  
  <div id="corpopage" > 

    <div id="titulopagegeral">
      <div id="titulopagegeralmeio">
        <div style="float:left">
          <div id="caminhosdemigalhas">

            <?php 

            function the_breadcrumb() {

            if (!is_home()) {

            echo '<a href="';

            echo get_option('home');

            echo '">';

            echo "Página Inicial";

            echo "</a> » ";

            if (is_category() || is_single()) {

            the_category('title_li=');

            if (is_single()) {

            echo " » ";

            the_title();

          }

        } elseif (is_page()) {

        echo the_title();

      }

    }

  }

  ?>


  <?php if (have_posts()): the_post(); ?>
   <?php the_breadcrumb(); ?>

 </div>         
 <div id="titulodapagina">

   <h1> <?php the_title(); ?></h1>
 </div>

</div>

<div id="subtitulopgaina">
  Veja como a TeleHelp pode ser útil
</div>

<div style="clear:both"></div>
</div>
</div>



<div id="corpopagemeio" class="atendimentos-reias">   
 <?php the_content(); ?>
<?php endif; ?>    

<div id="menuleft">
 <?php include(TEMPLATEPATH .'/menu-lateral.php');  ?>
</div>

<div class="rowno" id="contedorigth">
  <div id="terceirotitulo">
    <h2 class="title-default">Faça a avaliação e saiba se a TeleHelp
      pode ser útil.</h2>
    </div>

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

          <!-- jQuery -->
          <script src="http://thecodeplayer.com/uploads/js/jquery-1.9.1.min.js" type="text/javascript"></script>
          <!-- jQuery easing plugin -->
          <script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>

          <script src="<?php echo get_template_directory_uri (); ?>/form/js/index.js"></script>
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
      <!--<?php planobma(8,'r_riscob','baixo');?>
      <?php planobma(9,'r_riscom','plus');?>
      <?php planobma(10,'r_riscoa','master');?>-->
      <div id="contatobannermeiomeio" class="form-quem-deve-usar">

        <div style="display:none;" id="div_ban_success" class="email-signup-suscesso">
          <img src="<?php echo get_template_directory_uri (); ?>/images/sucesso-senha.png" alt="Sucesso" />
          <h2>Recebemos seus dados<br />com sucesso.</h2>
          <h4>Em breve entraremos em contato.</h4>
          <button type="button" onclick="jQuery('#div_ban_success').slideUp();jQuery('#div_ban').slideDown();" class="full-width btn-medium"><i class="glyphicon glyphicon-chevron-left"></i> VOLTAR</button>
        </div>
        <div id="div_ban" class="email-signup">
          <h2>A Telehelp liga pra você</h2>
          <span>Preencha os campos abaixo que entraremos em contato</span>

          <form method="post" id="bancentral-vendas" action="javascript:void(0)" >
            <input type="hidden" name="pagina" value="form-banner">
            <input type="hidden" name="acao" value="form-site">
            <input type="hidden" name="url" value="<?php echo site_url()?>/como-funciona/quem-deve-usar/">
            <input type="hidden" name="login" id="tplogin" value="email">
            <div class="form-group">
              <label>Seu Nome:</label>
              <input type="text" name="nome" placeholder="Digite seu Nome" id="bannome" class="input-text" onkeypress="return sem_acento(event);" required>
            </div>
            <div class="form-group">
              <label>Telefone:</label>
              <input type="text" name="telefone" placeholder="( ) ____-____" id="bantelefone" class="input-text telefone" required>
            </div>

            <div id="banbotcentral">
              <button type="submit" onclick="send_ce(event,6,'ban');" class="full-width btn-medium">ENVIAR <i class="glyphicon glyphicon-chevron-right"></i></button>
            </div>
          </form>
        </div>
      </div>

    </div>
  </div>


</div>

<div id="clear"></div>                        
</div>

</div>

<div id="vejatabem">
  <h2>Veja também</h2>

  <div style="display:none;" class="row rowsi">

    <div class="col-md-6">
      <li><img src="<?php echo get_template_directory_uri (); ?>/images/tb5.png" alt="perguntas-frequestes"><br>
        Perguntas Frequentes</li>
        <li>

          Consulte a lista de perguntas frequentes para esclarecer suas dúvidas. Não encontrou respostas? Ligue para falar com um de nossos consultores.

          <a href="<?php echo site_url()?>/como-funciona/perguntas-frequentes/">saiba mais <i class="glyphicon glyphicon-chevron-right"></i></a>
        </li>

      </div>


    </div>  

    <div class="row rowno">


      <div class="col-md-6">

        <li><img src="<?php echo get_template_directory_uri (); ?>/images/tb7.png" alt="atendientos-reais" /><br />
          Atendimentos
          Reais</li>
          <li>

            Ouça exemplos reais de atendimento a clientes TeleHelp em situações de emergência e saiba como acontece todo o procedimento de apoio.

            <a href="<?php echo site_url()?>/como-funciona/atendimentos-reais/">saiba mais <i class="glyphicon glyphicon-chevron-right"></i></a>
          </li>

        </div>


        <div class="col-md-6">
          <li><img src="<?php echo get_template_directory_uri (); ?>/images/tb1.png" alt="equipamentos" /><br />
            Equipamentos</li>
            <li>

              A TeleHelp utiliza equipamentos de alta tecnologia para garantir sua segurança e bem estar 24 horas por dia. Conheça todos os nossos equipamentos.

              <a href="<?php echo site_url()?>/como-funciona/tecnologia-telehelp/">saiba mais <i class="glyphicon glyphicon-chevron-right"></i></a>
            </li>

          </div>


        </div> 


      </div>



      <div id="clear"></div>



    </div>

  </div>
  
  <script>  
    var urlplug = "<?php echo plugins_url(); ?>telehelp/";
  </script>  
  
  <?php get_footer (); ?>
  <div id='sm-bounce' data-scope='email' style='display:none' ></div>