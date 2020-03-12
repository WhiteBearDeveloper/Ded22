<?
Class SocialList{
	private $block;
	private $list;
	private $theme;

	public function __construct($block,
								$list = array("tg", "sk", "wa", "ms", "vb", "vk", "em"),
								$theme = "white")
	{
		$this->block = $block;
		$this->list = $list;
		$this->theme = $theme;
	}

	public function getList()
	{
		return $this->list;
	}

	public function getBlock()
	{
		return $this->block;
	}

	public function getTheme()
	{
		return $this->theme;
	}
}

abstract Class IncludeElements{
	static $list = array();

	static function addElement($element){
		if(!in_array($element, static::$list)){
			static::$list[] = $element;
			return true;
		} else {
			return false;
		}
	}
}

abstract Class IncludeStyles extends IncludeElements{
	static $list = array();

	static function addElement($element, $lib_path_flag = false, $external_source = false)
	{
		if(parent::addElement($element)){
			if(!$lib_path_flag){
				echo '<link rel="stylesheet" href="./dist/css/'.$element.'.css?v='.time().'">';
			} else {
				$extension = !$external_source ? '.css' : '';
				echo '<link rel="stylesheet" href="'.$element.$extension.'">';
			}
		}
	}
}
abstract Class IncludeScripts extends IncludeElements{
	static $list = array();

	static function addElement($element, $lib_path_flag = false, $external_source = false)
	{
		if(parent::addElement($element)){
			if(!$lib_path_flag) {
				echo '<script src="./dist/js/'.$element.'.js?v='.time().'"></script>';
			} else {
				$extension = !$external_source ? '.js' : '';
				echo '<script src="'.$element.$extension.'"></script>';
			}
		}
	}
}