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
$hide_links = true;

?>

<article <?php post_class('post post--box'); ?> id="post-<?php the_ID(); ?>">
	<div class="post-inner">

		<?php if(! $hide_images) { ?>
			<?php include 'post/thumbnail.php'; ?>
		<?php } ?>
		<div class="post-content">
            <?php if(have_rows('team_daten', $theID)) : the_row(); ?>
                <h3 class="post-title"><?= get_sub_field('position'); ?></h3>
                <p><?= get_sub_field('vorname'); ?> <?= get_sub_field('nachname'); ?></p>
                <a class="txt-link" href="tel:<?= get_sub_field('telefon'); ?>"><strong><?= get_sub_field('telefon'); ?></strong></a>
                <a class="txt-link" href="mailto:<?= get_sub_field('email'); ?>"><?= get_sub_field('email'); ?></a>
            <?php endif; ?>
		</div>

	</div>

</article>
