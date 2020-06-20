<?php get_header(); ?>

	<section id="single-post">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="post-header">
						<div class="breadcrumb">
							<?php get_breadcrumb(); ?>
						</div>
						<h1><?php the_title(); ?></h1>
						<hr>
						<div class="reporter">
							<img src="img/pic (3).jpg" alt="">
							<p>রাজন, ময়মনসিং, বাংলাদেশ</p>
							<small>
								<i class="fa fa-clock-o"></i>
								 প্রকাশিত হয়েছে : <?php the_time();?>, <?php echo get_the_date(); ?>
							</small>
						</div>
						<hr>
					</div>

					<?php while(have_posts()):the_post(); ?>
					<div class="post-content">
						<?php the_post_thumbnail(); ?>
						<p><?php the_content(); ?></p>
					</div>
					<?php setPostViews(get_the_ID()); ?>
					<?php endwhile; ?>

					<div class="related-post">
						<div class="panel-heading">
							<a href="#">এই বিভাগের আরও খবর</a>
						</div>
						<div class="row">



							<?php
							$args = array(
								'posts_per_page' => 6,
								'post__not_in'   => array( get_the_ID() ), // Exclude current post
								'no_found_rows'  => true, // We don't ned pagination so this speeds up the query
							);
							// Check for current post category and add tax_query to the query arguments
							$cats = wp_get_post_terms( get_the_ID(), 'category' ); 
							$cats_ids = array();  
							foreach( $cats as $wpex_related_cat ) {
								$cats_ids[] = $wpex_related_cat->term_id; 
							}
							if ( ! empty( $cats_ids ) ) {
								$args['category__in'] = $cats_ids;
							}
							// Query posts
							$wpex_query = new wp_query( $args );
							?>





							<?php while($wpex_query->have_posts()):$wpex_query->the_post(); ?>
							<div class="col-md-4">
								<?php the_post_thumbnail(); ?>
								<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
							</div>
							<?php endwhile; ?>

						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="elected-news">
						<div class="panel-heading">
							<span>সর্বশেষ সংবাদ</span>
						</div>
						<div class="sorboses-news-list mt-2">

							<?php $the_query = new WP_Query( array( 'posts_per_page' => 10) ); ?>
							<?php while($the_query->have_posts()):$the_query->the_post(); ?>
							<div class="listitem">
								<div class="medialeft">
									<?php the_post_thumbnail(); ?>
								</div>
								<div class="mediabody">
									<p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
								</div>
							</div>
							<?php endwhile; ?>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>