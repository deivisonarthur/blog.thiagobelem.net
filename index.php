<?php get_header() ?>

	<div class="content">
		<section class="main">
		<?php
		while (have_posts()) {
			the_post();
		?>
			<article id="post-<?php the_ID() ?>" <?php post_class() ?>>
				<header class="title">
					<h1><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h1>
					<time datetime="<?php the_time('c') ?>"><?php the_time(get_option('date_format')) ?></time>
				</header>

				<?php the_content() ?>
			</article>
		<?php } ?>
		</section>

		<?php get_sidebar() ?>
	</div>

<?php get_footer() ?>