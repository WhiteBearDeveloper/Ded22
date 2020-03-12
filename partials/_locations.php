<?IncludeStyles::addElement('cards');?>
<?IncludeStyles::addElement('locations');?>

<?
	$description = 'Задача организации, в особенности же рамки и место обучения кадров играет важную роль в формировании систем массового участия. Задача организации, в особенности же новая модель организационной деятельности влечет за собой процесс внедрения и модернизации соответствующий условий активизации. <br /><br />Равным образом реализация намеченных плановых заданий позволяет оценить значение соответствующий условий активизации.';
	$locations = array(
		0 => array(
			'TITLE' => 'Резиденция Деда Мороза',
			'TEXT' => $description,
			'IMAGE' => 'location_1.jpg',
		),
		1 => array(
			'TITLE' => 'Тропа Сказок',
			'TEXT' => $description,
			'IMAGE' => 'location_2.jpg',
		),
		2 => array(
			'TITLE' => 'В гостях у Хаски',
			'TEXT' => $description,
			'IMAGE' => 'location_3.jpg',
		),
		3 => array(
			'TITLE' => 'Сказка с доставкой',
			'TEXT' => $description,
			'IMAGE' => 'location_4.jpg',
		)
	)
?>

<section id="locations" class="locations ny__bg-image">
	<div class="container locations__inner ny__bg-image-inner">
		<h2 class="h2">Сказочные локации</h2>
		<div class="cards__list">
			<?$cnt = 1;?>
			<?foreach ($locations as $location) {?>
				<div class="cards__item">
					<div class="cards__item-image order-lg-<?=$cnt % 2 == 0 ? 1 : 0;?>" style="background-image: url('./images/<?=$location['IMAGE']?>');"></div>
					<div class="cards__item-text">
						<div class="h3"><?=$location['TITLE']?></div>
						<div class="cards__item-description"><?=$location['TEXT']?></div>
					</div>
				</div>
				<?$cnt++;?>
			<?}?>
		</div>
	</div>
</section>