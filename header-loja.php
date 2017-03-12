<?php

require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect;

if(!isset($_SESSION["C_TLHP"]) or !isset($_SESSION["E_TLHP"])) {

$ep = "São Paulo";
$cp = "São Paulo";

try{
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => "http://api.db-ip.com/addrinfo?addr=".$_SERVER["REMOTE_ADDR"]."&api_key=9ed9baf113898a827b2a223bac91b94c40f3f241" 
));
$resp = curl_exec($curl);
curl_close($curl);
$resp = json_decode($resp);


if(isset($resp->stateprov) and isset($resp->city)){

    $_SESSION["C_TLHP"] = $resp->city;
    $_SESSION["E_TLHP"] = $resp->stateprov;

}else{
    
    $_SESSION["C_TLHP"] = $cp;
    $_SESSION["E_TLHP"] = $ep;
    
}

//object(stdClass)#7470 (4) { ["address"]=> string(14) "186.205.17.203" ["country"]=> string(2) "BR" ["stateprov"]=> string(14) "Rio De Janeiro" ["city"]=> string(14) "Rio de Janeiro" }

} catch(Expection $e){
    
$_SESSION["C_TLHP"] = $cp;
$_SESSION["E_TLHP"] = $ep;        
    
}

} 
?><!DOCTYPE html>
<!--[if IE 8]>          <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>          <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  <html> <!--<![endif]-->
<head>
<script>!function (a) { var b, c = "soclminer-jssdk", d = a.getElementsByTagName("script")[0]; a.getElementById(c) || (b = a.createElement("script"), b.src = "https://plugins.soclminer.com.br/v3/sdk/all.min.js", d.parentNode.insertBefore(b, d)) }(document), window.soclInit = function () { socl.start("587b7fc9-7d4e-456b-9684-1736252ca81e") };</script>
    <!-- Page Title -->
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;
	wp_title( '|', true, 'right' );
	// Add the blog name.
	//bloginfo( 'name' );
	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'dzonia' ), max( $paged, $page ) );
?></title>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri (); ?>/images/favicon.png" />
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="keywords" content="TeleHelp" />
    <meta name="description" content="A TeleHelp permite que o cliente solicite ajuda em casos de emergência ao simples toque de um botão. Confira nossos serviços de assistência 24 horas!
">
    <meta name="author" content="Empresa">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Theme Styles -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri (); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri (); ?>/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri (); ?>/css/animate.min.css">
    
    <!-- Current Page Styles -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri (); ?>/components/revolution_slider/css/settings.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri (); ?>/components/revolution_slider/css/style.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri (); ?>/components/jquery.bxslider/jquery.bxslider.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri (); ?>/components/flexslider/flexslider.css" media="screen" />
    
    <!-- Main Style -->
    <link id="main-style" rel="stylesheet" href="<?php echo get_template_directory_uri (); ?>/css/style.css">
    
    <!-- Custom Styles -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri (); ?>/css/custom.css">

    <!-- Updated Styles -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri (); ?>/css/updates.css">

    <!-- Updated Styles -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri (); ?>/css/updates.css">
    
    <!-- Responsive Styles -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri (); ?>/css/responsive.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri (); ?>/style.css" type="text/css">
    
    <link href='https://fonts.googleapis.com/css?family=Signika:400,700' rel='stylesheet' type='text/css'>
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
    	<div id="ondevoceesta" >
        <li>Você está em:</li>
        <li><strong>São Paulo</strong>
        <div class="ss">
		             
                     
                     <ul>
                     <span>Estou em outra localização</span>
                     <form method="" action="">
                     <i>
                     	<label>Estado:</label>
						<select value="s_e" id="selectestado" class="selectestado" onclick="busca_newcity(this.value)">
                            <?php 
                            
                            $i = get_terms( 'cat_cidade', 'orderby=name&hide_empty=0' );
                            foreach($i as $i2){
                            echo'
                            <option value="'.$i2->term_id.'">'.$i2->name.'</option>';
                            } 
                            
                            ?>
                        </select>
                     </i>
                     
                     <i>
                     	<label>Cidade:</label>
						<select value="s_e" id="selectcidade" onchange="novacity(this.value)" class="selectestado">
                        </select>
                     </i>
                     
                     
                     <i>
                     <input type="submit" class="botcidade" value="TROCAR CIDADE >">
                     </i>
                     </form>
                     </ul>
                                              
        </div>
        
        </li>
        </div>
        
        <div id="telefoneeareadocliente" class=" bounce" >
       
        	<li><i class="fa fa-phone"></i> Ligue para nós: <strong>0800 014 2001</strong></li>
            <li id="logindocliente"><i class="fa fa-smile-o"></i><strong>Área do Cliente</strong>
            	<i class="soap-icon-chevron-down"></i>
             
             	
                
                
                <ul>
                
                <div id="logintopo">


                <div class="login-social">
                    <a href="#" onclick="modalsface('loginBtntop','top')" class="button login-facebook"><i class="soap-icon-facebook"></i>Login Com <strong>Facebook</strong></a>               </div>
                    


                <form method="post" id="topcentral-vendas" action="javascript:void(0)" >
                    <input type="hidden" name="pagina" value="topform">
                    <input type="hidden" name="acao" value="form-site">
                    <input type="hidden" name="url" value="<?php echo site_url()?>">
                    <input type="hidden" name="login" id="toptplogin" value="email">

                    <div class="form-group">
                        <input type="text" name="email" id="topemail" class="input-text full-width" placeholder="E-mail" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="senha" id="topsenha" class="input-text full-width" placeholder="Senha" required>
                    </div>
                    
                    <div id="topbotcentral" class="form-group">
                        <button type="button" onclick="send_ce(event,10,'top')" class="full-width btn-medium">ENTRAR ></button>
                    </div>
                    
                    <div id="linkslogin">
                    <a href="#" class="btn btn-info btn-lg" data-toggle="modal" data-target="#Modal-Senha">Esqueci minha senha</a>
                
                <p><a href="#travelo-signup" class="goto-signup soap-popupbox">Cadastre-se</a></p>






                    </div>
                   
                </form>
                    
                </div>
                
             </ul>
            </li>
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



