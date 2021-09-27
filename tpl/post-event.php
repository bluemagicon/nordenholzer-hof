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
	<div class="post-inner <?php if(get_field('status', get_the_ID()) == "Noch wenige Plätze frei"){echo 'fast-ausgebucht';}elseif(get_field('status', get_the_ID()) == "Bereits ausgebucht"){echo 'ausgebucht';} ?>">

		<?php if(! $hide_images) { ?>
			<?php include 'post/thumbnail.php'; ?>
		<?php } ?>

		<div class="post-content">
			<span class="is-style-subheadline has-primary-color has-text-color"><?php the_title(); ?></span>
            <div class="events-excerpt">
                <?php the_excerpt(); ?>
            </div>
		</div>

	</div>

</article>
