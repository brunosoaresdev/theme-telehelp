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
            	Entenda como funciona o serviço da TeleHelp
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
    	<h2 class="title-default">Em caso de emergência, basta apertar o botão.</h2>
    </div>

<div id="conteudocomofunciona">



<div id="primeiralinhacomofunciona">
<div id="aperteobotao">
    	<a href="#segundalinhacomofunciona"><div id="aperteobotaomeio" onclick="abrecomofunciona()"></div></a>
        <div id="aperteobotaomeio2" onclick="fechacomofunciona()"></div>
    </div>
	<img src="<?php echo get_template_directory_uri (); ?>/images/aperte-botao-colar.png" alt="como-funciona" />
</div>



<div id="segundalinhacomofunciona">

    <?php if(get_field("Título 1",$idpos_t)){ ?>

	<div>
    <li style="background: url(<?php echo get_field('Imagem 1',$idpos_t); ?>)"></li>
    <li>
    <strong><?php the_field('Título 1',$idpos_t) ?></strong>
    <?php the_field('Área de Texto 1',$idpos_t) ?>
    </li>
    <div id="clear"></div>
    </div>

    <?php } ?>
     <?php if(get_field("Título 2",$idpos_t)){ ?>

    <div>
    <li>
    <strong><?php the_field('Título 2',$idpos_t) ?></strong>
    <?php the_field('Área de Texto 2',$idpos_t) ?>
    </li>
    <li style="background: url(<?php echo get_field('Imagem 2',$idpos_t); ?>)"></li>
    <div id="clear"></div>
    </div>

    <?php } ?>
     <?php if(get_field("Título 3",$idpos_t)){ ?>

	<div>
    <li style="background: url(<?php echo get_field('Imagem 3',$idpos_t); ?>)"></li>
    <li>
    <strong><?php the_field('Título 3',$idpos_t) ?></strong>
    <?php the_field('Área de Texto 3',$idpos_t) ?>
    </li>
    <div id="clear"></div>
    </div>

    <?php } ?>
     <?php if(get_field("Título 4",$idpos_t)){ ?>

    <div>
    <li>
    <strong><?php the_field('Título 4',$idpos_t) ?></strong>
    <?php the_field('Área de Texto 4',$idpos_t) ?>
    </li>
    <li style="background: url(<?php echo get_field('Imagem 4',$idpos_t); ?>)"></li>
    <div id="clear"></div>
    </div>

    <?php } ?>



</div>

<div id="botaocomofunciona">
<a href="<?php echo site_url()?>/quem-deve-usar/">Você precisa de Telehelp?<i class="glyphicon glyphicon-chevron-right"></i> </a></div>


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

<div id="terveiralinhacomofunciona">
<div id="atendimentosreais" data-animation-type="pulse" data-animation-duration="1">
                	<h2>Atendimentos reais</h2>
                    <h3>Ouça exemplos reais de atendimentos com clientes TeleHelp</h3>
                    <ul>
                       <?php
                      $newsArgs = array( 'post_type' => 'atendimentoreal', 'posts_per_page' => 2);
                      $newsLoop = new WP_Query( $newsArgs );
                      while ( $newsLoop->have_posts() ) : $newsLoop->the_post();              ?>

                        <li  data-animation-type="bounce" data-animation-duration="1" data-animation-delay="0.5">
                                            	<h2><i class="fa fa-volume-up"></i> <?php the_title(); ?></h2>
                                                <div class="atendimentosreais_class" id="resumoatendimnto">
                        <?php the_field('descrição',$post->ID) ?>
                                                </div>
                                                <div id="campoplay">
                                <audio id="aud_<?php echo $post->ID?>" src="<?php the_field('audio',$post->ID) ?>" controls loop preload="preload" title="<?php the_title(); ?>"> <a href="<?php echo get_post_meta($post->ID, 'audio', true); ?>"><?php the_title(); ?></a> </audio>
                                                </div>
                                            </li>


                        <?php endwhile; ?>
                    </ul>



                    <a href="<?php echo site_url()?>/como-funciona/atendimentos-reais/" class="full-width btn-medium">ouça mais atendimentos<i class="glyphicon glyphicon-chevron-right"></i></a>

                </div>
</div>



<div id="quartalinhacomofunciona">
<h2>Equipamentos</h2>
                    <h3>Assistência 24 horas e equipamentos de alta tecnologia</h3>

              <li class="" data-animation-type="flipInY" data-animation-duration="1" >
				<div class="col-xs-12">
					<img src="<?php the_field('imagem_tecnologia_1', $idpos_t) ?>" alt="painel" />
					<span class="pull-right"><?php the_field('texto_1',$idpos_t) ?></span>
                </div>
              </li>

               <li class="" data-animation-type="flipInY" data-animation-duration="1" data-animation-delay="0.5" >
              <div class="col-xs-12">
              	<img src="<?php the_field('imagem_tecnologia_2',$idpos_t) ?>" alt="pulseira" />
				<span class="pull-right"><?php the_field('texto_2',$idpos_t) ?></span>
              </div>
              </li>


                <li class="" data-animation-type="flipInY" data-animation-duration="1" data-animation-delay="0.15" >
              <div class="col-xs-12">
              	<img src="<?php the_field('imagem_tecnologia_3',$idpos_t) ?>" alt="colar" />
               <span class="pull-right"><?php the_field('texto_3',$idpos_t) ?></span>
               </div>
              </li>

              <div id="clear"></div>


             <div id="botaotecnologiacomo">
             <a href="<?php echo site_url()?>/como-funciona/tecnologia-telehelp/">saiba mais <i class="glyphicon glyphicon-chevron-right"></i></a>
             </div>
</div>



<div id="quintalinhacomofunciona">
<div id="depoiemntoscomofunciona" class="" data-animation-type="pulse" data-animation-duration="1">
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

    Com a TeleHelp você tem a certeza de que receberá ajuda imediata em qualquer dia e em qualquer horário do ano, inclusive em feriados.

    <a href="<?php echo site_url()?>/como-funciona/nossa-central-de-atendimento/">saiba mais <i class="glyphicon glyphicon-chevron-right"></i></a>
    </li>

  </div>


  <div class="col-md-6">

    	<li><img src="<?php echo get_template_directory_uri (); ?>/images/tb5.png" alt="perguntas-frequestes" /><br />
Perguntas Frequentes</li>
    <li>

  Consulte a lista de perguntas frequentes para esclarecer suas dúvidas. Se ainda assim precisar, ligue para falar com um de nossos consultores.

    <a href="<?php echo site_url()?>/como-funciona/perguntas-frequentes/">saiba mais <i class="glyphicon glyphicon-chevron-right"></i></a>
    </li>

  </div>


</div>


</div>



<div id="clear"></div>



</div>

</div>



    <?php get_footer (); ?>