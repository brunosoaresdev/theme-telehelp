<div id="arquivoscoluna">
<?php dynamic_sidebar('arquivos') ?>
</div>



<div id="pesquisacoluna">
<form role="search" id="searchform" method="post" action="<?php echo site_url()?>/busca">
		<fieldset>
			<input type="text" name="pesquisa" placeholder="Pesquise no Blog" id="pesquisa"/>
		
			<input type="button" onclick="buscazero('pesquisa','searchform')" id="searchsubmit" value="" class="submit"/>
		</fieldset>
	</form>
 <div id="clear"></div>
</div>




<div id="envelhecerbemcolunablog">
<img src="<?php echo get_template_directory_uri (); ?>/images/envelhecer-bem.jpg"  alt="envelhecer-bem" title="Envelhecer Bem">

<a href="<?php echo site_url()?>/envelhecer-bem/">Envelhecer Bem <i class="glyphicon glyphicon-chevron-right"></i></a>
</div>




<div id="postscoluna">

<?php dynamic_sidebar('postcoluna') ?>

</div>





<div id="envelhecerbemcolunablog">
<img src="<?php echo get_template_directory_uri (); ?>/images/jornal-atividades.jpg"  alt="jornal-atividades" title="Jornal Atividade">

<a href="<?php echo site_url()?>/jornal-atividade/">Jornal Atividade <i class="glyphicon glyphicon-chevron-right"></i></a>
</div>



<div id="facebookcoluna">
<div class="fb-page" data-href="https://www.facebook.com/TelehelpOficial/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/TelehelpOficial"><a href="https://www.facebook.com/TelehelpOficial/">Telehelp</a></blockquote></div></div>
</div>