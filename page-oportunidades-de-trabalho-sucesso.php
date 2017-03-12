<?php 
  $idpos_t = get_the_ID();
  get_header (); ?>
   

<div class="container" id="corposucesso">

<div id="mensagemdesucesso">

<img src="<?php echo get_template_directory_uri (); ?>/images/li-sucesso.png" alt="sucesso" />
<h2>Recebemos seus dados com sucesso.</h2>

<a href="<?php echo site_url()?>" class="full-width btn-medium">voltar ao site <i class="glyphicon glyphicon-chevron-right"></i></a>
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
<div id='sm-bounce' data-scope='email' style='display:none' ></div>