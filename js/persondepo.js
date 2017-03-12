jQuery(document).ready(function(){
	//jQuery('#idade').setMask('999');
	//jQuery('.telefone').setMask('(99)99999-9999');
    //jQuery('.cpf').setMask('999.999.999-99');
});



function go_step(passo){

	if(passo<=1){
	   passo = 1;
       inicial = 1;
		jQuery('input#btn_passoprev').css('visibility','hidden');
		//jQuery('input#btn_passoprev').css('visibility','visible');
	}
    if(passo>=2){
		//jQuery('input#btn_passoprev').css('visibility','hidden');
		jQuery('input#btn_passoprev').css('visibility','visible');
	}


	if(passo>=5){
		jQuery('input#btn_passonext').hide();
		jQuery('input#btn_passofim').show(); 
	}else{
		jQuery('input#btn_passonext').show();
		jQuery('input#btn_passofim').hide();
	}

    inicial = passo;
    


	jQuery('.nextfield').each(function(){

		var i_d = jQuery(this).data('id');

		if(i_d==passo){

			jQuery(this).slideDown('slow');

		}else{

			jQuery(this).slideUp('slow');

		}

	});

	

	jQuery('#progressbar li').removeClass('active');

	jQuery('#progressbar .pa'+passo).addClass('active');



}



var busyresultado = 0;



