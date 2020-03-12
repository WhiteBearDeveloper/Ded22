<?IncludeStyles::addElement('services');?>

<section id="services" class="services gradient__block">
	<div class="services__inner container gradient__block-inner">
		<h2 class="h2">Сказочные услуги</h2>
		<div class="services__list">
			<?for($i = 1; $i <= 6; $i++){?>
				<div class="services__item">
					<div class="services__item-image">
						<svg class="services__item-icon services__item-icon-<?=$i % 2 == 0 ? 'christmas_tree' : 'snowflake'?>"">
							<use xlink:href="#<?=$i % 2 == 0 ? 'christmas_tree' : 'snowflake'?>"></use>
						</svg>
					</div>
					<h3 class="h3 services__item-title">Название услуги</h3>
					<div class="services__item-description">Равным образом реализация намеченных плановых заданий</div>
				</div>
			<?}?>
		</div>
	</div>
</section>