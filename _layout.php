<?require_once("./partials/dev/class.php");?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="format-detection" content="telephone=no">
	<?include ("./partials/_favicons.php");?>
	<title>Сказочный край</title>
	<?=IncludeStyles::addElement('core');?>
	<?=IncludeStyles::addElement('layout');?>
	<?=IncludeStyles::addElement('./libs/slick/slick', true);?>
	<?=IncludeStyles::addElement('./libs/iziModal/iziModal.min', true);?>
	<?=IncludeScripts::addElement('./libs/jquery/jquery.min', true);?>
	<?=IncludeScripts::addElement('./libs/slick/slick.min', true);?>
	<?=IncludeScripts::addElement('/libs/iziModal/iziModal.min', true);?>
	<?=IncludeScripts::addElement('main_new');?>
</head>
<body>
	<div class="window__shadow"></div>
	<div class="wrapper d-flex flex-column">
		<?include_once("./partials/_header.php");?>
		<main class="main">
			<?include_once("./partials/_main_slider.php");?>
			<?include_once("./partials/_locations.php");?>
			<?include_once("./partials/_services.php");?>
			<?include_once("./partials/_team.php");?>
			<?include_once("./partials/_partners.php");?>
			<?include_once("./partials/_contacts.php");?>
			<?include_once("./partials/_map.php");?>
		</main>
		<?include_once("./partials/_footer.php");?>
	</div>
	<?include_once("./partials/_sprite.php");?>
</body>
</html>
