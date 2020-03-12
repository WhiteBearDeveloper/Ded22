<?IncludeScripts::addElement('view_checker');?>
<?
	$json_obj = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/json/view_checker.json');
	if($json_obj) {
		$json = json_decode($json_obj);
		foreach ($json as $view) {
			IncludeStyles::addElement('view_checker-' . $view);
		}
	}
?>
<svg class="view-checker">
	<use xlink:href="#checker"></use>
</svg>