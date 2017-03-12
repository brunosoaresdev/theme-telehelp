<?php 





if ( get_current_user_id() != 10 ) {

add_filter( 'show_admin_bar', '__return_false' );

}



register_sidebar( array (

    'name' => __( 'ARQUIVOS'),

    'id' => 'arquivos',

));



register_sidebar( array (

    'name' => __( 'Post da Coluna'),

    'id' => 'postcoluna',

));



register_sidebar( array (

    'name' => __( 'Fomulario de contato'),

    'id' => 'fomr',

));



if (function_exists('add_theme_support')):

	add_theme_support('post-thumbnails');

endif;



/*estou usando está miniatura na página single.php */

add_image_size('quadropostg', 385, 165, true);



/*estou usando está miniatura na página inicial index.php */

add_image_size('quadropostp', 175, 165, true);



/* retirar logo wordpress */

function wps_admin_bar() {

    global $wp_admin_bar;

    $wp_admin_bar->remove_menu('wp-logo');

    $wp_admin_bar->remove_menu('about');

    $wp_admin_bar->remove_menu('wporg');

    $wp_admin_bar->remove_menu('documentation');

    $wp_admin_bar->remove_menu('support-forums');

    $wp_admin_bar->remove_menu('feedback');

    $wp_admin_bar->remove_menu('view-site');

}

add_action( 'wp_before_admin_bar_render', 'wps_admin_bar' );



/* retirar aviso de atualização */

add_filter( 'pre_site_transient_update_core', create_function( '$a', "return null;" ) );



register_nav_menus( array(

		'como_funciona_topo' => __( 'Como Funciona Topo', '' ),

	) );

	





























register_nav_menus( array(

		'como_funciona_rodape' => __( 'Como Funciona Roda pé', '' ),

	) );

	



























register_nav_menus( array(

		'servicos_topo' => __( 'Serviços Topo', '' ),

	) );



register_nav_menus( array(

		'servicos_rodape' => __( 'Serviços Roda pé', '' ),



) );

	



register_nav_menus( array(

		'sobre_nos_topo' => __( 'Sobre nós Topo', '' ),



	) );



	

register_nav_menus( array(

		'sobre_nos_rodape' => __( 'Sobre nós Roda pé', '' ),



	) );

	

	

register_nav_menus( array(

		'blog_topo' => __( 'Blog e Atividades Topo', '' ),



	) );



	

register_nav_menus( array(

		'blog_rodape' => __( 'Blog e Atividades Topo', '' ),



	) );

	

register_nav_menus( array(

		'lateral' => __( 'Lateral', '' ),



	) );

	

	function fallbackmenu(){ ?>





				  <li>Ir para admin no panel&gt; Aparência&gt; Menus para criar seu menu. Para menus personalizados para o trabalho.</li>





          <?php }  















add_action('wp_enqueue_scripts', 'cssmenumaker_scripts_styles' );



function cssmenumaker_scripts_styles() {







   //wp_enqueue_style( 'cssmenu-styles', get_template_directory_uri() . '/cssmenu/styles.css');







}



function theme_telehelp_scripts() {

	

	wp_enqueue_style( 'bootstrap-min', get_template_directory_uri() . "/css/bootstrap.min.css");

	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . "/css/font-awesome.min.css");

	wp_enqueue_style( 'googleapis', "http://fonts.googleapis.com/css?family=Lato:300,400,700");

	wp_enqueue_style( 'googleapis2', "https://fonts.googleapis.com/css?family=Signika:400,700");

	wp_enqueue_style( 'animate', get_template_directory_uri() . "/css/animate.min.css");

	wp_enqueue_style( 'bxslider', get_template_directory_uri() . "/components/jquery.bxslider/jquery.bxslider.css");

	wp_enqueue_style( 'flexslider', get_template_directory_uri() . "/components/flexslider/flexslider.css");

	wp_enqueue_style( 'main-style', get_template_directory_uri() . "/css/style.css");

	wp_enqueue_style( 'style-tema', get_template_directory_uri() . "/style.css");

	wp_enqueue_style( 'custom', get_template_directory_uri() . "/css/custom.css");

	wp_enqueue_style( 'update', get_template_directory_uri() . "/css/updates.css");

	wp_enqueue_style( 'responsive', get_template_directory_uri() . "/css/responsive.css");

	//wp_enqueue_style( 'nav-wizard', get_template_directory_uri() . "/css/bootstrap-nav-wizard.css");

	wp_enqueue_style( 'woo', get_template_directory_uri() . "/css/woo.css");

	

	wp_enqueue_script( "noconflit", get_template_directory_uri () . "/js/jquery.noconflict.js", array(), false, true );

	wp_enqueue_script( "modernizr", get_template_directory_uri () . "/js/modernizr.2.7.1.min.js", array(), false, true );

	wp_enqueue_script( "migrate", get_template_directory_uri () . "/js/jquery-migrate-1.2.1.min.js", array(), false, true );

	wp_enqueue_script( "placeholder", get_template_directory_uri () . "/js/jquery.placeholder.js", array(), false, true );

	wp_enqueue_script( "jquery-ui", get_template_directory_uri () . "/js/jquery-ui.1.10.4.min.js", array(), false, true );

	// wp_enqueue_script( "bootstrap", get_template_directory_uri () . "/js/bootstrap.min.js", array(), false, true );

	wp_enqueue_script( "bxslider", get_template_directory_uri () . "/components/jquery.bxslider/jquery.bxslider.min.js", array(), false, true );

	wp_enqueue_script( "flexslider", get_template_directory_uri () . "/components/flexslider/jquery.flexslider.js", array(), false, true );

	wp_enqueue_script( "stellar", get_template_directory_uri () . "/js/jquery.stellar.min.js", array(), false, true );

	wp_enqueue_script( "waypoints", get_template_directory_uri () . "/js/waypoints.min.js", array(), false, true );

	wp_enqueue_script( "theme-scripts", get_template_directory_uri () . "/js/theme-scripts.js", array(), false, true );

	wp_enqueue_script( "scripts", get_template_directory_uri () . "/js/scripts.js", array(), false, true );

	wp_enqueue_script( "nicescroll", get_template_directory_uri () . "/js/jquery.nicescroll.min.js", array(), false, true );

	wp_enqueue_script( "person", get_template_directory_uri () . "/js/person.js", array(), false, true );

	wp_enqueue_script( "meiomask", get_template_directory_uri () . "/js/meiomask.js", array(), false, true );
	wp_enqueue_script( "botpag", get_template_directory_uri () . "/js/jquerybootpagmin.js", array(), false, true );

}