//var_dump($post); exit;

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
                         <form method="post" action="<?php echo site_url()?>/busca/">
                         <input type="text" name="pesquisa" placeholder="Digite aqui" class="input-busca">
                         <input type="submit" class="btbusca" value="BUSCAR >">
                         <div id="clear"></div>
                         </form>
                         
                        
                         
                    </div>
                    
                    
                    <div id="assineagora" class=" fadeInRightBig" data-animation-type="fadeInRightBig" >
                    	<?php include(TEMPLATEPATH .'/mini-carrinho.php');  ?>
                    </div>
                
            </div>
            <div id="travelo-signup" class="travelo-signup-box travelo-box modalfolha">
            <div id="titulomodal">Cadastre-se</div>
            
                <div class="login-social">
                    <a href="#" class="button login-facebook"><i class="soap-icon-facebook"></i>Acesse Com <strong>Facebook</strong></a>
                    
                </div>
                <div class="seperator"><label>OU</label></div>
                <div class="simple-signup">
                    <div class="text-center signup-email-section">
                        <a href="#" class="signup-email"><i class="soap-icon-letter"></i>Preencha os campos</a>
                    </div>
                </div>
                <div class="email-signup">
                    <form>
                        <div class="form-group">
                        	<label>Seu Nome:</label>
                            <input type="text" class="input-text full-width" name="nome" placeholder="Digite seu Nome" required>
                        </div>
                        <div class="form-group">
                        <label>Seu E-mail:</label>
                            <input type="text" class="input-text full-width" name="email" placeholder="Digite seu E-mail" required>
                        </div>
                        <div class="form-group">
                        <label>CPF</label>
                            <input type="text" class="input-text full-width" name="cpf" maxlength="9" OnKeyPress="formatar('#####-###', this)" placeholder="Digite seu CPF" required>
                        </div>
                        <div class="form-group">
                        <label>Seu Telefone:</label>
                            <input type="text" class="input-text full-width" maxlength="12" OnKeyPress="formatar('##-####-####', this)"  placeholder="( ) ____-____" required>
                        </div>
                        <div class="form-group">
                        <label>Sua Senha:</label>
                            <input type="password" class="input-text full-width" name="senha" placeholder="Seu Senha:">
                        </div>
                        
                        <div class="form-group">
                         <label>Confirma  Senha:</label>
                            <input type="password" class="input-text full-width"  name="confirmasenha" placeholder="Digite novamente sua senha">
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                
                                    <input type="checkbox"> Gostaria de receber novidades sobre a Telehelp.
                                
                            </div>
                        </div>
                        <div class="form-group">
                            
                        </div>
                        <button type="submit" class="full-width btn-medium">CADASTRAR ></button>
                    </form>
                </div>
                
               
            </div>
            
            
        </header>
        