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
            	À sua disposição 24 horas por dia
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

<div id="contedorigth">
	<div id="terceirotitulo">
    	<h2 class="title-default"><?php the_field('titulo_acima_do_video',$idpos_t) ?></h2>
    </div>

<div id="conteudocetraldeatendimento">

<div id="primeiralinhacentraldeatendimento">
            <?php
			global $detect;

			if(get_field('link_do_video',$idpos_t)<>""){?>
            	<iframe width="100%" height="<?php echo ($detect->ismobile() ? "168" : "482");?>" src="<?php echo str_replace("watch?v=","embed/",get_field('link_do_video',$idpos_t)); ?>?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
            <?php } ?>
            <?php if(get_field('imagem_para_o_espaço_do_video',$idpos_t)<>""){
                echo '<img src="'.get_field('imagem_para_o_espaço_do_video',$idpos_t).'" style="width:100%;height: '.($detect->ismobile() ? "auto" : "482px").';">';
             } ?>
<div id="tesxtovideo"><?php the_field('texto_abaixo_do_video',$idpos_t) ?></div>

</div>



<div id="segundalinhacentraldeatendimento">
<h2><?php the_field('titulo_bloco_2',$idpos_t) ?></h2>

<ul>
    <?php if(get_field('titulo_item_1',$idpos_t)){ ?>
	<div><li>
    	<h2><?php the_field('titulo_item_1',$idpos_t) ?></h2>
        <?php the_field('texto_item_1',$idpos_t) ?>
    </li></div>
    <?php } ?>

    <?php if(get_field('titulo_item_2',$idpos_t)){ ?>
	<div><li>
    	<h2><?php the_field('titulo_item_2',$idpos_t) ?></h2>
        <?php the_field('texto_item_2',$idpos_t) ?>
    </li></div>
    <?php } ?>

    <?php if(get_field('titulo_item_3',$idpos_t)){ ?>
	<div><li>
    	<h2><?php the_field('titulo_item_3',$idpos_t) ?></h2>
        <?php the_field('texto_item_3',$idpos_t) ?>
    </li></div>
    <?php } ?>

    <?php if(get_field('titulo_item_4',$idpos_t)){ ?>
	<div><li>
    	<h2><?php the_field('titulo_item_4',$idpos_t) ?></h2>
        <?php the_field('texto_item_4',$idpos_t) ?>
    </li></div>
    <?php } ?>

    <?php if(get_field('titulo_item_5',$idpos_t)){ ?>
	<div><li>
    	<h2><?php the_field('titulo_item_5',$idpos_t) ?></h2>
        <?php the_field('texto_item_5',$idpos_t) ?>
    </li></div>
    <?php } ?>

    <?php if(get_field('titulo_item_6',$idpos_t)){ ?>
	<div><li>
    	<h2><?php the_field('titulo_item_6',$idpos_t) ?></h2>
        <?php the_field('texto_item_6',$idpos_t) ?>
    </li></div>
    <?php } ?>

    <?php if(get_field('titulo_item_7',$idpos_t)){ ?>
	<div><li>
    	<h2><?php the_field('titulo_item_7',$idpos_t) ?></h2>
        <?php the_field('texto_item_7',$idpos_t) ?>
    </li></div>
    <?php } ?>

    <?php if(get_field('titulo_item_8',$idpos_t)){ ?>
	<div><li>
    	<h2><?php the_field('titulo_item_8',$idpos_t) ?></h2>
        <?php the_field('texto_item_8',$idpos_t) ?>
    </li></div>
    <?php } ?>




</ul>
<div id="clear"></div>
</div>
<div id="clear"></div>





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

    	<li><img src="<?php echo get_template_directory_uri (); ?>/images/tb4.png" alt="vantagens" /><br />
Vantagens</li>
    <li>

   Muitos são os benefícios que a TeleHelp traz para quem utiliza serviços de teleassistência. Uma delas é independência. Confira as outras vantagens.

    <a href="<?php echo site_url()?>/como-funciona/vantagens/">saiba mais <i class="glyphicon glyphicon-chevron-right"></i></a>
    </li>

  </div>


  <div class="col-md-6">

    	<li><img src="<?php echo get_template_directory_uri (); ?>/images/tb5.png" alt="perguntas-frequestes" /><br />
Perguntas Frequentes</li>
    <li>

  Consulte a lista de perguntas frequentes para esclarecer suas dúvidas. Não encontrou respostas? Ligue para falar com um de nossos consultores.

    <a href="<?php echo site_url()?>/como-funciona/perguntas-frequentes/">saiba mais <i class="glyphicon glyphicon-chevron-right"></i></a>
    </li>

  </div>


</div>


</div>



<div id="clear"></div>



</div>

</div>



    <?php get_footer (); ?>
    <div id='sm-bounce' data-scope='email' style='display:none' ></div>