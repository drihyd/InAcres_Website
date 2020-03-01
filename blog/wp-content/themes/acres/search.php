<?php get_header(); ?>
    <section class="p-0 home-slider home-slider-panel">
         <div>
            <div class="slider-wrapper slider-2" style="background: url(<?php echo get_template_directory_uri();?>/img/InAcres-story-banner.png);background-size:cover;min-height: 519px;background-position: right">
            </div>
         </div>
      </section>
        <section class="breadcrumbs">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <ul class="breadcrumbs-pts text-darkgreen">
                    
                     
                     <li> Blog </li>
                      <li>// Blog Category</li>
                  </ul>
               </div>
            </div>
         </div>
           <img src="<?php echo get_template_directory_uri();?>/img/straight-line.png" class="img-fluid">
      </section>
	<section id="blog" class="gallery-showcase what-happening-section">
		<div class="container">
			<div id="0" class="row">
				<div class="col-md-8">
					<h2 class="violet">Search Results</h2>
				</div>
                <div class="col-md-4 search-column">
                        <form method="get" id="searchform" class="form-inline margin-top-20" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
                            <input type="text" class="form-control input-lg home-search-input" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s" placeholder="Search for an article">
							 <!--<input type="submit" name="submit" id="searchsubmit" class="btn btn-lg about-btn" value="<?php esc_attr_e( 'Submit', 'shape' ); ?>" />-->
							 <i class="fa fa-search search-bar"></i>
                        </form>                            
                    </div>
                </div>
			</div>
		<div class="container">
        <div class="row margin-top-30">
            <?php $i = 1; while(have_posts()) : the_post();?>
                <div class="news col-md-8 col-centered">
                    <div class="a-post a-post-<?php echo $counter; ?>">
                                   <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                                    <div class="gallery-box"> 
                                        <?php if($image[0]!='') { ?>
                                        <div class="gallery-thumb" style="background-image:url('<?php echo $image[0]; ?>');background-size: cover; height: 200px;"></div> <?php } ?>
                                        <?php //the_post_thumbnail( 'full' , array('class' => 'homepageimage'));
                                        ?>    
                    <div class="gallery-box-body pt-4">  
                      <h4 class="violet"><b><?php the_title(); ?></b></h4>
                      <?php the_excerpt(); ?>
                      <a class="btn btn-sm read-more-btn" href="<?php the_permalink(); ?>">Read More</a>
                    </div>
                      </div>
                  </div>
                </div>
                <?php if ( $i % 3 === 0 ) { echo '</div><div class="row">'; } ?>
            <?php $i++; endwhile; wp_reset_query(); ?>
        </div>

        <nav class="pagination">
          <?php pagination_bar(); ?>
          </nav>

                </div>
		
		
	</section>

<?php get_footer(); ?>
 
