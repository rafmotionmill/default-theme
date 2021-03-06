<?php get_header() ?>

	<div id="container">
		<div id="content">
			<header>
			<h2 class="page-title"><?php _e( 'Tag Archives:', 'sandbox' ) ?> <span><?php single_tag_title() ?></span></h2>	
			</header>
			<nav id="nav-above" class="navigation">
				<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&laquo;</span> Older posts', 'sandbox' ) ) ?></div>
				<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&raquo;</span>', 'sandbox' ) ) ?></div>
			</nav>

		<?php while ( have_posts() ) : the_post() ?>

			<article id="post-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
				<header>
					<h3 class="entry-title"><a href="<?php the_permalink() ?>" title="<?php printf( __( 'Permalink to %s', 'sandbox' ), the_title_attribute('echo=0') ) ?>" rel="bookmark"><?php the_title() ?></a></h3>
					<div class="entry-date"><time class="published" datetime="<?php the_time('Y-m-d') ?>" pubdate><?php unset($previousday); printf( __( '%1$s &#8211; %2$s', 'sandbox' ), the_date( '', '', '', false ), get_the_time() ) ?></time></div>
				</header>
				<div class="entry-content">
					<?php the_excerpt(__( 'Read More <span class="meta-nav">&raquo;</span>', 'sandbox' )) ?>
				</div>
				<footer class="entry-meta">
					<span class="author vcard"><?php printf( __( 'By %s', 'sandbox' ), '<a class="url fn n" href="' .get_author_posts_url( get_the_author_meta( 'ID' )) . '" title="' . sprintf( __( 'View all posts by %s', 'sandbox' ), $authordata->display_name ) . '">' . get_the_author_meta('nickname'). '</a>' ) ?></span>
					<span class="meta-sep">|</span>
					<span class="cat-links"><?php printf( __( 'Posted in %s', 'sandbox' ), get_the_category_list(', ') ) ?></span>
					<span class="meta-sep">|</span>
					<?php if ( $tag_ur_it = sandbox_tag_ur_it(', ') ) : // Returns tags other than the one queried ?>
						<span class="tag-links"><?php printf( __( 'Also tagged %s', 'sandbox' ), $tag_ur_it ) ?></span>
						<span class="meta-sep">|</span>
					<?php endif; ?>
					<?php edit_post_link( __( 'Edit', 'sandbox' ), "\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t<span class=\"meta-sep\">|</span>\n" ) ?>
					<span class="comments-link"><?php comments_popup_link( __( 'Comments (0)', 'sandbox' ), __( 'Comments (1)', 'sandbox' ), __( 'Comments (%)', 'sandbox' ) ) ?></span>
				</footer>
			</article><!-- .post -->

<?php endwhile; ?>

<?php if (function_exists('kriesi_pagination')) {echo kriesi_pagination(); } ?>

		</div><!-- #content -->
	</div><!-- #container -->

<?php get_sidebar() ?>
<?php get_footer() ?>