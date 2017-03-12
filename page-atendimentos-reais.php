<?php
  $idpos_t = get_the_ID();
  get_header (); ?>

  <style>
  #header{
	  box-shadow:1px 2px 10px -4px #ABAAAA;}
  </style>

  <div id="corpopage"  class="animated fadeIn" data-animation-type="fadeIn" data-animation-duration="1" style="animation-duration: 1s; visibility: visible;">

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
            	Ficou curioso para saber como acontece nossos atendimentos?
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
    	<h2 class="title-default">Ouça alguns exemplos, selecionando um tipo de situação de emergência abaixo: </h2>
    </div>

<div id="conteudostabs">

                            <div class="tab-container style1">
                                <ul class="tabs full-width" id="bototestabatendmento">
                                    <li class="active"><a href="#t1" data-toggle="tab">Dentro de Casa</a></li>
                                    <li class=""><a href="#t2" data-toggle="tab">Fora de Casa</a></li>
                                    <!--li class=""><a href="#t3" data-toggle="tab">Detector de Fogo e Fumaça</a></li>
                                    <li class=""><a href="#t4" data-toggle="tab">TeleHelp Celular</a></li>
                                    <li class=""><a href="#t5" data-toggle="tab">TeleHelp <br />ID</a></li-->
                                </ul>

                                <div class="tab-content">

<div class="tab-pane fade active in corpogeraltab" id="t1">
<div id="d_t1">
<ul>
<?php
$loop = new WP_Query( array(
'post_type' => 'atendimentoreal',
'post_per_page' => 1,
'paged' => (( get_query_var('paged') ) ? get_query_var('paged') : 1),
'tax_query' => array(
array(
'taxonomy' => 'cat_atendimentoreal',
'field'    => 'slug',
'terms'    => 'col-1',
),
),
) );
if ( $loop->have_posts() ) :
while ( $loop->have_posts() ) : $loop->the_post();
?>

<li  data-animation-type="bounce" data-animation-duration="1" data-animation-delay="0.5">
<h2><i class="fa fa-volume-up"></i> <?php the_title(); ?></h2>
<div class="atendimentosreais_class" id="resumoatendimnto">
<?php the_field('descrição',$post->ID) ?>
</div>
<div id="campoplay">
<audio src="<?php the_field('audio',$post->ID) ?>" controls loop preload="preload" title="<?php the_title(); ?>"></audio>
</div>
</li>
<?php
    endwhile;
    endif;
 ?>
 </ul>
</div>
<?php if($loop->max_num_pages>1){ ?>
<div id="paginacao" class="page-selection-tab1"></div>
    <script>
        // init bootpag
        jQuery(document).ready(function(){
        jQuery('.page-selection-tab1').bootpag({
            total: <?php echo (isset($loop->max_num_pages) ? $loop->max_num_pages : 0)?>,
            next: 'PRÓXIMA <i class="glyphicon glyphicon-chevron-right"></i>',
            prev: '<i class="glyphicon glyphicon-chevron-left"></i> VOLTAR',
            maxVisible: 3,
            prevClass: "prev",
            nextClass: "next"
        }).on("page", function(event, /* page number here */ num){
            jQuery('#d_t1').css('opacity','0.5');
	           jQuery.ajax
    			({
        		type: "POST",
        		url: urlplug + "telehelp_ajax.php",
        		data: {acao: "folheia", tipo: "col-1", pagina: num },
				dataType: "json",
				success: function(msg)
					{
						if(msg.status){
						  jQuery('#d_t1').html(msg.html);
                          jQuery('#d_t1').css('opacity','1');
						}
					}
			});
            });
        });
    </script>
    <?php } ?>
</div>

<div class="tab-pane fade corpogeraltab" id="t2">
<div id="d_t2">
<?php
$loop = new WP_Query( array(
'post_type' => 'atendimentoreal',
'post_per_page' => 4,
'paged' => (( get_query_var('paged') ) ? get_query_var('paged') : 1),
'tax_query' => array(
array(
'taxonomy' => 'cat_atendimentoreal',
'field'    => 'slug',
'terms'    => 'col-2',
),
),
) );

if ( $loop->have_posts() ) :
while ( $loop->have_posts() ) : $loop->the_post();
?>

<li  data-animation-type="bounce" data-animation-duration="1" data-animation-delay="0.5">
<h2><i class="fa fa-volume-up"></i> <?php the_title(); ?></h2>
<div class="atendimentosreais_class" id="resumoatendimnto">
<?php the_field('descrição',$post->ID) ?>
</div>
<div id="campoplay">
<audio id="aud_<?php echo $post->ID?>"  src="<?php the_field('audio',$post->ID) ?>" controls loop preload="preload" title="<?php the_title(); ?>"></audio>
</div>
</li>
<?php
    endwhile;
    endif;
 ?>

