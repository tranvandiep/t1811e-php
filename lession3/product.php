<?php
require_once ('dbhelper.php');
require_once ('process_product.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>MySQL tutorial</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				Product Input
			</div>
			<div class="panel-body">
				<form method="post">
					<div class="form-group">
						<label>Title:</label>
						<input required type="text" name="title" class="form-control" value="<?=$title?>">
					</div>
					<div class="form-group">
						<label>Thumbnail:</label>
						<input required type="text" name="thumbnail" class="form-control" value="<?=$thumbnail?>">
					</div>
					<div class="form-group">
						<label>Price:</label>
						<input required type="number" step="0.01" name="price" class="form-control" value="<?=$price?>">
					</div>
					<div class="form-group">
						<label>Discount:</label>
						<input required type="number" step="0.01" name="discount" class="form-control" value="<?=$discount?>">
					</div>
					<div class="form-group">
						<label>Description:</label>
						<textarea required class="form-control" name="description"><?=$description?></textarea>
					</div>
					<button class="btn btn-success"><?=(isset($_GET['id'])?'Update Product':'Add Product')?></button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>