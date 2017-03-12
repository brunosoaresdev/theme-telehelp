<?php

session_start();


if($_POST['trocacidade']==true){

  $es = explode("||", $_POST["s_e"]);
  $ci = explode("||", $_POST["s_e1"]);

  $_SESSION["E_TLHP"] = $es[1];
  if(count($ci)>1 || $_POST["s_e1"]!=0){
    $_SESSION["C_TLHP"] = $ci[0];
    $_SESSION["I_TLHP"] = $ci[2];
  }else{
    $_SESSION["C_TLHP"] = $es[1];
    $_SESSION["I_TLHP"] = 0;
  }

  if($_SESSION["I_TLHP"]==0 or !isset($ci[2])){
    $_SESSION["C_TLHPA"] = "0";
  }else{
    $att = get_field('cidade_com_atendimento_domiciliar', $ci[2]);
    if($att=="Sim"){
     $_SESSION["C_TLHP"] = $_SESSION["C_TLHP"] . " *";
     $_SESSION["C_TLHPA"] = "1";
   }else{
     $_SESSION["C_TLHPA"] = "0";
   }
 }




}


function Dot2LongIP ($IPaddr)
{
  if ($IPaddr == "") {
    return 0;
  } else {
    $ips = split ("\.", "$IPaddr");
    return ($ips[3] + $ips[2] * 256 + $ips[1] * 256 * 256 + $ips[0] * 256 * 256 * 256);
  }
}

global $detect;

require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect;