function resultados(e,passo){
    
    inicial = passo;

	if(passo<1){
	   passo = 1
       inicial = 1;
       return false;
       }
	if(passo>6){
       passo = 6
       inicial = 5;
       return false;
       }





	var pontosaval = 0;

	var erro = 1;

	var idade = jQuery('#idade').val();

	var passo2 = jQuery('#passo2').val();

	var passo3 = jQuery('#passo3').val();

	var passo4 = jQuery('#passo4').val();

	var passo5 = jQuery('#passo5').val();

	jQuery('.resultado_s').css('border','1px solid #9e9e9e');

	jQuery('.modal-input-error').slideUp('slow').remove();

	

	if(passo==2){

	if(idade=="" || idade<=0){

		jQuery('#idade').css('border','1px solid red');

		jQuery('#pergunta1')

			.after('<span class="modal-input-error" style="display:none;color: red;width: 100%;float: left;font-size: 15px;margin-bottom: 10px;">Informe sua idade!</span>')

		jQuery('.modal-input-error')		

			.slideDown('slow');

        inicial = 1;
		return false;

	}else{

		go_step(2)

	}

	}

	



	if(passo==3){

	if(passo2==""){

		//jQuery('#idade').css('border','1px solid red');

		jQuery('#pergunta2')

			.after('<span class="modal-input-error" style="display:none;color: red;width: 100%;float: left;font-size: 15px;margin-bottom: 10px;">Escolha uma opção!</span>')

		jQuery('.modal-input-error')		

			.slideDown('slow');

        inicial = 2;

		return false;

	}else{

		go_step(3)

	}

	

	}	



	if(passo==4){

	if(passo3==""){

		//jQuery('#idade').css('border','1px solid red');

		jQuery('#pergunta3')

			.after('<span class="modal-input-error" style="display:none;color: red;width: 100%;float: left;font-size: 15px;margin-bottom: 10px;">Escolha uma opção!</span>')

		jQuery('.modal-input-error')		

			.slideDown('slow');

        inicial = 3;

		return false;

	}else{

		go_step(4)

	}

	

	}		

	

	if(passo==5){

	if(passo4==""){

		//jQuery('#idade').css('border','1px solid red');

		jQuery('#pergunta4')

			.after('<span class="modal-input-error" style="display:none;color: red;width: 100%;float: left;font-size: 15px;margin-bottom: 10px;">Escolha uma opção!</span>')

		jQuery('.modal-input-error')		

			.slideDown('slow');
            
        inicial = 4;

		return false;

	}else{

		go_step(5)

	}

	}

	

	if(passo==6){

	if(passo5==""){

		//jQuery('#idade').css('border','1px solid red');

		jQuery('#pergunta5')

			.after('<span class="modal-input-error" style="display:none;color: red;width: 100%;float: left;font-size: 15px;margin-bottom: 10px;">Escolha uma opção!</span>')

		jQuery('.modal-input-error')		

			.slideDown('slow');
                
        inicial = 5;

		return false;

	}else{

		go_step(6)

		erro = 0;

	}	

	

	}	



	jQuery('#passo1').val(idade);

	

	if(idade>0 && idade!=""){

		if(idade<=59){pontosaval=0;}

		if(idade>=60 && idade<=69){pontosaval=1;}

		if(idade>=70){pontosaval=4;}

	}

	

	if(passo2!=""){

		if(passo2==1){pontosaval +=4;}

		if(passo2==2){pontosaval +=2;}

		if(passo2==3){pontosaval +=0;}

	}

	

	if(passo3!=""){

		if(passo3==2){pontosaval +=10;}

		if(passo3==1){pontosaval +=0;}

	}	

	

	if(passo4!=""){

		if(passo4==4){pontosaval +=10;}

		if(passo4==3){pontosaval +=8;}

		if(passo4==2){pontosaval +=4;}

		if(passo4==1){pontosaval +=0;}

	}		



	if(passo5!=""){

		if(passo5==2){pontosaval +=0;}

		if(passo5==1){pontosaval +=5;}

	}	

	

	console.log(pontosaval);

	

	if(busyresultado==0 && erro == 0){

		busyresultado = 1;

		erro = 1;

		

		jQuery('.r_risco').hide('slow');

		

		jQuery.ajax

			({

			type: "POST",

				url: urlplug + "telehelp_ajax.php",

				data: {acao: "salvar-resultado", passo1: idade, passo2: passo2, passo3: passo3, passo4: passo4, passo5: passo5, total:pontosaval },

				dataType: "json",

				success: function(msg)

					{

						if(msg.status){

							jQuery('.rowno').slideUp('slow');

							jQuery('.rowsi').slideDown('slow');

							

							

							if(pontosaval<=8){

								jQuery('.r_riscob').show();

								if(passo5==1){

									jQuery('.r_risco5id').show();

									jQuery('.r_risco5cel').hide();

								}

								}

							if(pontosaval>=9 && pontosaval<=15){

								jQuery('.r_riscom').show();

								if(passo5==1){

									jQuery('.r_risco5id').hide();

									jQuery('.r_risco5cel').show();

								}

							}

							if(pontosaval>=16){

								jQuery('.r_riscoa').show();

								if(passo5==1){

									jQuery('.r_risco5id').show();

									jQuery('.r_risco5cel').show();

								}								

							}

							

						}

						busyresultado = 0;

						erro = 1;

					}

			});

	

	}

	



}



function update_views(id){



jQuery.ajax

			({

			type: "POST",

				url: urlplug + "telehelp_ajax.php",

				data: {acao: "update_views", video: id },

				dataType: "json",

				success: function(msg)

					{

						if(msg.status){



						}

					}

			});

}



function ValidateEmail(inputText)  

{  

	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  

	if(inputText.match(mailformat))  

{  

return true;  

}  

else  

{  

return false;  

}  

}  



function validacpf (value) {

   value = jQuery.trim(value);



    value = value.replace('.','');

    value = value.replace('.','');

    cpf = value.replace('-','');

    while(cpf.length < 11) cpf = "0"+ cpf;

    var expReg = /^0+$|^1+$|^2+$|^3+$|^4+$|^5+$|^6+$|^7+$|^8+$|^9+$/;

    var a = [];

    var b = new Number;

    var c = 11;

    for (i=0; i<11; i++){

        a[i] = cpf.charAt(i);

        if (i < 9) b += (a[i] * --c);

    }

    if ((x = b % 11) < 2) { a[9] = 0 } else { a[9] = 11-x }

    b = 0;

    c = 11;

    for (y=0; y<10; y++) b += (a[y] * c--);

    if ((x = b % 11) < 2) { a[10] = 0; } else { a[10] = 11-x; }



    var retorno = true;

    if ((cpf.charAt(9) != a[9]) || (cpf.charAt(10) != a[10]) || cpf.match(expReg)) retorno = false;



    return retorno;



}





