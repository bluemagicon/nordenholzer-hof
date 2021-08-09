<?php
/**
 * The default template for displaying content
 *
 * Used for both singular and index.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package braveandwray
 * @subpackage baw.base
 * @since braveandwray 1.0
 */

include 'post/load-vars.php';

?>

<article <?php post_class('post post--box'); ?> id="post-<?php the_ID(); ?>">
	<div class="post-inner">

		<?php if(! $hide_images) { ?>
			<?php include 'post/thumbnail.php'; ?>
		<?php } ?>

		<div class="post-content">
            <?php
            $category_detail=get_the_category(get_the_ID());
            foreach($category_detail as $cd){?>
                <span class="cat"><?php echo $cd->cat_name; ?></span>
            <?php }
            ?>
			<h3><?php the_title(); ?></h3>
            <?php
                $post_id = get_the_ID();
                echo get_field('content', $post_id);
            ?>
		</span>

	</div>

</article>