if( $detect->isMobile() && !$detect->isTablet() ){
  get_template_part('headermobile');
}else{


  ?>



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
    <!-- Page Title -->
    <title>

      <?php
        /*
         * Print the <title> tag based on what is being viewed.
         */

        global $page, $paged; $woocommerce;

        wp_title( '|', true, 'right' );

        // Add the blog description for the home/front page.
          $site_description = get_bloginfo( 'description', 'display' );
          if ( $site_description && ( is_home() || is_front_page() ) ) {
            echo " | $site_description";
          }
        // Add a page number if necessary:
          if ( $paged >= 2 || $page >= 2 ){
           echo ' | ' . sprintf( __( 'Page %s', 'dzonia' ), max( $paged, $page ) );
          }



       ?>


 </title>

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
    <script type="text/javascript" src="<?php echo get_template_directory_uri (); ?>/js/jquery-1.11.1.min.js"></script>



    <?php wp_head();?>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-68223511-1', 'auto');
      ga('send', 'pageview');

    </script>
    


  </head>

  <body>
    <!-- Google Tag Manager -->
    <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-MDPKT4"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
      <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MDPKT4');</script>
    <!-- End Google Tag Manager -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.4&appId=612760912195922";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.4&appId=612760912195922";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>


    <div class="modal fade Modal-Login in" id="Modal-Senha">
      <div class="vertical-alignment-helper">
        <div class="modal-dialog vertical-align-center">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="pull-right" data-dismiss="modal">X</button>
              <h4 class="modal-title pull-left" id="myModalLabel">Esqueci Minha Senha</h4>
            </div>
            <div class="modal-body">
              <form id="pedidos-recover-modal-form" class="pedidos-login-modal-form" action="javascript:void(0)" method="POST" autocomplete="off">
                <input type="hidden" name="acao" value="pedidos-recover-modal-form">
                <div class="form-group">
                  <label>E-mail:</label>
                  <input type="email" class="form-control modal-input" id="rmform-email" name="rmform-email" placeholder="Digite seu e-mail">
                </div>

                <div class="form-group">
                  <button onclick="recover_pass(event)" id="btn-recover-pass" class="btn">RECUPERAR SENHA > </button>
                </div>

              </form>
            </div>

          </div>
        </div>
      </div>
    </div>
    <div id="faixatopo">
     <div id="faixatopomeio">
       <ul id="ondevoceesta" >
        <li>Você está em:</li>
        <li><strong id="strongcity"><?php echo (isset($_SESSION['C_TLHP']) ? $_SESSION['C_TLHP'] : "São Paulo")?></strong>
          <div class="ss">


           <ul>
             <span>Estou em outra localização</span>
             <form method="post" action="">
              <input name="trocacidade" type="hidden" value="true" />
              <i>
                <label>Estado:</label>
                <select name="s_e" id="selectestado" class="selectestado" onchange="busca_newcity(this.value, event)">
                  <?php

                  $inicio = 0;

                  $i = get_terms( 'cat_cidade', 'orderby=name&hide_empty=0' );
                  foreach($i as $i2){

                    if($inicio==0){$inicio= $i2->term_id;};

                    echo'
                    <option value="'.$i2->term_id.'||'.$i2->name.'">'.$i2->name.'</option>';
                  }

                  ?>
                </select>
                <script>jQuery(document).ready(function(){
                  busca_newcity(<?php echo $inicio;?>,"");
                })</script>
              </i>

              <i>
                <label>Cidade:</label>
                <select name="s_e1" id="selectcidade" class="selectestado">
                  <option value="0">Selecione Estado</option>
                </select>
              </i>


              <i>
               <input type="submit" class="botcidade" value="TROCAR CIDADE >">
             </i>
           </form>
         </ul>






       </div>

     </li>
     <li><a href="<?php echo site_url()?>" title="Página inicial"> Página Inicial</a></li>
   </ul>

   <div id="telefoneeareadocliente" class=" bounce" >
         <li class="phone"><i class="fa fa-phone"></i><strong>0800 014 2001 / 11 3585-2000</strong></li>
         <li class="whatsapp"><img src="<?php echo get_template_directory_uri (); ?>/images/icone-footer-quatro.png" alt="whatsapp">Whatsapp: <span>97616.3764</span></li>
         <li class="link"> <a href="http://meutelehelpid.com.br/" title="TeleHelp-ID" target="_blank">TeleHelp-ID</a></li>
         <li class="link"> <a href="http://meutelehelpgps.com.br/" title="TeleHelp GPS" target="_blank">TeleHelp GPS</a></li>
         <li class="link" data-toggle="modal" data-target="#modalchatonline"><a href="#">Chat</a></li>

         </div>
       </div>
     </div>

     <div id="page-wrapper">





      <header id="header" class="navbar-static-top">


        <div class="main-header">



          <div class="container">
            <div class="logo navbar-brand">
              <a href="<?php echo site_url()?>" title="TeleHelp - home" class=" fadeInLeftBig" data-animation-type="fadeInLeftBig" >
                <img src="<?php echo get_template_directory_uri (); ?>/images/logo-tele.png" alt="TeleHelp" title="TeleHelp" />
              </a>
            </div>


            <?php

            $tb = new WP_Query( array(
              'post_type' => 'midiamenu',
              'post_per_page' => 8
              ) );
            if ( $tb->have_posts() ) :

              $tbi = array();

            while ( $tb->have_posts() ) : $tb->the_post();

            if(get_field('tipo_thumb', $post->ID)==2){
              $tbi[get_field('menu', $post->ID)] = '<iframe width="100%" height="auto" src="'. str_replace("watch?v=","embed/",get_field('link_video',$post->ID)) .'?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>';
            }else{
              $tbi[get_field('menu', $post->ID)] = '<img src="'.get_field('imagem', $post->ID).'" alt="Tele Help" />';
            }





            endwhile;
            endif;

            ?>

            <div id="menumaster" class=" fadeInLeft" data-animation-type="fadeInLeft" >
              <li> <a href="<?php echo site_url()?>/index.php/como-funciona/">Como Funciona</a>


                <ul class="trescolunas">
                  <div id="titulomenu">Veja como funciona</div>
                  <div class="row">

                    <div class="col-md-8">
                     <?php

                     $defaults = array(
                       'theme_location'  => 'como_funciona_topo',
                       'menu'            => '',
                       'container'       => '',
                       'container_class' => '',
                       'container_id'    => '',
                       'menu_class'      => 'menu',
                       'menu_id'         => '',
                       'echo'            => true,
                       'fallback_cb'     => 'wp_page_menu',
                       'before'          => '',
                       'after'           => '',
                       'link_before'     => '',
                       'link_after'      => '',
                       'items_wrap'      => '%3$s',
                       'depth'           => 0,
                       'walker'          => ''
                       ); wp_nav_menu( $defaults ); ?>

                       <div id="clear"></div>
                     </div>


                                  <!--<div class="col-md-4">
                                    <li><a href="<?php echo site_url()?>/index.php/como-funciona/quem-deve-usar/">Quem precisa</a></li>
                                    <li><a href="<?php echo site_url()?>/index.php/como-funciona/atendimentos-reais/">Atendimentos reais</a></li>
                                    <li><a href="<?php echo site_url()?>/index.php/como-funciona/tecnologia-telehelp/">Tecnologia</a></li>
                                    <li><a href="<?php echo site_url()?>/index.php/como-funciona/depoimentos/">Depoiemntos</a></li>
                                  </div>
                                  <div class="col-md-4">
                                    <li><a href="<?php echo site_url()?>/index.php/como-funciona/nossa-central-de-atendimento/">Nossa Central de Atendimento</a></li>
                                    <li><a href="<?php echo site_url()?>/index.php/como-funciona/vantagens/">Vantagens</a></li>
                                    <li><a href="<?php echo site_url()?>/index.php/como-funciona/perguntas-frequentes/">Perguntas Frequentes</a></li>

                                  </div> -->
                                  <div class="col-md-4">
                                    <?php echo (isset($tbi[1]) ? $tbi[1] : ""); ?>
                                  </div>
                                  <div id="clear"></div>
                                </div>


                              </ul>

                            </li>


                            <li><a href="<?php echo site_url()?>/index.php/servicos/">Serviços</a>

                              <ul class="duascolunas">
                                <div id="titulomenu">Conheça nosso serviços</div>
                                <div class="row">
                                 <div class="col-md-4">

                                  <?php
                                  $defaultss = array(
                                   'theme_location'  => 'servicos_topo',
                                   'menu'            => '',
                                   'container'       => '',
                                   'container_class' => '',
                                   'container_id'    => '',
                                   'menu_class'      => 'menu',
                                   'menu_id'         => '',
                                   'echo'            => true,
                                   'fallback_cb'     => 'wp_page_menu',
                                   'before'          => '',
                                   'after'           => '',
                                   'link_before'     => '',
                                   'link_after'      => '',
                                   'items_wrap'      => '%3$s',
                                   'depth'           => 0,
                                   'walker'          => ''
                                   ); wp_nav_menu( $defaultss ); ?>

                                    <!--<li><a href="<?php echo site_url()?>/index.php/como-funciona/quem-deve-usar/">Quem precisa</a></li>

                                    <li><a href="#">Atendimentos reais</a></li>
                                    <li><a href="#">Tecnologia</a></li>
                                    <li><a href="#">Depoimentos</a></li> -->
                                  </div>
                                  <div class="col-md-8">
                                    <?php echo (isset($tbi[2]) ? $tbi[2] : ""); ?>
                                  </div>
                                </div>


                              </ul>
                            </li>

                            <li><a href="<?php echo site_url()?>/sobre-nos/">Sobre nós</a>
                              <ul class="duascolunas">
                                <div id="titulomenu">Sobre a TeleHelp</div>
                                <div class="row">
                                  <div class="col-md-4">

                                    <?php
                                    $defaultsss = array(
                                     'theme_location'  => 'sobre_nos_topo',
                                     'menu'            => '',
                                     'container'       => '',
                                     'container_class' => '',
                                     'container_id'    => '',
                                     'menu_class'      => 'menu',
                                     'menu_id'         => '',
                                     'echo'            => true,
                                     'fallback_cb'     => 'wp_page_menu',
                                     'before'          => '',
                                     'after'           => '',
                                     'link_before'     => '',
                                     'link_after'      => '',
                                     'items_wrap'      => '%3$s',
                                     'depth'           => 0,
                                     'walker'          => ''
                                     ); wp_nav_menu( $defaultsss ); ?>

                                  <!--
                                    <li><a href="#">O que é Teleassistência ?</a></li>
                                    <li><a href="#">História de Vida</a></li> -->
                                  </div>
                                  <div class="col-md-8">

                                   <?php echo (isset($tbi[3]) ? $tbi[3] : ""); ?>
                                 </div>
                               </div>


                             </ul>
                           </li>

                           <li><a href="<?php echo site_url()?>/blog-atividade/">Blog Atividade</a>

                             <ul class="duascolunas">
                              <div id="titulomenu">Entrar no Blog Atividade</div>
                              <div class="row">
                                <div class="col-md-4">

                                  <?php
                                  $defaultsss = array(
                                    'theme_location'  => 'blog_topo',
                                    'menu'            => '',
                                    'container'       => '',
                                    'container_class' => '',
                                    'container_id'    => '',
                                    'menu_class'      => 'menu',
                                    'menu_id'         => '',
                                    'echo'            => true,
                                    'fallback_cb'     => 'wp_page_menu',
                                    'before'          => '',
                                    'after'           => '',
                                    'link_before'     => '',
                                    'link_after'      => '',
                                    'items_wrap'      => '%3$s',
                                    'depth'           => 0,
                                    'walker'          => ''
                                    ); wp_nav_menu( $defaultsss ); ?>

                                  <!--<li><a href="#">Noícias recentes</a></li>
                                  <li><a href="#">Envelhecer Bem</a></li>
                                  <li><a href="#">Jormnal Atividade</a></li> -->
                                </div>
                                <div class="col-md-8">
                                 <?php echo (isset($tbi[4]) ? $tbi[4] : ""); ?>
                               </div>
                             </div>


                           </ul>
                         </li>
                       </div>

                       <div id="buscatop" class=" tada" data-animation-type="tada" >
                        <i class="bot-busca"></i>
                        <form id="topbusca2" method="post" action="<?php echo site_url()?>/busca/">
                         <input type="text" id="toppesquisa" name="pesquisa" placeholder="Digite aqui" class="input-busca">
                         <input onclick="buscazero('toppesquisa','topbusca2')" type="button" class="btbusca" value="BUSCAR >">
                         <div id="clear"></div>
                       </form>


                     </div>


                    <!--<div id="assineagora" class=" fadeInRightBig" data-animation-type="fadeInRightBig" >
                        <?php itens_botao() ?>
                      </div>-->
                      <div id="ambiente_seguro">
                        <img src="<?php echo get_template_directory_uri (); ?>/images/ambiente_seguro.png" alt="TeleHelp" title="TeleHelp" />
                      </div>

                    </div>
                    <div id="travelo-signup" class="travelo-signup-box travelo-box modalfolha">
                      <div id="titulomodal">Cadastre-se</div>

                      <div class="login-social">
                        <a href="#" onclick="modalsface('loginBtncad','cad')" class="button login-facebook"><i class="soap-icon-facebook"></i>Acesse Com <strong>Facebook</strong></a>

                      </div>
                      <div class="seperator"><label>OU</label></div>
                      <div class="simple-signup">
                        <div class="text-center signup-email-section">
                          <a href="#" class="signup-email"><i class="soap-icon-letter"></i>Preencha os campos</a>
                        </div>
                      </div>
                      <div class="email-signup">
                        <form method="post" id="cadcentral-vendas" action="javascript:void(0)" >
                          <input type="hidden" name="pagina" value="cadrodape">
                          <input type="hidden" name="acao" value="form-site">
                          <input type="hidden" name="url" value="<?php echo site_url()?>">
                          <input type="hidden" name="login" id="cadtplogin" value="email">
                          <div class="form-group">
                           <label>Seu Nome:</label>
                           <input type="text" class="input-text full-width" id="cadnome" name="nome" placeholder="Digite seu Nome" required>
                         </div>
                         <div class="form-group">
                          <label>Seu E-mail:</label>
                          <input type="text" class="input-text full-width" id="cademail" name="email" placeholder="Digite seu E-mail" required>
                        </div>
                        <div class="form-group">
                          <label>CPF</label>
                          <input type="text" class="cpf input-text full-width" id="cadcpf" name="cpf" maxlength="9" placeholder="Digite seu CPF" required>
                        </div>
                        <div class="form-group">
                          <label>Seu Telefone:</label>
                          <input type="text" class="input-text full-width telefone" id="cadtelefone" name="telefone" maxlength="12" placeholder="( ) ____-____" required>
                        </div>
                        <div class="form-group">
                          <label>Sua Senha:</label>
                          <input type="password" class="input-text full-width" id="cadsenha" name="senha" placeholder="Seu Senha:">
                        </div>

                        <div class="form-group">
                         <label>Confirma  Senha:</label>
                         <input type="password" class="input-text full-width" id="cadsenhac"  name="confirmasenha" placeholder="Digite novamente sua senha">
                       </div>
                       <div class="form-group">
                        <div class="checkbox">

                          <input name="news" id="cadnews" type="checkbox"> Gostaria de receber novidades sobre a Telehelp.

                        </div>
                      </div>
                      <div class="form-group">

                      </div>
                      <div id="cadbotcentral">
                        <button type="button" onclick="send_ce(event,50,'cad')" class="full-width btn-medium">CADASTRAR ></button>
                      </div>
                    </form>
                  </div>


                </div>


              </header>

              <?php } ?>