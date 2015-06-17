<?php get_header(); ?>
<section id="content">
	<div id="section-wrapper">
		<div>
			<div id="copy">
				<div>
					<div id="main-blog-post">
						<h1>Blog</h1>
						<?php if(have_posts()) : while(have_posts()) : the_post() ; ?>
						<div class="blog-post">
							<div class="blog-header">
								<?php 	
									if(has_post_thumbnail()){
										the_post_thumbnail();
									}else{
										echo "<img alt='vitalstorm default thumbnail' src='" . get_bloginfo("stylesheet_directory") . "/images/default-thumbnail.png'>";
									}
										 
								?>
							</div>
							<div class="content-copy"> 
								<h3><a href="<?php the_permalink() ; ?>"><?php echo the_title() ; ?></a></h3>
								<p class="blog-author"> by <?php the_author() ; ?> on <?php echo get_the_date() ; ?></p>
								<div class="the_excerpt"><?php echo the_excerpt() ; ?></div> 
							</div>
							<div class="clear"></div>
							
							<div class="sharify-container"><ul><li class="sharify-btn-twitter">
									<a onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;" href="https://twitter.com/intent/tweet?text=UPGRADE: <?php the_title() ; ?> - <?php the_permalink() ; ?>" title="Tweet on Twitter">
										<span class="sharify-icon"><i class="sharify sharify-twitter"></i></span>
										<span class="sharify-title">Tweet</span>
									</a>
								</li><li class="sharify-btn-facebook">
									<a onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;" href="http://www.facebook.com/sharer.php?u=http%3A%2F%2Felements.vitalstorm.com%2Felements%2F_staging%2FBaker_Brothers_WP%2F<?php the_permalink() ; ?>%2F" title="Share on Facebook">
										<span class="sharify-icon"><i class="sharify sharify-facebook"></i></span>
										<span class="sharify-title">Share</span>
									</a>
								</li><li class="sharify-btn-gplus">
									<a onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;" href="http://plus.google.com/share?url=http://elements.vitalstorm.com/elements/_staging/Baker_Brothers_WP/<?php the_permalink() ; ?>/" title="Share on Google+">
										<span class="sharify-icon"><i class="sharify sharify-gplus"></i></span>
										<span class="sharify-title">+1</span>
									</a>
								</li><li class="sharify-btn-pinterest">
									<a onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;" href="http://pinterest.com/pin/create/button/?url=http://elements.vitalstorm.com/elements/_staging/Baker_Brothers_WP/upgrade-baker-brothers-get-fresh/&amp;media=http://elements.vitalstorm.com/elements/_staging/Baker_Brothers_WP/wp-content/uploads/2015/02/iStock_000033733996_Small-150x150.jpg&amp;description=UPGRADE: Baker Brothers Get Fresh - http://elements.vitalstorm.com/elements/_staging/Baker_Brothers_WP/upgrade-baker-brothers-get-fresh/" title="Share on Pinterest">
										<span class="sharify-icon"><i class="sharify sharify-pinterest"></i></span>
										<span class="sharify-title">Pinterest</span>
									</a>
								</li><li class="sharify-btn-linkedin">
									<a onclick="if(!document.getElementById('td_social_networks_buttons')){window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;}" href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?php the_permalink() ; ?>&amp;title=<?php the_title() ; ?>" title="Share on Linkedin">
										<span class="sharify-icon"><i class="sharify sharify-linkedin"></i></span>
										<span class="sharify-title">LinkedIn</span>
									</a>
								</li></ul>
							</div>
						</div>
						<?php endwhile; endif; ?>
						<div><?php echo paginate_links() ; ?></div>
					</div>
				</div>
			</div>
			<?php get_sidebar() ; ?>
			<div class="clear"></div>
		</div>
	</div>
</section>
<?php get_footer();