</div>
<?php if($loop->max_num_pages>1){ ?>
<div id="paginacao" class="page-selection-tab2"></div>
    <script>
        // init bootpag
        jQuery(document).ready(function(){
        jQuery('.page-selection-tab2').bootpag({
            total: <?php echo (isset($loop->max_num_pages) ? $loop->max_num_pages : 0)?>,
            next: 'PRÓXIMA <i class="glyphicon glyphicon-chevron-right"></i>',
            prev: '<i class="glyphicon glyphicon-chevron-left"></i> VOLTAR',
            maxVisible: 3,
            prevClass: "prev",
            nextClass: "next"
        }).on("page", function(event, /* page number here */ num){
            jQuery('#d_t2').css('opacity','0.5');
	           jQuery.ajax
    			({
        		type: "POST",
        		url: urlplug + "telehelp_ajax.php",
        		data: {acao: "folheia", tipo: "col-2", pagina: num },
				dataType: "json",
				success: function(msg)
					{
						if(msg.status){
						  jQuery('#d_t2').html(msg.html);
                          jQuery('#d_t2').css('opacity','1');
						}
					}
			});
            });
        });
    </script>
    <?php } ?>
</div>

<div class="tab-pane fade corpogeraltab" id="t3">
<div id="d_t3">
<?php
$loop = new WP_Query( array(
'post_type' => 'atendimentoreal',
'post_per_page' => 1,
'paged' => (( get_query_var('paged') ) ? get_query_var('paged') : 1),
'tax_query' => array(
array(
'taxonomy' => 'cat_atendimentoreal',
'field'    => 'slug',
'terms'    => 'col-3',
),
),
) );
if ( $loop->have_posts() ) :
while ( $loop->have_posts() ) : $loop->the_post();
?>

<li  data-animation-type="bounce" data-animation-duration="1" data-animation-delay="0.5">
<h2><i class="fa fa-volume-up"></i> <?php the_title(); ?></h2>
<div class="atendimentosreais_class" id="resumoatendimnto">
<?php the_field('descrição',$post->ID) ?>
</div>
<div id="campoplay">
<audio id="aud_<?php echo $post->ID?>"  src="<?php the_field('audio',$post->ID) ?>" controls loop preload="preload" title="<?php the_title(); ?>"></audio>
</div>
</li>
<?php
    endwhile;
    endif;
 ?>
</div>
<?php if($loop->max_num_pages>1){ ?>
<div id="paginacao" class="page-selection-tab3"></div>
    <script>
        // init bootpag
        jQuery(document).ready(function(){
        jQuery('.page-selection-tab3').bootpag({
            total: <?php echo (isset($loop->max_num_pages) ? $loop->max_num_pages : 0)?>,
            next: 'PRÓXIMA <i class="glyphicon glyphicon-chevron-right"></i>',
            prev: '<i class="glyphicon glyphicon-chevron-left"></i> VOLTAR',
            maxVisible: 3,
            prevClass: "prev",
            nextClass: "next"
        }).on("page", function(event, /* page number here */ num){
            jQuery('#d_t3').css('opacity','0.5');
	           jQuery.ajax
    			({
        		type: "POST",
        		url: urlplug + "telehelp_ajax.php",
        		data: {acao: "folheia", tipo: "col-3", pagina: num },
				dataType: "json",
				success: function(msg)
					{
						if(msg.status){
						  jQuery('#d_t3').html(msg.html);
                          jQuery('#d_t3').css('opacity','1');
						}
					}
			});
            });
        });
    </script>
    <?php } ?>
</div>

<div class="tab-pane fade corpogeraltab" id="t4">
<div id="d_t4">
<?php
$loop = new WP_Query( array(
'post_type' => 'atendimentoreal',
'post_per_page' => 1,
'paged' => (( get_query_var('paged') ) ? get_query_var('paged') : 1),
'tax_query' => array(
array(
'taxonomy' => 'cat_atendimentoreal',
'field'    => 'slug',
'terms'    => 'col-4',
),
),
) );

if ( $loop->have_posts() ) :
while ( $loop->have_posts() ) : $loop->the_post();
?>

