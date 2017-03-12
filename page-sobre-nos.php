<?php
  $idpos_t = get_the_ID();
  get_header (); ?>

  <style>
  #header{
	  box-shadow:1px 2px 10px -4px #ABAAAA;}
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
            	Conheça a TeleHelp.
            </div>

            <div style="clear:both"></div>
        </div>
    </div>



<div id="corpopagemeio" class="atendimentos-reias">
   <?php the_content(); ?>
 <?php endif; ?>

<div id="menuleft">
 <?php include(TEMPLATEPATH .'/menu-sobre-nos.php');  ?>
</div>

<div id="contedorigth">
	<div id="terceirotitulo">
    	<h2 class="title-default"><?php the_field('titulo_bloco',$idpos_t) ?></h2>
    </div>

<div id="conteudovantagens">


<div id="primeiralinhasobrenos">

            <?php
			global $detect;

			if(get_field('video',$idpos_t)<>""){?>
            	<iframe width="100%" height="<?php echo ($detect->ismobile() ? "168" : "482");?>" src="<?php echo str_replace("watch?v=","embed/",get_field('video',$idpos_t)); ?>?rel=0&amp;controls=1&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
            <?php } ?>
            <?php if(get_field('imagem_para_local_do_video',$idpos_t)<>""){
                echo '<img src="'.get_field('imagem_para_local_do_video',$idpos_t).'" style="width:100%;height: '. ($detect->ismobile() ? "auto" : "482px").';">';
             } ?>

<div id="textoprimeiralinhasobrenos">

<?php
    $li_sta = explode("<br />",get_field('texto',$idpos_t));
    foreach($li_sta as $lt){
        if(rtrim($lt)<>""){
            echo '
            <p>
            '.$lt.'
            </p>';

        }
    }
    ?>
</div>

</div>


<div id="terceiralinhasobrenos">



<div id="vejanossosplanos">

<div class="row">
  <div class="col-md-6">

  </div>
  <div class="col-md-6">
  	<h2>o que é
teleassistência?</h2>
   Entenda melhor como funciona a teleassistência e como esse serviço pode beneficiar sua saúde e seu bem-estar.

   <a href="<?php echo site_url()?>/o-que-e-teleassistencia">saiba mais <i class="glyphicon glyphicon-chevron-right"></i></a>

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
   <a href="<?php echo site_url()?>/telehelpaviso">saiba mais <i class="glyphicon glyphicon-chevron-right"></i></a>

  </div>

</div>
</div>




</div>
<div id="clear"></div>
</div>





<div id="vejatabem">
	<h2>Veja também</h2>

<div class="row">


<div class="col-md-6">

    	<li><img src="<?php echo get_template_directory_uri (); ?>/images/tb9.png" alt="blog-atividades"><br>
Blog Atividade</li>
    <li>

   Notícias, matérias, curiosidades, dicas e outras informações voltadas para a terceira idade.

    <a href="<?php echo site_url()?>/blog-atividade">saiba mais <i class="glyphicon glyphicon-chevron-right"></i></a>
    </li>

  </div>


  <div class="col-md-6">

    	<li><img src="<?php echo get_template_directory_uri (); ?>/images/tb11.png" alt="como-funciona" /><br />
Como Funciona</li>
    <li>

Entenda melhor como funciona o serviço de teleassistência da TeleHelp e veja como conseguir ajuda imediata ao simples toque de um botão.

    <a href="<?php echo site_url()?>/index.php/como-funciona/">saiba mais <i class="glyphicon glyphicon-chevron-right"></i></a>
    </li>

  </div>


</div>


</div>



<div id="clear"></div>



</div>

</div>



    <?php get_footer (); ?>
    <div id='sm-bounce' data-scope='email' style='display:none' ></div>