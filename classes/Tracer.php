<?php
class Tracer
{
	public static function trace($var)
	{
		echo '<pre>';
		var_dump($var);
		echo '</pre>';
	}
}

?>