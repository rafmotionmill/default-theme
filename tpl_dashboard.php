<?php
/*
Template Name: Dashboard Template
*/
?>

<?php get_header() ?>

	<div id="containerWide" class="dashboard">
		<div id="contentWide">

		<?php the_post() ?>
		<?php 
		$disable_title = types_render_field('disable-title',''); 
		$custom_title = types_render_field('custom-title',''); 
		$dashboardcheck = types_render_field('appears-on-dashboard-page','');
		?>
			<article id="post-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
				<?php if ($disable_title == '1'){ 
					if ($custom_title != '') { ?>
				<header>
					<h2 class="entry-title"><?php echo $custom_title; ?></h2>
				</header>
				<?php }
				
				} else { ?>
				
				<header>
					<h2 class="entry-title"><?php the_title() ?></h2>
				</header>
				
				<?php } ?>
				<div class="entry-content">
					<?php the_content() ?>
					
					<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'sandbox' ) . '&after=</div>') ?>				
				</div>
				<?php edit_post_link( __( 'Edit', 'sandbox' ), '<footer class="edit-link">', '</footer>' ) ?>
			</article><!-- .post -->
			
			<div id="subpages" class="dashboard-boxes-container articlewrap">
	
		 	<?php $parent = $post->ID; ?>
			<?php $recent = new WP_Query(); ?>
			<?php $recent->query('post_type=page&meta_key=wpcf-appear-on-dashboard-page&meta_key_value=1&orderby=menu_order&order=ASC&post_parent='.$parent); ?>
			
			 
			 <?php while($recent->have_posts()) : $recent->the_post(); ?>
 
				 <?php 
					$disable_title = types_render_field('disable-title',''); 
					$custom_title = types_render_field('custom-title',''); 
					$page_excerpt = types_render_field('page-excerpt','');
				?>

			
			<article id="post-<?php the_ID(); ?>" class="box">
			<?php 	
			if ($custom_title != '') { ?>
				
				<header>
					<h3 class="entry-title box-title"><a href="<?php the_permalink(); ?>"><?php echo $custom_title; ?></a></h3>
				</header>
				
			<?php }
				
			else { ?>
				
				<header>
					<h3 class="entry-title box-title"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3>
				</header>
				
			<?php } ?>					
									
					<div class="entry-content">
						<?php 
							if ($page_excerpt != '') {
								echo $page_excerpt;
							} else {
								the_excerpt();
							} 
						?>					
					</div>
					
					<?php edit_post_link( __( 'Edit', 'sandbox' ), '<footer class="edit-link">', '</footer>' ) ?>
					
				
				</article>
			
			<?php endwhile; wp_reset_query(); ?>
	
	
			</div>
			<div class="clear"></div>

<?php if ( get_post_custom_values('comments') ) comments_template() // Add a key+value of "comments" to enable comments on this page ?>

		</div><!-- #content -->
	</div><!-- #container -->

<?php //get_sidebar() ?>
<?php get_footer() ?>