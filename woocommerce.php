<?php 
$idpos_t = get_the_ID();

get_header (); ?>
<!--<div class="row row_planos">       
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

<div class="row pagina-planos">       
		<?php //telehelp_planos()?>
		<?php //telehelp_individuais()?>
	<div class="container"> 
	**Sujeito a disponibilidade do serviço na cidade. <a class="consulta-cidades" onclick="alert('acao')">Consultar Cidade</a>
	</div>
</div>   --> 

<div id="corpopage"  class="animated fadeIn" data-animation-type="fadeIn" data-animation-duration="1" style="animation-duration: 1s; visibility: visible;"> 
  

<div id="titulopagegeral">
    	<div id="titulopagegeralmeio">
        	<div style="float:left">
            <div id="caminhosdemigalhas">
            
            
 
 <a href="<?php echo site_url()?>">Página Inicial</a> » Loja Virtual            
            </div>         
            <div id="titulodapagina">
            
           <h1> loja Virtual</h1>
            </div>
            
            </div>
            
            <div id="subtitulopgaina">
            	Assine a TeleHelp pela internet.
            </div>
            
            <div style="clear:both"></div>
        </div>
    </div>


   
    
  
  	<div id="corpopagemeio" class="atendimentos-reias">   




<div id="servicosloja">
	<li><img src="<?php echo get_template_directory_uri (); ?>/images/frete.png" alt="frete-gratis" />Frete Grátis</li>
    <li><img src="<?php echo get_template_directory_uri (); ?>/images/seguranca.png" alt="seguranca" />compre com segurança</li>
    <li><img src="<?php echo get_template_directory_uri (); ?>/images/chat-online.png" alt="chat-online" />Atendimento online</li>
</div>



<div id="corpoplanos">
<div id="titulolojavirtual">
<h2>
Escolha o plano ideal para você
</h2>
</div>


<div class="row">

  
<?php telehelp_planos()?>  
<?php telehelp_individuais()?>  
  
  
</div>


<a href="#" data-toggle="modal" data-target="#modalareadecobertura" class="disponibilidade">** Sujeito a disponibilidade do serviço na cidade. Consultar Cidade</a>

</div>



<div id="clear"></div>
</div>
</div>   
	   


<!-- Modal -->
<div id="modaladicionarservicos" class="modal fade" role="dialog">

  <form id="form_moda_l" action="<?php echo site_url(); ?>/compras/" method="post">

	<input type="hidden" id="form_moda_l_add" name="add" value="0" >
	<input type="hidden" id="form_moda_l_preco" name="preco" value="0" >
	<input type="hidden" id="form_moda_l_mensal" name="mensal" value="0" >
	<input type="hidden" id="form_moda_l_precoad" name="precoad" value="0" >
	<input type="hidden" id="form_moda_l_parcelas" name="parcelas" value="0" >
	<input type="hidden" id="form_moda_l_adesao" name="adesao" value="0" >
	<input type="hidden" id="form_moda_l_tipo" name="tipo" value="0" >
  
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">PLANO <strong id="titulo_mod_al">MASTER</strong></h4>
      </div>
      <div class="modal-body">
       
       
       
<div class="row">

  <div class="col-md-4" id="corpovaloreservicosmodal">
	<div id="corpovaloreservicosmodalli">
        <li><i class="glyphicon glyphicon-ok"></i> Painel de emergência com viva voz</li>
        <li><i class="glyphicon glyphicon-ok"></i> Pulseira ou colar</li>
        <li><i class="glyphicon glyphicon-ok"></i> TeleHelp ID</li>
        <li><i class="glyphicon glyphicon-ok"></i> Central de atendimento 24h</li>
        <li><i class="glyphicon glyphicon-ok"></i> Ligação semanal</li>
        <li><i class="glyphicon glyphicon-ok"></i> Orientação médica via telefone</li>
        <?php
        if ($_SESSION["C_TLHPA"]):
        ?>
        <li><i class="glyphicon glyphicon-ok"></i> Atendimento domiciliar**</li>
        <?php
        endif;
        ?>
        <li><i class="glyphicon glyphicon-ok"></i> Detector de fogo e fumaça</li>
	</div>
  
  <div id="precosdecadaplano-modal">
            <span>
            	Taxa de Adesão<br>
                <i>R$ 399,00</i>
            </span>
            +
            <strong>R$ 135,00 <i>/mês</i></strong>
            
         <button class="animated2 hover75 botaoplanoa" style="visibility: visible;">ASSINE AGORA<i class="glyphicon glyphicon-chevron-right"></i> </button>  
  </div>
  
  </div>
  
  
  <div class="col-md-8" id="corpoquantidadedecadaservico">
  	<div id="linhatituloservicosmodal">
    	<li>Selecione seus serviços adicionais:</li>
        <li>Quantidade</li>
        <li>Valor</li>
    </div>
    
<?php 

$rows = mysql_query('SELECT * FROM wp_produtos where wp_tipo = 2 and wp_status=1 order by wp_nome asc');
if($rows){
$lim = 0;
while($row = mysql_fetch_array($rows)){
//echo '<div class="col-xs-12"><input type="checkbox" data-i_d="'.$row['wp_pid'].'" value= "'.$row['wp_pid'].'" class="form-control prod_add" id="prod_add_'.$row['wp_pid'].'" name="prod_add[]" > '.$row['wp_nome'] . "</div>";

if (stripos($row['wp_nome'], 'atendimento domiciliar') !== false && !$_SESSION["C_TLHPA"]):
  continue;
endif;

$lim++;

if($_SESSION["C_TLHPA"]!="1" and strpos($row['wp_nome'], "**")){

}else{

?>	
	
<div class="itens_moda_l item_moda_l_<?php echo $row['wp_pid']?>" id="linhadecadaprodutonomodal" style="display:none;">
   	<li>
		<div class="checkbox checkbox-inline">
			<label>
			<input class="check_modal" id="md_sta_chk_<?php echo $lim;?>" onchange="md_sta_chk(<?php echo $lim;?>)" name="chk_modal[<?php echo $row['wp_pid']?>]" type="checkbox"> <?php echo $row['wp_nome']?>
			<input type="hidden"  name="addon_item[]" value="<?php echo $row['wp_pid']?>">
			</label>
        </div>
    </li>
	<li>
		<div class="input-group spinner<?php //echo $lim?>geral">
			
			<input data-visible="0" data-max="<?php echo $row['wp_max']?>" data-preco="<?php echo number_format($row['wp_preco'],2,".","")?>" type="text" class="form-control input_moda_l chk_modal_<?php echo $row['wp_pid']?>" id="chk_modal_<?php echo $lim;?>" name="spinner[<?php echo $row['wp_pid']?>]" value="0">
			<div class="input-group-btn-vertical">
				<button class="btn btn-default mais" type="button">+</button>
				<button class="btn btn-default menos" type="button">-</button>
			</div>
		</div>
	</li>
	<li>R$<?php echo number_format($row['wp_preco'],2,",",".")?></li>
	<div id="clear"></div>
</div>

<?php
}
}
}

?>	
  
  
  
  
  
  
  
  
  
  
  
  
  </div>
  
  
</div>
       
       
       
       
      </div>

    </div>

  </div>

  </form>
  </div>
	   
<?php get_footer (); ?>