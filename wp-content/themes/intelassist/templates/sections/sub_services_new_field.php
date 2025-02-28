<?php 
 $title1 = get_sub_field('title');
 $description1 = get_sub_field('description');
 $position = get_sub_field('position');
  $sub_copy = get_sub_field('sub_copy');
 
 
?>
<?php get_template_part( 'templates/partials/section-settings' ); ?> 
 <div class="container service-container wwo"><br><br><br>
  <h1 style="text-align: <?php echo $position?>"><?php echo $title1 ?></h1>
  <h1 style="color:var(--darkblue);"><?php echo $sub_copy ?></h1>
  <p><?php echo $description1 ?></p>
      <div class="row">
        <?php
      if(have_rows('services-new')):
        while(have_rows('services-new')):
          the_row();

          $description = get_sub_field('description');
          $title = get_sub_field('title');
      ?>
        <div class="service">
           <div class="">
            <img width="100%" src="http://localhost/intelassist/wp-content/uploads/2022/01/g8.png">
           </div>
            <div class="">
              <h2><?php echo $title ?></h2>
              <?php echo $description ?>
            </div>
        </div>
      <?php
        endwhile;
      endif;
      ?>
      </div>
    </div>
 </div>
</section>
