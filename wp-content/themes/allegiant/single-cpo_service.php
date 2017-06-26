<?php get_header(); ?>

<?php get_template_part('template-parts/element', 'page-header'); ?>

<div id="main" class="main">
	<div class="container">
		<section id="content" class="content">
			<?php do_action('cpotheme_before_content'); ?>
            <div id="title" class="title">
                <?php custom_breadcrumbs(); ?>
            	<?php do_action('cpotheme_title'); ?>
            </div>
            <?php cpotheme_post_media(get_the_ID(), 'image'); ?>
			<?php if(have_posts()) while(have_posts()): the_post(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="page-content">
					<?php the_content(); ?>
				</div>
				<?php cpotheme_post_pagination(); ?>
				<div class="clear"></div>
			</div>
            <?php comments_template('', true); ?>
			<?php if(is_singular('post')) cpotheme_postpage_tags(false, '', '', ''); ?>
			<?php endwhile; ?>
			
			<?php do_action('cpotheme_after_content'); ?>
		</section>
		<?php get_sidebar(); ?>
		<div class="clear"></div>
	</div>
</div>

<?php get_footer(); ?>