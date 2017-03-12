<?php get_header ();

//print_r($_GET); exit;

 ?>
<div class="row row_passos">    
<div class="container barra-passos"> 
  <ul class="nav nav-wizard">
    <li id="li_step1" class="li_step active"><a href="#">1. Dados Pessoais</a></li>
    <li id="li_step2" class="li_step"><a href="#">2. Endereço</a></li>
    <li id="li_step3" class="li_step"><a href="#">3. Pagamento</a></li>
    <li id="li_step4" class="li_step"><a href="#">4. Ficha de Emergência</a></li>
  </ul>
</div>
</div>

<div id="linha_2" style="display:none" class="row row_passos_conteudo"> 
	<div class="container"> 
		<div id="pedidos-endereco-form" class="col-md-12">
		<div class="col-md-5">
			<h1>Cadastrar Endereço</h1>
			<form id="form-pedidos-cadastro-form" action="javascript:void(0)" method="POST" autocomplete="off">
			
			<input type="hidden" name="acao" value="incluir-endereco-pedido">
			<input type="hidden" name="user" value="<?php echo (isset($_SESSION['user']) ? $_SESSION['user'] : "")?>">
			
			<div class="form-group">
			<label >Nome do Destinatário:</label>
			<input type="text" class="form-control modal-input" id="form-enome" name="form-enome" placeholder="" data-msg="Campo obrigatório">
			</div>
			<div class="form-group">
			<div class="col-50">
				<label >CEP:</label>
				<input type="text" onkeyup="busca_cep(event,this.value)" class="form-control" id="form-ecep" name="form-ecep" placeholder="" data-msg="Campo obrigatório">
			</div>
			<div class="col-50 col-50l">
				<a href="http://www.buscacep.correios.com.br/" target="_blank">Não sei o CEP</a>
			</div>
			</div>
			<div class="form-group">
			<label >Endereço:</label>
			<input type="text" class="form-control" id="form-eend" name="form-eend" placeholder="" data-msg="Campo obrigatório">
			</div>
			<div class="form-group">
			<div class="col-50">
			<label >Número:</label>
			<input type="text" class="form-control" id="form-enro" name="form-enro" placeholder="" data-msg="Campo obrigatório">
			</div>
			<div class="col-50 col-50l">
			<label >Complemento:</label>
			<input type="text" class="form-control" id="form-comp" name="form-comp" placeholder="(opcional)">
			</div>
			</div>
			<div class="form-group">
			<label >Bairro:</label>
			<input type="text" class="form-control" id="form-ebai" name="form-ebai" placeholder="" data-msg="Campo obrigatório">
			</div>
			<div class="form-group">
			<label >Cidade:</label>
			<input type="text" class="form-control" id="form-ecid" name="form-ecid" placeholder="" data-msg="Campo obrigatório">
			</div>
			<div class="form-group">
			<label >Estados:</label>
			<select class="form-control" id="form-eest" name="form-eest" data-msg="Campo obrigatório">
	<option value="">Selecione</option>
	<option value="AC">Acre</option>
	<option value="AL">Alagoas</option>
	<option value="AP">Amapá</option>
	<option value="AM">Amazonas</option>
	<option value="BA">Bahia</option>
	<option value="CE">Ceará</option>
	<option value="DF">Distrito Federal</option>
	<option value="ES">Espirito Santo</option>
	<option value="GO">Goiás</option>
	<option value="MA">Maranhão</option>
	<option value="MS">Mato Grosso do Sul</option>
	<option value="MT">Mato Grosso</option>
	<option value="MG">Minas Gerais</option>
	<option value="PA">Pará</option>
	<option value="PB">Paraíba</option>
	<option value="PR">Paraná</option>
	<option value="PE">Pernambuco</option>
	<option value="PI">Piauí</option>
	<option value="RJ">Rio de Janeiro</option>
	<option value="RN">Rio Grande do Norte</option>
	<option value="RS">Rio Grande do Sul</option>
	<option value="RO">Rondônia</option>
	<option value="RR">Roraima</option>
	<option value="SC">Santa Catarina</option>
	<option value="SP">São Paulo</option>
	<option value="SE">Sergipe</option>
	<option value="TO">Tocantins</option>
			</select>
			</div>
			
			<div class="form-group">
			<label >Ponto de Referência:</label>
			<input type="text" class="form-control" id="form-epon" name="form-epon" placeholder="(opcional)">
			</div>
			
			<div class="form-group">
			<button class="btn">CONTINUAR > </button>
			</div>
			
			</form>
		</div>
	</div>
	</div>
