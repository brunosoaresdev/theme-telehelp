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

              the_category('title_li=');

              if (is_single()) {

                echo " » ";

                the_title();

              }

            } else if (is_page()) {

              echo the_title();

            }

          }

        }

        ?>




        <?php if (have_posts()):

        the_post();
        the_breadcrumb(); ?>


      </div>
      <div id="titulodapagina">

       <h1> <?php the_title(); ?></h1>
     </div>

   </div>

   <div id="subtitulopgaina">

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

<?php // echo do_shortcode('[fbcomments url='.the_permalink().' width="375" count="off" num="3" countmsg="wonderful comments!"]'); ?>

<?php the_content(); ?>
<?php endif; ?>

<div id="corpopagemeio" class="atendimentos-reias">

  <div id="menuleft">
   <?php include(TEMPLATEPATH .'/menu-blog.php');  ?>
 </div>

 <div id="contedorigth">
   <div id="terceirotitulo">
    <h2 class="title-default">Últimas Notícias para você</h2>
  </div>

  <div id="conteudonoticiasrecentes">

    <?php
    $wp_query = new WP_Query();
    query_posts(
      array(
        'post_type' => 'post',
        'showposts' => 5,
        'post_per_page' => 5,
        'paged'=>$paged
        )
      );

      ?>

      <?php if(have_posts()): ?>
        <?php  while ($wp_query -> have_posts()) :  ?>

          <?php $wp_query -> the_post(); ?>

          <div id="linhadapostagem">
            <div id="titulolinhadapostagem">
              <span><?php the_time('d/m/Y') ?></span>
              <h2><a href="<?=get_permalink()?>"><?php the_title(); ?></a></h2>
              <div id="qtdcomentarios">
                <span class="fb-comments-count" data-href="<?php echo the_permalink() ?>"></span>
              </div>
              <div id="clear"></div>
            </div>
            <div id="conteudoresumopost">
              <?php
                $content = apply_filters( 'the_content', the_excerpt());
                print_r($content);
              ?>
            </div>
            <div id="linhacompartilhe">
              <label>Compartilhe</label>
              <li>
                <div class="fb-like"></div>
              </li>
              <li>
                <a href="javascript:void()" title="Clique aqui!" onclick="window.open('http://www.facebook.com/share.php?u=<?php the_permalink(); ?>&title=<?php the_title(); ?>&description=<?php  $facebook = get_the_content();
                  $facebookk = substr(strip_tags($facebook), 0, 120).'...';
                  echo $facebookk;
                  ?>', 'Página', 'STATUS=YES, TOOLBAR=NO, LOCATION=NO, MENUBAR=NO, DIRECTORIES=NO, RESISABLE=NO, SCROLLBARS=NO, TOP=40, LEFT=100, WIDTH=650, HEIGHT=530');"  title="Compartilhar <?php the_title(); ?>" target="_blank">Facebook</a>
                </li>
                <li>
                  <a href="javascript:void()" title="Clique aqui!" onclick="window.open('http://twitter.com/home?status=<?php the_title(); ?>+<?php the_permalink(); ?>', 'Página', 'STATUS=YES, TOOLBAR=NO, LOCATION=NO, MENUBAR=NO, DIRECTORIES=NO, RESISABLE=NO, SCROLLBARS=NO, TOP=40, LEFT=100, WIDTH=650, HEIGHT=530');" href="" title="Compartilhar <?php the_title(); ?>" target="_blank">Twitter</a>
                </li>
                <li>
                  <a href="javascript:void()" title="Clique aqui!" onclick="window.open('https://plus.google.com/share?url=<?php the_permalink(); ?>', 'Página', 'STATUS=YES, TOOLBAR=NO, LOCATION=NO, MENUBAR=NO, DIRECTORIES=NO, RESISABLE=NO, SCROLLBARS=NO, TOP=40, LEFT=100, WIDTH=650, HEIGHT=530');" href="" title="Compartilhar <?php the_title(); ?>" target="_blank">Google +</a>

                </li>
                <li>
                  <a href="javascript:void()" title="Clique aqui!" onclick="window.open('http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&source=<?php bloginfo('name'); ?>', 'Página', 'STATUS=YES, TOOLBAR=NO, LOCATION=NO, MENUBAR=NO, DIRECTORIES=NO, RESISABLE=NO, SCROLLBARS=NO, TOP=40, LEFT=100, WIDTH=650, HEIGHT=530');" href="" title="Compartilhar <?php the_title(); ?>" target="_blank">Linkedin</a>
                </li>
                <li><a href="<?php the_permalink() ?>/#facebookcoluna">Comentários</a></li>
                <div id="clear"></div>
              </div>

              <div id="tagsdopost">
                <?php echo ucwords(strip_tags(get_the_tag_list('<p>Tags: ',', ','</p>')));?>
              </div>
            </div>

          <?php endwhile ?>
        <?php endif ?>

        <div id="paginacao">
      <!--<div class="prev">
        <?php //previous_posts_link('<i class="glyphicon glyphicon-chevron-left"></i> VOLTAR') ?>
      </div>-->
      <?php the_posts_pagination( array(
       'mid_size'  => 3 ,
       'screen_reader_text' => "",
       'next_text' => __( 'PRÓXIMA <i class="glyphicon glyphicon-chevron-right"></i>', 'textdomain' ),
       'prev_text' => __( '<i class="glyphicon glyphicon-chevron-left"></i> VOLTAR', 'textdomain' )
       ) );?>
      <!--<div class="next">
        <?php //next_posts_link('PRÓXIMA <i class="glyphicon glyphicon-chevron-right"></i>') ?>
      </div> -->
    </div>
  </div>

  <div id="colunablog">
    <?php include(TEMPLATEPATH .'/coluna-blog.php');  ?>
  </div>

  <div id="clear"></div>
  <div id="vejanossosplanos">
    <div class="row">
      <div class="col-md-6"></div>
      <div class="col-md-6">
        <h2>Contrate agora o TeleHelp Aviso</h2>
        <a href="<?php echo site_url()?>/telehelpaviso">saiba mais <i class="glyphicon glyphicon-chevron-right"></i></a>
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
        Como Funciona
      </li>
      <li>
        Entenda melhor como funcionam os serviços de teleassistência da TeleHelp e veja como conseguir ajuda imediata ao simples toque de um botão.
        <a href="<?php echo site_url()?>/index.php/como-funciona/">saiba mais <i class="glyphicon glyphicon-chevron-right"></i></a>
      </li>
    </div>

    <div class="col-md-6">
      <li>
        <img src="<?php echo get_template_directory_uri (); ?>/images/tb12.png" alt="servicos" title="Serviços" /><br />
        Serviços
      </li>
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
<div id='sm-bounce' data-scope='email' style='display:none' ></div>