/*
 * Title:   Travelo | Responsive HTML5 Travel Template - Custom Javascript file
 * Author:  http://themeforest.net/user/soaptheme
 */

tjq(document).ready(function() {
    // UI Form Element
});


jQuery(document).ready(function(){
    jQuery("#buscatop i").click(function(){
        jQuery("#buscatop form").toggle();
        jQuery("#buscatop .input-busca").val("");
        jQuery("#buscatop .input-busca").focus();
    })
    
    jQuery("#menumaster li").mouseover(function(){
        jQuery("#buscatop form").hide();
    })
    
    
    
})
//menu abre só quando rola a página
jQuery(function($) {
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
           $('#barrafootermaster').fadeIn();
        } else {
           $('#barrafootermaster').fadeOut();
        }
    });
});

function set_newcity(valor, e){
    e.preventDefault();
    
    if(valor==0){return false;}
    
    
    
    
    jQuery.ajax
				({
					type: "POST",
                    url: urlplug + "telehelp_ajax.php",
                    data: {acao: "setcidades", value: valor},
					dataType: "json",
                    success: function(msg)
                        {
							if(msg.status){
									jQuery('#strongcity').html(msg.html)
								}
							}
                        
        		});
}

function busca_newcity(valor, e){
    if(e!=""){
    e.preventDefault();
    }
    
    jQuery('#selectcidade').html('<option value="0">Carregando...</option>');
    
    jQuery.ajax
				({
					type: "POST",
                    url: urlplug + "telehelp_ajax.php",
                    data: {acao: "cidades", value: valor},
					dataType: "json",
                    success: function(msg)
                        {
							if(msg.status){
									jQuery('#selectcidade').html(msg.html)
								}
							}
                        
        		});
}

function buscazero(a,b){
                                //e.preventDefault();
                                if(jQuery("form#"+b+" #"+a).val()==""){
                                    alert("Digite um termo para a busca!");
                                }else{
                                    jQuery("#"+b).submit();
                                }
                            }