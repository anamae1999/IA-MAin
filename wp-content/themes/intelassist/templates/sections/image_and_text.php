<?php 
$image            = get_sub_field('image');
$title            = get_sub_field('title');
$description      = get_sub_field('description');
$position         = get_sub_field('position');


?>

<?php get_template_part( 'templates/partials/section-settings' ); ?>
    <div class=" container two-col"  >
        <h2 class="header-new"><?php echo $title;?></h2>
      <div class="d-flex">
        <div class="col-6 left-col">
            <img src="<?php echo $image;?>">
        </div>
        <div class="col-6 right-col">
            <p><?php echo $description;?></p>
        </div>
      </div>
    </div>

</section>