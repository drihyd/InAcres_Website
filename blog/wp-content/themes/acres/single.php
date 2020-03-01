<?php
get_header();
?>
 <section class="p-0 home-slider home-slider-panel">
         <div>
            <div class="slider-wrapper slider-2" style="background: url(<?php
echo get_template_directory_uri();
?>/img/banner_blog_detail.png);background-size:cover;min-height: 519px;background-position: right">
            </div>
         </div>
      </section>
        <section class="breadcrumbs">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <ul class="breadcrumbs-pts text-darkgreen">
                      <li>Blog </li>
                  </ul>
               </div>
            </div>
         </div>
           <img src="<?php
echo get_template_directory_uri();
?>/img/straight-line.png" class="img-fluid">
      </section>
  <section id="blog">
    <div class="container">
       <div class="row">
            <div class="col-sm-12 col-md-5 col-md-push-7 search-column">
                    <?php
        get_sidebar();
?>      
            </div> 
          <div class="col-sm-12 col-md-7 col-md-pull-5 search-column-image">
            <?php
if (have_posts()):
    while (have_posts()):
        the_post();
        setPostViews(get_the_ID());
        $M = get_post_meta(get_the_ID(), 'M', true);
        $d = get_post_meta(get_the_ID(), 'd', true);
?>
       
                <div class="article-thumbnail">
                  <?php
        if (has_post_thumbnail()) { // check if the post has a Post Thumbnail assigned to it.
            the_post_thumbnail('full');
        }
?>  
              </div> 
                
        
               </div>
                  
          
                   <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                     <h2 style="margin-bottom:10px"><?php
        the_title();
?></h2>
              <!--<p>Published on <?php
        echo the_date();
?> </p>-->
              <!--<?php
        echo do_shortcode('[supsystic-social-sharing id="1"]');
?>-->
                <div class="article-content">
                  <?php
        if (the_content() != "")
            echo the_content();
?>
                     <?php //comments_template();  
?>
               </div>
                </div>
                 <div class="blog-leaves-left">
          <img src="<?php
        echo get_template_directory_uri();
?>/img/leaf-1.png" class="img-fluid" width="150px">
      </div>
        <div class="blog-leaves-right">
          <img src="<?php
        echo get_template_directory_uri();
?>/img/leaf-2.png" class="img-fluid" width="150px">
      </div>
          
            <?php
    endwhile;
endif;
?>
                         
            <?php
global $post;
?>
     
      </div>
    
      
      <!--<div class="row margin-top-30">-->
         <!-- <div class="col-sm-12 text-center">-->
            <!--    <a class="btn btn-primary btn-md read-more-btn" href="https://zoiclinics.com/blog/">Back to all articles</a>-->
         <!-- </div>-->
      <!--</div>-->
    <!--/.container-->
  </section>

<?php
get_footer();
?>