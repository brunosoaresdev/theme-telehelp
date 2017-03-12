<?php
/*
* Template Name: Área do Cliente Inicial
*/

telehelp_check_if_user_login();
/*if(!isset($_SESSION['logado']) && $_SESSION['logado'] !=  true) {
    wp_redirect(home_url());
    die("Acesso não autorizado.");
}*/

$idpos_t = get_the_ID();
get_header ();

?>
<style>
    #menumaster {
        visibility: hidden;
    }
</style>
<div id="corpopage">

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

                            echo "</a> » Área do Usuário » ";

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

                    <h1>Área do Usuário</h1>
                </div>

            </div>

            <div id="subtitulopgaina">
                <strong>Olá, <?php echo $_SESSION['Nome']; ?>. Seja bem vindo!</strong>
                <a href="<?php echo home_url(); ?>" class="btn-sair">desconectar conta</a>
            </div>

            <div style="clear:both"></div>
        </div>
    </div>



    <div id="corpopagemeio" class="atendimentos-reias">

        <div class="row">
            <div class="col-md-12 titulo-area-cliente">
                <h1>Central do Cliente Telehelp</h1>
                <p>Aqui, você tem acesso a todas informações e serviços contratados</p>
            </div>
        </div>

    </div>

    <div id="op_iniciais" class="painel-op-iniciais">

        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="box-op-conta vermelho">
                        <h3>Resumo de Conta</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue tortor, sodales sit amet dui nec.</p>
                        <a href="<?php echo home_url("/area-do-cliente/resumo-da-conta/") ?>" class="btn btn-acessar" role="button">Acessar ></a>
                    </div>

                    <div class="box-op-conta rosa">
                        <h3>Ficha de Emergência</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue tortor, sodales sit amet dui nec.</p>
                        <a href="<?php echo home_url("/area-do-cliente/ficha-de-emergencia/") ?>" class="btn btn-acessar" role="button">Acessar ></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-op-conta azulmarinho">
                        <h3>Lembrete de Remédios</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue tortor, sodales sit amet dui nec.</p>
                        <a href="<?php echo home_url("/area-do-cliente/alerta-de-medicamentos/cadastro/") ?>" class="btn btn-acessar" role="button">Acessar ></a>
                    </div>

                    <div class="box-op-conta roxo">
                        <h3>Abrir um chamado</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent augue tortor, sodales sit amet dui nec.</p>
                        <a href="<?php echo home_url("/area-do-cliente/abrir-chamado/"); ?>" class="btn btn-acessar" role="button">Acessar ></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-op-imagem">
                        <a href="#" class="link-banner"><img src="<?php echo home_url(); ?>/wp-content/plugins/telehelp-clientearea/images/banner-menu.jpg" alt="" class="img-responsive"/></a>
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

    <?php endif; ?>


    <?php get_footer (); ?>
    <div id='sm-bounce' data-scope='email' style='display:none' ></div>