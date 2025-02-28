<?php
$image      = get_sub_field('image');
$title      = get_sub_field('title');
$button_text      = get_sub_field('button_text');

?>

<?php get_template_part( 'templates/partials/section-settings' ); ?>
<div class="banner-container">
    <div class="container">
        <div class="content">
            <h1><?php echo $title ;?></h1>
            <div class="txt-or-d">
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