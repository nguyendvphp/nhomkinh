<?php get_header(); ?>

<?php get_template_part('template-parts/element', 'page-header'); ?>

<div id="main" class="main">
	<div class="container">
		<section id="content" class="content">
			<?php do_action('cpotheme_before_content'); ?>
            <div id="title" class="title">
            	<?php do_action('cpotheme_title'); ?>
            </div>
			<?php if(have_posts()) while(have_posts()): the_post(); ?>
			<?php get_template_part('template-parts/element', 'blog'); ?>
			<?php cpotheme_author(); ?>
			<?php comments_template('', true); ?>
			<?php endwhile; ?>
			<?php do_action('cpotheme_after_content'); ?>
		</section>
		<?php get_sidebar(); ?>
		<div class="clear"></div>
            <?php
        $categories = get_the_category($post->ID);
        if ($categories) 
        {
            $category_ids = array();
            foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
     
            $args=array(
            'category__in' => $category_ids,
            'post__not_in' => array($post->ID),
            'showposts'=>5, // Số bài viết bạn muốn hiển thị.
            'caller_get_posts'=>1
            );
            $my_query = new wp_query($args);
            if( $my_query->have_posts() ) 
            {
                echo '<h3>Bài viết liên quan</h3><ul>';
                while ($my_query->have_posts())
                {
                    $my_query->the_post();
                    ?>
                    <li><a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
                    <?php
                }
                echo '</ul>';
            }
        }
    ?>
	</div>
</div>

<?php get_footer(); ?>