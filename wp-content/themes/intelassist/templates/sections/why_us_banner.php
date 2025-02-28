<?php
$image      = get_sub_field('image');
$title      = get_sub_field('title');
$title_orange      = get_sub_field('title-orange');
$description      = get_sub_field('description');
$button_text      = get_sub_field('button_text');

?>

<?php get_template_part( 'templates/partials/section-settings' ); ?>
<div class="banner-container" style="background-image:url('<?php echo $image  ?>');background-repeat: no-repeat;background-size: cover;background-position: bottom right;margin-bottom:<?php echo $button_text?> ">
    <div class="container">
        <div class="content new-content" style="float: right">
            <h1><?php echo $title ;?><br><span class="txt-or"><?php echo $title_orange  ;?></span></h1>
            <div class="txt-or-d">
            <p><?php echo $description?></p>
            </div>
            <div class="banner-cta">
              <?php if(!empty($button_text)) { ?>
                <a href="./our-solutions"><button>Learn more</button></a>
              <?php  } ?>
            </div>
        </div>
    </div>
</div>

</section>