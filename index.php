<?php get_header(); ?>

	<section id="lead-news">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-3 mb-3">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#tab-1">সর্বশেষ</a></li>
						<li><a href="#tab-2">জনপ্রিয়</a></li>
					</ul>
					<div class="tab-content">
						<div id="tab-1" class="tab-pane active">

							<?php $the_query = new WP_Query( array('posts_per_page' => 6 ) ); ?>
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
						<div id="tab-2" class="tab-pane">
							
							<?php query_posts('meta_key=post_views_count&orderby=meta_value_num&order=DESC&posts_per_page=6');?>
							<?php while(have_posts()):the_post(); ?>
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
				<div class="col-sm-12 col-md-12 col-lg-5 mb-3" id="LeadNewsBox">

					<?php $the_query = new WP_Query( array('posts_per_page' => 6 ) ); ?>
					<?php while($the_query->have_posts()):$the_query->the_post(); ?>
					<div class="slider">
						<?php the_post_thumbnail(); ?>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					</div>
					<?php endwhile; ?>

				</div>
				<div class="col-sm-12 col-md-12 col-lg-4 right">
					<div class="panel">
						<div class="panel-heading">
							<a href="#">জাতীয়</a>
						</div>

						<?php $the_query = new WP_Query( array( 'category_name' => 'জাতীয়', 'posts_per_page' => 1 ) ); ?>
						<?php while($the_query->have_posts()):$the_query->the_post(); ?>
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail(); ?>
						</a>
						<h2>
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h2>
						<?php endwhile; ?>

						<div class="probas-list">

							<?php $the_query = new WP_Query( array( 'category_name' => 'জাতীয়', 'posts_per_page' => 2, 'offset' => 1 ) ); ?>
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
			</div><!--row-->
		</div><!--container-->
	</section><!-- lead-news -->

	<section id="special-news">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-3 mb-3">
					<div class="panel">
						<div class="panel-heading">
							<a href="#">রাজনীতি</a>
						</div>
						<div class="saradesh-list">

							<?php $the_query = new WP_Query( array( 'category_name' => 'রাজনীতি', 'posts_per_page' => 7 ) ); ?>
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
					</div><!-- panel -->
				</div>
				<div class="col-sm-12 col-md-12 col-lg-6 mb-2" id="middle-column">
					<div class="row">

						<?php $the_query = new WP_Query( array('posts_per_page' => 6 ) ); ?>
						<?php while($the_query->have_posts()):$the_query->the_post(); ?>
						<div class="col-sm-6 col-md-6">
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail(); ?>
							</a>
							<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						</div>
						<?php endwhile; ?>

					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-3">
					<div class="panel">
						<div class="panel-heading">
							<a href="#">ইসলাম</a>
						</div>
						<div class="sylet-list">

							<?php $the_query = new WP_Query( array( 'category_name' => 'ইসলাম', 'posts_per_page' => 6 ) ); ?>
							<?php while($the_query->have_posts()):$the_query->the_post();?>
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
					</div><!-- panel -->
				</div>
			</div>
		</div>
	</section>

	<section id="large-sec">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-9">
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-6 mb-3">
							<div class="panel-heading">
								<a href="#">আন্তর্জাতিক</a>
							</div>
							<div class="row">
								<div class="col-sm-12 col-md-12 col-lg-6">

									<?php $the_query = new WP_Query( array( 'category_name' => 'আন্তর্জাতিক', 'posts_per_page' => 1 ) ); ?>
									<?php while($the_query->have_posts()):$the_query->the_post(); ?>
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
									<?php endwhile; ?>

								</div>
								<div class="col-sm-12 col-md-12 col-lg-6">
									<div class="multiple-post">

										<?php $the_query = new WP_Query( array( 'category_name' => 'আন্তর্জাতিক', 'posts_per_page' => 5, 'offset' => 1 ) ); ?>
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
						<div class="col-sm-12 col-md-12 col-lg-6">
							<div class="panel-heading">
								<a href="#">খেলাধুলা</a>
							</div>
							<div class="row">
								<div class="col-sm-12 col-md-12 col-lg-6">

									<?php $the_query = new WP_Query( array( 'category_name' => 'খেলাধুলা', 'posts_per_page' => 1 ) ); ?>
									<?php while($the_query->have_posts()):$the_query->the_post(); ?>
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
									<?php endwhile; ?>

								</div>
								<div class="col-sm-12 col-md-12 col-lg-6">
									<div class="multiple-post">

										<?php $the_query = new WP_Query( array( 'category_name' => 'খেলাধুলা', 'posts_per_page' => 5, 'offset' => 1 ) ); ?>
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
					</div><!-- row -->
					
					<div class="row mt-3">
						<div class="col-sm-12 col-md-12 col-lg-6 mb-3">
							<div class="panel-heading">
								<a href="#">তথ্য প্রযুক্তি</a>
							</div>
							<div class="row">
								<div class="col-sm-12 col-md-12 col-lg-6">

									<?php $the_query = new WP_Query(array('category_name' => 'তথ্য-প্রযুক্তি', 'posts_per_page' => 1)); ?>
									<?php while($the_query->have_posts()):$the_query->the_post(); ?>
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
									<?php endwhile; ?>

								</div>
								<div class="col-sm-12 col-md-12 col-lg-6">
									<div class="multiple-post">

										<?php $the_query = new WP_Query(array('category_name' => 'তথ্য-প্রযুক্তি', 'posts_per_page' => 5, 'offset' => 1)); ?>
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
						<div class="col-sm-12 col-md-12 col-lg-6">
							<div class="panel-heading">
								<a href="#">শিক্ষা</a>
							</div>
							<div class="row">
								<div class="col-sm-12 col-md-12 col-lg-6">

									<?php $the_query = new WP_Query(array('category_name' => 'শিক্ষা', 'posts_per_page' => 1)); ?>
									<?php while($the_query->have_posts()):$the_query->the_post(); ?>
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
									<?php endwhile; ?>

								</div>
								<div class="col-sm-12 col-md-12 col-lg-6">
									<div class="multiple-post">

										<?php $the_query = new WP_Query(array('category_name' => 'শিক্ষা', 'posts_per_page' => 5, 'offset' => 1)); ?>
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
					</div><!-- row -->
				</div>
				<div class="col-sm-12 col-md-12 col-lg-3">
					<div class="exclusive">
						<div class="panel-heading">
							<a href="#"> এক্সক্লুসিভ</a>
						</div>
						<div class="exclusive-item">

							<?php $the_query = new WP_Query(array('posts_per_page' => 12)); ?>
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
					<div class="img-slider">
						
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="last-cat-boxs">
		<div class="container">
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-3">
							<div class="panel-heading">
								<a href="#">লাইফস্টাইল</a>
							</div>
							<div class="content">

								<?php $the_query = new WP_Query(array('category_name' => 'লাইফস্টাইল', 'posts_per_page' => 1)); ?>
								<?php while($the_query->have_posts()):$the_query->the_post(); ?>
								<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail(); ?>
								</a>
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								<?php endwhile; ?>

								<ul>

									<?php $the_query = new WP_Query(array('category_name' => 'লাইফস্টাইল', 'posts_per_page' => 3, 'offset' => 1)); ?>
									<?php while($the_query->have_posts()):$the_query->the_post(); ?>
									<li>
										<i class="fa fa-angle-double-right"></i>
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									</li>
									<?php endwhile; ?>

								</ul>
							</div>
						</div>
						<div class="col-sm-12 col-md-12 col-lg-3">
							<div class="panel-heading">
								<a href="#">বিনোদন</a>
							</div>
							<div class="content">

								<?php $the_query = new WP_Query(array('category_name' => 'বিনোদন', 'posts_per_page' => 1)); ?>
								<?php while($the_query->have_posts()):$the_query->the_post(); ?>
								<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail(); ?>
								</a>
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								<?php endwhile; ?>

								<ul>

									<?php $the_query = new WP_Query(array('category_name' => 'বিনোদন', 'posts_per_page' => 3, 'offset' => 1)); ?>
									<?php while($the_query->have_posts()):$the_query->the_post(); ?>
									<li>
										<i class="fa fa-angle-double-right"></i>
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									</li>
									<?php endwhile; ?>

								</ul>
							</div>
						</div>
						<div class="col-sm-12 col-md-12 col-lg-3">
							<div class="panel-heading">
								<a href="#">আইন আদালত</a>
							</div>
							<div class="content">

								<?php $the_query = new WP_Query(array('category_name' => 'আইন-আদালত', 'posts_per_page' => 1)); ?>
								<?php while($the_query->have_posts()):$the_query->the_post(); ?>
								<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail(); ?>
								</a>
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								<?php endwhile; ?>

								<ul>

									<?php $the_query = new WP_Query(array('category_name' => 'আইন-আদালত', 'posts_per_page' => 3, 'offset' => 1)); ?>
									<?php while($the_query->have_posts()):$the_query->the_post(); ?>
									<li>
										<i class="fa fa-angle-double-right"></i>
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									</li>
									<?php endwhile; ?>

								</ul>
							</div>
						</div>
						<div class="col-sm-12 col-md-12 col-lg-3">
							<div class="panel-heading">
								<a href="#">অন্যান্য</a>
							</div>
							<div class="content">

								<?php $the_query = new WP_Query(array('category_name' => 'অন্যান্য', 'posts_per_page' => 1)); ?>
								<?php while($the_query->have_posts()):$the_query->the_post(); ?>
								<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail(); ?>
								</a>
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								<?php endwhile; ?>

								<ul>

									<?php $the_query = new WP_Query(array('category_name' => 'অন্যান্য', 'posts_per_page' => 3, 'offset' => 1)); ?>
									<?php while($the_query->have_posts()):$the_query->the_post(); ?>
									<li>
										<i class="fa fa-angle-double-right"></i>
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									</li>
									<?php endwhile; ?>

								</ul>
							</div>
						</div>
					</div><!-- row -->
		</div>
	</section><!-- last-cat-boxs -->

<?php get_footer(); ?>