<li  data-animation-type="bounce" data-animation-duration="1" data-animation-delay="0.5">
<h2><i class="fa fa-volume-up"></i> <?php the_title(); ?></h2>
<div class="atendimentosreais_class" id="resumoatendimnto">
<?php the_field('descrição',$post->ID) ?>
</div>
<div id="campoplay">
<audio id="aud_<?php echo $post->ID?>"  src="<?php the_field('audio',$post->ID) ?>" controls loop preload="preload" title="<?php the_title(); ?>"></audio>
</div>
</li>
<?php
    endwhile;
    endif;
 ?>
</div>
<?php if($loop->max_num_pages>1){ ?>
<div id="paginacao" class="page-selection-tab4"></div>
    <script>
        // init bootpag
        jQuery(document).ready(function(){
        jQuery('.page-selection-tab4').bootpag({
            total: <?php echo (isset($loop->max_num_pages) ? $loop->max_num_pages : 0)?>,
            next: 'PRÓXIMA <i class="glyphicon glyphicon-chevron-right"></i>',
            prev: '<i class="glyphicon glyphicon-chevron-left"></i> VOLTAR',
            maxVisible: 3,
            prevClass: "prev",
            nextClass: "next"
        }).on("page", function(event, /* page number here */ num){
                jQuery('#d_t4').css('opacity','0.5');
	           jQuery.ajax
    			({
        		type: "POST",
        		url: urlplug + "telehelp_ajax.php",
        		data: {acao: "folheia", tipo: "col-4", pagina: num },
				dataType: "json",
				success: function(msg)
					{
						if(msg.status){
						  jQuery('#d_t4').html(msg.html);
                          jQuery('#d_t4').css('opacity','1');
						}
					}
			});
            });
        });
    </script>
    <?php } ?>
</div>



<div class="tab-pane fade  corpogeraltab" id="t5">
<div id="d_t5">
<?php
$loop = new WP_Query( array(
'post_type' => 'atendimentoreal',
'post_per_page' => 1,
'paged' => (( get_query_var('paged') ) ? get_query_var('paged') : 1),
'tax_query' => array(
array(
'taxonomy' => 'cat_atendimentoreal',
'field'    => 'slug',
'terms'    => 'col-5',
),
),
) );
if ( $loop->have_posts() ) :
while ( $loop->have_posts() ) : $loop->the_post();
?>

<li  data-animation-type="bounce" data-animation-duration="1" data-animation-delay="0.5">
<h2><i class="fa fa-volume-up"></i> <?php the_title(); ?></h2>
<div class="atendimentosreais_class" id="resumoatendimnto">
<?php the_field('descrição',$post->ID) ?>
</div>
<div id="campoplay">
<audio id="aud_<?php echo $post->ID?>"  src="<?php the_field('audio',$post->ID) ?>" controls loop preload="preload" title="<?php the_title(); ?>"></audio>
</div>
</li>
<?php
    endwhile;
    endif;
 ?>
</div>
<?php if($loop->max_num_pages>1){ ?>
<div id="paginacao" class="page-selection-tab5"></div>
    <script>
        // init bootpag
        jQuery(document).ready(function(){
        jQuery('.page-selection-tab5').bootpag({
            total: <?php echo (isset($loop->max_num_pages) ? $loop->max_num_pages : 0)?>,
            next: 'PRÓXIMA <i class="glyphicon glyphicon-chevron-right"></i>',
            prev: '<i class="glyphicon glyphicon-chevron-left"></i> VOLTAR',
            maxVisible: 3,
            prevClass: "prev",
            nextClass: "next"
        }).on("page", function(event, /* page number here */ num){
                jQuery('#d_t5').css('opacity','0.5');
	           jQuery.ajax
    			({
        		type: "POST",
        		url: urlplug + "telehelp_ajax.php",
        		data: {acao: "folheia", tipo: "col-5", pagina: num },
				dataType: "json",
				success: function(msg)
					{
						if(msg.status){
						  jQuery('#d_t5').html(msg.html)
                          jQuery('#d_t5').css('opacity','1');
						}
					}
			});
            });
        });
    </script>
    <?php } ?>
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


</div>


<div id="vejatabem">
	<h2>Veja também</h2>

<div class="row">
  <div class="col-md-6">
  	<li><img src="<?php echo get_template_directory_uri (); ?>/images/tb1.png" alt="equipamentos" /><br />
Equipamentos</li>
    <li>

    A TeleHelp utiliza equipamentos de alta tecnologia para garantir sua segurança e bem estar 24 horas por dia. Saiba mais sobre nossa tecnologia.

    <a href="<?php echo site_url()?>/como-funciona/tecnologia-telehelp/">saiba mais <i class="glyphicon glyphicon-chevron-right"></i></a>
    </li>
  </div>

</div>

</div>

<div id="clear"></div>
    </div>
  </div>



    <?php get_footer (); ?>