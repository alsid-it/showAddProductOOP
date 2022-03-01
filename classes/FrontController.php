<?php

class FrontController 
{
	private static $products;
	private static $arrForProduct;
	private static $pm;
	private static $mainContent;
	

	public static function getNewestProducts()
	{
		self::$pm = ProductModel::getProductModel();
		self::$products = self::$pm->getProducts();
		self::$arrForProduct = ['title' => 'Product page', 
					'products' => self::$products];
		self::$mainContent = Template::view('templates/showProducts.php', self::$arrForProduct);
		self::$arrForProduct = ['title' => 'Product page', 
					//'products' => self::$products,
					'mainContent' => self::$mainContent];
	}

	public static function route()
	{
		$url = $_SERVER["REDIRECT_URL"];
		$method = $_SERVER["REQUEST_METHOD"];
		self::getNewestProducts();

		if( ($url === '/') && ($method === 'GET') ) 
		{
			// echo "Show products from DataBase";
			self::getNewestProducts();
			echo Template::view('templates/templatesBase.php', self::$arrForProduct);

		}elseif( ($url === '/add-product') && ($method === 'GET') ) 
		{
			// echo 'Show form for adding product';

			$arr = ['title' => 'Product Add'];

			self::$mainContent = Template::view('templates/addProduct.php', $arr);

			$arr = ['title' => 'Product page',
					'addJS' => '<script src="../js/formJS.js"></script>',
					'mainContent' => self::$mainContent
				];

			echo Template::view('templates/templatesBase.php', $arr);

		}elseif( ($url === '/') && ($method === 'POST') && isset($_POST['name']) && isset($_POST['sku']) && isset($_POST['price'])) {
			// echo "Show products after adding product";
			self::$pm->addProduct($_POST);
			self::getNewestProducts();
			echo Template::view('templates/templatesBase.php', self::$arrForProduct);
			
			// База данных - бизнес логика, отобразить - представление. Не смешивать.

		}elseif( ($url === '/') && ($method === 'POST') && isset($_POST['sku']) ) {
			// echo "Show products after deleting products";
			self::$pm->deleteProducts($_POST['sku']);
			self::getNewestProducts();
			echo Template::view('templates/templatesBase.php', self::$arrForProduct);

		}elseif( ($url === '/') && ($method === 'POST') ) 
		{
			// echo "Delete button was pressed, but products wan't chose";
			self::getNewestProducts();
			echo Template::view('templates/templatesBase.php', self::$arrForProduct);

		}else{
			echo 'Page not found. Sorry';
		}
	} 
}