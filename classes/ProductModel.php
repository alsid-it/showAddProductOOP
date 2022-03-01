<?php

class ProductModel 
{
	
	private $db;

	//single-tone чтобы у класса был только 1 объект, делается благодая privare __construct

	private function __construct()
	{
		$this->db = new mysqli('localhost', 'root', '', 'scandiwebtestwork');
	}	

	public static function getProductModel()
	{
		static $instance;
		if(!isset($instance))
		{
			$instance = new self; 	
		}
		return $instance;
	}

	public function getProducts()
	{	
		if( $res = $this->db->query("SELECT * FROM `products`") )
		{
	    	while($row = $res->fetch_assoc())
	    	{
        		$arr[] = $row;
    		}
    	}

    	return $arr;
	}

	public function deleteProducts($arrayOfSKU)
	{			
		if (count($arrayOfSKU))
		{
			$inString = "'" . implode("','", $arrayOfSKU) . "'";
			$query =  "DELETE FROM `products` WHERE `sku` IN ({$inString})";
			mysqli_query($this->db, $query);
		}
	}

	public function addProduct($arr)
	{
		$sku = $arr['sku'];
		$name = $arr['name'];
		$price = $arr['price'];

		if(!empty($arr['size']))
		{
			$size = $arr['size'];
		}else{
			$size = 'NULL';
		}

		if(!empty($arr['height']))
		{	
			$height = $arr['height'];
		}else{
			$height = 'NULL';
		}

		if(!empty($arr['width']))
		{
			$width = $arr['width'];
		}else{
			$width = 'NULL';
		}

		if(!empty($arr['length']))
		{
			$length = $arr['length'];
		}else{
			$length = 'NULL';
		}

		if(!empty($arr['weight']))
		{
			$weight = $arr['weight'];
		}else{
			$weight = 'NULL';
		}

		$query = "INSERT INTO `products` (`sku`, `name`, `price`, `size`, `height`, `width`, `length`, `weight`) VALUES ('$sku', '$name', '$price', $size, $height, $width, $length, $weight)";

		//Tracer::trace("sqlAdd такое $query");
		mysqli_query($this->db, $query);
	}
}