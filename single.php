<?php get_header(); ?>
<section id="content">
	<div id="section-wrapper">
		<div>
			<div id="copy">
				<div>
					<?php if(have_posts()): while(have_posts()) : the_post() ; ?> 
					<h1><?php the_title() ; ?></h1>
					<div>
						<p class="single-author">by <?php the_author() ; ?> on <?php the_date() ; ?></p>
					</div>
					<?php the_content() ; ?>
					<?php endwhile ; endif ; ?> 
				</div>
			</div>
			<?php get_sidebar() ; ?>
			<div class="clear"></div>
		</div>
	</div>
</section>
<?php get_footer();
