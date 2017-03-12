<?php
  $idpos_t = get_the_ID();
  get_header (); ?>


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
echo 'Página Inicial';
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
}?>


<?php if (have_posts()): the_post(); ?>
<?php the_breadcrumb(); ?>

            </div>
            <div id="titulodapagina">

           <h1> <?php the_title(); ?></h1>
            </div>

            </div>

            <div id="subtitulopgaina">

            </div>

            <div style="clear:both"></div>
        </div>
    </div>

<div id="topoblog">
	<div id="topoblogmeio">
    	<li>
        	<h2>blog atividade</h2>
            Saúde, bem-estar,<br />
			variedades e informação.
        </li>
        <li>
        <img src="<?php echo get_template_directory_uri (); ?>/images/banner-blog.jpg" alt="banner-blog" title="Banner Blog" />
        </li>
    </div>
    <div id="clear"></div>
</div>



  	<div id="corpopagemeio" class="atendimentos-reias">


   <?php the_content(); ?>
 <?php endif; ?>

<div id="menuleft">
 <?php include(TEMPLATEPATH .'/menu-blog.php');  ?>
</div>

<div id="contedorigth">
	<div id="terceirotitulo">
    	<h2 class="title-default">Veja as últimas notícias</h2>
    </div>

<div id="conteudoblogeatividades">


<div id="primeiralinhablogeatividades">


<?php

$lim = 0;

$wp_query = new WP_Query();
query_posts( array( 'post_type' => 'post', 'showposts' => "3" ));
if(have_posts()):
while ($wp_query -> have_posts()) : $wp_query -> the_post();

$lim++;

?>

<li>
	<div id="imgultimopost">
	<?php if($lim==1){
		if ( has_post_thumbnail() ) {
			the_post_thumbnail("quadropostg");
		} else {
		}
		}
		if($lim>1){
		if ( has_post_thumbnail() ) {
			the_post_thumbnail("quadropostp");
		} else {
		}
		} ?>
    </div>
    <div id="textoultimopost">
    	<span><?php the_time('d/m/Y')?></span>
        <h2><a href="<?php the_permalink() ?>" class="lertudo" title="<?php the_title(); ?> " rel="bookmark"><?php the_title()?></a></h2>
        <?php
		if($lim==1){
			echo substr(strip_tags($post->post_content), 0, 250) . (strlen(strip_tags($post->post_content))>250 ? "..." : "");
		}
		if($lim>1){
			echo substr(strip_tags($post->post_content), 0, 80) . (strlen(strip_tags($post->post_content))>80 ? "..." : "");
		}
			?>
    </div>
    <div id="clear"></div>
</li>


<?php
    endwhile;
    endif;
 ?>


<div id="clear"></div>
<div id="botaoblog">
<a href="<?php echo site_url()?>/noticias-recentes/">veja mais notícias <i class="glyphicon glyphicon-chevron-right"></i></a>
</div>

</div>




<div id="segundalinhablogeatividades">

<div class="row">
  <div class="col-md-6">
  	<h2>Envelhecer Bem</h2>
    <img src="<?php echo get_template_directory_uri (); ?>/images/envelhecer-bem.jpg" alt="envelhecer-bem" title="Envelhecer Bem" />
    <div>
    Saber escolher os melhores caminhos para um envelhecimento saudável com mais autonomia e independência só depende de você. Comece por conferir o Guia Morar Sozinho e nossas dicas para prevenção de Quedas.

    <a href="<?php echo site_url()?>/envelhecer-bem/">Saiba mais <i class="glyphicon glyphicon-chevron-right"></i></a>
    </div>
  </div>


  <div class="col-md-6">

    	<h2>Jornal Atividade</h2>
    <img src="<?php echo get_template_directory_uri (); ?>/images/jornal-atividades.jpg" alt="jornal-atividades" title="Jornal Atividade" />
    <div>
    Bimestralmente, a TeleHelp envia a casa de nossos clientes o Jornal Atividade, com matérias sobre saúde, bem-estar, cultura, variedades, dicas gastronômicas, receitas, artes e muitos mais. Acesse nosso acervo com as últimas edições e faça já o download grátis.

    <a href="<?php echo site_url()?>/jornal-atividade/">Saiba mais <i class="glyphicon glyphicon-chevron-right"></i></a>
    </div>

  </div>



</div>


</div>


</div>



<div id="vejanossosplanos">

<div class="row">
  <div class="col-md-6">

  </div>
  <div class="col-md-6">
  	<h2>Contrate agora o TeleHelp Aviso</h2>
   <a href="<?php echo site_url()?>/telehelpaviso/">saiba mais <i class="glyphicon glyphicon-chevron-right"></i></a>

  </div>
</div>

</div>





<div id="clear"></div>
</div>





<div id="vejatabem">
	<h2>Veja também</h2>

<div class="row">


  <div class="col-md-6">

    	<li><img src="<?php echo get_template_directory_uri (); ?>/images/tb11.png" alt="como-funciona" title="Como Funciona" /><br />
Como Funciona</li>
    <li>

Entenda melhor como funcionam os serviços de teleassistência da TeleHelp e veja como conseguir ajuda imediata ao simples toque de um botão.

    <a href="<?php echo site_url()?>/como-funciona/">saiba mais <i class="glyphicon glyphicon-chevron-right"></i></a>
    </li>
  </div>


  <div class="col-md-6">

    	<li><img src="<?php echo get_template_directory_uri (); ?>/images/tb12.png" alt="servicos" title="Serviços" /><br />
Serviços</li>
    <li>

  Confira os serviços oferecidos pela TeleHelp para a sua segurança dentro e fora de casa.

    <a href="<?php echo site_url()?>/servicos/">saiba mais <i class="glyphicon glyphicon-chevron-right"></i></a>
    </li>

  </div>


</div>


</div>



<div id="clear"></div>



</div>

</div>



    <?php get_footer (); ?>
    <div id='sm-bounce' data-scope='email' style='display:none' ></div>