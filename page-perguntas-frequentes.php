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
            	Confira a lista de perguntas frequentes para esclarecer suas dúvidas
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
    	<h2 class="title-default">Caso não tenha encontrado respostas, fique à vontade para nos ligar.</h2>
    </div>

<div id="conteudoperguntasfrequentes">

<div class="panel-group visiblesmart visibletabletp noview" id="accordionnovo" role="tablist" aria-multiselectable="true">

<?php

$lim = 0;

$newsArgss = array( 'post_type' => 'faqs', 'posts_per_page' => 150, 'order' => 'ASC');
$newsLoops = new WP_Query( $newsArgss );

while ( $newsLoops->have_posts() ) : $newsLoops->the_post();

$lim++;

?>

  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionnovo" href="#acc2<?php echo $lim;?>" aria-expanded="false" aria-controls="collapseThree">
          <span class="texto pull-left"><?php echo get_the_title()?></span>
		  <span class="pull-right glyphicon glyphicon-<?php echo ($lim>1 ? "plus" : "minus")?>"></span>
        </a>
      </h4>
    </div>
    <div id="acc2<?php echo $lim;?>" class="panel-collapse collapse <?php echo ($lim>1 ? "" : "in")?>" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        <?php the_excerpt(); ?>
      </div>
    </div>
  </div>

<?php
    endwhile;
?>

</div>


<div class="toggle-container box visibletablet visibledesktop noview" id="accordion2">

<?php

$lim = 0;

$newsArgss = array( 'post_type' => 'faqs', 'posts_per_page' => 150, 'order' => 'ASC');
$newsLoops = new WP_Query( $newsArgss );

while ( $newsLoops->have_posts() ) : $newsLoops->the_post();

$lim++;

?>

<div class="panel style2">
<h4 class="panel-title">
	<a <?php echo ($lim>1 ? 'class="collapsed"' : "")?> href="#acc<?php echo $lim;?>" data-toggle="collapse" data-parent="#accordion2"><?php echo get_the_title()?></a>
</h4>
<div class="panel-collapse collapse <?php echo ($lim>1 ? "" : "in")?>" id="acc<?php echo $lim;?>">
<div class="panel-content">
<?php the_excerpt(); ?>
</div><!-- end content -->
</div>
</div>

<?php
    endwhile;
 ?>

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
  	<li><img src="<?php echo get_template_directory_uri (); ?>/images/tb1.png" alt="equipamentos" /><br />
Equipamentos</li>
    <li>

    A TeleHelp utiliza equipamentos de alta tecnologia para garantir sua segurança e bem estar 24 horas por dia. Conheça todos os nossos equipamentos.

    <a href="<?php echo site_url()?>/como-funciona/tecnologia-telehelp/">saiba mais <i class="glyphicon glyphicon-chevron-right"></i></a>
    </li>

  </div>


  <div class="col-md-6">

    	<li><img src="<?php echo get_template_directory_uri (); ?>/images/tb4.png" alt="vantagens" /><br />
Vantagens</li>
    <li>

   Muitos são os benefícios que a TeleHelp traz para quem utiliza o serviço de teleassistência. Uma delas é independência. Confira as outras vantagens.

    <a href="<?php echo site_url()?>/como-funciona/vantagens/">saiba mais <i class="glyphicon glyphicon-chevron-right"></i></a>
    </li>

  </div>


</div>


</div>



<div id="clear"></div>



</div>

</div>



    <?php get_footer (); ?>