var busyupload = 0;



function send_ce(e,f,l){

	e.preventDefault();
	if(l!=undefined){
		local=l;
	}else{
		local = "";
	}

	var erro = 0;
	jQuery('#erro_cv_e').slideUp().remove();

    if(f!=10){

	if(jQuery('#'+local+'nome').val()==""){
		jQuery('#'+local+'botcentral').prepend('<span id="erro_cv_e" style="padding:5px;border:1px red solid;color: red;font-size: 15px;">Obrigatório informar seu nome!</span>');
		return false;
	}
    
    }

	if(jQuery('#'+local+'email').val()==""){

        if(f==10){
        jQuery('#'+local+'botcentral').prepend('<span id="erro_cv_e" style="    margin-bottom: 10px;    width: 100%;    float: left;    text-align: center;padding:5px;border:1px white solid;color: white;font-size: 15px;">Erro no e-mail!</span>');    
        }else{
		jQuery('#'+local+'botcentral').prepend('<span id="erro_cv_e" style="padding:5px;border:1px red solid;color: red;font-size: 15px;">Obrigatório informar seu e-mail!</span>');
        }

		return false;

	}

	if(!ValidateEmail(jQuery('#'+local+'email').val())){
        
        if(f==10){
        jQuery('#'+local+'botcentral').prepend('<span id="erro_cv_e" style="    margin-bottom: 10px;    width: 100%;    float: left;    text-align: center;padding:5px;border:1px white solid;color: white;font-size: 15px;">E-mail inválido!</span>');    
        }else{
		jQuery('#'+local+'botcentral').prepend('<span id="erro_cv_e" style="padding:5px;border:1px red solid;color: red;font-size: 15px;">Informe um e-mail válido!</span>');
        }
		return false;

	}


        if(f==10){
    	if(jQuery('#'+local+'senha').val()==""){
        jQuery('#'+local+'botcentral').prepend('<span id="erro_cv_e" style="    margin-bottom: 10px;    width: 100%;    float: left;    text-align: center;padding:5px;border:1px white solid;color: white;font-size: 15px;">Erro senha!</span>');
        }
        }
	

    if(f==50){
    	var telefone = jQuery('#'+local+'cpf').val();
    	telefone = telefone.replace('.','').replace('.','').replace('.','').replace('-','');
        if(telefone.length <11){
            jQuery('#'+local+'botcentral').prepend('<span id="erro_cv_e" style="padding:5px;border:1px red solid;color: red;font-size: 15px;">Obrigatório Informar um cpf!</span>');
    		return false;
        }
        
        if(!validacpf(telefone)){
            jQuery('#'+local+'botcentral').prepend('<span id="erro_cv_e" style="padding:5px;border:1px red solid;color: red;font-size: 15px;">Informar um cpf válido!</span>');
    		return false;
        }
        
    }

	if(f==1 || f==2 || f==3 || /*f==6 ||*/ f==7 || f==50 | f==40){

    

	var telefone = jQuery('#'+local+'telefone').val();

	telefone = telefone.replace('(','').replace(')','').replace('-','').replace(' ','');



	if(telefone.length <10){

		jQuery('#'+local+'botcentral').prepend('<span id="erro_cv_e" style="padding:5px;border:1px red solid;color: red;font-size: 15px;">Obrigatório Informar um telefone!</span>');

		return false;

	}

	}
    
     if(f==40){
     
        if(jQuery('#agddata').val()==""){

            jQuery('#'+local+'botcentral').prepend('<span id="erro_cv_e" style="padding:5px;border:1px red solid;color: red;font-size: 15px;">Obrigatório uma data!</span>');
    		return false;
            
        }else{
            
            var data = jQuery('#agddata').val();
            data = data.split("-");
            var ny = data[0];
            var nm = data[1];
            var nd = data[2];
            var n = new Date();
            var n_y = n.getFullYear();
            var n_m = n.getMonth() + 1;
            var n_d = n.getDate();
            
            var errodata = 0
            
            if(ny< n_y){
                errodata = 1;                
            }else{
                if(nm< n_m){
                    errodata = 1;
                }else{
                    if(nd< n_d){
                        errodata = 1;
                    }   
                }
            }
            
            
            if(errodata==1){
                jQuery('#'+local+'botcentral').prepend('<span id="erro_cv_e" style="padding:5px;border:1px red solid;color: red;font-size: 15px;">Data Anterior a hoje!</span>');
                return false;
            }
            
            
            
        }
        
         if(jQuery('#agdhora').html()=="" || jQuery('#agdhora').html() =="Selecione"){ 
            
            jQuery('#'+local+'botcentral').prepend('<span id="erro_cv_e" style="padding:5px;border:1px red solid;color: red;font-size: 15px;">Informe um horário!</span>');
    		return false;
            
        }else{
            var hora = jQuery('#agdhora').html();
            
            data = hora.split(":");
            var nh = parseInt(data[0]*60) + parseInt(parseInt(data[1]));
            var n = new Date();
            var n_h = (n.getHours()*60) + n.getMinutes();
            
            var errodata = 0
            
            if(nh< n_h){
                errodata = 1;                
            }
            
            if(errodata==1){
                jQuery('#'+local+'botcentral').prepend('<span id="erro_cv_e" style="padding:5px;border:1px red solid;color: red;font-size: 15px;">Erro Hora Anterior!</span>');
                return false;
            }
            
            jQuery('#horagenda').val(hora);
            
        }
        
     }


    if(f==50){
        if(jQuery('#'+local+'senha').val()==""){
            jQuery('#'+local+'botcentral').prepend('<span id="erro_cv_e" style="padding:5px;border:1px red solid;color: red;font-size: 15px;">Informe sua senha!</span>');
    		return false;
        }else{
         
        if(jQuery('#'+local+'senha').val()!=jQuery('#'+local+'senhac').val()){
            jQuery('#'+local+'botcentral').prepend('<span id="erro_cv_e" style="padding:5px;border:1px red solid;color: red;font-size: 15px;">Erro ao confirmar senha!</span>');
    		return false;
        }   
            
        }
        

        
    }

    if(f==1){

	if(jQuery('#interesse').val()==""){

		jQuery('#botcentral').prepend('<span id="erro_cv_e" style="padding:5px;border:1px red solid;color: red;font-size: 15px;">Obrigatório selecionar interesse!</span>');

		return false;

	}

	

	if(jQuery('#comoconheceu').val()==""){

		jQuery('#botcentral').prepend('<span id="erro_cv_e" style="padding:5px;border:1px red solid;color: red;font-size: 15px;">Obrigatório selecionar como conheceu!</span>');

		return false;

	}

    }

    

    if(f==2){

	if(jQuery('#nomec').val()==""){

		jQuery('#botcentral').prepend('<span id="erro_cv_e" style="padding:5px;border:1px red solid;color: red;font-size: 15px;">Obrigatório informar o nome do contratante!</span>');

		return false;

	}

	

	if(jQuery('#cpf').val()==""){

		jQuery('#botcentral').prepend('<span id="erro_cv_e" style="padding:5px;border:1px red solid;color: red;font-size: 15px;">Obrigatório informar CPF do contratante!</span>');

		return false;

	}

    

    if(!validacpf(jQuery('#cpf').val())){

		jQuery('#botcentral').prepend('<span id="erro_cv_e" style="padding:5px;border:1px red solid;color: red;font-size: 15px;">Obrigatório informar um CPF válido!</span>');

		return false;

	}

    

    }    

    

	if(f!=7){

	

	if(jQuery('#'+local+'txtarea').val()==""){

		jQuery('#'+local+'botcentral').prepend('<span id="erro_cv_e" style="padding:5px;border:1px red solid;color: red;font-size: 15px;">Obrigatório preencher sua mensagem!</span>');

		return false;

	}

	}



    

   if(f==3){

        var check = jQuery('#arquivos').val();

   

       if(check=="false"){

		  jQuery('#botcentral').prepend('<span id="erro_cv_e" style="padding:5px;border:1px red solid;color: red;font-size: 15px;">Escolha um arquivo .doc, .pdf ou .rtf!</span>');

		  return false;

	   }

    

	   jQuery('#central-vendas').submit();

	   jQuery('#central-vendas').submit();

       jQuery('#central-vendas').submit(function(event){

 

 

        //disable the default form submission

        event.preventDefault();

 

        //grab all form data  

        var formData = new FormData(jQuery(this)[0]);

 

        if(busyupload==0){

            busyupload=1;

            jQuery.ajax({

            url: urlplug + "telehelp_ajax.php",

            type: 'POST',

            data: formData,

            async: false,

            cache: false,

            contentType: false,

            processData: false,

            success: function(msg)

            {

			if(msg.status){

                eval(msg.acao);

                busyupload=0;

				}

            }

        });

        }

 

        

 

    return false;

    });

        

    }else{

    console.log(jQuery('#'+local+'central-vendas').serialize());

	jQuery.ajax

		({

			type: "POST",

                    url: urlplug + "telehelp_ajax.php",

                    data: jQuery('#'+local+'central-vendas').serialize(),

					dataType: "json",

                    success: function(msg)

                        {

							if(msg.status){

                                eval(msg.acao);

							}

                        }

		});

        }

	

}

