<?php
/* Template Name: content */
get_header();?>


<div class="wrapper">
	<div id="primary" class="content-area wrap">
		<main id="main" class="site-main" role="main">

			<?php

			// check if the flexible content field has rows of data
			if( have_rows('blank_page_content') ):

			     // loop through the rows of data
			    while ( have_rows('blank_page_content') ) : the_row(); ?>
					<div class="container">
			      <?php if( get_row_layout() == 'text_&_image' ): ?>

							<div class="text">
							<?php the_sub_field('text'); ?>
							</div>
							<div class="image">
							<img src="<?php	the_sub_field('image');?>">
							</div>

			       <?php endif;

			    endwhile;

			else :

			    // no layouts found

			endif;

			?>

	<?php get_footer();
