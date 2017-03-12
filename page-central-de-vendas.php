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
            	Entre em contato com a Central de Vendas da TeleHelp
            </div>
            
            <div style="clear:both"></div>
        </div>
    </div>
    
    
  
  	<div id="corpopagemeio" class="atendimentos-reias">   
   <?php the_content(); ?>
 <?php endif; ?>    



	<div id="terceirotitulo" class="titulocantraldevendas">
    	<h2 class="title-default">Preencha o formulário abaixo:

        	<span>* campos obrigatórios</span>
        </h2>
    </div>




<div id="formulariocentraldeatendimento">
	<div class="login-social">
    <a href="#" onclick="modalsface('loginBtncvv','ccv')" id="loginBtn" class="button login-facebook"><i class="soap-icon-facebook"></i>Acesse Com <strong>Facebook</strong></a>
	</div>

<form method="post" id="ccvcentral-vendas" action="javascript:void(0)" >
<input type="hidden" name="pagina" value="central-vendas">
<input type="hidden" name="acao" value="form-site">
<input type="hidden" name="url" value="<?php echo site_url()?>">
<input type="hidden" name="login" id="ccvtplogin" value="email">
<li>
<label>Nome Completo*</label>
<input class="cv_e" type="text" onkeypress="return sem_acento(event);" name="nome" id="ccvnome" required>
</li>

<li>
<label>E-mail*</label>
<input class="cv_e" type="text" name="email" id="ccvemail" required>
</li>


<li>
<label>Telefone</label>
<input class="cv_e telefone" type="text" name="telefone" id="ccvtelefone" placeholder="( ) ____-____" required>
</li>

<li>
<label>Tenho interesse no Sistema Para:*</label>
<div class="selector">
<select class="cv_e" name="interesse" id="interesse">

<option value="">Selecione</option>
<?php
$the_query = new WP_Query(array(
	'post_type'			=> 'drop1',
	'posts_per_page'	=> -1,
	'meta_key'			=> 'ordem',
	'orderby'			=> 'meta_value',
	'order'				=> 'ASC'
));
?>
<?php if( $the_query->have_posts() ): ?>
<?php while( $the_query->have_posts() ) : $the_query->the_post();?>
<option><?php the_title(); ?></option>
<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_query(); ?>

</select>
<span class="custom-select cv_e interesse">Selecione</span>
</div>
</li>

<li>
<label>Como você Conheceu a TeleHelp?*</label>
<div class="selector">
<select class="cv_e" name="conheceu" id="comoconheceu">

<option value="">Selecione</option>
<?php
$the_query = new WP_Query(array(
	'post_type'			=> 'drop2',
	'posts_per_page'	=> -1,
	'meta_key'			=> 'ordem',
	'orderby'			=> 'meta_value',
	'order'				=> 'ASC'
));
?>
<?php if( $the_query->have_posts() ): ?>
<?php while( $the_query->have_posts() ) : $the_query->the_post();?>
<option><?php the_title(); ?></option>
<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_query(); ?>

</select>
<span class="custom-select cv_e comoconheceu">Selecione</span>
</div>
</li>


<li id="textareacentral">
<label>Mensagem*</label>
<textarea class="cv_e" name="txtarea" id="ccvtxtarea"></textarea>
</li>


<div class="form-group">
<div class="checkbox">
<input name="news" type="checkbox"> Gostaria de receber novidades sobre a Telehelp.
</div>
</div>


<li id="ccvbotcentral">
<input  type="button" onclick="send_ce(event,1,'ccv');" name="" value="ENVIAR >">
</li>
</form>
</div>



</div>
  
  
    <?php get_footer (); ?>
    <div id='sm-bounce' data-scope='email' style='display:none' ></div>