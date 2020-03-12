<?IncludeStyles::addElement('slider');?>
<?IncludeStyles::addElement('partners');?>
<?IncludeScripts::addElement('partners');?>

<?
	$partners = array(
		0 => array(
			'NAME' => 'Тинькофф',
			"IMAGE" => 'tinkoff.png'
		),
		1 => array(
			'NAME' => 'Альфа-Банк',
			"IMAGE" => 'alpha-bank.png'
		),
		2 => array(
			'NAME' => 'Сбербанк',
			"IMAGE" => 'sberbank.png'
		),
		3 => array(
			'NAME' => 'ВТБ',
			"IMAGE" => 'vtb.png'
		),
		4 => array(
			'NAME' => 'Qiwi',
			"IMAGE" => 'qiwi.png'
		),
		5 => array(
			'NAME' => 'Тинькофф',
			"IMAGE" => 'tinkoff.png'
		),
		6 => array(
			'NAME' => 'Альфа-Банк',
			"IMAGE" => 'alpha-bank.png'
		),
		7 => array(
			'NAME' => 'Сбербанк',
			"IMAGE" => 'sberbank.png'
		),
		8 => array(
			'NAME' => 'ВТБ',
			"IMAGE" => 'vtb.png'
		),
		9 => array(
			'NAME' => 'Qiwi',
			"IMAGE" => 'qiwi.png'
		)
	);
?>

<section id="partners" class="partners gradient__block">
	<div class="gradient__block-inner">
		<h2 class="h2">Сказочные партнёры</h2>
		<div class="partners__slider">
			<div class="partners__list">
				<?foreach ($partners as $partner){?>
					<a href="#" target="_blank" class="partners__item image d-flex">
						<img src="./images/<?=$partner['IMAGE'];?>" alt="<?=$partner['IMAGE'];?>" title="<?=$partner['IMAGE'];?>"/>
					</a>
				<?}?>
			</div>
			<div class="partners-slider__navigation slider__navigation"></div>
		</div>
		<div class="container text-md-center">
			<div class="partners__button button button__orange modal-request" data-href="./../../partials/_form.php">Стать партнером</div>
		</div>
	</div>
</section>
