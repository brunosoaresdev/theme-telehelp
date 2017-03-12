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

echo 'Página Inicial';

echo "</a> » ";

if (is_category() || is_single()) {

echo 'Categoria » ';

$catname = (get_category(get_query_var('cat')));
echo $catname->name;

//var_dump($post);

//the_category('e');

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

 

 <?php the_breadcrumb(); ?>
            
            </div>
           
            <div id="titulodapagina">
            
           <h2 class="title-default"> <?php
		   		echo the_category();
					
		   		  $id_cat = get_query_var('cat'); ?></h2>
            </div>
            
            </div>
            
            <div id="subtitulopgaina">

            </div>
            
            <div style="clear:both"></div>
        </div>
    </div>

<div id="topoblog">
	<div id="topoblogmeio">
    	<li>
        	<h2>blog atividade</h2>
            Saúde, bem-estar,<br />
			variedades e informação.
        </li>
        <li>
        <img src="<?php echo get_template_directory_uri (); ?>/images/banner-blog.jpg" alt="banner-blog" title="Banner Blog" />
        </li>
    </div>
    <div id="clear"></div>
</div>    

    
  
  	<div id="corpopagemeio" class="atendimentos-reias">   
    
 
    
 

<div id="menuleft">
 <?php include(TEMPLATEPATH .'/menu-blog.php');  ?>
</div>

<div id="contedorigth">
	<div id="terceirotitulo">
    	<h1 class="title-default">Veja as últimas notícias</h1>
    </div>

<div id="conteudonoticiasrecentes">

<div id="conteudonoticiasrecentes2">
      



              <?php
              
                //$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

              $id_cat = get_query_var('cat');
              
              $loop = new WP_Query( array( 

'post_type' => 'post', 'showposts' => 4,
'paged' => (( get_query_var('paged') ) ? get_query_var('paged') : 1),
'tax_query' => array(
array(
'taxonomy' => 'category',
'field' => 'id',
'terms'    => $id_cat
),
),
) );

//var_dump($loop); exit;
              
                //$wp_query = new WP_Query();
                //query_posts( array( 'post_type' => 'post', 'showposts' => 1, 'cat' => $id_cat, 'paged'=>$paged ));
                //if(have_posts()):
                //while ($wp_query -> have_posts()) : $wp_query -> the_post(); 
                
if ( $loop->have_posts() ) :
while ( $loop->have_posts() ) : $loop->the_post();                 
                
                ?>
                

<div id="linhadapostagem">
	<div id="titulolinhadapostagem">
    <span><?php the_time('d/m/Y') ?></span>
    <h2 class="title-default"><?php the_title(); ?></h2>
    <div id="qtdcomentarios">
    
    <?php // comments_popup_link('', '(1)', '(%)'); ?>
    <span class="fb-comments-count" data-href="<?php echo the_permalink() ?>"></span>
    </div>
    <div id="clear"></div>
    </div>



      
     <div id="conteudoresumopost">

    <?php
                               
                                $contentt = get_the_content();
                                $conteudoo = substr($contentt, 0, 2000).'...';
                                echo $conteudoo;
                         ?>
    </div>
            	
                
<a href="<?php the_permalink() ?>" class="lertudo" title="<?php the_title(); ?> " rel="bookmark">Leia Mais +</a>
                
<div id="clear"></div>

<div id="linhacompartilhe">
<label>Compartilhe</label>
<li>
<div class="fb-like"></div>
</li>
<li>
<a href="javascript:void()" title="Clique aqui!" onclick="window.open('http://www.facebook.com/share.php?u=<?php the_permalink(); ?>&title=<?php the_title(); ?>&description=<?php  $facebook = get_the_content();
                                $facebookk = substr($facebook, 0, 120).'...';
                                echo $facebookk;
                         ?>', 'Página', 'STATUS=YES, TOOLBAR=NO, LOCATION=NO, MENUBAR=NO, DIRECTORIES=NO, RESISABLE=NO, SCROLLBARS=NO, TOP=40, LEFT=100, WIDTH=650, HEIGHT=530');"  title="Compartilhar <?php the_title(); ?>" target="_blank">Facebook</a>
</li>

<li>
<a href="javascript:void()" title="Clique aqui!" onclick="window.open('http://twitter.com/home?status=<?php the_title(); ?>+<?php the_permalink(); ?>', 'Página', 'STATUS=YES, TOOLBAR=NO, LOCATION=NO, MENUBAR=NO, DIRECTORIES=NO, RESISABLE=NO, SCROLLBARS=NO, TOP=40, LEFT=100, WIDTH=650, HEIGHT=530');" href="" title="Compartilhar <?php the_title(); ?>" target="_blank">Twitter</a>
</li>

<li>

<a href="javascript:void()" title="Clique aqui!" onclick="window.open('https://plus.google.com/share?url=<?php the_permalink(); ?>', 'Página', 'STATUS=YES, TOOLBAR=NO, LOCATION=NO, MENUBAR=NO, DIRECTORIES=NO, RESISABLE=NO, SCROLLBARS=NO, TOP=40, LEFT=100, WIDTH=650, HEIGHT=530');" href="" title="Compartilhar <?php the_title(); ?>" target="_blank">Google +</a>

</li>

<li>
<a href="javascript:void()" title="Clique aqui!" onclick="window.open('http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&source=<?php bloginfo('name'); ?>', 'Página', 'STATUS=YES, TOOLBAR=NO, LOCATION=NO, MENUBAR=NO, DIRECTORIES=NO, RESISABLE=NO, SCROLLBARS=NO, TOP=40, LEFT=100, WIDTH=650, HEIGHT=530');" href="" title="Compartilhar <?php the_title(); ?>" target="_blank">Linkedin</a>

</li>
<li><a href="<?php the_permalink() ?>/#facebookcoluna">Comentários</a></li>

<div id="clear"></div> 
</div>           
           
<div id="tagsdopost">
<?php echo ucwords(strip_tags(get_the_tag_list('<p>Tags: ',', ','</p>')));?>
</div>      

</div>
<?php
    endwhile; 
    endif;
 ?>
</div>
<div id="paginacao"></div> 
<?php if($loop->max_num_pages>1){ ?>
    <script>
        // init bootpag
        jQuery(document).ready(function(){
        jQuery('#paginacao').bootpag({
            total: <?php echo (isset($loop->max_num_pages) ? $loop->max_num_pages : 0)?>,
            next: 'PRÓXIMA <i class="glyphicon glyphicon-chevron-right"></i>',
            prev: '<i class="glyphicon glyphicon-chevron-left"></i> VOLTAR',
            maxVisible: 3,
            prevClass: "prev",
            nextClass: "next"
        }).on("page", function(event, /* page number here */ num){
            jQuery('#d_t2').css('opacity','0.5');
	           jQuery.ajax
    			({
        		type: "POST",
        		url: urlplug + "telehelp_ajax.php",
        		data: {acao: "folheiacat", tipo: "<?php echo $id_cat; ?>", pagina: num },
				dataType: "json",
				success: function(msg)
					{
						if(msg.status){
						  jQuery('#conteudonoticiasrecentes2').html(msg.html);
                          jQuery('#conteudonoticiasrecentes2').css('opacity','1');
                          jQuery('html, body').animate({scrollTop: jQuery('#conteudonoticiasrecentes2').offset().top }, 1000);

						}
					}
			});
            });
        });
    </script>
<?php } ?>


</div>




<div id="colunablog">
<?php include(TEMPLATEPATH .'/coluna-blog.php');  ?>
</div>

<div id="clear"></div>                                                   
<div id="vejanossosplanos">

<div class="row">
  <div class="col-md-6">
  
  </div>
  <div class="col-md-6">
  	<h2>contrate agora o telehelp aviso</h2>
    A TeleHelp tem o plano ideal para você e sua família.
   <a href="<?php echo site_url()?>/telehelpaviso/﻿">saiba mais <i class="glyphicon glyphicon-chevron-right"></i></a>
    
  </div>
</div>

</div>



                            

<div id="clear"></div>                        
</div>





<div id="vejatabem">
	<h2>Veja também</h2>
    
<div class="row">


  <div class="col-md-6">

    	<li><img src="<?php echo get_template_directory_uri (); ?>/images/tb11.png" alt="como-funciona" title="Como Funciona" /><br />
Como Funciona</li>
    <li>
    
Entenda melhor como funciona o serviço de teleassistência da TeleHelp e veja como conseguir ajuda imediata ao simples toque de um botão.
    
    <a href="<?php echo site_url()?>/como-funciona/">saiba mais <i class="glyphicon glyphicon-chevron-right"></i></a>
    </li>
  </div>
  
  
  <div class="col-md-6">
  
    	<li><img src="<?php echo get_template_directory_uri (); ?>/images/tb12.png" alt="servicos" title="Serviços" /><br />
Serviços</li>
    <li>
    
  Confira os serviços oferecidos pela TeleHelp para a sua segurança dentro e fora de casa.
    
    <a href="<?php echo site_url()?>/servicos/">saiba mais <i class="glyphicon glyphicon-chevron-right"></i></a>
    </li>
   
  </div>
  
  
</div> 
 
    
</div>



<div id="clear"></div>



</div>

</div>
  
  
  
<?php get_footer (); ?>