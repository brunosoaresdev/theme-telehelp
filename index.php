<?php
  $idpos_t = get_the_ID();
  get_header (); ?>
       <div id="slideshow">
          <div id="contatobanner">
              <div id="contatobannermeiomeio">
                  <div style="display:none;" id="div_ban_success" class="email-signup-suscesso">
            <img src="<?php echo get_template_directory_uri (); ?>/images/sucesso-senha.png" alt="Sucesso" />
            <h2>Recebemos seus dados<br />com sucesso.</h2>
            <h4>Em breve entraremos em contato.</h4>
            <button type="button" onclick="jQuery('#div_ban_success').slideUp();jQuery('#div_ban').slideDown();" class="full-width btn-medium"><i class="glyphicon glyphicon-chevron-left"></i> VOLTAR</button>
          </div>
                  <div id="div_ban" class="email-signup">
                    <h2>Mais Informações</h2>
                    <span>Preencha os campos abaixo que entraremos em contato com você.</span>

                    <form method="post" id="bancentral-vendas" action="javascript:void(0)" >
            <input type="hidden" name="pagina" value="form-banner">
            <input type="hidden" name="acao" value="form-site">
            <input type="hidden" name="url" value="<?php echo site_url()?>">
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

<?php putRevSlider("home") ?>

        </div>


<?php if(get_field('link_video_-_home',$idpos_t) or get_field('imagem_para_o_espaço_video_1',$idpos_t)){ ?>

<div id="conteudohome">
  <div id="conteudohomemeio">


      <div id="primeiralinhahome">
            <h1  data-animation-type="fadeInDown" data-animation-duration="1">TeleHelp ajuda você a viver com autonomia e segurança.</h1>
            <h2  data-animation-type="fadeIn" data-animation-duration="1">Assista ao vídeo e entenda como funciona:</h2>

            <div id="videoprimeiralinha"  class=" fadeIn" data-animation-type="fadeIn" data-animation-duration="1" style="animation-duration: 1s; visibility: visible;">
            <?php if(get_field('link_video_-_home',$idpos_t)<>""){?>
              <iframe width="100%" height="482" src="<?php echo str_replace("watch?v=","embed/",get_field('link_video_-_home',$idpos_t)); ?>?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
            <?php } ?>
            <?php if(get_field('imagem_para_o_espaço_video_1',$idpos_t)<>""){
                echo '<img src="'.get_field('imagem_para_o_espaço_video_1',$idpos_t).'" class="visibledesktop visibletablet noview" style="width:100%;height: 482px;">';
        if(get_field('imagem_para_o_espaço_video_1_mobile',$idpos_t)<>""){
                echo '<img id="h_i_2" src="'.get_field('imagem_para_o_espaço_video_1_mobile',$idpos_t).'" class="visiblesmart visibletabletp noview" style="width:100%;">';
        }
             } ?>
            </div>


            <a href="<?php echo site_url()?>/telehelpaviso/"  data-animation-type="fadeInDown" data-animation-duration="1">Confira aqui <i class="glyphicon glyphicon-chevron-right"></i> </a>


            <div class="separador"></div>

            <h2 class="title-default" data-animation-type="fadeInDown" data-animation-duration="1">Conheça nossos Serviços</h2>
            <h2  data-animation-type="fadeIn" data-animation-duration="1">Soluções para você viver com segurança dentro e fora de casa, com atendimento em todo o Brasil</h2>


        </div>


    </div>
</div>

<?php } ?>


