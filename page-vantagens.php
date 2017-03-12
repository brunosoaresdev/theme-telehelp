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
            	Quais benefícios a TeleHelp traz para as pessoas?
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
    	<h2 class="title-default">Vantagens de ser cliente TeleHelp</h2>
    </div>

<div id="conteudovantagens">

<div id="primeiralinhavangens">
<div id="textoprimeiralinhaenvelhecerbem">
<?php the_field('texto_imagem_1',$idpos_t) ?>


        </div>
	<img src="<?php the_field('imagem_principal',$idpos_t) ?>" alt="como-funciona" />
</div>

<div id="quartalinhatecnologia">

<div class="row">

  <div class="col-md-6 " data-animation-type="fadeInLeft" data-animation-duration="1">
  	<li><img src="<?php the_field('imagem_item_1',$idpos_t) ?>" alt="para-voce"></li>
    <li>
    	<h2><?php the_field('titulo_item_1',$idpos_t) ?></h2>
        <span><?php the_field('texto_item_1',$idpos_t) ?></span>

    </li>
  </div>



  <div class="col-md-6 " data-animation-type="fadeInRight" data-animation-duration="1">
  		<li><img src="<?php the_field('imagem_item_2',$idpos_t) ?>" alt="para-voce"></li>
    <li>
    	<h2><?php the_field('titulo_item_2',$idpos_t) ?></h2>
        <span><?php the_field('texto_item_2',$idpos_t) ?></span>

    </li>
  </div>


</div>
</div>


<div id="terceiralinhavantagens">
	<h2><?php the_field('titulo_bloco_lista',$idpos_t) ?></h2>

    <?php

    $li_sta = explode("<br />",get_field('lista',$idpos_t));

    foreach($li_sta as $lt){

        if(rtrim($lt)<>""){

            echo '
            <li  data-animation-type="fadeInLeft" data-animation-duration="1">
            '.$lt.'
            </li>';

        }

    }


    ?>

</div>

<div id="quintalinhacomofunciona">
<div id="depoiemntoscomofunciona"  data-animation-type="pulse" data-animation-duration="1">
<h2>Depoimentos</h2>
<h3>Clientes TeleHelp aprovam e recomendam nossos serviços</h3>
<div id="conteudodepoiemntos">

<?php
$wp_query = new WP_Query();
query_posts( array( 'post_type' => 'depoimentos', 'posts_per_page' => 3 ));
if(have_posts()):
while ($wp_query -> have_posts()) : $wp_query -> the_post(); ?>

<li data-animation-type="bounce" data-animation-duration="1" data-animation-delay="0.5">

<?php
if ( has_post_thumbnail() ) {
the_post_thumbnail();
} else {
	echo "<img src='".get_template_directory_uri ()."/images/img-depo.jpg' alt='foto-usuario'>"; // mostra outra coisa (imagem, texto, etc.)
}
?>
<a>
<?php
						$contentt = get_the_excerpt();
                        $conteudoo = substr($contentt, 0, 160).(strlen($contentt)>=160 ? "..." : "");
                        echo $conteudoo;
						?><br>
<strong><?php the_title(); ?></strong>
</a>
<div style="clear:both"></div>
</li>

<?php
    endwhile;
    endif;
 ?>
<div id="botaodepoiemtocomofunciona"><a href="<?php echo site_url()?>/como-funciona/depoimentos/" class="full-width btn-medium">veja mais depoimentos <i class="glyphicon glyphicon-chevron-right"></i></a>
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
    	<li><img src="<?php echo get_template_directory_uri (); ?>/images/tb5.png" alt="perguntas-frequestes" /><br />
Perguntas Frequentes</li>
    <li>

  Consulte a lista de perguntas frequentes para esclarecer suas dúvidas. Não encontrou respostas? Ligue para falar com um de nossos consultores ou em um de nossos canais de atendimento.

    <a href="<?php echo site_url()?>/como-funciona/perguntas-frequentes/">saiba mais <i class="glyphicon glyphicon-chevron-right"></i></a>
    </li>

  </div>


  <div class="col-md-6">

    	<li><img src="<?php echo get_template_directory_uri (); ?>/images/tb6.png" alt="quem-pode-usar" /><br />
Quem deve
usar?</li>
    <li>

  Nosso serviço é recomendado principalmente para pessoas de terceira idade, pacientes em fase de recuperação ou alguma condição de risco e pessoas que moram sozinhas.

    <a href="<?php echo site_url()?>/como-funciona/quem-deve-usar/">saiba mais <i class="glyphicon glyphicon-chevron-right"></i></a>
    </li>

  </div>


</div>


</div>



<div id="clear"></div>



</div>

</div>



    <?php get_footer (); ?>
    <div id='sm-bounce' data-scope='email' style='display:none' ></div>