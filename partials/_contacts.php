<?IncludeStyles::addElement('contacts');?>

<?$contacts = array(
	0 => array(
		'TYPE' => 'phone',
		'VALUE' => '+7 999 444 1212'
	),
	1 => array(
		'TYPE' => 'phone',
		'VALUE' => '+7 999 444 1212'
	),
	2 => array(
		'TYPE' => 'email',
		'VALUE' => 'ded22@mail.ru'
	),
);?>

<section id="contacts" class="contacts ny__bg-image">
	<div class="contacts__inner container ny__bg-image-inner">
		<h2 class="h2">Наши контакты</h2>
		<div class="contacts__block">
			<div class="contacts__address">Алтайский край, г. Барнаул, пр. Ленина 1</div>
			<div class="contacts__list">
				<?$cnt = 1;?>
				<?foreach ($contacts as $contact){
					$float_class = '';
					if(count($contacts) % 2 != 0 && $cnt == count($contacts)){
						$float_class = ' contacts__nofloat';
					} elseif($cnt % 2 != 0){
						$float_class = ' contacts__clearfloat';
					}
					switch ($contact['TYPE']){
						case 'phone':
							$phone = explode(" ", $contact["VALUE"]);
							$phone = implode('', $phone);?>
							<a class="contacts__item<?=$float_class;?>" href="tel:<?=$phone;?>">
								<svg class="contacts__item-icon contacts__item-icon-<?=$contact['TYPE'];?>">
									<use xlink:href="#<?=$contact['TYPE'];?>-contacts"></use>
								</svg>
								<span class="contacts__item-value"><?=$contact["VALUE"];?></span>
							</a><?
							break;
						case 'email':?>
							<a class="contacts__item<?=$float_class;?>" href="mailto:<?=$contact["VALUE"];?>" target="_blank">
								<svg class="contacts__item-icon contacts__item-icon-<?=$contact['TYPE'];?>">
									<use xlink:href="#<?=$contact['TYPE'];?>-contacts"></use>
								</svg>
								<span class="contacts__item-value"><?=$contact["VALUE"];?></span>
							</a><?
							break;
					}?>
					<?$cnt++;?>
				<?}?>
			</div>
		</div>
		<div class="contacts__button button button__orange modal-request" data-href="./../../partials/_request_done.php">Оставить заявку</div>
	</div>
</section>