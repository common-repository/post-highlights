<!-- You will allway want to check if there are posts -->
<?php if ( $highlightedPosts->have_posts() ) : ?>

    <!-- Initialize the Loop -->
    <?php while ( $highlightedPosts->have_posts() ) : $highlightedPosts->the_post(); ?>

        <!-- From now on, its a standard WordPress Loop -->
        <?php
	// Get the postmeta information.
	$headline = get_post_meta( get_the_ID(), 'ph_headline', true );
$imageurl = $this->get_post_image();
?>

		<!-- This is the main div. You MUST respect this ID standard -->
		<div class="ph_post" id="ph_highlight-<?php echo $counter; ?>">
			<!-- This is the div where the pictures go -->
			<!-- All posts must have one of this, with ph_picture class, and follow this ID standard -->
			<div id="ph_picture-<?php echo $counter; ?>" class="ph_picture">
			  <a href="<?php echo the_permalink(); ?>">
			      <img src="<?php echo $imageurl; ?>" />
			  </a>
			</div>
			<!-- Each post MUST have a div with ph_content class. Here is where all the information about the post goes -->
			<!-- Except the pictures -->
			<div class="ph_content">

                <!-- Put anything you like here, in any way you like -->
                <!-- You can use any of the Template Tags -->
				<h2><a class="ph_title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<p><?php echo $headline; ?></p>
			</div>


		</div>

		<!-- Now you must increment the counter, just leave this line -->
		<?php $counter ++; ?>

	<!-- End of the Loop -->
	<?php endwhile; ?>

	<!-- Outside the Loop you can have anything else you want -->

    <?php if ( $counter > 2 ) : ?>
        <div class="ph-navigation">
            <a id="ph-prev-nav" class="ph-hide-while-loading">&lt;</a>
            <div id="ph-numeric-nav"></div>
            <a id="ph-next-nav" class="ph-hide-while-loading">&gt;</a>
        </div>
    <?php endif; ?>




<?php endif; ?>