</div>

<div id="linha_3" style="display:none" class="row row_passos_conteudo"> 
<div class="container" id="corpopagamentos">

<div class="row">
  <div class="col-md-8">
  	<div id="produtosnocarrinho">
    	<div id="tituloprodutoscarrinho">
        	Lista
        </div>
        
      <div class="row" id="linhatitulo">
          <div class="col-xs-6 col-sm-3">produtos</div>
          <div class="col-xs-6 col-sm-3">preço</div>
          <div class="col-xs-6 col-sm-3">quantidade</div>
          <div class="col-xs-6 col-sm-3">subtotal</div>
      </div>
	  <?php itens_pagamento();?>
    </div>
  </div>
  
  <div class="col-md-4">
  	<div id="enderecodeentrega">
    	<h2>Endereço de Entrega</h2>
        <span class="end_entrega"></span>
        
        <a href="#" data-toggle="modal" data-target="#modalendereco">Alterar</a>
        
        
    	<h2>Endereço de Cobrança</h2>
        <span class="end_cobranca"></span>
        
        <a href="#" data-toggle="modal" data-target="#modalcobranca">Alterar</a>
    
    </div>
  </div>
  
</div>


<div id="corpoescolhaforma">
<div id="titulocorpoescolhaforma">Escolha a forma de pagamento</div>

<div class="row">
  <div class="col-md-4">
  	<div id="opscoesdepagamento">
    	<h2>Opções de Pagamento <strong>Desconto</strong></h2>
        
        	<div class="row">
              <div class="col-md-4">Á VISTA</div>
              <div class="col-md-4">R$ <?php echo (number_format((($totalgeral+$totalad)*0.75),2,".",",")) ?></div>
              <div class="col-md-4">25%</div>
            </div>
            
           <div class="row">
              <div class="col-md-4">EM 3X</div>
              <div class="col-md-4">3x de R$ <?php echo (number_format(((($totalgeral+$totalad)*0.93)/3),2,".",",")) ?></div>
              <div class="col-md-4">7%</div>
            </div>
            
           <div class="row">
              <div class="col-md-4">EM 12X</div>
              <div class="col-md-4">12x de R$ <?php echo (number_format(((($totalgeral+$totalad)*1)/12),2,".",",")) ?></div>
              <div class="col-md-4">-</div>
            </div>
        
        <span>
        ATENÇÃO: O limite disponível do seu cartão deve ser igual ou maior que o valor total de todas as parcelas para que a compra seja efetuada com sucesso.
        
        </span>
    
    </div>
  
  </div>
  <div class="col-md-8">
  
  <div id="tipodepagamentofail">
	<h3>Verificando meio de pagamento disponíveis...</h3>
  </div>
  
  <div id="tipodepagamento">

<div class="tab-container">
<ul class="tabs full-width"  id="corpotbascartoes">
    <li class="cartao active" id="tabtipodecartao"><a onclick="troca_met(1)" href="#corpocataodecretido" data-toggle="tab"><i class="glyphicon glyphicon-credit-card" id="iconicredito"></i> Cartão de Crédito</a></li>
    
    <li class="debito " id="tabtipodecartao"><a onclick="troca_met(2)" href="#corpodebitoautomatico" data-toggle="tab">
    	<div id="iconedebito">
        	<i class="glyphicon glyphicon-ok" ></i>
            <i>$</i>
        </div>
        Débito Automático
    </a></li>
</ul>

