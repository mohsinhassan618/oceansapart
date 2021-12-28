<?php
/**
 * Template Name: Ocean Apart Task
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Oceans_Apart
 */

get_header();
?>
	<main id="primary" class="site-main">
		<?php
		while ( have_posts() ) :
			the_post();
            $oceansApartFields = get_field('ocean_apart_fields');
            $oceansApartFields = is_array($oceansApartFields) ? $oceansApartFields :[];
            foreach($oceansApartFields as $key => $value):
            $defaultImage    = get_stylesheet_directory_uri() . "/assets/images/featured_image.jpg";
            $featuredImage   = isset($value['featured_image'])   ? $value['featured_image'] :'';
            $sectionHeading  = isset($value['section_heading'])  ? $value['section_heading']:'';
            $sectionDetails  = isset($value['section_details'])  ? $value['section_details']:'';
			?>
            <section class="grid-container oa-task" >
                <div class="grid-x grid-margin-x oa-task__background">
                    <div class="medium-6 large-7 cell ">
                            <figure class="oa-task__image">
                                <img
                                    src="<?php echo isset($featuredImage['url']) ? $featuredImage['url']:$defaultImage;  ?>"
                                    alt="<?php echo isset($featuredImage['alt']) ? $featuredImage['alt']:'';  ?>"
                                >
                            </figure>
                    </div>
                    <div class="medium-6 large-5 cell text-center align-self-middle ">
                        <div class="">
                            <h3><?php echo $sectionHeading; ?></h3>
                            <p><?php echo  $sectionDetails; ?></p>
                        </div>
                    </div>
                </div>
            </section>
			<?php
                endforeach;
		endwhile; // End of the loop.
		?>
	</main><!-- #main -->
<?php
get_footer();
