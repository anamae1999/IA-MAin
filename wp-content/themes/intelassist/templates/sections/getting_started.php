<?php 
 $title1 = get_sub_field('title');
 $description = get_sub_field('description');
 $position = get_sub_field('position');
  $sub_copy = get_sub_field('sub_copy');
 
 
?>
<?php get_template_part( 'templates/partials/section-settings' ); ?> 
 <div class="container service-container wwo"><br><br><br>
  <h1 style="margin-bottom:0px;text-align: <?php echo $position?>"><?php echo $title1 ?></h1>
  <div class="p"><?php echo $description ?></div>
      <div class="row">
        <?php
      if(have_rows('services-new')):
        while(have_rows('services-new')):
          the_row();

          $title_orange = get_sub_field('title_orange');
          $description = get_sub_field('description');
          $title = get_sub_field('title');
           $title_orange_1 = get_sub_field('title_orange_1');
          $description_1 = get_sub_field('description_1');
          $title_1 = get_sub_field('title_1');
          
      ?>
        <div class="service">
            <h2><span style="color: var(--orange);"><?php echo $title_orange?></span> <?php echo $title ?></h2>
            <div><?php echo $description ?></div>
            <center><img src="http://localhost/intelassist/wp-content/uploads/2022/01/arrow.png"></center>
            <h2><span style="color: var(--orange);"><?php echo $title_orange_1?></span> <?php echo $title_1 ?></h2>
            <div><?php echo $description_1 ?></div>

        </div>
      <?php
        endwhile;
      endif;
      ?>
      </div>
    </div>
 </div>
</section>
