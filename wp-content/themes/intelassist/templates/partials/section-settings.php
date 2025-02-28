<?php
	$rowName 	= get_row_layout();
	$rowIndex 	= get_row_index();
	$bgType 	= get_sub_field('background_type');
	$bgColor 	= get_sub_field('type_color');
	$bgImage 	= get_sub_field('type_image');
	if( have_rows('desktop') ){
		while( have_rows('desktop') ){
			the_row();
			$dPadTop = get_sub_field('padding_top');
			$dPadBot = get_sub_field('padding_bottom');
		}
	}
	if( have_rows('mobile') ){
		while( have_rows('mobile') ){
			the_row();
			$mPadTop = get_sub_field('padding_top');
			$mPadBot = get_sub_field('padding_bottom');
		}
	}
?>
<section class="<?php echo $rowName; ?>">
	<style type="text/css">
		#<?php echo 'flex-section-'.$rowIndex; ?> {
			<?php if($bgType == 'color'){ echo 'background-color:'.$bgColor.';'; }elseif($bgType == 'image'){ echo 'background-image: url('.$bgImage['url'].');'; }else{ echo '';	} ?>
			padding-top:<?php echo $mPadTop.'px;'; ?>
			padding-bottom:<?php echo $mPadBot.'px;'; ?>
		}
		@media (min-width: 768px) {
			#<?php echo 'flex-section-'.$rowIndex; ?> {
				padding-top:<?php echo $dPadTop.'px;'; ?>
				padding-bottom:<?php echo $dPadBot.'px;'; ?>
			}
		}
	</style>
	<div id="<?php echo 'flex-section-'.$rowIndex; ?>">