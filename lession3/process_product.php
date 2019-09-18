<?php
$title = $thumbnail = $price = $discount = $description = '';
if (!empty($_POST)) {
	if (isset($_POST['title'])) {
		$title = $_POST['title'];
	}
	if (isset($_POST['thumbnail'])) {
		$thumbnail = $_POST['thumbnail'];
	}
	if (isset($_POST['price'])) {
		$price = $_POST['price'];
	}
	if (isset($_POST['discount'])) {
		$discount = $_POST['discount'];
	}
	if (isset($_POST['description'])) {
		$description = $_POST['description'];
	}

	if ($title != '' && $thumbnail != '') {
		//query
		if (isset($_GET['id'])) {
			//update
			$query = 'update products set title = "'.$title.'", thumbnail = "'.$thumbnail.'", price = "'.$price.'", discount = "'.$discount.'", description = "'.$description.'" where id = '.$_GET['id'];
		} else {
			//insert
			$query = 'insert into products(title, thumbnail, price, discount, description) values ("'.$title.'", "'.$thumbnail.'", "'.$price.'", "'.$discount.'", "'.$description.'")';
		}

		execute($query);
	}
}

if (isset($_GET['id'])) {
	//query
	$query  = 'select * from products where id = '.$_GET['id'];
	$result = executeResult($query);
	if ($result != null && count($result) > 0) {
		$product     = $result[0];
		$title       = $product['title'];
		$thumbnail   = $product['thumbnail'];
		$price       = $product['price'];
		$discount    = $product['discount'];
		$description = $product['description'];
	}
}