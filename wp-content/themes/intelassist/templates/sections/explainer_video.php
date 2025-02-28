<?php
$url      = get_sub_field('video_link');

?>

<?php get_template_part( 'templates/partials/section-settings' ); ?>
    <div class="container" >
        <center>
          <video class="video" width="100%" height="600" controls>
          <source src="movie.mp4" type="video/mp4">
          <source src="movie.ogg" type="video/ogg">
          Your browser does not support the video tag.
        </video>
        </center>
    </div>

</section>