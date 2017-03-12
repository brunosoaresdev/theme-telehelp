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
            	Saiba tudo sobre quedas
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
    	<h2 class="title-default"><?php the_field('titulo_bloco_1',$idpos_t) ?></h2>
    </div>

<div id="conteudotudosobrequedas">


<div id="primelinhatudosobrequedas">

<?php
    $li_sta = explode("<br />",get_field('texto_bloco_1',$idpos_t));
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



<div id="segundalinhatudosobrequedas">
	<h2><?php the_field('titulo_bloco_2',$idpos_t) ?></h2>


<div class="row">
  <div class="col-md-6">


<?php
    $li_sta = explode("<br />",get_field('texto_bloco_2_lado_esquerdo',$idpos_t));
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
  <div class="col-md-6">

<?php
    $li_sta = explode("<br />",get_field('texto_bloco_2_lado_direito',$idpos_t));
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


</div>


<div id="terceiralinhatudosobrequedas">
	<h2><?php the_field('titulo_bloco_3',$idpos_t) ?></h2>

<li>
 <div id="corpolinumeros">
 <i>

 <div class="numbers counters-box">
   <dl>
   <dt class="display-counter" data-value="<?php the_field('percentual_1',$idpos_t) ?>"><?php the_field('percentual_1',$idpos_t) ?></dt>%
   </dl>
 </div>
</i>
<?php the_field('texto_item_1',$idpos_t) ?>
 </div>
</li>

<li>
 <div id="corpolinumeros">
 <i>

 <div class="numbers counters-box">
   <dl>
   <dt class="display-counter" data-value="<?php the_field('percentual_2',$idpos_t) ?>"><?php the_field('percentual_2',$idpos_t) ?></dt>%
   </dl>
 </div>
</i>
<?php the_field('texto_item_2',$idpos_t) ?>
 </div>
</li>


<li>
 <div id="corpolinumeros">
 <i>

 <div class="numbers counters-box">
   <dl>
   <dt class="display-counter" data-value="<?php the_field('percentual_3',$idpos_t) ?>"><?php the_field('percentual_3',$idpos_t) ?></dt>%
   </dl>
 </div>
</i>
<?php the_field('texto_item_3',$idpos_t) ?>
 </div>
</li>

<li>
 <div id="corpolinumeros">
 <i>

 <div class="numbers counters-box">
   <dl>
   <dt class="display-counter" data-value="<?php the_field('percentual_4',$idpos_t) ?>"><?php the_field('percentual_4',$idpos_t) ?></dt>%
   </dl>
 </div>
</i>
<?php the_field('texto_item_4',$idpos_t) ?>
 </div>
</li>

<li>
 <div id="corpolinumeros">
 <i>

 <div class="numbers counters-box">
   <dl>
   <dt class="display-counter" data-value="<?php the_field('percentual_5',$idpos_t) ?>"><?php the_field('percentual_5',$idpos_t) ?></dt>%
   </dl>
 </div>
</i>
<?php the_field('texto_item_5',$idpos_t) ?>
 </div>
</li>


<div id="clear"></div>

</div>


<div id="quartalinhatudosobrequedas">
	<h2><?php the_field('titulo_bloco_4',$idpos_t) ?></h2>


<div class="row">


  <div class="col-md-6">

 <?php

    $lim = 1;

    $li_sta = explode("<br />",get_field('itens_esquerda',$idpos_t));
    foreach($li_sta as $lt){
        if(rtrim($lt)<>""){
            echo '
            <li>
            <strong>'.($lim++).'</strong>
            '.$lt.'
            </li>';

        }
    }
    ?>

  </div>



  <div class="col-md-6">

  <?php

    $li_sta = explode("<br />",get_field('ìtens_direita',$idpos_t));
    foreach($li_sta as $lt){
        if(rtrim($lt)<>""){
            echo '
            <li>
            <strong>'.($lim++).'</strong>
            '.$lt.'
            </li>';

        }
    }
    ?>


  </div>

</div>



    <div id="clear"></div>
</div>



<div id="quinstalinhatudosobrequedas">
<div id="tituloquinstalinhatudosobrequedas">
<?php


    $li_sta = explode("<br />",get_field('texto_destacado',$idpos_t));
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


<div id="sextalinhatudosobrequedas">

<div class="row">
  <div class="col-md-8">
  	<div id="medodecair">
    	<h2><?php the_field('titulo_bloco_2',$idpos_t) ?></h2>

        <span>
       <?php


    $li_sta = explode("<br />",get_field('texto_bloco_5',$idpos_t));
    foreach($li_sta as $lt){
        if(rtrim($lt)<>""){
            echo '
            <p>
            '.$lt.'
            </p>';

        }
    }
    ?>
        </span>

    <img src="<?php the_field('imagem_bloco_5',$idpos_t) ?>" alt="grafico-de-risco" title="O Medo de Cair Pode Aumentar o Risco de Quedas" />

    </div>
  </div>
  <div class="col-md-4">
  	<div id="bosaformatudosobre">
    <h2><?php the_field('titulo_bloco_lateral',$idpos_t) ?></h2>

        <span>
       <p><?php the_field('sub-titulo_bloco_lateral',$idpos_t) ?></p>
<p>
<?php echo nl2br(get_field('texto_bloco_lateral',$idpos_t)) ?></p>
        </span>


     <figure><?php the_field('depoimento',$idpos_t) ?></figure>

     <i><?php the_field('autor',$idpos_t) ?></i>

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