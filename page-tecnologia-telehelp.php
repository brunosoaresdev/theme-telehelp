  <?php get_header (); ?>

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
            	Entenda como funciona cada equipamento
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

<?php

wp_reset_postdata();

?>

<div id="contedorigth">
	<div id="terceirotitulo">
    	<h2 class="title-default"><?php echo get_field('titulo_bloco1')?></h2>
    </div>

<div id="Conteudotecnologia">



<div id="primeiralinhatecnologia">

<div id="textoprimeiralinhatecnologia">
<span><?php echo get_field("texto_bloco1")?></span>

<strong><?php echo get_field("linha1_destacada_bloco1")?> <?php echo get_field("linha2_destacada_bloco1")?></strong>
</div>

<?php
$imagem_bloco_1 = get_field("imagem_bloco_1");

if ($imagem_bloco_1):

?>

<img class="visibledesktop visibletablet noview" src="<?php echo $imagem_bloco_1?>" alt="banner-arlet" />
<img class="visiblesmart visibletabletp noview" src="<?php echo get_template_directory_uri (); ?>/images/banner-tablet.jpg" alt="banner-arlet" />

<?php

endif;

?>

</div>


<h2 id="titulospaginatecnologia"><?php echo get_field("titulo_bloco2")?></h2>



<div id="segundalinhatecnologia">
        <div class="row">
          <?php
          $imagem_bloco_2 = get_field("imagem_bloco_2");
          if ($imagem_bloco_2):
          ?>
          <div class="col-md-6 " data-animation-type="fadeInLeft" data-animation-duration="1"  id="bannertrecdois" style="background-image: url(<?php echo $imagem_bloco_2?>);"></div>
          <?php
          endif;
          ?>
          <div class="col-md-6 " data-animation-type="fadeInRight" data-animation-duration="1"  id="quatroquadrados">  <div class="col-md-6">
                    <li>
                    <span><?php echo get_field("titulo_item1_bloco2")?></span>
                        <?php echo get_field("texto_item1_bloco2")?>
                    </li>

                    </div>


                    <div class="col-md-6">
                    <li>
                    <span><?php echo get_field("titulo_item2_bloco2")?></span>
                        <?php echo get_field("texto_item2_bloco2")?>
                    </li>

                    </div>

                    <div class="col-md-6">
                    <li>
                    <span><?php echo get_field("titulo_item3_bloco2")?></span>
                        <?php echo get_field("texto_item3_bloco2")?>
                    </li>

                    </div>


                    <div class="col-md-6">
                    <li>
                    <span><?php echo get_field("titulo_item4_bloco2")?></span>
                    <?php echo get_field("texto_item4_bloco2")?>
                    </li>

                    </div>  </div>
        </div></div>


<h2 id="titulospaginatecnologia"><?php echo get_field("titulo_bloco3")?></h2>


<div id="terceiralinhatecnologia">
<div class="row">

  <div class="col-md-6">

  <li>
  <h2><?php echo get_field("titulo_item1_bloco3")?></h2>
  <span><?php echo get_field("texto_item1_bloco3")?></span>
  </li>


  <li>
  <h2><?php echo get_field("titulo_item2_bloco3")?></h2>
  <span><?php echo get_field("texto_item2_bloco3")?></span>
  </li>



  <li>
  <h2><?php echo get_field("titulo_item3_bloco3")?></h2>
  <span><?php echo get_field("texto_item3_bloco3")?></span>
  </li>

  </div>


  <div class="col-md-6 " data-animation-type="fadeInRight" data-animation-duration="1" >
  	<?php
    $imagem_bloco_3 = get_field("imagem_bloco_3");
    if ($imagem_bloco_3):
    ?>
    <img src="<?php echo $imagem_bloco_3 ?>" alt="arlet-usando-pluseira" />
    <?php
    endif;
    ?>
  </div>


</div>

<a href="<?php echo site_url()?>/telehelpaviso/"  data-animation-type="shake" data-animation-duration="1" >CONFIRA AQUI <i class="glyphicon glyphicon-chevron-right"></i> </a>
</div>


<div id="tituliquartalinhatecnologia">
	<?php echo get_field("titulo_bloco4")?>
</div>


<div id="quartalinhatecnologia">

