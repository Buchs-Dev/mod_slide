<?php
/**
 * @package     mod_slide
 * 
 * @copyright   Copyright (C) 2016 BUCHS AS. All rights reserved.
 * @license     GNU General Public License version 2 or later
 */

defined('_JEXEC') or die;

$base        = JURI::base(true);

// Get params
$blackfade   = $params->get('blackfade');
$image       = $params->get('backgroundimage');
$maxwidth_lg = $params->get('maxwidth_lg');
$maxwidth_md = $params->get('maxwidth_md');
$maxwidth_sm = $params->get('maxwidth_sm');
$maxwidth_xs = $params->get('maxwidth_xs');
$readmore    = $params->get('readmore');
$relheight   = $params->get('relheight');
$relwidth    = $params->get('relwidth');
$sizes       = $params->get('sizes');
$url         = $params->get('url');
?>


<div class="slide<?php echo $moduleclass_sfx ?>">
	<?php if ($url) : ?>
	<a href="<?php echo $url; ?>">
	<?php endif; ?>
	<?php if ($image) : ?>
	<div class="image-wrapper">
		<img<?php if ($blackfade) echo ' class="faded"'; ?>src="<?php echo $base; ?>slir/w<?php echo $maxwidth_md; ?>-c<?php echo $relwidth; ?>x<?php echo $relheight; ?>/<?php echo $image; ?>" srcset="<?php echo $base; ?>slir/w<?php echo $maxwidth_lg; ?>-c<?php echo $relwidth; ?>x<?php echo $relheight; ?>/<?php echo $image; ?> <?php echo $maxwidth_lg; ?>w, <?php echo $base; ?>slir/w<?php echo $maxwidth_md; ?>-c<?php echo $relwidth; ?>x<?php echo $relheight; ?>/<?php echo $image; ?> <?php echo $maxwidth_md; ?>w, <?php echo $base; ?>slir/w<?php echo $maxwidth_sm; ?>-c<?php echo $relwidth; ?>x3/<?php echo $image; ?> <?php echo $maxwidth_sm; ?>w, <?php echo $base; ?>slir/w<?php echo $maxwidth_xs; ?>-c<?php echo $relwidth; ?>x3/<?php echo $image; ?> <?php echo $maxwidth_xs; ?>w" <?php if ($sizes) echo "sizes=\"$sizes\"" ; ?> alt="">
	</div>
	<?php endif;?>
	<?php if ($module->content) : ?>
	<div class="title-wrapper hero">
		<?php if ($module->content) : ?>
		<div class="container slide-text">
			<?php echo $module->content; ?>
			<?php if ($url && $readmore) : ?>
			<button type="button" class="btn btn-default btn-lg hidden-xs">Læs mere</button>
			<?php endif; ?>
		</div>
		<?php endif; ?>
	</div>
	<?php endif; ?>
	<?php if ($url) : ?>
	</a>
	<?php endif; ?>
</div>
