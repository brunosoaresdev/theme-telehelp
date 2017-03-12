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
            	Clientes TeleHelp garantem a qualidade de nossos serviços
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
    	<h2 class="title-default">Veja o que os clientes falam sobre
nossos serviços</h2>
    </div>

<div id="conteudodepoiemntos">

<?php
 $wp_query = new WP_Query();
 query_posts( array( 'post_type' => 'depoimentos', 'showposts' => 4, 'paged'=>$paged ));
 if(have_posts()):
 while ($wp_query -> have_posts()) : $wp_query -> the_post(); ?>
<li   data-animation-type="bounce" data-animation-duration="1" data-animation-delay="0.5">
<?php
if ( has_post_thumbnail() ) {
the_post_thumbnail();
} else {
	echo "<img src='".get_template_directory_uri ()."/images/img-depo.jpg' alt='foto-usuario'>"; // mostra outra coisa (imagem, texto, etc.)
}
?>



                        <a>
                        <?php the_excerpt();  ?><br>





                        <strong><?php the_title(); ?></strong>











                        </a>
                        <div style="clear:both"></div>
                    </li>




<?php
    endwhile;
    endif;
 ?>





















<div id="enviardepoiemnto">
<a href="#fomrcadastrodepóimentos" class="goto-signup soap-popupbox full-width btn-medium">enviar depoimentos <i class="glyphicon glyphicon-chevron-right"></i></a>
</div>

<div id="fomrcadastrodepóimentos" class="modalgeral modaldepoi">
            <button type="button" onclick="jQuery('#soap-popupbox').hide();" class="pull-right iframedepox" data-dismiss="modal">X</button>
            <div class="iframedepo" id="titulomodal">Envie um Depoimento</div>

            <iframe <?php

global $detect;

if( $detect->isMobile() && !$detect->isTablet() ){
	echo 'scrolling="yes" style="height: 250px;"';
}else{
	echo 'style="height: 500px;"';
}

?> src="<?php echo site_url()?>/iframe-enviar-depoimentos/"></iframe>

              <!-- <div class="login-social">
                    <a href="#" class="button login-facebook"><i class="soap-icon-facebook"></i>Acesse Com <strong>Facebook</strong></a>

                </div>
                <div class="todosinputs">
                    <form method="post" id="depo" action="<?php echo site_url()?>/depoimentos" enctype="multipart/form-data">

                        <input type="hidden" name="pagina" value="enviar-depo">
                        <input type="hidden" name="acao" value="form-site">
                        <input type="hidden" name="url" value="<?php echo site_url()?>">
                        <input type="hidden" name="login" id="tplogin" value="email">
                        <input type="hidden" name="arquivos" id="arquivos" value="false">

                        <div class="form-group">
                        	<label>Seu Nome:</label>
                            <input type="text" class="input-text full-width" name="nome" placeholder="Digite seu Nome" required>
                        </div>
                        <div class="form-group">
                        <label>Seu E-mail:</label>
                            <input type="text" class="input-text full-width" name="email" placeholder="Digite seu E-mail" required>
                        </div>
                        <div class="form-group">
                        <label>Seu Depoimento</label>
                            <textarea type="text" class="input-text full-width" name="depoimento"  placeholder="Digite seu depoimento" required></textarea>
                        </div>
                        <div class="form-group" id="minhafoto">
                        <label>Sua Foto:</label>

                        <div class="fileUpload btn btn-primary">
                            <span>Selecionar Arquivo</span>
                            <input type="file" id="depotexto" name="depotexto" class="upload">
						</div>

                        <li>(.JPG .GIF .PNG   TAM. MÁx.: 2MB)</li>

                        </div>


                        <div class="form-group">
                            <div class="checkbox">

                                    <input name="news" type="checkbox"> Gostaria de receber novidades sobre a Telehelp.

                            </div>
                        </div>
                        <div class="form-group">

                        </div>
                        <button type="submit" class="full-width btn-medium">Enviar depoimento ></button>
                    </form>
                </div>-->


</div>







<div id="paginacao">

  <div class="prev">
    <?php previous_posts_link('<i class="glyphicon glyphicon-chevron-left"></i> VOLTAR') ?>

  </div>




  <div class="next">
    <?php next_posts_link('PRÓXIMA <i class="glyphicon glyphicon-chevron-right"></i>') ?>
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

<li><img src="<?php echo get_template_directory_uri (); ?>/images/tb3.png" alt="central-de-atendimento" /><br />
Nossa Central
de Atendimento</li>
    <li>

   Com a TeleHelp você tem a certeza de que receberá ajuda imediata em qualquer dia e em qualquer horário do ano, inclusive em feriados. Conheça nossa Central.

    <a href="<?php echo site_url()?>/como-funciona/nossa-central-de-atendimento/">saiba mais <i class="glyphicon glyphicon-chevron-right"></i></a>
    </li>

  </div>


  <div class="col-md-6">

    	<li><img src="<?php echo get_template_directory_uri (); ?>/images/tb4.png" alt="vantagens" /><br />
Vantagens</li>
    <li>

   Muitos são os benefícios que a TeleHelp traz para quem utiliza nossos serviços de teleassistência. Uma delas é independência. Confira as outras vantagens.

    <a href="<?php echo site_url()?>/como-funciona/vantagens/">saiba mais <i class="glyphicon glyphicon-chevron-right"></i></a>
    </li>

  </div>


</div>


</div>



<div id="clear"></div>



</div>

</div>



    <?php get_footer (); ?>