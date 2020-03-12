<?IncludeStyles::addElement('slider');?>
<?IncludeStyles::addElement('main_slider');?>
<?IncludeScripts::addElement('main_slider');?>

<?$mail_slider = array(
	0 => array(
		"NAME" => "Время волшебства",
		"DESCRIPTION" => "Новогодняя квест-сказка",
		"IMAGE" => "./images/new_year.jpg"
	),
	1 => array(
		"NAME" => "Время сказок",
		"DESCRIPTION" => "Квест-сказка",
		"IMAGE" => "./images/new_year_2.jpg"
	),
	2 => array(
		"NAME" => "Время чудес",
		"DESCRIPTION" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid consectetur ducimus ex hic in inventore modi, non optio? Aperiam, culpa cumque esse et fugiat harum laborum minima nostrum repellat sit!",
		"IMAGE" => "./images/new_year_3.jpg"
	),
);?>

<section class="main-slider">
	<div class="main-slider__list">
		<?foreach ($mail_slider as $slide){?>
			<div class="main-slider__item">
				<div class="main-slider__item-wrapper" style="background-image: url(<?=$slide['IMAGE'];?>);">
					<div class="main-slider__inner container">
						<div class="main-slider__text">
							<div class="main-slider__title"><?=$slide['NAME'];?></div>
							<div class="main-slider__description"><?=$slide['DESCRIPTION'];?></div>
						</div>
						<div class="main-slider__button button button__orange main-slider__modal-request" data-href="./../../partials/_form.php">Оставить заявку</div>
					</div>
				</div>
			</div>
		<?}?>
	</div>
	<div class="main-slider__pagination slider__pagination"></div>
	<div class="main-slider__navigation slider__navigation"></div>
</section>