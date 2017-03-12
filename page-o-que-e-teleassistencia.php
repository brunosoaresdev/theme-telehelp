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
            	Entenda melhor o que é esse serviço
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
    	<h2 class="title-default">Afinal, o que é teleassistência?</h2>
    </div>

<div id="conteudoteleassistencia">



<div style="background:url(<?php echo the_field('imagem',$idpos_t)?>) " id="peimriralinhaconteudoteleassistencia">

<div  id="textopeimriralinhaconteudoteleassistencia">
<strong>
<?php
    $li_sta = explode("<br />",get_field('texto_em_negrito',$idpos_t));
    foreach($li_sta as $lt){
        if(rtrim($lt)<>""){
            echo '
            <p>
            '.$lt.'
            </p>';

        }
    }
    ?>
</strong>


<?php
    $li_sta = explode("<br />",get_field('texto_normal',$idpos_t));
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



<div id="segundalinhaconteudoteleassistencia">
<h2 id="tituto">Nossos Serviços</h2>

<div id="segundalinhahomemeio">
    		<div class="row">
              <div class="col-md-6">
              	<div id="quadroslinhadois" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.3">

                	<h2>Dentro de casa</h2>
                    <li>» Serviço de Aviso</li>
                    <li>» Atendimento Emergencial Domiciliar</li>
                    <li>» Orientação Médica Telefônica</li>
                    <li>» Ligação Diária ou Semanal</li>
                    <li>» Detector de Fogo e Fumaça</li>
                    <li>» Botão de Emergência Fixo</li>
                    <li>» Botão de Emergência Pessoal Adicional</li>

                    <a href="<?php echo site_url()?>/dentro-de-casa">saiba mais <i class="glyphicon glyphicon-chevron-right"></i></a>


                </div>
              	<div id="quadroslinhadois" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.8">

                </div>
              </div>
              <div class="col-md-6">
              	<div id="quadroslinhadois" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.5">


                	<h2>fora de casa</h2>
                    <li>» TeleHel-ID</li>
                    <li>» TeleHelp Celular</li>
                    <br>
                    <br>

                    <a href="<?php echo site_url()?>/fora-de-casa">saiba mais <i class="glyphicon glyphicon-chevron-right"></i></a>

                </div>
                <div id="quadroslinhadois" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.11">

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