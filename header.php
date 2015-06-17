<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!-- Mobile navigation displayed only under screen width of 768px -->
	<?php get_template_part("template_part/mobile","form") ; ?>
	
	<div>
	<!-- 3.1 Header -->
		<header>
			<div id="header-shadow">
				<div id="header-wrapper">
					<div id="company-logo">
						<a href="<?php echo home_url() ; ?>"><img alt="company logo" src="<?php echo get_template_directory_uri(); ?>/images/winstar.png" title="company-logo"></a>
					</div>
					<div id="call-to-action">
						<div>
							<p>CALL <br>NOW!</p>
							<span>123-456-7890</span>
						</div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
			<nav>
				<div id="nav-wrapper">
					<?php wp_nav_menu(array("theme_location" => "primary","container_id" => "primary-navigation")) ;?>
				</div>
				<div class="clear"></div>
			</nav>
			<?php if(!is_front_page()) { ?>
			<section id="banner-outer" style="padding: 0">
				<?php if(is_page(array("dc","baltimore","bethesda","rockville","pasadena","glen-burnie","laurel","upper-marlboro","waldorf","annapolis"))) get_template_part("template_part/banner","cities") ; ?>
			</section>
			<?php } if(is_front_page()) { ?> 
			<!-- 3.3 Banner -->
			<section id="banner-outer">
				<?php get_template_part("template_part/banner","home"); ?>
			</section>
			<?php } ?>
			<section id="banner-interior-page"><!-- use inline css style to over-ride the external style sheet --></section>
			
			<!-- The main form at the top of the page -->
			<?php get_template_part("template_part/main","form"); ?> 
			
			<?php if(is_front_page()) { ?>
			<section id="wrapper">
				<!-- 3.4 Three Reasons -->
				<section id="three-reasons">
					<div id="three-reasons-wrapper">
						<div>
							<div class="reason reason-one">
								<div>
									<a href="<?php echo get_bloginfo() ; ?>/why-winstar/"><img alt="reason-1" class="reason-icon" src="<?php echo get_bloginfo("template_directory") ; ?>/images/timer.png"></a>
									<h3>Quick, Ontime,<br>Same Day Service</h3>
									
								</div>
							</div>
							<div class="reason reason-two">
								<div>
									<a href="<?php echo get_bloginfo() ; ?>/why-winstar/"><img alt="reason-1" class="reason-icon" src="<?php echo get_bloginfo("template_directory") ; ?>/images/guarantee.png"></a>
									<h3>Winstar Guarantee<br>"You're Happy or it's FREE!"</h3>
								</div>
							</div>
							<div class="reason reason-three">
								<div>
									<a href="<?php echo get_bloginfo() ; ?>/why-winstar/"><img alt="reason-1" class="reason-icon" src="<?php echo get_bloginfo("template_directory") ; ?>/images/pricing.png"></a>
									<h3>Straight-forward<br>
									Upfront Pricing</h3>
								</div>
							</div>
							<div class="clear"></div>
						</div>
					</div>
				</section>
				
				<!-- 3.5 Coupon-Review -->
				<section id="coupon-review">
					<div id="coupon-review-wrapper">
						<div>
							<div id="coupon-review-inner">
								<div id="coupon-area">
									<img alt="coupon" src="<?php echo get_template_directory_uri(); ?>/images/coupon.png">
								</div>
								<div id="review-area">
									<div id="testimonials">
										<a href="<?php echo get_bloginfo() ; ?>/testimonials/"><h2>Customer Testimonials</h2></a>
										<div id="test_container">
											<div class="testimonial">
												<img alt="star ratings" src="<?php echo get_bloginfo("template_directory") ; ?>/images/star-ratings.png">
												<div class="testimonial_text">"Showed up on time and got the work right...!" <br /><a href="<?php echo get_bloginfo() ; ?>/testimonials/">(read more)</a></div>
												<h3 class="testimonial_name">-Christopher Mason</h3>
											</div>
											<div class="testimonial">
												<img alt="star ratings" src="<?php echo get_bloginfo("template_directory") ; ?>/images/star-ratings.png">
												<div class="testimonial_text">"They have always been professional...!" <br /><a href="<?php echo get_bloginfo() ; ?>/testimonials/">(read more)</a></div>
												<h3 class="testimonial_name">-Jonya Smalls</h3>
											</div>
											<div class="testimonial">
												<img alt="star ratings" src="<?php echo get_bloginfo("template_directory") ; ?>/images/star-ratings.png">
												<div class="testimonial_text">"Pleasant, fast,  and went over and above...!" <br /><a href="<?php echo get_bloginfo() ; ?>/testimonials/">(read more)</a></div>
												<h3 class="testimonial_name">-Judi Lohn</h3>
											</div>
											<div class="clear"></div>
										</div>
										<div id="t_pagers">
											<a class="pagers"></a>
											<a class="pagers"></a>
											<a class="pagers"></a>
										</div>
									</div>
									<div class="clear"></div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</section>
		<?php } ?>
		</header>
			