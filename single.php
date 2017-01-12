<?php get_header(); 

function setAndViewPostView($postID) {
	$count_key = 'views';
	$count = get_post_meta( $postID, $count_key, true );
	if ($count == '') {
	$count = 0;
	delete_post_meta($postID, $count_key);
	add_post_meta($postID, $count_key, '0');
	} else {
		$count++;
		update_post_meta($postID, $count_key, $count);
	}
	return $count; // so you can show it
}

?>

	<!-- content -->
	<section id="news">
		<div class="row">
			<div class="col-sm-8 li-news">
				<?php if (have_posts()): ?>
					<?php while (have_posts()): the_post();
							// fungsi ini digunakan untuk menselsi gambar
							if (has_post_thumbnail()) {
								$thumbnail = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
							} else {
								$thumbnail = get_template_directory_uri(). '/images/n2.JPG';
							}
						 ?>
						
						<!-- menampilkan title -->
						<?php the_title(); ?>
						<!-- menampilkan tag -->
						<?php the_tags(); ?>
						<!-- mengambil id yg dikirimkan artiel -->
						<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" title=""></a>
						<!-- menampilkan penulis -->
						<?php the_author() ?>
						<!-- nanampilkan waktu -->
						<?php the_time(); ?>
						<!-- menampilkan artikel -->
						<?php the_content(); ?>
						<!-- membuat kolom komentar -->
						<?php command_template(); ?>

					<?php endwhile ?>
				<?php endif ?>
			</div>
		</div>
	</section>