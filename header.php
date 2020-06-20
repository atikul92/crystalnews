<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php bloginfo('title'); ?> | <?php bloginfo('description'); ?></title>
	<!--<body oncontextmenu="return false" onselectstart="return false" onkeydown="if ((arguments[0] || window.event).ctrlKey) return false"></body>-->

<script>
  function openSlideMenu(){
    document.getElementById('menu').style.width = '250px';
    document.getElementById('content').style.marginLeft = '250px';
  }
  function closeSlideMenu(){
    document.getElementById('menu').style.width = '0';
    document.getElementById('content').style.marginLeft = '0';
  }
</script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header class="header-style-1">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="logo">

						<?php
							$logo = esc_attr( get_option('crystal_logo') );
						?>
						<a href="<?php home_url(); ?>">
							<div id="logo-picture-img" class="logo-picture" style="background-image: url(<?php print $logo; ?>);">
							</div>
						</a>
						
					</div><!-- .logo -->
				</div><!--col-->
				<div class="col-md-4">
				
				</div><!--col-->
				<div class="col-md-4 mt-3">
					<div class="social-icon">
						
					<?php
						$facebook = esc_attr( get_option('facebook_link') );
						$twitter = esc_attr( get_option('twitter_link') );
						$youtube = esc_attr( get_option('youtube_link') );
						$linkedin = esc_attr( get_option('linkedin_link') );
					?>
						<span class="fa-stack">
						  <i class="fa fa-circle fa-stack-2x"></i>
						  <a href="https://www.facebook.com/<?php echo $facebook; ?>" target="_blank"><i class="fa fa-facebook fa-stack-1x fa-inverse"></i></a>
						</span>
						<span class="fa-stack">
						  <i class="fa fa-circle fa-stack-2x"></i>
						  <a href="https://twitter.com/<?php echo $twitter; ?>" target="_blank"><i class="fa fa-twitter fa-stack-1x fa-inverse"></i></a>
						</span>
						<span class="fa-stack">
						  <i class="fa fa-circle fa-stack-2x"></i>
						  <a href="https://www.youtube.com/<?php echo $youtube; ?>" target="_blank"><i class="fa fa-youtube fa-stack-1x fa-inverse"></i></a>
						</span>
						<span class="fa-stack">
						  <i class="fa fa-circle fa-stack-2x"></i>
						  <a href="https://www.linkedin.com/<?php echo $linkedin; ?>" target="_blank"><i class="fa fa-linkedin fa-stack-1x fa-inverse"></i></a>
						</span>
					</div>
					
					<form method="get" action="<?php echo home_url( '/' ); ?>">
						<input type="search" name="s" value="<?php the_search_query(); ?>" placeholder=" অনুসন্ধান" />
						<button type="submit"><i class="fa fa-search"></i></button>
					</form>
					
					<div class="dateline">
						<div class="eng-date">
							<?php echo current_time( 'j F Y' ) .'&nbsp'; ?>
						</div>
						<div class="bn-date">
							<?php
							include_once 'inc/class.banglaDate.php';
							$bn = new BanglaDate(time(), 0);
							$date = $bn->get_date();
							$string=implode(", ",$date);
							echo '| '.$string;
							?>
							বঙ্গাব্দ
						</div>
					</div>
					
				</div><!--col-->


				
				<div class="main-menu">
					<?php
					wp_nav_menu(array(
						'theme_location'	=> 'header-menu'
					));
					?>
					
				</div>







				<div id="content">
					<span class="slide">
						<a href="#" onclick="openSlideMenu()">
							<i class="fa fa-bars"></i>
						</a>
					</span>

					<div id="menu" class="nav">
						<a href="#" class="close" onclick="closeSlideMenu()">
							<i class="fa fa-times"></i>
						</a>

						<?php
					wp_nav_menu(array(
						'theme_location'	=> 'header-menu'
					))
					?>

					</div>	
				</div>

			</div><!--row-->
		</div><!--container-->
	</header>