<?
$list = $social->getList();
$block = $social->getBlock();
$theme = $social->getTheme();
?>
<div class="social-list <?=$block;?>__social-list">
	<?foreach ($list as $list_item => $link){?>
		<a href="<?=$link;?>" target="_blank" class="<?=$block;?>__social-item social-item">
			<svg class="social-icon <?=$block;?>__social-icon <?=$block;?>__social-icon-<?=$list_item;?> <?=$block;?>__social-icon-<?=$theme;?> social-icon__<?=$theme;?>">
				<use xlink:href="#<?=$list_item;?>-social"></use>
			</svg>
		</a>
	<?}?>
</div>