add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'wp_enqueue_scripts', 'theme_telehelp_scripts' );





add_filter( 'ot_theme_mode', '__return_true' );

require( trailingslashit( get_template_directory() ) . '/option-tree-master/ot-loader.php' );



class CSS_Menu_Maker_Walker extends Walker {















  var $db_fields = array( 'parent' => 'menu_item_parent', 'id' => 'db_id' );







  







  function start_lvl( &$output, $depth = 0, $args = array() ) {









    $indent = str_repeat("\t", $depth);







    $output .= "\n$indent<ul>\n";







  }







  







  function end_lvl( &$output, $depth = 0, $args = array() ) {







    $indent = str_repeat("\t", $depth);







    $output .= "$indent</ul>\n";







  }







  







  function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {







  







    global $wp_query;







    $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';







    $class_names = $value = ''; 







    $classes = empty( $item->classes ) ? array() : (array) $item->classes;







    







    /* Add active class */







    if(in_array('current-menu-item', $classes)) {







      $classes[] = 'active';







      unset($classes['current-menu-item']);







    }







    







    /* Check for children */







    $children = get_posts(array('post_type' => 'nav_menu_item', 'nopaging' => true, 'numberposts' => 1, 'meta_key' => '_menu_item_menu_item_parent', 'meta_value' => $item->ID));







    if (!empty($children)) {







      $classes[] = 'has-sub';







    }







    







    $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );







    $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';







    







    $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );







    $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';







    







    $output .= $indent . '<li' . $id . $value . $class_names .'>';







    







    $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';







    $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';







    $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';







    $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';







    







    $item_output = $args->before;







    $item_output .= '<a'. $attributes .'><span>';







    $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;







    $item_output .= '</span></a>';







    $item_output .= $args->after;







    







    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );







  }







  







  function end_el( &$output, $item, $depth = 0, $args = array() ) {







    $output .= "</li>\n";







  }







}







// log php errors















@ini_set('log_errors','On'); // enable or disable php error logging (use 'On' or 'Off')















@ini_set('display_errors','Off'); // enable or disable public display of errors (use 'On' or 'Off')















@ini_set('error_log','/home/path/logs/php-errors.log'); // path to server-writable log file































register_taxonomy_for_object_type( 'category', 'page' );





if ( !current_user_can( 'edit_users' ) ) {















  add_action( 'init', create_function( '$a', "remove_action( 'init', 'wp_version_check' );" ), 2 );















  add_filter( 'pre_option_update_core', create_function( '$a', "return null;" ) );















}





function remove_footer_admin () {















	echo '© <a target="_blank" href="http://folhadestylu.com.br/">Folha de Stylu</a> - Desenvolvimento inteligente com padrões web e design';











}



add_filter('admin_footer_text', 'remove_footer_admin');



function telehelp_check_if_user_login() {	
  if (!isset($_SESSION['Login'])) {
  	session_unset();
    // wp_redirect( home_url() );
    // exit;    
    // Redireciona pra home caso o usuário não esteja logado.
    $string = '<script type="text/javascript">';
    $string .= 'window.location = "' . get_home_url() . '"';
    $string .= '</script>';
    echo $string;
  }
}









?>