<div class="row">

 <style>
 #quartalinhatecnologia li span {
    display: block;
    height: auto;
}
 </style>

<?php

$wp_query = new WP_Query(array(
	'post_type'			=> 'tecnologia',
	'showposts' 		=> 20,
	'meta_key'			=> 'ordem',
	'orderby'			=> 'meta_value_num',
	'order'				=> 'ASC'
));



 if(have_posts()):
 while ($wp_query -> have_posts()) : $wp_query -> the_post();


echo "<!--";
//var_dump($wp_query);
echo "-->";

 ?>

 <div class="col-md-6 " data-animation-type="fadeInLeft" data-animation-duration="1">
<li><img src="<?php the_field('imagem_item',$post->ID); ?>" alt="sensor-de-fumaca" /></li>

    <li>
    	<h2><?php the_title(); ?></h2>
        <span><?php the_field('texto_item',$post->ID) ?></span>
        <figure><?php the_field('texto_destaque',$post->ID) ?></figure>
    </li>
    <div id="clear"></div>
</div>

<?php
    endwhile;
    endif;
 ?>



  <!--<div class="col-md-6 " data-animation-type="fadeInLeft" data-animation-duration="1">
  	<li><img src="<?php echo get_template_directory_uri (); ?>/images/sensor-de-fumaca.jpg" alt="sensor-de-fumaca" /></li>
    <li>
    	<h2>Detector de
Fumaça e Fogo</h2>
        <span>Pequenos descuidos podem gerar grandes incêndios. Para evitar, é aconselhável ter um sensor de fogo e fumaça na residência. Compatível com o painel TeleHelp, fácil de instalar e não precisa de cabos.</span>
        <figure>Prevenção</figure>
    </li>
    <div id="clear"></div>
  </div>



  <div class="col-md-6 " data-animation-type="fadeInRight" data-animation-duration="1">
  	<li><img src="<?php echo get_template_directory_uri (); ?>/images/fixo.jpg" alt="fixo" /></li>
    <li>
    	<h2>Botão de Emergência Fixo</h2>
        <span>Você pode adquirir botões fixos separadamente para colocar em diversos pontos da casa. Mais segurança para você.</span>
        <figure>Segurança Adicional</figure>
    </li>
    <div id="clear"></div>
  </div>





    <div class="col-md-6 " data-animation-type="fadeInLeft" data-animation-duration="1">
  	<li><img src="<?php echo get_template_directory_uri (); ?>/images/celular.jpg" alt="celular" /></li>
    <li>
    	<h2>Celular</h2>
        <span>Desenhado principalmente para pessoas da terceira idade, o celular TeleHelp é um aparelho que permite a locomoção segura do cliente, pois possui um botão de emergência e localizador GPS.</span>
        <figure>Mobilidade</figure>
    </li>
    <div id="clear"></div>
  </div>




    <div class="col-md-6 " data-animation-type="fadeInRight" data-animation-duration="1">
  	<li><img src="<?php echo get_template_directory_uri (); ?>/images/telehelp-ip.jpg" alt="telehelp-ip" /></li>
    <li>
    	<h2>TeleHelp-ID</h2>
        <span>Uma pulseira ou colar de identificação com seu nome e telefone da Central de Atendimento que permite você ser facilmente identificado em casos
de emergência fora de casa.</span>
        <figure>Leve</figure>
    </li>
    <div id="clear"></div>
  </div>-->


</div>

<!--<a href="<?php echo site_url()?>/loja-virtual/"  data-animation-type="shake" data-animation-duration="1" >acesse nossa loja virtual <i class="glyphicon glyphicon-chevron-right"></i> </a>-->

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

    	<li><img src="<?php echo get_template_directory_uri (); ?>/images/tb3.png" alt="central-de-atendimento" /><br />
Nossa Central
de Atendimento</li>
    <li>

    Com a TeleHelp você tem a certeza de que receberá ajuda imediata em qualquer dia e em qualquer horário do ano, inclusive em feriados. Conheça nossa Central 24 horas.

    <a href="<?php echo site_url()?>/como-funciona/nossa-central-de-atendimento/">saiba mais <i class="glyphicon glyphicon-chevron-right"></i></a>
    </li>

  </div>


</div>


</div>



<div id="clear"></div>



</div>

</div>



    <?php get_footer (); ?>