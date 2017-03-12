<?php 
  $idpos_t = get_the_ID();
  get_header (); ?>
  
  <style>
  #header{
	  box-shadow:1px 2px 10px -4px #ABAAAA;}
  </style>
  
  <div id="corpopage"  class="animated fadeIn" data-animation-type="fadeIn" data-animation-duration="1" style="animation-duration: 1s; visibility: visible;"> 
  
	<div id="titulopagegeral">
    	<div id="titulopagegeralmeio">
        	<div style="float:left">
            <div id="caminhosdemigalhas">
            <?php
$termo_pesquisa = trim($_POST['pesquisa']); ?>
            <?php 

function the_breadcrumb($termo) {

if (!is_home()) {

echo '<a href="';

echo get_option('home');

echo '">';

echo "Página Inicial";

echo "</a> » ";

if (is_category() || is_single()) {

the_category('title_li=');
 
if (is_single()) {

//echo " » Busca ";

//the_title();

}

} elseif (is_page()) {

//echo the_title();

echo " Busca » " . $termo;

}

}

}

 ?>

 

 <?php the_breadcrumb($termo_pesquisa); ?>
            
            </div>    
            <div id="titulodapagina">
            
           <h1> Resultado da Busca</h1>
            </div>
            
            </div>
            
            <div id="subtitulopgaina">
            	Veja o que sua busca retornou.
            </div>
            
            <div style="clear:both"></div>
        </div>
    </div>





<div id="corpodabusca">
<div id="titulodapaginabusca">
<span>Resultados para o termo </span> <strong><?php echo $termo_pesquisa ?></strong>
</div>

<?php

$achou = 0;

//echo "SELECT * FROM ".$wpdb->posts." p, ".$wpdb->term_relationships." t_r WHERE p.ID = t_r.object_id AND post_status = 'publish' AND post_type = 'post' AND post_title LIKE '%".$termo_pesquisa."%' ORDER BY post_modified_gmt";

$pesquisa_query = $wpdb->get_results( "
SELECT * FROM wp_posts
LEFT join wp_postmeta on wp_postmeta.post_id = wp_posts.ID
WHERE  
post_status = 'publish' 
AND (wp_postmeta.meta_key = 'permite_busca' and wp_postmeta.meta_value = 'Sim')
AND post_type='page' 
AND post_title LIKE '%".$termo_pesquisa."%' 
group by wp_posts.ID ORDER BY post_modified_gmt
limit 20
" );

foreach($pesquisa_query as $resultado)
{
    
    $achou++;
    
    //var_dump($resultado); exit;
    
    
    
    ?>
<div class="post">
<h1> Página: <?php echo  $resultado->post_title ?></h1>

<?php
$bb = $resultado->post_content;
$conteudoo = substr($bb, 0, 200).'';
echo $conteudoo; ?>

<div>
<a href="<?php echo site_url() ."/" .$resultado->post_name ?>" class="lertudo4" title="<?php the_title(); ?> " rel="bookmark">Acesse</a>
</div>
</div>

<?php } ?>

<?php



$pesquisa_query = $wpdb->get_results( "SELECT * FROM ".$wpdb->posts." p, ".$wpdb->term_relationships." t_r WHERE p.ID = t_r.object_id AND post_status = 'publish' AND post_type = 'post' AND post_title LIKE '%".$termo_pesquisa."%' group by ID 
ORDER BY post_modified_gmt
limit 20
" );

foreach($pesquisa_query as $resultado)
{ 
    //var_dump($resultado); exit;
    
    $achou++;
    
    
    ?>
<div class="post">
<h1> <?php echo  $resultado->post_title ?></h1>

<?php
$bb = $resultado->post_content;
$conteudoo = substr($bb, 0, 200).'';
echo $conteudoo; ?>

<div>
<a href="<?php echo site_url() ."/" .$resultado->post_name ?>" class="lertudo4" title="<?php the_title(); ?> " rel="bookmark">Leia Mais +</a>
</div>
</div>

<?php } ?>

<?php if($achou==0){ ?>

<h1>Não encontramos nenhuma página ou notícia para o termo: <?php echo $termo_pesquisa ?></h1>
<h2>Tente realizar a consulta com apenas uma palavra ou parte do mesma.</h2>

<?php } ?>

</div>
</div>
<?php get_footer(); ?>
<div id='sm-bounce' data-scope='email' style='display:none' ></div>