<?php
if (!is_front_page()):
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>"> 
	<div class="post-image">
		<?php the_post_thumbnail('service', array('title' => '')); ?>		
	</div>	
	<div class="post-body">
		<?php the_title(); ?>
		<div class="post-byline">
			<?php cpotheme_postpage_date(); ?>
			<?php cpotheme_postpage_author(); ?>
			<?php cpotheme_postpage_categories(); ?>
			<?php //cpotheme_edit(); ?>
		</div>
		<div class="post-content">
			<?php the_excerpt(); ?>
		</div>
		<?php cpotheme_postpage_comments(false, '%s'); ?>
		<?php if(is_singular('cpo_service')) cpotheme_postpage_tags(false, '', '', ''); ?>
		<?php cpotheme_postpage_readmore('button'); ?>
		<div class="clear"></div>
	</div>
    <div class="clear"></div>
</article>
<?php endif;?>