<div class="tab-content">

    <div class="tab-pane fade active in" id="corpocataodecretido">               
    <form id="pagseguro_form" action="javascript:void(0)">
									<input type="hidden" name="acao" value="pagseguro_form">
									<input type="hidden" name="valornormal" value="<?php echo (number_format((($totalgeral+$totalad)*1),2,".","")) ?>">
									<input type="hidden" name="valornormal7" value="<?php echo (number_format((($totalgeral+$totalad)*0.07),2,".","")) ?>">
									<input type="hidden" name="valornormal25" value="<?php echo (number_format((($totalgeral+$totalad)*0.25),2,".","")) ?>">
									<input type="hidden" name="metodo" value="1" id="form_metodo">
									<input type="hidden" name="paymentMode" value="default">
									<input type="hidden" name="paymentMethod" value="" id="paymentMethod">
									<input type="hidden" name="bankName" value="" id="bankName">
									<input type="hidden" name="currency" id="currency" value="BRL" >
									<input type="hidden" name="extraAmount" id="extraAmount" value="0.00" >
									<input type="hidden" name="notificationURL" id="notificationURL" value="<?php echo plugins_url()?>/telehelp/telehelp_ajax.php">
									<input type="hidden" name="reference" id="reference" value="">
									
									<input type="hidden" name="ccdt" id="ccdt" value="<?php echo date('Ym')?>">

									<input type="hidden" name="creditCardToken" id="creditCardToken" value="">
									<input type="hidden" name="installmentQuantity" id="installmentQuantity" value="">
									<input type="hidden" name="installmentValue1" id="installmentValue1" value="">
									<input type="hidden" name="installmentValue3" id="installmentValue3" value="">
									<input type="hidden" name="installmentValue12" id="installmentValue12" value="">
									
									<input type="hidden" name="noInterestInstallmentQuantity" id="noInterestInstallmentQuantity" value="1">
									
									<input type="hidden" name="creditCardHolderName" id="creditCardHolderName" value="">
									<input type="hidden" name="creditCardHolderCPF" id="creditCardHolderCPF" value="">
									<input type="hidden" name="creditCardHolderBirthDate" id="creditCardHolderBirthDate" value="">
									<input type="hidden" name="creditCardHolderAreaCode" id="creditCardHolderAreaCode" value="">
									<input type="hidden" name="creditCardHolderPhone" id="creditCardHolderPhone" value="">
									
									<input type="hidden" name="billingAddressStreet" id="billingAddressStreet" value="">
									<input type="hidden" name="billingAddressNumber" id="billingAddressNumber" value="">
									<input type="hidden" name="billingAddressComplement" id="billingAddressComplement" value="">
									<input type="hidden" name="billingAddressDistrict" id="billingAddressDistrict" value="">
									<input type="hidden" name="billingAddressPostalCode" id="billingAddressPostalCode" value="">
									<input type="hidden" name="billingAddressCity" id="billingAddressCity" value="">
									<input type="hidden" name="billingAddressState" id="billingAddressState" value="">
									<input type="hidden" name="billingAddressCountry" id="billingAddressCountry" value="BRA">
									
									<input type="hidden" name="senderName" id="senderName" value="">
									<input type="hidden" name="senderCPF" id="senderCPF" value="">
									<input type="hidden" name="senderAreaCode" id="senderAreaCode" value="">
									<input type="hidden" name="senderPhone" id="senderPhone" value="">
									<input type="hidden" name="senderEmail" id="senderEmail" value="">
									<input type="hidden" name="senderHash" id="senderHash" value="">
									<input type="hidden" name="shippingAddressStreet" id="shippingAddressStreet" value="">
									<input type="hidden" name="shippingAddressNumber" id="shippingAddressNumber" value="">
									<input type="hidden" name="shippingAddressComplement" id="shippingAddressComplement" value="">
									<input type="hidden" name="shippingAddressDistrict" id="shippingAddressDistrict" value="">
									<input type="hidden" name="shippingAddressPostalCode" id="shippingAddressPostalCode" value="">
									<input type="hidden" name="shippingAddressCity" id="shippingAddressCity" value="">
									<input type="hidden" name="shippingAddressState" id="shippingAddressState" value="">
									<input type="hidden" name="shippingAddressCountry" id="shippingAddressCountry" value="BRA" >
									<input type="hidden" name="shippingType" id="shippingType" value="3" >
									<input type="hidden" name="shippingCost" id="shippingCost" value="0.00"	>
										
    	<li>
											<div class="pagcol-50">
												<label>Nome do Titular</label>
												<input type="text" name="titular" id="titular" class="inputcartao"  />
											</div>
											<div class="pagcol-50">
												<label>CPF do Titular</label>
												<input type="text" name="cpftitular" id="cpftitular" class="inputcartao"  />
											</div>
        </li>
        
        <li>
        	<div class="pagcol-50" id="numerodocaratao"><label>Número do Cartão</label>
            <input type="text" name="numerodocartao" onkeyup="buscar_cartao(event,this.value)" onblur="buscar_cartao(event,this.value)" id="numerodocartao" class="inputcartao" />
            </div>
        	<div class="pagcol-50" id="bandeiradocartao">
            	<img id="imagem_cc" src="<?php echo get_template_directory_uri (); ?>/images/master.png" alt="master-card" />
             <i>
             	<label>Código de Segurança</label>
												<input type="text" name="codigo" id="ccvcodigo" /><img src="<?php echo get_template_directory_uri (); ?>/images/codigo-cartao.png" alt="codigo-do-cartao" />
             </i>
            </div>
            <div id="clear"></div>
        </li>
        
        <li id="datavalidade">
											<div class="pagcol-50">
												<label>Data de Validade</label>
												<div class="selector">
    <select name="mesvalidade" id="mesvalidade">
														<option value="0">Mês</option>
       <?php for($a=1; $a<=12; $a++){ 
																echo '<option>'.($a<10 ? "0" : "") . $a.'</option>';
															}
														?>
    </select><span class="custom-select">Mês</span>
