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

the_category(' e ');

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
 <?php if (have_posts()): the_post(); ?>            
            <div id="titulodapagina">
            
           <h1> <?php the_title(); ?></h1>
            </div>
            
            </div>
            
            <div id="subtitulopgaina">
            	Lorem ipsum dolor sit amet.
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
    	<h2 class="title-default">Veja as últimas notícias</h2>
    </div>

<div id="conteudonoticiasrecentes">




<div id="linhadapostagem">
	<div id="titulolinhadapostagem">
    <span><?php the_time('d/m/Y') ?></span>
    <h2><?php the_title(); ?></h2>
    <div id="qtdcomentarios">
    10
    <?php // comments_popup_link('', '(1)', '(%)'); ?>
    </div>
    <div id="clear"></div>
    </div>



      
     <div id="conteudoresumopost">
 <?php the_content(); ?>
    </div>
            	
                
                
<div id="clear"></div>

<div id="linhacompartilhe">
<label>Compartilhe</label>


<div id="clear"></div> 
</div>           
           
<div id="tagsdopost">
<?php echo ucwords(strip_tags(get_the_tag_list('<p>Tags: ',', ','</p>')));?>
</div>      

<div id="comentarios">
<div class="fb-comments" data-href="<?php echo the_permalink() ?>" data-numposts="5"></div>
</div>

</div>
 <?php endif; ?>    






</div>

<div id="colunablog">
<?php include(TEMPLATEPATH .'/coluna-blog.php');  ?>
</div>

<div id="tituloultimassingle">
Últimas Notícias
</div>
<div id="primeiralinhablogeatividades">



<li>
	<div id="imgultimopost">
    	<img src="<?php echo get_template_directory_uri (); ?>/images/post-um.jpg" alt="titulo-do-post" title="Titulo do Post" />
    </div>
    <div id="textoultimopost">
    	<span>13/05/2015</span>
        <h2>Receita para começar a semana inspirada: suflê de cenoura</h2>
        Que tal começar a semana com um receita leve e absolutamente deliciosa, um suflê de cenoura? Só de ler suflê já ficou com medo? Pois a receita na verdade é simples, basta atenção para alguns detalhes e também deixar tudo a mão antes de começar o preparo. Você vai se divertir na cozinha e, terá orgulho de ter...
    </div>
    <div id="clear"></div>
</li>


<li>
	<div id="imgultimopost">
    	<img src="<?php echo get_template_directory_uri (); ?>/images/post-dois-dois.jpg" alt="titulo-do-post" title="Titulo do Post" />
    </div>
    <div id="textoultimopost">
    	<span>13/05/2015</span>
        <h2>Autocuidado em destaque</h2>
        QO autocuidado é uma atitude importante em qualquer etapa da vida. Com o envelhecimento,...
    </div>
<div id="clear"></div>
</li>



<li>
	<div id="imgultimopost">
    	<img src="<?php echo get_template_directory_uri (); ?>/images/post-dois-dois.jpg" alt="titulo-do-post" title="Titulo do Post" />
    </div>
    <div id="textoultimopost">
    	<span>13/05/2015</span>
        <h2>Autocuidado em destaque</h2>
        QO autocuidado é uma atitude importante em qualquer etapa da vida. Com o envelhecimento,...
    </div>
<div id="clear"></div>
</li>

<div id="clear"></div>
<div id="botaoblog">
<a href="#">veja mais notícias <i class="glyphicon glyphicon-chevron-right"></i></a>
</div>

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
    
    <a href="<?php echo site_url()?>/index.php/como-funciona/">saiba mais <i class="glyphicon glyphicon-chevron-right"></i></a>
    </li>
  </div>
  
  
  <div class="col-md-6">
  
    	<li><img src="<?php echo get_template_directory_uri (); ?>/images/tb12.png" alt="servicos" title="Serviços" /><br />
Serviços</li>
    <li>
    
  Confira os serviços oferecidos pela TeleHelp para a sua segurança dentro e fora de casa.
    
    <a href="<?php echo site_url()?>/index.php/servicos/">saiba mais <i class="glyphicon glyphicon-chevron-right"></i></a>
    </li>
   
  </div>
  
  
</div> 
 
    
</div>



<div id="clear"></div>



</div>

</div>
  
  
  
    <?php get_footer (); ?>