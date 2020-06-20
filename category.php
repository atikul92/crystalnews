<?php get_header(); ?>	

	<section id="category">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="col-md-12">
						<div class="breadcrumb">
							<?php get_breadcrumb(); ?>
						</div>
					</div>
					<div class="row mt-4">

						
						<?php while(have_posts()):the_post(); ?>
						<div class="col-md-6 mb-3">
							<div class="single-post">
								<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail(); ?>
								</a>
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								<p><?php the_excerpt(); ?></p>
								<a href="<?php the_permalink(); ?>" class="read-more">
									<i class="fa fa-angle-double-right"></i>
									বিস্তারিত
								</a>
							</div>
						</div>
						<?php endwhile; ?>

					</div>
					<div class="row">

						<?php while(have_posts()):the_post(); ?>
						<div class="col-md-4">
							<div class="single-post">
								<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail(); ?>
								</a>
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							</div>
						</div>
						<?php endwhile; ?>

					</div><!-- row -->
					<div class="pagination-bar">
						<nav aria-label="page navigation example">
							<ul class="pagination justify-content-center">
								<li class="page-item"><a class="page-link" href="#">পূর্ববর্তী</a></li>
								<li class="page-item active"><a class="page-link" href="#">১<span class="sr-only">(current)</span></a></li>
								<li class="page-item"><a class="page-link" href="#">২</a></li>
								<li class="page-item"><a class="page-link" href="#">৩</a></li>
								<li class="page-item"><a class="page-link" href="#">পরবর্তী</a></li>
							</ul>
						</nav>
					</div><!-- pagination-bar -->
				</div><!-- col-md-8 -->
				<div class="col-md-4">
					
				</div>
			</div><!-- row -->
		</div><!-- container -->
	</section>

<?php get_footer(); ?>