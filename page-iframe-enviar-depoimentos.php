<?php 


//var_dump($_SERVER); exit;

$moda = "";

$ur_l = explode( "wp-content" , __FILE__ );
require_once( $ur_l[0] . "wp-load.php" );


$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

if (!$link) {

    die('Năo foi possível conectar: ' . mysql_error());

}else{

	//echo "ok";

}

if (!mysql_select_db(DB_NAME, $link)) {

    echo 'Năo foi possível selecionar o banco de dados';

    //exit;

};

   $urli = "http://" . $_SERVER["HTTP_HOST"] . "";



function applynews($email = ""){
    
    
    if($email<>""){
        
        $rows = mysql_query("
		SELECT * from wp_posts WHERE post_type = 'newsletter' and 
        UPPER(post_title) = '".strtoupper($email)."'
        limit 1
		");
        
        if(mysql_num_rows($rows)==0){
                wp_insert_post(
                array(
                    'comment_status'  => 'closed',
                    'ping_status'   => 'closed',
                    'post_author'   => 1,
                    'post_title'    => $email,
                    'post_status'   => 'publish',
                    'post_type'   => 'newsletter'
                )
                );  
        }
  }
    
}


$ur_l = explode( "wp-content" , __FILE__ );
require_once( $ur_l[0] . "wp-load.php" );

  $erro = 0;
  $mensagem = "";  
  
  if(isset($_POST['acao'])){
    
    if($_POST["nome"]==""){
        $erro = 1;
        $mensagem = ($mensagem == "" ? 'Obrigatório informar seu nome!' : $mensagem );
    }
    
    if($_POST["email"]==""){
        $erro = 1;
        $mensagem = ($mensagem == "" ? 'Informe um e-mail válido!' : $mensagem );
    }
    
    if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false){
        $erro = 1;
        $mensagem = ($mensagem == "" ? 'Informe um e-mail válido!' : $mensagem );
    }
    
    
    if($_POST["depoimento"]==""){
        $erro = 1;
        $mensagem = ($mensagem == "" ? 'Obrigatório preencher seu depoimento!' : $mensagem );
    } 
    
    
    /*
    UPLOAD ARQUIVO QUANDO HOUVER
    */
    
    $target_file = "";
    
    $uploadOk = 0;
    
    if (isset($_FILES['curriculo'])) {
        if (($_FILES['curriculo']['name']<>"")) {
        
        $uploadOk = 1;
        
        $extensoes = array('jpeg','gif','png','jpg');
        
        if ($_FILES["curriculo"]["size"] > (1024 * 1024 * 2)) {
            $erro = 1;
            $mensagem = ($mensagem == "" ? 'Tamanho máximo do upload é 2Mb!' : $mensagem );
            $uploadOk = 0;
        }
        
        $extensao = strtolower(end(explode('.', $_FILES['curriculo']['name'])));
        if (array_search($extensao, $extensoes) === false) {
            $erro = 1;
            $mensagem = ($mensagem == "" ? 'Extensőes permitidas: jpg, gif ou png.!' : $mensagem );
            $uploadOk = 0;
        }
        
        if($uploadOk==1){
    
            /*$upload_dir = wp_upload_dir();
            $target_dir = $upload_dir['path'] . "\\";
            
            $nome_temp = md5(time()) . "." . $extensao;
            $target_file = $target_dir . $nome_temp;
    
            if (move_uploaded_file($_FILES["curriculo"]["tmp_name"], $target_file)) {
               //header('Location:' . $urli . '/iframe-sucesso!'); exit;
               
              
               
               
            } else {
                $erro = 1;
                $mensagem = ($mensagem == "" ? 'Erro '.$_FILES["curriculo"]["error"].' no upload do arquivo!' : $mensagem );
                $uploadOk = 0;
            }*/
            
        }
    
    }
    }
    
    if($erro==0){
        
        
        $post_id = wp_insert_post(
        array(
                'comment_status'  => 'closed',
                'ping_status'   => 'closed',
                'post_author'   => 1,
                'post_title'    => $_POST["nome"] ,
                'post_excerpt' => $_POST["depoimento"],
                'post_status'   => 'pending',
                'post_type'   => 'depoimentos'
        )
            );
            
            if(isset($_POST['news'])){applynews($_POST['email']);}
            
            
          add_post_meta($post_id, 'email', $_POST["email"]);
            
            
if($uploadOk==1){            
            

    require_once( ABSPATH . 'wp-admin/includes/post.php' );
    require_once( ABSPATH . 'wp-admin/includes/image.php' );
    require_once( ABSPATH . 'wp-admin/includes/file.php' );
    require_once( ABSPATH . 'wp-admin/includes/media.php' );


    $attachment_id = media_handle_upload( 'curriculo', $post_id );
    set_post_thumbnail( $post_id, $attachment_id );

}
        
        $rows = mysql_query("INSERT INTO
		  wp_contatos
		  SET
		  wp_data = '".time()."',
		  wp_pagina = '2',
		  wp_tipo = '".($_POST["login"] == "face" ? 1 : 0)."',
		  wp_nome = '".$_POST["nome"]."',
		  wp_email = '".$_POST["email"]."',
		  wp_telefone = '".$_POST["telefone"]."',
		  /*wp_link = '".site_url() . "/" . $target_file."',*/
          wp_cpfc = '".$_POST["cpf"]."',
          wp_txtarea = '".$_POST["txtarea"]."',
          wp_news = '".(isset($_POST["news"]) ? 1 : 0)."'
		");
        
         $moda = '<script>window.parent.fechadepo()</script>';
         
         //var_dump($_SERVER); exit;
    }
    
  }
  
  ?>
  
  <html>
  <head>
  
<link rel='stylesheet' id='bootstrap-min-css'  href='http://www.telehelp.com.br/wp-content/themes/telehelp/css/bootstrap.min.css?ver=4.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-css'  href='http://www.telehelp.com.br/wp-content/themes/telehelp/css/font-awesome.min.css?ver=4.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='googleapis-css'  href='http://fonts.googleapis.com/css?family=Lato%3A300%2C400%2C700&#038;ver=4.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='googleapis2-css'  href='https://fonts.googleapis.com/css?family=Signika%3A400%2C700&#038;ver=4.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='animate-css'  href='http://www.telehelp.com.br/wp-content/themes/telehelp/css/animate.min.css?ver=4.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='bxslider-css'  href='http://www.telehelp.com.br/wp-content/themes/telehelp/components/jquery.bxslider/jquery.bxslider.css?ver=4.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='flexslider-css'  href='http://www.telehelp.com.br/wp-content/themes/telehelp/components/flexslider/flexslider.css?ver=4.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='main-style-css'  href='http://www.telehelp.com.br/wp-content/themes/telehelp/css/style.css?ver=4.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='style-tema-css'  href='http://www.telehelp.com.br/wp-content/themes/telehelp/style.css?ver=4.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='custom-css'  href='http://www.telehelp.com.br/wp-content/themes/telehelp/css/custom.css?ver=4.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='update-css'  href='http://www.telehelp.com.br/wp-content/themes/telehelp/css/updates.css?ver=4.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='responsive-css'  href='http://www.telehelp.com.br/wp-content/themes/telehelp/css/responsive.css?ver=4.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='woo-css'  href='http://www.telehelp.com.br/wp-content/themes/telehelp/css/woo.css?ver=4.1.1' type='text/css' media='all' />
<script type='text/javascript' src='<http://www.telehelp.com.br/wp-includes/js/jquery/jquery.js?ver=1.11.1'></script>
<!--<script type='text/javascript' src='<?php echo $urli?>/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.2.1'></script>-->
<script type='text/javascript' src='<http://www.telehelp.com.br/wp-content/themes/telehelp/js/persondepo.js'></script>
  
  <style>
  
  a.button.login-facebook:hover {
    background: #1c284f;
    }

	.login-social a {
    background: #155c92;
    width: 100%;
    height: 36px;
    line-height: 36px;
    margin-bottom: 10px;
    font-size: 1.3333em;
    font-weight: 400;
    text-align: left;
    padding-left: 20px;
    letter-spacing: 0.04em;
}

.login-social {
    padding: 0px 15px;
}

.login-social a i {
    font-size: 1.5em;
    margin-right: 36px;
    width: 20px;
    float: left;
    display: block;
    padding-top: 6px;
}
  
.fileUpload input.upload {
    position: absolute;
    font-family: 'Signika', sans-serif !important;
    top: 0;
    right: 0;
    margin: 0;
    padding: 0;
    font-size: 14px;
    cursor: pointer;
    opacity: 0;
    filter: alpha(opacity=0);
}

.fileUpload {
    padding: 3px 4px !important;
    border: none !important;
    font-weight: normal !important;
    color: #747374 !important;
    background: #e3e2e3 !important;
}
.fileUpload {
    position: relative;
    overflow: hidden;
}  

.erro-iframe {
    height: 30px;
    margin: 0px;
    color: red;
    border: 1px #FFFFFF solid;
    margin-left: 15px;
    margin-right: 15px;
    margin-bottom: 5px;
    line-height: 25px;
    text-align: center;
}

.checkbox, .radio {
    position: relative;
    margin-top: 0;
    line-height: 20px;
}

.checkbox input[type="checkbox"] {
    position: relative;
    z-index: 1;
    filter: alpha(opacity=0);
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
    -moz-opacity: 0;
    -khtml-opacity: 0;
    opacity: 0;
}
  
  </style>
  
  </head>
  
  <body>
  
  <div id="fomrcadastrodepóimentos" class="">


<?php echo $moda ?>
                <div style="<?php echo ($mensagem<>"" ? 'border: 1px red solid;' : "border: 1px #FFFFFF solid;")?>" class="erro-iframe"><?php echo utf8_encode($mensagem); ?></div>

               <div class="login-social">
                    <a href="#" onclick="modalsface('btn','depo')" class="button login-facebook"><i class="soap-icon-facebook"></i>Acesse Com <strong>Facebook</strong></a>
                    
                </div>
                <div class="todosinputs">
                    <form method="post" id="depo" action="<?php echo "http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] ;?>" enctype="multipart/form-data">
                    
                        <input type="hidden" name="pagina" value="enviar-depo">
                        <input type="hidden" name="acao" value="form-site">
                        <input type="hidden" name="url" value="">
                        <input type="hidden" name="login" id="depotplogin" value="email">
                        <input type="hidden" name="arquivos" id="arquivos" value="false">
                    
                        <div class="form-group">
                        	<label>Seu Nome:</label>
                            <input type="text" class="input-text full-width" name="nome" id="deponome" value="<?php echo $_POST['nome']; ?>" placeholder="Digite seu Nome" required>
                        </div>
                        <div class="form-group">
                        <label>Seu E-mail:</label>
                            <input type="text" class="input-text full-width" name="email" id="depoemail" value="<?php echo $_POST['email']; ?>" placeholder="Digite seu E-mail" required>
                        </div>
                        <div class="form-group">
                        <label>Seu Depoimento</label>
                            <textarea type="text" class="input-text full-width" name="depoimento"  placeholder="Digite seu depoimento" required><?php echo $_POST['depoimento']; ?></textarea>
                        </div>
                        <div class="form-group" id="minhafoto">
                        <label>Sua Foto:</label>
                        
                        <div class="fileUpload btn btn-primary">
                            <span>Selecionar Arquivo</span>
                            <input type="file" id="curriculo" name="curriculo" class="upload">
						</div>
                        
                        <li>(.JPG .GIF .PNG   TAM. MÁx.: 2MB)</li>
                            
                        </div>
                        
                       
                        <div class="form-group">
                            <div class="chk">
                                    <input style="float:left;" name="news" type="checkbox">
                                    <span>Gostaria de receber novidades sobre a Telehelp.</span>
                            </div>
                        </div>
                        <div class="form-group">
                            
                        </div>
                        <button type="submit" class="full-width btn-medium">Enviar depoimento ></button>
                    </form>
                </div>
                
              
</div>
  
  </body>
  </html>
  