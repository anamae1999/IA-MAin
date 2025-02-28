<?php 
$image            = get_sub_field('image');
$title            = get_sub_field('title');
$description      = get_sub_field('description');
$position         = get_sub_field('position');
if($position =='last'){
    $right='40px';
}else{
    $right='0px';
    $left='40px';
}

?>
<style>
    .two-col p{
        padding-right: <?php echo $right?>
    }
    .image_text .col-6{
        padding-right: 0px !important;
        padding-left: <?php echo $left?>
    }
      @media all and (max-width: 900px) {
        .two-col p{
              padding-right: 0;
              text-align: justify;
         }
         .two-col {
    padding-top: 20px;
    padding-bottom: 20px;
}
      }
</style>


<?php get_template_part( 'templates/partials/section-settings' ); ?>
<div class="img-txt">
    <div class=" container two-col"  >
        <h2 class="header-new" style="margin-bottom: 0px;font-size: 1px;color:transparent;">r</h2>
      <div class="row d-flex">
        <div class="col-6 left-col">
            <img src="<?php echo $image;?>">
        </div>
        <div class="col-6 right-col order-<?php echo $position ?>"  >
            <p class="inner" ><?php echo $description;?></p>
        </div>
      </div>
    </div>
<div>
</section>