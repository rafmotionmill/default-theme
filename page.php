<?php get_header() ?>

<?php the_post() ?>

<?php 
$disable_title = types_render_field('disable-title',''); 
$custom_title = types_render_field('custom-title',''); 
$dashboardcheck = types_render_field('appears-on-dashboard-page','');
$activate_custom_sidebar = types_render_field('activate-custom-sidebar','');
$custom_sidebar_content = types_render_field('custom-sidebar-content','');
?>
	<div id="container" >
		<div id="content">


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

<?php if ( get_post_custom_values('comments') ) comments_template() // Add a key+value of "comments" to enable comments on this page ?>

		</div><!-- #content -->
	</div><!-- #container -->
<?php if ($activate_custom_sidebar == '1') { ?> 
	<aside id="primary" class="sidebar">
	<ul class="oxox">
		<li id="custom-sidebar" class="widget textwidget entry-content">
			<?php echo $custom_sidebar_content; ?>
		</li>
	</ul>
	</aside>
<?php } else { ?>
<?php get_sidebar() ?>
<?php } ?>
<?php get_footer() ?>