<?php
require_once ('dbhelper.php');
$query  = 'select * from products';
$result = executeResult($query);
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
				Product List
			</div>
			<div class="panel-body">
				<table class="table table-bordered">
					<thead>
						<th>STT</th>
						<th>Thumbnail</th>
						<th>Title</th>
						<th>Price</th>
						<th>Discount</th>
						<th></th>
						<th></th>
					</thead>
					<tbody>
<?php
$index = 1;
foreach ($result as $item) {
	echo '<tr>
									<td>'.($index++).'</td>
									<td><img style="max-width: 160px" src="'.$item['thumbnail'].'"/></td>
									<td>'.$item['title'].'</td>
									<td>'.$item['price'].'</td>
									<td>'.$item['discount'].'</td>
									<td><a href="product.php?id='.$item['id'].'"><button class="btn btn-warning">Edit</button></a></td>
									<td><button class="btn btn-danger">Delete</button></td>
								</tr>';
}
?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>