<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Table with Add and Delete Row Feature</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <form method="post" action="{{ route('postStudent') }}">
        	{{ csrf_field() }}
        	<div class="table-wrapper">
        		<div class="form-group">
	            	<label>Roll No</label>
	            	<input type="text" name="rollno" class="form-control" placeholder="Enter rollno">
	            </div>
	            <div class="form-group">
	            	<label>Full Name</label>
	            	<input type="text" name="fullname" class="form-control" placeholder="Enter full name">
	            </div>
	            <div class="form-group">
	            	<label>Age</label>
	            	<input type="number" name="age" class="form-control" placeholder="Enter age">
	            </div>
	            <div class="form-group">
	            	<label>Email</label>
	            	<input type="email" name="email" class="form-control" placeholder="Enter email">
	            </div>
	            <div class="form-group">
	            	<label>Address</label>
	            	<input type="text" name="address" class="form-control" placeholder="Enter address">
	            </div>
	            <button class="btn btn-success">Add</button>
	        </div>
        </form>
    </div>
</body>
</html>