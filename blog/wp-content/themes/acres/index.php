<?php get_header(); ?>
	<section id="blog" class="">
		<div id="0" class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="row">
					<?php if ( get_query_var('paged') ) { $paged = get_query_var('paged'); } else if ( get_query_var('page') ) {$paged = get_query_var('page'); } else {$paged = 1; }
					$temp = $wp_query;  // re-sets query
					$wp_query = null;   // re-sets query
					$args = array (
						'post_type' => 'post',
						'posts_per_page' =>2,
						'paged' => $paged,
						'order' => 'DESC'

					
					); 									  
					$wp_query = new WP_Query($args);
					if ( $wp_query->have_posts() ) {			
				    $i = 1; while($wp_query->have_posts()) : $wp_query->the_post();?>
					<div class="col-xs-12 col-sm-12 col-md-12 news col-centered">
						<div class="a-post a-post-<?php echo $counter; ?>">
							<h2><?php the_title(); ?></h2>
							<p>Published on <?php echo the_date();?> </p>
							<br/>
							<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
							<div class="box"> 
							<?php if($image[0]!='') { ?>
								<div class="gallery-thumb" style="background-image:url('<?php echo $image[0]; ?>');background-size: cover; height: 300px;"></div> <?php } ?> 
								<?php echo do_shortcode('[supsystic-social-sharing id="1"]') ?>
									<div class="box-body">
									  <?php the_excerpt(); ?>
									  <a class="btn btn-primary btn-sm read-more-btn" href="<?php the_permalink(); ?>">Read More</a>
									<hr class="article-divider"/>			
								</div>
							</div>
						</div>
					</div>
					<?php if ( $i % 3 === 0 ) { echo '</div><div class="row">'; } 
					$i++; endwhile; ?>		
					</div>
					<nav class="pagination">
						<?php echo paginate(); 
						$wp_query = null;
						$wp_query = $temp; // Reset
						?>
					</nav>
			<?php } ?>		
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4 search-column">
					<?php get_sidebar(); ?>                              
				</div>  
		    </div>								
        </div>		
	</section>
<?php get_footer(); ?>
 
