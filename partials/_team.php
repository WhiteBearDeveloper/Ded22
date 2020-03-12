<?IncludeStyles::addElement('slider');?>
<?IncludeStyles::addElement('cards');?>
<?IncludeStyles::addElement('team');?>
<?IncludeScripts::addElement('team');?>

<section id="team" class="team ny__bg-image">
	<div class="ny__bg-image-inner">
		<h2 class="h2 container">Команда волшебников</h2>
		<div class="team__slider">
			<div class="team__list">
				<?for($i = 1; $i <= 3; $i++){?>
					<div class="cards__item team__item d-lg-flex">
						<div class="cards__item-image" style="background-image: url('./images/team_<?=$i;?>.jpg');"></div>
						<div class="cards__item-text team__item-text">
							<div class="h3">Дед Мороз</div>
							<div class="cards__item-description">Задача организации, в особенности же рамки и место обучения кадров играет важную роль в формировании систем массового участия. Задача организации, в особенности же новая модель организационной деятельности влечет за собой процесс внедрения и модернизации соответствующий условий активизации. <br /><br />Равным образом реализация намеченных плановых заданий позволяет оценить значение соответствующий условий активизации.</div>
						</div>
					</div>
				<?}?>
			</div>
			<div class="team-slider__navigation slider__navigation"></div>
		</div>
	</div>
</section>