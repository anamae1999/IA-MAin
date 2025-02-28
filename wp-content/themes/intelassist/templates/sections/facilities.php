<?php
  $main_title = get_sub_field('main_title');

?>
<?php get_template_part( 'templates/partials/section-settings' );?>
<div > 
 <div class="container">
    <h1><?php echo $main_title?></h1>
    <div class="col-10">

       <?php
      if(have_rows('content')):
        while(have_rows('content')):
          the_row();

          $title = get_sub_field('title');
          $text = get_sub_field('text'); ?>
       <h2><?php echo $title?></h2>
       <div class="p-container">
        <?php echo $text?>
       </div>
             <?php
        endwhile;
      endif;
      ?>
    </div>
  
 </div>
</div>
</section>