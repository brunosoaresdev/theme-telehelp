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
            	Entre em contato com o Atendimento ao Cliente da TeleHelp
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
    <a href="#" onclick="modalsface('loginBtnzap','att')"  id="loginBtn" class="button login-facebook"><i class="soap-icon-facebook"></i>Acesse Com <strong>Facebook</strong></a>
	</div>

<form method="post" id="attcentral-vendas" action="javascript:void(0)" >
<input type="hidden" name="pagina" value="atendimento-ao-cliente">
<input type="hidden" name="acao" value="form-site">
<input type="hidden" name="url" value="<?php echo site_url()?>">
<input type="hidden" name="login" id="tplogin" value="email">

<li>
<label>Nome Completo*</label>
<input class="cv_e" type="text" onkeypress="return sem_acento(event);" name="nome" id="attnome" required>
</li>

<li>
<label>E-mail*</label>
<input class="cv_e" type="text" name="email" id="attemail" required>
</li>


<li>
<label>Telefone:*</label>
<input class="cv_e telefone" type="text" name="telefone" id="atttelefone" placeholder="( ) ____-____" required>
</li>

<li>
<label>Nome do Contratante:*</label>
<input type="text" name="nomec"  onkeypress="return sem_acento(event);" id="nomec" required>
</li>

<li>
<label>CPF do Contratante:*</label>
<input type="text" class="cpf" name="cpf" id="cpf" required>
</li>


<li id="textareacentral">
<label>Mensagem:*</label>
<textarea class="cv_e" name="txtarea" id="atttxtarea"></textarea>
</li>


<div class="form-group">
<div class="checkbox">
<input name="news" type="checkbox"> Gostaria de receber novidades sobre a Telehelp.
</div>
</div>


<li id="attbotcentral">
<input type="button" onclick="send_ce(event,2,'att');" name="" value="ENVIAR >">
</li>
</form>
</div>



</div>
  
  
    <?php get_footer (); ?>
    <div id='sm-bounce' data-scope='email' style='display:none' ></div>