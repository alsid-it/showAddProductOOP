<?php
class Template
{
	private static $template;
	private static $input;

	public static function view($wayTemplate, $input = array())
	{
		self::$template = $wayTemplate;
		self::$input = $input;
		unset($wayTemplate, $input);
 
		ob_start();
		extract(self::$input);
		require(self::$template);
		return ob_get_clean();
	}
}