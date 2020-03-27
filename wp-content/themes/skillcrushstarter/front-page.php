<?php
/**
 * The template for the homepage
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 2.0
 */

get_header(); ?>

<section class="home-page">
	<div class="main-content">
		<div class="content">
			<?php while ( have_posts() ): the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>

					<a href="<?php echo site_url('/?page_id=10/'); ?>" class="btn">BOWIE IN WORDS</a>

				<div class="social-btns">  <!-- populate or remove as many of these as you want -->
					<a href="https://twitter.com/jmccormack33" class="soc-icon tw"><span class="screen-reader-text">Twitter</span></a>
					<a href="https://www.facebook.com/jessica.c.mccormack" class="soc-icon fb"><span class="screen-reader-text">Facebook</span></a>
					<a href="https://www.linkedin.com/in/jessmccormack/" class="soc-icon ln"><span class="screen-reader-text">LinkedIn</span></a>
					<a href="https://dribbble.com/jmccormack33" class="soc-icon db"><span class="screen-reader-text">Dribbble</span></a>
					<a href="https://github.com/jess-mccormack" class="soc-icon gh"><span class="screen-reader-text">GitHub</span></a>
					<a href="https://www.instagram.com/jmccormack33/" class="soc-icon in"><span class="screen-reader-text">Instagram</span></a>
				</div>
			<?php endwhile; ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>
