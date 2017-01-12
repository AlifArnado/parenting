<!-- digunakan untuk menginclude file header -->
<?php get_header(); ?>


<body <?php body_class(); ?>>
	
	<!-- content -->
	<section id="news">
		<div class="row">
			<div class="col-sm-12 li-news">
				<?php if (have_posts()): ?>
					<?php while (have_posts()): the_post() ?>
						<a href="<?php the_permalink() ?>" title="">
							<h2>Title Nama : <?php the_title(); ?></h2>
							<!-- nampilkan postigan setengah -->
							<?php the_excerpt(); ?>
						</a>
						    <!-- bagian lainnya -->
							<h3> <?php the_date(); ?> </h3>
							<h3> <?php the_time(); ?> </h3>
							<?php the_author(); ?>
							<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" title=""></a>
					<?php endwhile ?>
					
					<!-- digunakan untuk membuat pagination -->
					<?php 
					    previous_post_link('&larr; Newer posts');
						next_post_link('Older post &rarr;');
					 ?>

					<?php else: ?>
						<?php include_once '404.php'; ?>
				<?php endif ?>
			</div>
		</div>
	</section>


	


</body>
</html>