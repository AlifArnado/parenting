<?php get_header(); ?>
<body <?php body_class(); ?>>
	<!-- content -->
	<section id="news">
		<div class="row">
			<div class="col-sm-8 li-news">
				<?php if (have_posts()): ?>
					<?php while (have_posts()): the_post() ?>
						<?php the_content(); ?>
					<?php endwhile ?>
				<?php endif ?>
			</div>
			<div class="col-sm-4">
				<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-1')) : ?>
				<?php endif; ?>
			</div>
		</div>
	</section>