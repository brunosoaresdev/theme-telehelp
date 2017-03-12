<script src="<?php echo get_template_directory_uri (); ?>/script/jquery-1.11.1.js"></script>
<script src="<?php echo get_template_directory_uri (); ?>/script/jquery.mousewheel-3.1.12.js"></script>
<script src="<?php echo get_template_directory_uri (); ?>/script/jquery.jcarousellite.js"></script>
<div id="jcl-demo">

    <div class="custom-container externalControl">
       
       <div style="width: 676px;margin:auto;position: relative;">
        <a href="#" id="prevrevista" class="prev">&lsaquo;</a>
        <div class="carousel">
            <ul>
            
<?php 
 $wp_query = new WP_Query();
 query_posts( array( 'post_type' => 'revista', 'showposts' => 150 ));
 
 $tot_al = $wp_query->post_count;
 
 if(have_posts()):
 while ($wp_query -> have_posts()) : $wp_query -> the_post(); ?>
                <li><img src="<?php the_field('imagem',$post->ID) ?>">
                	<a href="<?php the_field('arquivo',$post->ID) ?>">download (.pdf)</a>
                </li>
<?php
    endwhile; 
    endif;
 ?>            
                

                
                
                
            </ul>
        </div>
        
        <a href="#" id="nextrevista" class="next">&rsaquo;</a>
        
        <div class="clear"></div>
        </div>
<div id="paginacao" class="paginacarevista">
            
            <?php 
            
            for($a=1; $a<= $tot_al; $a++){
                echo ' <a href="#" class="go '.$a.'">'.$a.'</a>';
                
            }
            
            ?>
            
           
            
            
        </div>
        
    </div>
    </div>

          


    <script type="text/javascript">
        jQuery(function() {
            jQuery(".externalControl .carousel").jCarouselLite({
                visible: 3,
                start: 0,
                btnNext: ".externalControl .next",
                btnPrev: ".externalControl .prev",
                btnGo: [".externalControl .1", ".externalControl .2",
                    ".externalControl .3", ".externalControl .4",
                    ".externalControl .5", ".externalControl .6",
                    ".externalControl .7", ".externalControl .8",
                    ".externalControl .9", ".externalControl .10",
                    ".externalControl .11", ".externalControl .12"]
            });
        });
    </script>