<div id="segundalinhahome">
  <div id="segundalinhahomemeio">
        <div class="row">
              <div class="col-md-6">
                <div id="quadroslinhadois"  data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.3">

                  <h2>Dentro de casa</h2>
                    <li>Para viver de forma independente dentro de casa, além do serviço TeleHelp Aviso, oferecemos outros serviços que lhe darão mais autonomia e segurança, como por exemplo as ligações diárias ou semanais para verificar o seu estado, a orientação médica telefônica 24h, e muitos outros.</li>
                    <br>

                    <a href="<?php echo site_url()?>/dentro-de-casa/">saiba mais <i class="glyphicon glyphicon-chevron-right"></i></a>


                </div>
                <div id="quadroslinhadois"  data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.8">
                  <img src="<?php echo get_template_directory_uri (); ?>/images/dentro.jpg" alt="fora-de-casa">
                </div>
              </div>
              <div class="col-md-6">
                <div id="quadroslinhadois"  data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.5">


                  <h2>fora de casa</h2>
                    <li>Emergências também podem ocorrer fora de casa e contar com apoio imediato é fundamental para sua segurança. Conheça o TeleHelp-ID e o TeleHelp Celular, serviços ideais para quem tem uma vida ativa, mas não quer abrir mão de sua independência.</li>
                    <br>

                    <a href="<?php echo site_url()?>/fora-de-casa/">saiba mais <i class="glyphicon glyphicon-chevron-right"></i></a>

                </div>
                <div id="quadroslinhadois"  data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.11">
                  <img src="<?php echo get_template_directory_uri (); ?>/images/fora.jpg" alt="fora-de-casa">
                </div>
              </div>
            </div>
    </div>
</div>

<div id="terceiralinha">
  <div id="terceiralinhameio">
        <div class="row">
              <div class="col-md-8">
                <div id="atendimentosreais"   data-animation-type="pulse" data-animation-duration="1">
                  <h2>Atendimentos reais</h2>
                    <h3>Ouça exemplos reais de atendimentos realizados pela TeleHelp</h3>
                    <ul>
                    <?php

                    $newsArgs = array( 'post_type' => 'atendimentoreal', 'posts_per_page' => 2);
                    $newsLoop = new WP_Query( $newsArgs );
                    while ( $newsLoop->have_posts() ) : $newsLoop->the_post();              ?>

                    <li  data-animation-type="bounce" data-animation-duration="1" data-animation-delay="0.5">
                                          <h2><i class="fa fa-volume-up"></i> <?php the_title(); ?></h2>
                                            <div class="atendimentosreais_class" id="resumoatendimnto">
                    <?php the_field('descrição',$post->ID) ?>
                                            </div>
                                            <div id="campoplay">
                            <audio id="aud_<?php echo $post->ID?>" src="<?php the_field('audio',$post->ID) ?>" controls loop preload="preload" title="<?php the_title(); ?>"> <a href="<?php echo get_post_meta($post->ID, 'audio', true); ?>"><?php the_title(); ?></a> </audio>
                                            </div>
                                        </li>


                    <?php endwhile; ?>
                    </ul>

                    <script>

                   /* jQuery(document).ready(function(){
                        ajustaatendimento();
                    })*/

                    </script>

                    <a href="<?php echo site_url()?>/como-funciona/atendimentos-reais/" class="full-width btn-medium">ouça mais atendimentos <i class="glyphicon glyphicon-chevron-right"></i></a>

                </div>
              </div>
               <div class="col-md-4">
                <div id="depoiemntoshome"  data-animation-type="pulse" data-animation-duration="1">
                  <h2>Depoimentos</h2>
                    <h3>A opinião de quem já usa TeleHelp</h3>


<?php
$newsArgss = array( 'post_type' => 'depoimentos', 'posts_per_page' => 2);
$newsLoops = new WP_Query( $newsArgss );
while ( $newsLoops->have_posts() ) : $newsLoops->the_post();              ?>

<li   data-animation-type="bounce" data-animation-duration="1" data-animation-delay="0.5">

<?php
if ( has_post_thumbnail() ) {
the_post_thumbnail();
} else {

  echo "<img src='".get_template_directory_uri ()."/images/img-depo.jpg' alt='foto-usuario'>"; // mostra outra coisa (imagem, texto, etc.)
}
?>

                        <a>
                        <?php
            $contentt = get_the_excerpt();
                        $conteudoo = substr($contentt, 0, 160).(strlen($contentt)>=160 ? "..." : "");
                        echo $conteudoo;
            ?><br>

                        <strong><?php the_title(); ?></strong>
                        </a>
                        <div style="clear:both"></div>
                    </li>

<?php endwhile; ?>

                    <a href="<?php echo site_url() ?>/como-funciona/depoimentos/" class="full-width btn-medium">veja mais depoimentos <i class="glyphicon glyphicon-chevron-right"></i></a>

                </div>
              </div>
            </div>



    </div>
</div>