</div>
<div class="selector">
    <select name="mesvalidade" id="anovalidade">
														<option value="0">Ano</option>
														<?php for($a=0; $a<=15; $a++){ 
															echo '<option value="'.(date('Y')+$a).'">'.(date('Y')+$a).'</option>';
														}
														?>
    </select><span class="custom-select">Ano</span>
</div>
            </div>
											<div class="pagcol-50">
												<label>Data de Nascimento do Titular</label>
												<div class="selector col30">
    <select name="dianascimento" id="dianascimento">
														<option value="0">Dia</option>
       <?php for($a=1; $a<=31; $a++){ 
																echo '<option>'.($a<10 ? "0" : "") . $a.'</option>';
															}
														?>
    </select><span class="custom-select">Dia</span>
</div>
<div class="selector col30">
    <select name="mesnascimento" id="mesnascimento">
														<option value="0">Mês</option>
														<?php for($a=1; $a<=12; $a++){ 
															echo '<option>'.($a<10 ? "0" : "") . $a.'</option>';
														}
														?>
    </select><span class="custom-select">Mês</span>
</div>
												<div class="selector col30">
    <select name="anonascimento" id="anonascimento">
														<option value="0">Ano</option>
														<?php for($a=0; $a<=110; $a++){ 
															echo '<option value="'.(date('Y')-$a).'">'.(date('Y')-$a).'</option>';
														}
														?>
    </select><span class="custom-select">Ano</span>
</div>
            </div>
            	
           <div id="clear"></div>
        </li>
    
    
    <li id="parcelascartao">
        	<label>Nome de parcelas</label>
           <div class="selector">
    <select onchange="jQuery('#installmentQuantity').val(this.value)" name="parcelas" id="parcelas">
													   <option value="0">selecione</option>
       <option value="1">1</option>
       <option value="3">3</option>
       <option value="12">12</option>
    </select><span class="custom-select">selecione</span>
            </div>
        </li>
    
										<li id="bandeiras_cc">
										</li>
									
    </form>               
    </div>
    
    <div class="tab-pane fade" id="corpodebitoautomatico">
       <div id="bandeiras_db">
									   </div>
    </div>
        
    
    
    <div id="finalizarcompra">
    
    <a id="btn-finalizar-pedido" onclick="finalizar_pedido()" class="animated" data-animation-type="fadeInDown" data-animation-duration="1">FINALIZAR COMPRA <i class="glyphicon glyphicon-chevron-right"></i> </a>
    	
    <div class="checkbox checkbox-inline">
            			<label>
										<input id="form_termos" name="form_termos" type="checkbox"> Li e aceito os <a href="#">termos do contrato</a>
										</label>
        			</div> 
       
									<div id="msg_finalizarcompra">
    </div>
    </div>