jQuery(document).ready(function(){

jQuery('#curriculo').change(function(){

    

    console.log(jQuery(this));

    

    var nome = jQuery(this)[0].files[0].name;

    var ext = nome.split('.');

	var len = ext.length;

	var fin = ext[len-1];

	

	if(fin.toLowerCase()!='doc' && fin.toLowerCase()!='docx' && fin.toLowerCase()!='pdf' && fin.toLowerCase()!='rtf'){

	    jQuery('.fileUpload.btn.btn-primary span').html("Selecionar Arquivo (" +nome+ ")");

        jQuery('#arquivos').val('false');

        jQuery('#erro_cv_e').slideUp().remove();

        jQuery('#botcentral').prepend('<span id="erro_cv_e" style="padding:5px;border:1px red solid;color: red;font-size: 15px;">Escolha um arquivo .doc, .pdf ou .rtf!</span>');

		return false;

	}

     

    jQuery('.fileUpload.btn.btn-primary span').html("Arquivo Anexado");

    jQuery('#arquivos').val('true');



});
})



var vez = 0;

var local="";


function getUserLogin() {
	FB.api('/me?fields=id,name,email', function(response) {
	   console.log(response);
       
        if(response.email!=undefined){
	   jQuery.ajax
    	({
		type: "POST",
                    url: urlplug + "telehelp_ajax.php",
                    data: {acao: "login-facebook", email: response.email},
					dataType: "json",
                    success: function(msg)
                        {
							if(msg.status){
                                eval(msg.acao);
							}
                        }
                        
		});       
        }
	});
}

