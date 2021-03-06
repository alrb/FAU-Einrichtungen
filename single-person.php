<?php
/**
 * @package WordPress
 * @subpackage FAU
 * @since FAU 1.0
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part('template-parts/hero', 'small'); ?>

	<div id="content">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
				    <main id="droppoint">
				    <?php 
				    $id = $post->ID;
				    if ($id) {
					echo FAU_Person_Shortcodes::fau_person_page($id);
				    } else { ?>
					<p class="hinweis">
					    <strong><?php _e('Es tut uns leid.','fau'); ?></strong><br>
					    <?php _e('Für den angegebenen Kontakt können keine Informationen abgerufen werden.','fau'); ?>
					</p>
				    <?php }  ?>
				    </main>
			    </div>
				
			</div>
		</div>
	</div>
	
	
<?php endwhile; ?>
<?php get_template_part('template-parts/footer', 'social'); ?>	
<?php get_footer(); ?>