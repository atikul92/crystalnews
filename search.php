<?php get_header(); ?>

	<section id="search-result">
		<div class="container">
			<div class="row">
				
				<div class="col-md-8">
					<div class="keyword mb-3">
						<h3>সার্চ সংবাদঃ <?php the_search_query(); ?></h3>
					</div>

					<?php while(have_posts()):the_post();?>
					<div class="result-item">
						<div class="listitem">
							<div class="medialeft">
								<?php the_post_thumbnail(); ?>
							</div>
							<div class="mediabody">
								<a href="#"><p class="cat"><?php the_category(); ?></p></a>
								<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
								<small>৬:৩৩:৫৯, ১৬ মার্চ ২০২০</small>
								<p class="desc"><?php the_excerpt(); ?></p>
								<a href="<?php the_permalink(); ?>" class="read-more">
									<i class="fa fa-angle-double-right"></i>
									বিস্তারিত
								</a>
							</div>
						</div>
					</div>
					<?php endwhile; ?>
					
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>