function getUserData() {
	FB.api('/me?fields=id,name,email', function(response) {
	   console.log(response);
       if(vez==1){
       if(local=="cadastro"){
	   if(response.email!=undefined){
            jQuery('#form-email').val(response.email);
           };
		if(response.name!=undefined){
		  jQuery('#form-nome').val(response.name)
          };
       }else if(local=="cad"){
	   if(response.email!=undefined){
           jQuery('#cademail').val(response.email);
           jQuery('.email-signup').show();
           jQuery('.simple-signup').hide();
           
           };
        if(response.name!=undefined){
		  jQuery('#cadnome').val(response.name)
          jQuery('.email-signup').show();
          jQuery('.simple-signup').hide();
          };
       }else if(local==""){
		if(response.email!=undefined){
            jQuery('#email').val(response.email);
            jQuery('#tplogin').val("face");
           };
		if(response.name!=undefined){
		  jQuery('#nome').val(response.name)
          jQuery('#tplogin').val("face");
          };
        }else{
			if(response.email!=undefined){
				jQuery('#'+local+'email').val(response.email);
				jQuery('#'+local+'tplogin').val("face");
			};
			if(response.name!=undefined){
				jQuery('#'+local+'nome').val(response.name)
				jQuery('#'+local+'tplogin').val("face");
			};
        }
		}
	});
}


