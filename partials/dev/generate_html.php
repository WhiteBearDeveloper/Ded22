<?
	$path = $_SERVER['DOCUMENT_ROOT'].'/index.html';
	if(file_exists($path)){
		unlink($path);
	}
	$html = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/index.php');
	$fp = fopen($path, "w");
	fwrite($fp, $html);
	fclose($fp);
?>