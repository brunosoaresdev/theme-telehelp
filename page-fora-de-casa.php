<?php
  $idpos_t = get_the_ID();
  get_header (); ?>

  <style>
  #header{
    box-shadow:1px 2px 10px -4px #ABAAAA;}
  </style>

  <div id="corpopage" >

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
              Auxilio rápido para situações de emergência fora de casa
            </div>

            <div style="clear:both"></div>
        </div>
    </div>



    <div id="corpopagemeio" class="atendimentos-reias">
   <?php the_content(); ?>
 <?php endif; ?>

<div id="menuleft">
 <?php include(TEMPLATEPATH .'/menu-servicos.php');  ?>
</div>

<div id="contedorigth">
  <div id="terceirotitulo">
      <h2 class="title-default"><?php the_field('titulo',$idpos_t) ?></h2>
    </div>

<div id="conteudoforadecasa">


<div id="linhaumforadecasa">

  <div id="imagemlinhaumforadecasa">
      <img src="<?php the_field('imagem_bloco1',$idpos_t) ?>" alt="fora-de-casa" />
    </div>

    <div id="textolinhaumforadecasa">
      <h2><?php the_field('titulo_bloco_1',$idpos_t) ?></h2>
        <?php the_field('texto_bloco_1',$idpos_t) ?>
    </div>

<div id="clear"></div>
</div>



<div id="linhadoisforadecasa">
<h2>Personalize</h2>
<h3>Escolha a combinação que mais lhe agrada para sua pulseira TeleHelp-ID:</h3>
<div id="clear"></div>
<div id="slider_fora">

<div id="revocouro" ><?php putRevSlider('couro') ?></div>
<div id="revosilicone"><?php putRevSlider('silicone') ?></div>
</div>
<div id="botoespuseiras">
  <label>Selecione o material:</label>
    <li id="licouro" onclick="mostrapusseiradecouro()">COURO</li>
    <li id="lisilicone" onclick="mostrapuseiradesilicone()">SILICONE</li>
</div>

<div id="clear"></div>
</div>


<div id="terveiralinhaforadecasa">

<div id="imgterveiralinhaforadecasa">
  <img src="<?php the_field('imagem_bloco_3',$idpos_t) ?>" alt="celular-fora-de-casa" />
</div>

<div id="textoterveiralinhaforadecasa">
  <h2>
    <?php the_field('titulo_bloco_3',$idpos_t) ?>
    </h2>

    <?php the_field('texto_bloco_3',$idpos_t) ?>

    <h3>
    <?php the_field('sub-titulo_caracteristicas',$idpos_t) ?>
    </h3>

    <?php
    $li_sta = explode("<br />",get_field('itens_caracteristica_lado_a_lado',$idpos_t));
    foreach($li_sta as $lt){
        if(rtrim($lt)<>""){
            echo '
            <li>»
            '.$lt.'
            </li>';

        }
    }
    ?>



</div>

<div id="clear"></div>
</div>



<div id="quartalinhaforadecasa">
  <h2><?php the_field('titulo_bloco_4',$idpos_t) ?></h2>


  <div id="imgquartalinhaforadecasa">

    <img src="<?php the_field('imagem_bloco_4',$idpos_t) ?>" alt="andando-de-bicicleta" />

  </div>

  <div id="textoquartalinhaforadecasa">
  <?php the_field('texto_bloco_4',$idpos_t) ?>

  </div>

 <div id="clear"></div>

 <a href="<?php echo site_url()?>/telehelpaviso/" class="botforadecasas" data-animation-type="shake" data-animation-duration="1">Confira aqui<i class="glyphicon glyphicon-chevron-right"></i> </a>

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


 <!-- <div class="col-md-6">

<li><img src="<?php echo get_template_directory_uri (); ?>/images/tb10.png" alt="planos" /><br />
Planos</li>
    <li>

Temos o plano ideal para a sua necessidade. Escolha o plano Top, Plus ou Master e viva com mais tranquilidade.

    <a href="<?php echo site_url()?>/planos/">saiba mais <i class="glyphicon glyphicon-chevron-right"></i></a>
    </li>

  </div>-->


  <div class="col-md-6">
<li><img src="<?php echo get_template_directory_uri (); ?>/images/tb8.png" alt="sobre-nos" /><br />
Sobre Nós</li>
    <li>

    Somos a primeira e maior empresa de teleassistência do Brasil, com mais de 7 mil clientes satisfeitos com nossos serviços.

    <a href="<?php echo site_url()?>/sobre-nos">saiba mais <i class="glyphicon glyphicon-chevron-right"></i></a>
    </li>


  </div>


</div>


</div>



<div id="clear"></div>



</div>

</div>



    <?php get_footer (); ?>
    <div id='sm-bounce' data-scope='email' style='display:none' ></div>