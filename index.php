<?php
get_header();
?>

<div class="col-container ">
<div id="main" class="col">

<?php

 if (have_posts()) :
		while (have_posts()) : the_post(); ?>

<section>

			<?php the_content(); ?>
</section>

		<?php endwhile;
	else :
		echo   '<p>No content found</p>';
	endif;

?>

</div>



</div>
</div>
<?php
get_footer();
?>