</div>

</div>
  
</div>
  </div>
</div>

</div>

</div>
</div>

<div id="linha_4" style="display:none" class="row row_passos_conteudo"> 
<div class="container" id="corpofihcadeemergencia">
<div id="titulocontatodeemergencia">Digite os dados de contato de até 5 pessoas próximas</div>
<div class="row">
<form method="" action="">
  <div class="col-md-4">
  	<div id="titulocontatoindividaual">
    	<img src="<?php echo get_template_directory_uri (); ?>/images/avatar-emegencia.jpg" />
        <h2>1º pessoa a ser contatada</h2>
    </div>
    
    <li>
    <label>Nome:</label>
    <input type="text" name="" />
    </li>
    
    <li>
    <label>E-mail:</label>
    <input type="text" name="" />
    </li>
    
    
    <li>
    <label>Telefone 1:</label>
    <input type="text" name="" />
    </li>
    
    
    <li>
    <label>Telefone 2:</label>
    <input type="text" name="" />
    </li>
    
    
    <li>
    <label>Telefone 3:</label>
    <input type="text" name="" />
    </li>
    
    
    <li>
    <label>Grau de Parentesco:</label>
    <input type="text" name="" />
    </li>
 </div>
 
 
 
  <div class="col-md-4">
    	<div id="titulocontatoindividaual">
    	<img src="<?php echo get_template_directory_uri (); ?>/images/avatar-emegencia.jpg" />
        <h2>2º pessoa a ser contatada</h2>
    </div>
    
    <li>
    <label>Nome:</label>
    <input type="text" name="" />
    </li>
    
    <li>
    <label>E-mail:</label>
    <input type="text" name="" />
    </li>
    
    
    <li>
    <label>Telefone 1:</label>
    <input type="text" name="" />
    </li>
    
    
    <li>
    <label>Telefone 2:</label>
    <input type="text" name="" />
    </li>
    
    
    <li>
    <label>Telefone 3:</label>
    <input type="text" name="" />
    </li>
    
    
    <li>
    <label>Grau de Parentesco:</label>
    <input type="text" name="" />
    </li>
  
  
  </div>
  
  
  <div class="col-md-4">
  
    	<div id="titulocontatoindividaual">
    	<img src="<?php echo get_template_directory_uri (); ?>/images/avatar-emegencia.jpg" />
        <h2>3º pessoa a ser contatada</h2>
    </div>
    
    <li>
    <label>Nome:</label>
    <input type="text" name="" />
    </li>
    
    <li>
    <label>E-mail:</label>
    <input type="text" name="" />
    </li>
    
    
    <li>
    <label>Telefone 1:</label>
    <input type="text" name="" />
    </li>
    
    
    <li>
    <label>Telefone 2:</label>
    <input type="text" name="" />
    </li>
    
    
    <li>
    <label>Telefone 3:</label>
    <input type="text" name="" />
    </li>
    
    
    <li>
    <label>Grau de Parentesco:</label>
    <input type="text" name="" />
    </li>
  
  </div>
  
  
  <div class="col-md-4">
    	<div id="titulocontatoindividaual">
    	<img src="<?php echo get_template_directory_uri (); ?>/images/avatar-emegencia.jpg" />
        <h2>4 pessoa a ser contatada</h2>
    </div>
    
    <li>
    <label>Nome:</label>
    <input type="text" name="" />
    </li>
    
    <li>
    <label>E-mail:</label>
    <input type="text" name="" />
    </li>
    
    
    <li>
    <label>Telefone 1:</label>
    <input type="text" name="" />
    </li>
    
    
    <li>
    <label>Telefone 2:</label>
    <input type="text" name="" />
    </li>
    
    
    <li>
    <label>Telefone 3:</label>
    <input type="text" name="" />
    </li>
    
    
    <li>
    <label>Grau de Parentesco:</label>
    <input type="text" name="" />
    </li>
  
  </div>
  
  
  <div class="col-md-4">
  
    	<div id="titulocontatoindividaual">
    	<img src="<?php echo get_template_directory_uri (); ?>/images/avatar-emegencia.jpg" />
        <h2>5º pessoa a ser contatada</h2>
    </div>
    
    <li>
    <label>Nome:</label>
    <input type="text" name="" />
    </li>
    
    <li>
    <label>E-mail:</label>
    <input type="text" name="" />
    </li>
    
    
    <li>
    <label>Telefone 1:</label>
    <input type="text" name="" />
    </li>
    
    
    <li>
    <label>Telefone 2:</label>
    <input type="text" name="" />
    </li>
    
    
    <li>
    <label>Telefone 3:</label>
    <input type="text" name="" />
    </li>
    
    
    <li>
    <label>Grau de Parentesco:</label>
    <input type="text" name="" />
    </li>
  
  
  <div id="botaocontatodeemergencia">
  
  <input class="full-width btn-medium" type="submit" value="CADASTRAR ">
  </div>
  </form>
  
  </div>
  