<div id="quinstalinha">
  <div id="quinstalinhameio" >
        <div class="row">
              <div class="col-md-8">

                <div id="quemsomoms" class="home"  data-animation-type="fadeInLeft" data-animation-duration="0.5">

                    <li><h2>Sobre nós</h2>
            <?php if(get_field('link_video_2_-_home',$idpos_t)<>""){ ?>
                      <iframe width="100%" height="273" src="<?php echo str_replace("watch?v=","embed/",get_field("link_video_2_-_home",$idpos_t)) ?>?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                     <?php } ?>
            <?php if(get_field('imagem_para_o_espaço_video_2',$idpos_t)<>""){
                echo '<img id="h_i_22" src="'.get_field('imagem_para_o_espaço_video_2',$idpos_t).'" style="width:100%;height: 290px;">';
             } ?>
                    </li>




                    <li><h2>Sobre a TeleHelp</h2>
                      A TeleHelp é a primeira e a maior empresa de teleassistência do Brasil. Foi fundada em 2004 com o objetivo de oferecer as pessoas da terceira idade a possibilidade de viver de forma mais independente e segura, dentro e fora de suas casas.
                        <a href="<?php echo site_url() ?>/sobre-nos/" class="full-width btn-medium">Saiba mais <i class="glyphicon glyphicon-chevron-right"></i></a>
                    </li>

                    <div style="clear:both"></div>



                </div>

        <!--script>
        jQuery(document).ready(function(){
        ajustagrid('#guiahome .col-md-6 li',0);
        })
        </script-->

              <div class="row" id="guiahome">
                      <div  class="col-md-6 " data-animation-type="fadeInUp" data-animation-duration="1" data-animation-delay="0.20">
                        <a href="<?php site_url()?>/guia-morar-sozinho/" ><li>
                          <div id="tituloguia">
                              <span>guia</span>
                                <h2>Morar Sozinho</h2>
                            </div>

                            <div id="textoguia">
                            A TeleHelp desenvolveu junto a uma equipe de especialistas um guia exclusivo com dicas e recomendações para quem quer viver com independência a segurança.
                            </div>

                        <div style="clear:both;"></div>
                        </li></a>




                      </div>
                      <div class="col-md-6 " data-animation-type="fadeInUp" data-animation-duration="1" data-animation-delay="0.40">

                      <a href="<?php site_url()?>/tudo-sobre-quedas/" ><li>
                          <div id="tituloguia">
                              <span>guia</span>
                                <h2>Tudo Sobre Quedas</h2>
                            </div>

                            <div id="textoguia">
                            Estudos apontam que 30% das pessoas acima de 60 anos caem pelo menos uma vez ao ano. Saiba como proteger-se das quedas.
                            </div>

                        <div style="clear:both;"></div>
                        </li></a>

                      </div>
              </div>

              </div>
              <div class="col-md-4 " data-animation-type="fadeInRight" data-animation-duration="0.5">

                <div id="bloguehome">
                  <h2>Blog Atividade</h2>

<?php

$lim = 0;

$wp_query = new WP_Query();
query_posts( array( 'post_type' => 'post', 'showposts' => "2" ));
if(have_posts()):
while ($wp_query -> have_posts()) : $wp_query -> the_post();

$lim++;

?>

                    <li  data-animation-type="fadeInUp" data-animation-duration="1" data-animation-delay="1.60">
                      <div id="imgpostagemhome">
                          <?php   if ( has_post_thumbnail() ) {
      the_post_thumbnail("quadropostp");
    } ?>
                        </div>
                        <div id="coteudopostagemhome">
                          <span><?php the_time('d/m/Y')?></span><br>

                            <strong><a href="<?php the_permalink() ?>" class="lertudo" title="<?php the_title(); ?> " rel="bookmark"><?php the_title()?></a></strong>

            <?php
      echo substr(strip_tags($post->post_content), 0, 80) . (strlen(strip_tags($post->post_content))>80 ? "..." : "");
      ?>

                        </div>

                       <div style="clear:both;"></div>
                    </li>

<?php
    endwhile;
    endif;
 ?>


                    <a href="<?php echo site_url() ?>/noticias-recentes/" class="full-width btn-medium">veja mais notícias <i class="glyphicon glyphicon-chevron-right"></i></a>
                </div>

              </div>
            </div>
    </div>
</div>

<?php get_footer (); ?>
<div id='sm-bounce' data-scope='email' style='display:none' ></div>