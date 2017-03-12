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
            	More sozinho com independência e segurança
            </div>

            <div style="clear:both"></div>
        </div>
    </div>



  	<div id="corpopagemeio" class="atendimentos-reias">
   <?php the_content(); ?>
 <?php endif; ?>

<div id="menuleft">
 <?php include(TEMPLATEPATH .'/menu-blog.php');  ?>
</div>

<div id="contedorigth">
	<div id="terceirotitulo">
    	<h2 class="title-default"><?php the_field('titulo',$idpos_t) ?></h2>
    </div>

<div id="conteudomorarsozinho">


<div id="primeiralinhamorarsozinho">

	<div id="imgprimeiralinhamorarsozinho">
    <img src="<?php the_field('imagem_bloco_1',$idpos_t) ?>" alt="manual" title="manual" />

    </div>

    <div id="textoprimeiralinhamorarsozinho">
    <?php the_field('texto_bloco_1',$idpos_t) ?>
    </div>

<div id="clear"></div>
</div>


<div id="segundalinhamorarsozinho">
	<h2>
    <?php the_field('titulo_bloco_2',$idpos_t) ?>
    </h2>


<div class="row">
  <div class="col-md-6">
  	<img src="<?php the_field('imagem_2',$idpos_t) ?>" alt="tablet" title="tablet" />
    <i>
    	<?php the_field('texto_bloco_2',$idpos_t) ?>

        <a href="<?php the_field('link_download',$idpos_t) ?>" target="_blank">download</a>
    </i>
  </div>
  <div class="col-md-6">
  	<h2>Lojas para download do E-book:</h2>

    <?php if(get_field('link_1',$idpos_t)){ ?>
    <li><a href="<?php the_field('link_1',$idpos_t) ?>" target="_blank"><img src="<?php the_field('logo_1',$idpos_t) ?>" alt="amazon" alt="Download" />   </a></li>
    <?php } ?>

    <?php if(get_field('link_2',$idpos_t)){ ?>
    <li><a href="<?php the_field('link_2',$idpos_t) ?>" target="_blank"><img src="<?php the_field('logo_2',$idpos_t) ?>" alt="amazon" alt="Download" />   </a></li>
    <?php } ?>

    <?php if(get_field('link_3',$idpos_t)){ ?>
    <li><a href="<?php the_field('link_3',$idpos_t) ?>" target="_blank"><img src="<?php the_field('logo_3',$idpos_t) ?>" alt="amazon" alt="Download" />   </a></li>
    <?php } ?>

    <?php if(get_field('link_4',$idpos_t)){ ?>
    <li><a href="<?php the_field('link_4',$idpos_t) ?>" target="_blank"><img src="<?php the_field('logo_4',$idpos_t) ?>" alt="amazon" alt="Download" />   </a></li>
    <?php } ?>

    <?php if(get_field('link_5',$idpos_t)){ ?>
    <li><a href="<?php the_field('link_5',$idpos_t) ?>" target="_blank"><img src="<?php the_field('logo_5',$idpos_t) ?>" alt="amazon" alt="Download" />   </a></li>
    <?php } ?>

    <?php if(get_field('link_6',$idpos_t)){ ?>
    <li><a href="<?php the_field('link_6',$idpos_t) ?>" target="_blank"><img src="<?php the_field('logo_6',$idpos_t) ?>" alt="amazon" alt="Download" />   </a></li>
    <?php } ?>



  </div>
</div>

</div>



<div id="terceiralinhamorarsozinho">
<img src="<?php the_field('imagem_livro_impresso',$idpos_t) ?>" alt="livro-impresso" alt="Livro Impresso" />

<li>
	<h2><?php the_field('titulo_livro_impresso',$idpos_t) ?></h2>
    <?php the_field('texto_livro_impresso',$idpos_t) ?>
</li>

<div id="clear"></div>
</div>




</div>
<div id="vejanossosplanos">

<div class="row">
  <div class="col-md-6">

  </div>
  <div class="col-md-6">
  	<h2>Contrate agora o TeleHelp Aviso</h2>
   <a href="<?php echo site_url()?>/telehelpaviso">saiba mais <i class="glyphicon glyphicon-chevron-right"></i></a>

  </div>
</div>

</div>





<div id="clear"></div>
</div>





<div id="vejatabem">
	<h2>Veja também</h2>

<div class="row">


  <div class="col-md-6">

<li><img src="<?php echo get_template_directory_uri (); ?>/images/tb12.png" alt="Serviços" /><br />
Serviços</li>
    <li>

    Confira os serviços oferecidos pela TeleHelp para a sua segurança dentro e fora de casa.

    <a href="<?php echo site_url()?>/servicos/">saiba mais <i class="glyphicon glyphicon-chevron-right"></i></a>
    </li>

  </div>


  <div class="col-md-6">

    	<li><img src="<?php echo get_template_directory_uri (); ?>/images/tb11.png" alt="Como-Funciona" /><br />
Como Funciona</li>
    <li>

  Entenda melhor como funcionam os serviços de teleassistência da TeleHelp e veja como conseguir ajuda imediata ao simples toque de um botão.

    <a href="<?php echo site_url()?>/como-funciona/">saiba mais <i class="glyphicon glyphicon-chevron-right"></i></a>
    </li>

  </div>


</div>


</div>



<div id="clear"></div>



</div>

</div>



    <?php get_footer (); ?>
    <div id='sm-bounce' data-scope='email' style='display:none' ></div>