</div>

</div>
</div>

<div id="linha_1" class="row row_passos_conteudo">       
<div class="container"> 
	<div class="col-md-5 col-md-offset-1">
		<div id="pedidos-cadastro-form" class="col-md-12">
			<h1>Preencha os campos abaixo:</h1>
			<form id="pedidos-cadastro-usuario" action="javascript:void(0)" method="POST" autocomplete="off">
			<input type="hidden" value="pedidos-cadastro-usuario" name="acao">
			<input type="hidden" name="session" value="<?php echo session_id()?>">
			<div class="form-group">
			<label >Nome Completo:</label>
			<input type="text" class="form-control" id="form-nome" name="form-nome" placeholder="Digite seu nome" data-msg="Campo obrigatório">
			</div>
			<div class="form-group">
			<label >E-mail:</label>
			<input type="email" class="form-control modal-input" id="form-email" name="form-email" placeholder="Digite seu e-mail" data-msg="Informe um e-mail válido">
			</div>
			<div class="form-group">
			<label >CPF:</label>
			<input type="text" class="form-control modal-input" id="form-cpf" name="form-cpf" placeholder="Digite seu CPF" data-msg="Informe um CPF válido">
			</div>
			<div class="form-group">
			<label >Telefone:</label>
			<input type="text" class="form-control" id="form-telefone" name="form-telefone" placeholder="(  ) _____-____" data-msg="Campo obrigatório">
			</div>
			<div class="form-group">
			<label >Sua Senha:</label>
			<input type="password" class="form-control" id="form-senha" name="form-senha" placeholder="Digite sua senha" data-msg="Informe uma senha com 3 a 15 cararcteres">
			</div>
			<div class="form-group">
			<label >Confirmar Senha:</label>
			<input type="password" class="form-control" id="form-csenha" name="form-csenha" placeholder="Digite novamente sua senha" data-msg="Confirme sua senha">
			</div>
			<div class="form-group">
			<button class="btn">CADASTRAR > </button>
			</div>
			<div class="form-group check-form">
			<input type="checkbox" class="form-control" id="form-chk-news" name="form-chk-news" >
			<span>Gostaria de receber novidades sobre a TeleHelp.</span>
			</div>
			
			</form>
		</div>
	</div>
	<div class="col-md-5">
		<div id="pedidos-ja-cadastro-form" class="col-md-12">
			<h2>Já é cadastrado?</h2>
			<h6>Informe seu Usuário e senha.</h6>
			<button data-toggle="modal" data-target="#Modal-Login" class="btn ja-tenho-cadastro-passos">JÁ TENHO CADASTRO > </button>
			<a data-toggle="modal" data-target="#Modal-Senha" class="esqueci-minha-senha-passos">Esqueci meu usuário ou senha</a>
		</div>
	</div>
</div>       
</div>       