var faceinit = 0;

 

window.fbAsyncInit = function() {

	//SDK loaded, initialize it

	FB.init({

		appId      : '901806783237809',

		xfbml      : true,

		version    : 'v2.2'

	});

 

	//check user session and refresh it

	FB.getLoginStatus(function(response) {

		faceinit = 1;

	

	   console.log(response);

		if (response.status === 'connected') {

			//user is authorized

			//document.getElementById('loginBtn').style.display = 'none';

			getUserData();

		} else {

			jQuery('#'+local+'tplogin').val("email");

		}

	});

};

 

//load the JavaScript SDK

(function(d, s, id){

	var js, fjs = d.getElementsByTagName(s)[0];

	if (d.getElementById(id)) {return;}

	js = d.createElement(s); js.id = id;

	js.src = "//connect.facebook.net/pt_BR/sdk.js";

	fjs.parentNode.insertBefore(js, fjs);

}(document, 'script', 'facebook-jssdk'));

 

//add event listener to login button



if(document.querySelector('loginBtn')){

document.getElementById('loginBtn').addEventListener('click', function() {

	//do the login

    vez = 1;

	local = "";

	FB.login(function(response) {

	    console.log(response);

		if (response.authResponse) {

			document.getElementById('loginBtn').style.display = 'none';

			getUserData();

		}

	}, {scope: 'email,public_profile', return_scopes: true});

}, false);

}



function modalsface(id,loc) {

	//do the login

    vez = 1;

	local = loc;

	FB.login(function(response) {

	    console.log(response);

		if (response.authResponse) {

			//document.getElementById(id).style.display = 'none';

            if(loc=="top"){
                getUserLogin();                
            }else{
                getUserData();    
            }

			

		}

	}, {scope: 'email,public_profile', return_scopes: true});

};


function fechadepo(){
    
    jQuery('#soap-popupbox').hide();
    jQuery('#modal_envia_depo').modal();
    
    
    
}


function recover_pass(e){

	e.preventDefault();



	var email = jQuery('#rmform-email').val();

	jQuery('.modal-input').css('border', '1px solid #475b9b');

	jQuery('.modal-input-error').remove();

	

	if(email==""){ 

		jQuery('#rmform-email').focus();

		jQuery('#rmform-email').css('border', '1px solid red');

		jQuery('#rmform-email').after('<span class="modal-input-error mensagens-modal" style="color:red;padding-bottom: 15px;">Por favor informe seu email!</span>');

		return false;

		}

	

	jQuery.ajax

				({

					type: "POST",

                    url: urlplug + "telehelp_ajax.php",

                    data: {acao: "recover", value: email},

					dataType: "json",

                    success: function(msg)

                        {

							if(msg.status){

							

								if(msg.resultado=="noexist"){

									jQuery('#rmform-email').focus();

									jQuery('#rmform-email').css('border', '1px solid red');

									jQuery('#rmform-email').after('<span class="modal-input-error mensagens-modal" style="color:red;padding-bottom: 15px;">Não encontramos este email!</span>');

								}else{

									jQuery('#Modal-Senha').modal('hide');

									jQuery('#abrirmodalsenhacomsucesso').modal('show');

									limpa_form('#pedidos-recover-modal-form');

								}



							}

                        }

		});

	

	

}


