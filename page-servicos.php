<?php

$idpos_t = get_the_ID();
get_header ();

?>

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
            	<?php echo get_field("titulo")?>
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
    	<h2 class="title-default">A TeleHelp acompanha você em todos
os momentos</h2>
    </div>

<div id="conteudoservicos">


<div id="segundalinhahomemeio">
    		<div class="row">
              <div class="col-md-6 dentrodiv" >
              	<div id="quadroslinhadois"  class="paginaprincipalservicos">

                	<h2>Dentro de casa</h2>
                  <?php
                    $dentro_de_casa = get_field("dentro_de_casa");
                    if (!$_SESSION["C_TLHPA"]){
                      $pattern = "<li>» Atendimento Domiciliar*</li>";
                      $dentro_de_casa = str_replace($pattern, "", $dentro_de_casa);
                    }
                    echo apply_filters('the_content', $dentro_de_casa);
                  ?>

                    <a href="<?php echo site_url()?>/dentro-de-casa">saiba mais <i class="glyphicon glyphicon-chevron-right"></i></a>

                  <?php
                    $imagem_dentro_de_casa = get_field("imagem_dentro_de_casa");
                  ?>

                </div>
              	<span class="img" style="background-image: url(<?php echo $imagem_dentro_de_casa?>);" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.8">

                </span>
              </div>
              <div class="col-md-6" >
              	<div id="quadroslinhadois" class="paginaprincipalservicos">


                	<h2>fora de casa</h2>

                  <?php
                    $fora_de_casa = get_field("fora_de_casa");
                    echo apply_filters('the_content', $fora_de_casa);
                  ?>

                    <a href="<?php echo site_url()?>/fora-de-casa">saiba mais <i class="glyphicon glyphicon-chevron-right"></i></a>

                </div>

                <?php
                 $imagem_fora_de_casa = get_field("imagem_fora_de_casa");
                ?>

                <span class="img" style="background-image: url(<?php echo $imagem_fora_de_casa?>);" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.11">

                </span>
              </div>
            </div>


			<div id="newmobiles" class="row visiblesmart visibletabletp visibletablet noview">
              <div id="newmobilesdiv1" class="col-md-12" >
              	<div >

                	<h2>Dentro de casa</h2>
                    <li>» TeleHelp Aviso</li>
                    <li>» Atendimento Emergencial Domiciliar*</li>
                    <li>» Orientação Médica Telefônica</li>
                    <li>» Ligação Diária ou Semanal</li>
                    <li>» Detector de Fogo e Fumaça</li>
                    <li>» Botão de Emergência Fixo</li>
                    <li>» Botão de Emergência Pessoal Adicional</li>

                    <a href="<?php echo site_url()?>/dentro-de-casa">saiba mais <i class="glyphicon glyphicon-chevron-right"></i></a>


                </div>
               </div>
			   <div id="newmobilesdiv2" class="col-md-12" >
              </div>
              <div id="newmobilesdiv3" class="col-md-12" >
              	<div>


                	<h2>fora de casa</h2>
                    <li>» TeleHelp-ID</li>
                    <li>» TeleHelp Celular</li>


                    <a href="<?php echo site_url()?>/fora-de-casa">saiba mais <i class="glyphicon glyphicon-chevron-right"></i></a>

                </div>
                </div>
				<div id="newmobilesdiv4" class="col-md-12" >
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

<li><img src="<?php echo get_template_directory_uri (); ?>/images/tb8.png" alt="sobre-nos" /><br />
Sobre Nós</li>
    <li>

    Somos a primeira e maior empresa de teleassistência do Brasil, com mais de 7 mil clientes satisfeitos com nossos serviços.

    <a href="<?php echo site_url()?>/como-funciona/sobre-nos/">saiba mais <i class="glyphicon glyphicon-chevron-right"></i></a>
    </li>

  </div>


  <div class="col-md-6">

    	<li><img src="<?php echo get_template_directory_uri (); ?>/images/tb9.png" alt="blog-atividades" /><br />
Blog Atividade</li>
    <li>

   Notícias, matérias, curiosidades, dicas e outras informações voltadas para a terceira idade.

    <a href="<?php echo site_url()?>/como-funciona/blog-atividade/">saiba mais <i class="glyphicon glyphicon-chevron-right"></i></a>
    </li>

  </div>


</div>


</div>



<div id="clear"></div>



</div>

</div>



    <?php get_footer (); ?>
    <div id='sm-bounce' data-scope='email' style='display:none' ></div>