<?php finalizar_pedido(); ?>

<!-- Modal -->
<div id="modalendereco" class="modal fade" role="dialog">
<div class="vertical-alignment-helper">
<div class="modal-dialog vertical-align-center">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">&times;</button>
	<h4 class="modal-title">Alterar Endereço</h4>
</div>
<div class="modal-body">
<div id="corpoediarendereco">
<div class="row">
<div class="col-md-6">
<h2>Cadastrar Novo Endereço</h2>
<form id="form-cadastro-modal-entrega" method="POST" action="javascript:void(0)">

<input type="hidden" name="acao" value="incluir-endereco-pedido_modal">
<input type="hidden" name="user" value="<?php echo (isset($_SESSION['user']) ? $_SESSION['user'] : "")?>">

<li id="erro_modal_e">Por favor preencha os campos marcados.</li>
<li id="succ_modal_e">Seu endereço foi incluído com sucesso, um momento!</li>
<li id="cependereco">
<label>CEP:</label>
<input class="modal_e" type="text" onkeyup="busca_cep(event,this.value,1)" id="form-mecep" name="form-mecep" placeholder="" data-msg="" /> <a href="http://www.buscacep.correios.com.br/" target="_blank">Não sei o CEP</a>
</li>

<li id="enderecoendereco">
<label>Endereço:</label>
<input class="modal_e" id="form-meend" name="form-meend" type="text" name=""data-msg="" />
</li>

<li id="numeroendereco">
<label>Número:</label>
<input class="modal_e" id="form-menro" name="form-menro" type="text" name="" data-msg="" />
</li>

<li id="complementoendereco">
<label>Complemento:</label>
<input id="form-mcomp" name="form-mcomp" type="text" name="" placeholder="(Opcinal)" />
</li>

<li id="bairroendereco">
<label>Bairro:</label>
<input class="modal_e" id="form-mebai" name="form-mebai" type="text" name="" data-msg="" />
</li>

<li id="cidadeendereco">
<label>Cidade:</label>
<input class="modal_e" id="form-mecid" name="form-mecid" type="text" name="" data-msg="" />
</li>

<li id="estadoendereco">
<label>Estado:</label>
	<select class="modal_e" class="form-control" id="form-meest" name="form-meest" data-msg="">
	<option value="">Selecione</option>
	<option value="AC">Acre</option>
	<option value="AL">Alagoas</option>
	<option value="AP">Amapá</option>
	<option value="AM">Amazonas</option>
	<option value="BA">Bahia</option>
	<option value="CE">Ceará</option>
	<option value="DF">Distrito Federal</option>
	<option value="ES">Espirito Santo</option>
	<option value="GO">Goiás</option>
	<option value="MA">Maranhão</option>
	<option value="MS">Mato Grosso do Sul</option>
	<option value="MT">Mato Grosso</option>
	<option value="MG">Minas Gerais</option>
	<option value="PA">Pará</option>
	<option value="PB">Paraíba</option>
	<option value="PR">Paraná</option>
	<option value="PE">Pernambuco</option>
	<option value="PI">Piauí</option>
	<option value="RJ">Rio de Janeiro</option>
	<option value="RN">Rio Grande do Norte</option>
	<option value="RS">Rio Grande do Sul</option>
	<option value="RO">Rondônia</option>
	<option value="RR">Roraima</option>
	<option value="SC">Santa Catarina</option>
	<option value="SP">São Paulo</option>
	<option value="SE">Sergipe</option>
	<option value="TO">Tocantins</option>
	</select>
</li>
<li id="pontodereferenciaendereco">
<label>Ponto de Referência:</label>
<input id="form-mepon" name="form-mepon" type="text" name="" />
</li>
<div id="clear"></div>
<input class="full-width btn-medium" type="button" onclick="send_new_enderecoe(event);" value="CADASTRAR >">
</form>
</div>
<div id="end_cad_ent" class="col-md-6">
			          
<h2>Endereços cadastrados</h2>


<?php enderecos() ?>
     
          
          
</div>
</div> 
</div>
</div>
</div>
</div>
</div>
</div>

