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
              Segurança e independência dentro de casa
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
      <h2 class="title-default">Esteja seguro dentro de casa.</h2>
    </div>

<div id="conteudodentrodecasa">


<?php
// query
$the_query = new WP_Query(array(
  'post_type'     => 'dentrodecasa',
  'posts_per_page'  => -1,
  'meta_key'      => 'ordem',
  'orderby'     => 'meta_value_num',
  'order'       => 'ASC'
));

?>
<?php

 /*if (($a % 2) == 1)
  { echo "$a is odd." ;}
  if (($a % 2) == 0)
  { echo "$a is even." ;}*/

if( $the_query->have_posts() ){
$lim = 1;
while( $the_query->have_posts() ) : $the_query->the_post();

if ($post->ID == 715 && !$_SESSION["C_TLHPA"]):
  continue;
endif;

?>

<li id="liesquerdocasa">
<div id="imgedentrodecasa">
<img src="<?php the_field('imagem',$post->ID) ?>" alt="dentro-de-casa" />
</div>
<div id="textodentrodecasa">
<h2><?php the_title()?></h2>
<span><?php the_field('texto',$post->ID) ?></span>
<a href="<?php echo site_url()?>/telehelpaviso/" class="botaodentrodecasa">Confira aqui<i class="glyphicon glyphicon-chevron-right"></i></a>
</div>
</li>

<?php
endwhile;
}
wp_reset_query();
?>















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


  <!--<div class="col-md-6">

<li><img src="<?php echo get_template_directory_uri (); ?>/images/tb10.png" alt="planos" /><br />
Planos</li>
    <li>

Temos o plano ideal para a sua necessidade. Escolha o plano Top, Plus ou Master e viva com mais tranquilidade.

    <a href="<?php echo site_url()?>/telehelpaviso/">saiba mais <i class="glyphicon glyphicon-chevron-right"></i></a>
    </li>

  </div>-->


  <div class="col-md-6">
<li><img src="<?php echo get_template_directory_uri (); ?>/images/tb8.png" alt="sobre-nos" /><br />
Sobre Nós</li>
    <li>

    Somos a primeira e maior empresa de teleassistência do Brasil, com mais de 7 mil clientes satisfeitos com nossos serviços.

    <a href="<?php echo site_url()?>/sobre-nos/">saiba mais <i class="glyphicon glyphicon-chevron-right"></i></a>
    </li>


  </div>


</div>


</div>



<div id="clear"></div>



</div>

</div>



    <?php get_footer (); ?>