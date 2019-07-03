<?php get_header(); ?>


<h1><?php the_field('home_page_header_text');?></h1>
<p> <?php the_field('home_page_header_description');?></p>

<!-- image field  -->
<img src="<?php the_field('home_page_header_image');?>" alt"inputted image"/>

<!-- Repeater field  -->

<?php

// check if the repeater field has rows of data
if( have_rows('home_page_button_links') ):

 	// loop through the rows of data
    while ( have_rows('home_page_button_links') ) : the_row(); ?>

		<div class="tester"> <a target="_blank" href="<?php the_sub_field("button_url");?>"class ="button" <button type="button" name="button"><?php the_sub_field("button_text");?></button></a> </div>

    <?php endwhile;

else :
    // no rows found
endif;
?>
<!-- Gallery Field  -->

<?php

$images = get_field('home_page_gallery');
$size = 'medium'; // (thumbnail, medium, large, full or custom size)

if( $images ): ?>
    <ul>
        <?php foreach( $images as $image ): ?>
            <li>
            	<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<!-- Slider Field  -->

<?php echo do_shortcode('[metaslider id="138"]'); ?>

<!-- Embedded video field  -->

<?php get_footer(); ?>
