<footer class="footer">
	<div class="footer__inner container">
		<div class="footer__copyright">© Сказочный край</div>
		<?$section = "foot";?>
		<?$social = new SocialList("footer",
			array(
				"in" => '#',
				"ok" => '#',
				"vk" => '#'
			),
			"blue");?>
		<?require("./partials/_social_list.php");?>
	</div>
</footer>