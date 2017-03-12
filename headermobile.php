











































































<!DOCTYPE html>
<!--[if IE 8]>          <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>          <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  <html> <!--<![endif]-->
<head>
<script>!function (a) { var b, c = "soclminer-jssdk", d = a.getElementsByTagName("script")[0]; a.getElementById(c) || (b = a.createElement("script"), b.src = "https://plugins.soclminer.com.br/v3/sdk/all.min.js", d.parentNode.insertBefore(b, d)) }(document), window.soclInit = function () { socl.start("587b7fc9-7d4e-456b-9684-1736252ca81e") };</script>
<!-- Hotjar Tracking Code for http://www.telehelp.com.br -->
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
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;















	wp_title( '|', true, 'right' );
	// Add the blog name.
	bloginfo( 'name' );
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
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="keywords" content="TeleHelp" />
    <meta name="description" content="A TeleHelp permite que o cliente solicite ajuda em casos de emergência ao simples toque de um botão. Confira nossos serviços de assistência 24 horas!
">
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


<div id="topomobile">
<li>
	<a id="clicaabre"  onclick="abrimenumobile()">
    <i class="fa fa-bars"></i> menu
    </a>
    
    	<a id="clicafecha"  onclick="fechamenumobile()">
    <i class="fa fa-times"></i> menu
    </a>
</li>

<li><a href="<?php echo site_url()?>"><img src="<?php echo get_template_directory_uri (); ?>/images/logo-tele.png" alt="TeleHelp" title="TeleHelp"></a></li>


<li>








</li>
<div id="clear"></div>




















</div>
<div style="position:relative">
<div id="menumobile">

	<div id="cidadesmobile">
    <div id="ondevoceesta">
        <li>Você está em:</li>
        <li><strong>São Paulo</strong>
        <div class="ss" id="escolhacidademobile">

		             
                     
                     <ul>
                     <span>Estou em outra localização</span>
                     <form method="" action="">

                     <i>
                     	<label>Estado:</label>
						<input type="text" name="" value="">



















                     </i>
                     
                     <i>
                     	<label>Cidade:</label>
						<input type="text" name="" value="">



                     </i>
                     
                     
                     <i>
                     <input type="submit" class="botcidade" value="TROCAR CIDADE >">
                     </i>
                     </form>
                     </ul>
                                              





        </div>
        
        </li>
        </div>






























































    </div>
    
<div id="buscamobile">
<div id="buscatop" class=" tada" data-animation-type="tada" >
<form method="post" action="<?php echo site_url()?>/index.php/busca/">
<input type="text" name="pesquisa" placeholder="Digite aqui" class="input-busca">
<input type="submit" class="btbusca" value="BUSCAR >">
<div id="clear"></div>
</form>
</div>
</div>
    
<div class="toggle-container box" id="accordion2">
                            














































                            
                            
                                <div class="panel style2">
                                    <h4 class="panel-title">
                                        <a class="collapsed" href="#acc1" data-toggle="collapse" data-parent="#accordion2">Como funciona</a>
                                    </h4>
                                    <div class="panel-collapse collapse" id="acc1">
                                        <div class="panel-content">
                                            <?php







$defaultss = array(
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
); wp_nav_menu( $defaultss ); ?>
                                        </div><!-- end content -->
                                    </div>





















                                </div>
                                
                                
                                
                                
                                <div class="panel style2">
                                    <h4 class="panel-title">
                                        <a class="collapsed" href="#acc2" data-toggle="collapse" data-parent="#accordion2">Serviço</a>
                                    </h4>
                                    <div class="panel-collapse collapse" id="acc2">
                                        <div class="panel-content">
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
                                        </div><!-- end content -->
                                    </div>
                                </div>
                                
                                
                                
                                
                                <div class="panel style2">
                                    <h4 class="panel-title">
                                        <a class="collapsed" href="#acc3" data-toggle="collapse" data-parent="#accordion2">Sobre nós</a>
                                    </h4>
                                    <div class="panel-collapse collapse" id="acc3">
                                        <div class="panel-content">






















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
                                        </div><!-- end content -->
                                    </div>
                                </div>
                                
                                
                                
                                <div class="panel style2">
                                    <h4 class="panel-title">
                                        <a class="collapsed" href="#acc4" data-toggle="collapse" data-parent="#accordion2">Blog Atividade</a>
                                    </h4>
                                    <div class="panel-collapse collapse" id="acc4">
                                        <div class="panel-content">






















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
                                        </div><!-- end content -->
                                    </div>
                                </div>
                                
                                
                                
                             </div>
    
   

<div id="logimgeralmobile">
	<div id="loginmobile" onclick="abriloginmobi()">
    <i class="fa fa-smile-o"></i><strong>Área do Cliente</strong>
    </div>
    
    <ul id="ulloginmobile">
                
                <div id="logintopo">
                <div class="login-social">
                    <a href="#" class="button login-facebook"><i class="soap-icon-facebook"></i>Login Com <strong>Facebook</strong></a>               </div>
                    
                <form>
                    <div class="form-group">
                    <label>Usuário:</label>
                        <input type="text" class="input-text full-width" placeholder="E-mail" required>
                    </div>
                    <div class="form-group">
                    <label>Senha:</label>
                        <input type="password" class="input-text full-width" placeholder="Senha" required>













                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="full-width btn-medium">ENTRAR ></button>









                    </div>
                    
                    <div id="linkslogin">
                    <a href="#" class="btn btn-info btn-lg" data-toggle="modal" data-target="#Modal-Senha">Esqueci minha senha</a>
                
                <p><a href="#travelo-signup" class="goto-signup soap-popupbox">Cadastre-se</a></p>



                    </div>
                   <div id="clear"></div>
                </form>
                    <div id="clear"></div>
                </div>
                
             </ul>
             <div id="clear"></div>
    
    <div id="telefonelogin">
    
   <i class="fa fa-phone"></i>  Ligue para nós: 0800 014 2001
    
    </div>
    
</div>  
   <div id="clear"></div> 
</div>
</div>




    <div id="page-wrapper">
        <header id="header" class="navbar-static-top">
            
            
            <div class="main-header">
                
             




                

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
                <div id="sucessocadastro"></div>
                    <form method="post" action="javascript:func()" enctype="multipart/form-data" id="formcadastrousu">





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