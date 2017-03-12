<?php 
  $idpos_t = get_the_ID();
  get_header (); ?>
<div class="row row_planos">       
	<div class="container barra-titulo"> 
		<nav>
		<ol class="breadcrumb planos">
			<li><a href="<?php echo site_url()?>">Página Inicial</a></li>
			<li class="active">Loja Virtual</li>
		</ol>
		</nav>
		<h1>Loja Virtual</h1>
		<h3>Assine a TeleHelp pela internet.</h3>
	</div>       
</div>

<div id="plano_box_grid" class="row pagina-planos">       

	<div class="container top-titulo-compras"> 
		<h1 class="pull-left titulo-compras">Carrinho</h1>
		<a href="<?php echo site_url() . "/loja-virtual/"?>" class="btn btn-primary pull-right finalizar-compra-continuar-top">Continuar comprando > </a>
	</div>
	<form action="<?php echo site_url() . "/finalizar-pedido/"?>" method="POST">
	<div class="container itens-carrinho"> 
		<div class="col colfirst col1">PRODUTOS</div>
		<div class="col colfirst col2">PREÇO</div>
		<div class="col colfirst col3">QUANTIDADE</div>
		<div class="col colfirst col4">SUBTOTAL</div>
	</div>
	<?php itens_cart();?>
	
	
	<div class="container"> 
		<button type="submit" class="btn btn-primary pull-right finalizar-compra-compras">FINALIZAR COMPRA > </button>
		<a href="<?php echo site_url() . "/loja-virtual/"?>" class="pull-right finalizar-compra-continuar">Continuar comprando</a>
	</div>
	</form>
</div>    

<div class="container" style="display:none" id="corposucesso">
<div id="mensagemdesucesso">
<h2>Nenhum Produto no seu carrinho!</h2>

<a href="<?php echo site_url()?>/telehelpaviso/﻿" class="full-width btn-medium">Contrate agora o telehelp aviso <i class="glyphicon glyphicon-chevron-right"></i></a>
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
  
    	<li><img src="<?php echo get_template_directory_uri (); ?>/images/tb5.png" alt="perguntas-frequestes"><br>
Perguntas Frequentes</li>
    <li>
    
  Consulte a lista de perguntas frequentes para esclarecer suas dúvidas. Se ainda assim precisar, ligue para falar com uma de nossas atendentes.
    
    <a href="<?php echo site_url()?>/como-funciona/perguntas-frequentes/">saiba mais <i class="glyphicon glyphicon-chevron-right"></i></a>
    </li>
   
  </div>
  
  
</div> 
 
    
</div>
</div>   
	   
            
<?php get_footer (); ?>