<?php
/*
* Template Name: Área do Cliente
*/

/*if(!isset($_SESSION['logado']) && $_SESSION['logado'] !=  true) {
  wp_redirect(home_url());
  die("Acesso não autorizado.");
}*/

$idpos_t = get_the_ID();
get_header (); ?>

  <style> 
    #menumaster { visibility: hidden; } 
    .select2-container-multi { padding: 0; }
    ul.select2-choices { border: none; min-height: inherit; background: transparent; }
  </style>
  <div id="corpopage">

	<div id="titulopagegeral">
  	<div id="titulopagegeralmeio">
    	<div style="float:left">
        <div id="caminhosdemigalhas">

          <?php
            function the_breadcrumb() { 
              if (!is_home()) { 
                echo '<a href="'. get_option('home'). '">';
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
          
            if (have_posts()): the_post(); 
            the_breadcrumb(); 
          ?>

        </div>
        
        <div id="titulodapagina">
          <h1>Área do Usuário</h1>
        </div>
      </div>

      <div id="subtitulopgaina">
      	<strong>Olá, <?php echo $_SESSION['Nome'] ?>. Seja bem vindo!</strong>
        <a href="<?php echo home_url(); ?>" class="btn-sair">desconectar conta</a>
      </div>
      <div style="clear:both"></div>
    </div>
  </div>

	<div id="corpopagemeio" class="atendimentos-reias">   
    <div id="menuleft">
      <?php include(TEMPLATEPATH .'/menu-areacliente.php');  ?>
    </div>

    <div id="contedorigth">

      <div class="area-cliente">
        <?php the_content(); ?>
      </div>

      <div id="vejanossosplanos" style="margin-bottom: 65px;">
        <div class="row">
          <div class="col-md-6"></div>
          <div class="col-md-6">
            <h2>Contrate agora o TeleHelp Aviso</h2>
            <a href="<?php echo site_url()?>/telehelpaviso">saiba mais <i class="glyphicon glyphicon-chevron-right"></i></a>
          </div>
        </div>
      </div>
      <div id="clear"></div>
    </div>
  </div>
      
  <?php endif; ?>

<?php get_footer (); ?>

<div id='sm-bounce' data-scope='email' style='display:none' ></div>