<!-- Modal -->
<div id="modalcobranca" class="modal fade" role="dialog">
<div class="vertical-alignment-helper">
<div class="modal-dialog vertical-align-center">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">&times;</button>
	<h4 class="modal-title">Alterar Endereço</h4>
</div>
<div class="modal-body">
<div id="corpoediarendereco">
<div class="row">
<div class="col-md-6">
<h2>Cadastrar Novo Endereço</h2>
<form id="form-cadastro-modal-cobranca" method="POST" action="javascript:void(0)">

<input type="hidden" name="acao" value="incluir-endereco-pedido_modal">
<input type="hidden" name="user" value="<?php echo (isset($_SESSION['user']) ? $_SESSION['user'] : "")?>">

<li id="erro_modal_c">Por favor preencha os campos marcados.</li>
<li id="succ_modal_c">Seu endereço foi incluído com sucesso, um momento!</li>
<li id="cependereco">
<label>CEP:</label>
<input class="modal_c" type="text" onkeyup="busca_cep(event,this.value,2)" id="form-mccep" name="form-mecep" placeholder="" data-msg="" /> <a href="http://www.buscacep.correios.com.br/" target="_blank">Não sei o CEP</a>
</li>

<li id="enderecoendereco">
<label>Endereço:</label>
<input class="modal_c" id="form-mcend" name="form-meend" type="text" name=""data-msg="" />
</li>

<li id="numeroendereco">
<label>Número:</label>
<input class="modal_c" id="form-mcnro" name="form-menro" type="text" name="" data-msg="" />
</li>

<li id="complementoendereco">
<label>Complemento:</label>
<input id="form-mccomp" name="form-mcomp" type="text" name="" placeholder="(Opcinal)" />
</li>

<li id="bairroendereco">
<label>Bairro:</label>
<input class="modal_c" id="form-mcbai" name="form-mebai" type="text" name="" data-msg="" />
</li>

<li id="cidadeendereco">
<label>Cidade:</label>
<input class="modal_c" id="form-mccid" name="form-mecid" type="text" name="" data-msg="" />
</li>

<li id="estadoendereco">
<label>Estado:</label>
	<select class="modal_c" class="form-control" id="form-mcest" name="form-meest" data-msg="">
	<option value="">Selecione</option>
	<option value="AC">Acre</option>
	<option value="AL">Alagoas</option>
	<option value="AP">Amapá</option>
	<option value="AM">Amazonas</option>
	<option value="BA">Bahia</option>
	<option value="CE">Ceará</option>
	<option value="DF">Distrito Federal</option>
	<option value="ES">Espirito Santo</option>
	<option value="GO">Goiás</option>
	<option value="MA">Maranhão</option>
	<option value="MS">Mato Grosso do Sul</option>
	<option value="MT">Mato Grosso</option>
	<option value="MG">Minas Gerais</option>
	<option value="PA">Pará</option>
	<option value="PB">Paraíba</option>
	<option value="PR">Paraná</option>
	<option value="PE">Pernambuco</option>
	<option value="PI">Piauí</option>
	<option value="RJ">Rio de Janeiro</option>
	<option value="RN">Rio Grande do Norte</option>
	<option value="RS">Rio Grande do Sul</option>
	<option value="RO">Rondônia</option>
	<option value="RR">Roraima</option>
	<option value="SC">Santa Catarina</option>
	<option value="SP">São Paulo</option>
	<option value="SE">Sergipe</option>
	<option value="TO">Tocantins</option>
	</select>
</li>
<li id="pontodereferenciaendereco">
<label>Ponto de Referência:</label>
<input id="form-mcpon" name="form-mepon" type="text" name="" />
</li>
<div id="clear"></div>
<input class="full-width btn-medium" type="button" onclick="send_new_enderecoc(event);" value="CADASTRAR >">
</form>
</div>
<div id="end_cad_cob" class="col-md-6">
			          
<h2>Endereços cadastrados</h2>


<?php enderecos("enviar_cobranca") ?>
     
          
          
</div>
</div> 
</div>
</div>
</div>
</div>
</div>
</div>

            
<?php get_footer (); ?>