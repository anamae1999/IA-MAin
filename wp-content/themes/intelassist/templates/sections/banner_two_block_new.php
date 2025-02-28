<?php 
 $title1 = get_sub_field('title');
 $description1 = get_sub_field('description');
 $position = get_sub_field('position');
 
?>
<?php get_template_part( 'templates/partials/section-settings' ); ?> 
 <div class="container service-container wwo"><br><br><br>
  <h1 style="text-align: <?php echo $position?>"><?php echo $title1 ?></h1>
  <p><?php echo $description1 ?></p>
      <div class="row">
        <?php
      if(have_rows('services')):
        while(have_rows('services')):
          the_row();

          $image = get_sub_field('image');
          $title = get_sub_field('title');
      ?>
        <div class="service">
            <img src="<?php echo $image ?>">
            <h2><?php echo $title ?></h2>
        </div>
      <?php
        endwhile;
      endif;
      ?>
      </div>
    </div>
 </div>
</section>
