<?IncludeScripts::addElement('menu');?>
<?
$menu = array(
	0 => array(
		"NAME" => "Проекты",
		"LINK" => "#locations"
	),
	1 => array(
		"NAME" => "Услуги",
		"LINK" => "#services"
	),
	2 => array(
		"NAME" => "Команда",
		"LINK" => "#team"
	),
	3 => array(
		"NAME" => "Партнёры",
		"LINK" => "#partners"
	),
	4 => array(
		"NAME" => "Контакты",
		"LINK" => "#contacts"
	)
);
?>
<div class="menu__sandwich">
	<span></span>
	<span></span>
	<span></span>
</div>
<nav class="menu">
	<ul class="menu__list">
		<?foreach ($menu as $menu_item){?>
			<li class="menu__item">
				<a href="<?=$menu_item["LINK"]?>" class="menu__link"><?=$menu_item["NAME"];?></a>
			</li>
		<?}?>
	</ul>
</nav>
