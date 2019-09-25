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
    	<table class="table table-bordered">
    		<thead>
    			<tr>
    				<th>STT</th>
    				<th>Roll No</th>
    				<th>Full Name</th>
    				<th>Age</th>
    				<th>Email</th>
    				<th>Address</th>
    				<th width="80px"></th>
    				<th width="80px"></th>
    			</tr>
    		</thead>
    		<tbody>
    			@foreach($studentList as $item)
                    <tr>
                        <th>{{ $index++ }}</th>
                        <td>{{ $item->rollno }}</td>
                        <td>{{ $item->fullname }}</td>
                        <td>{{ $item->age }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->address }}</td>
                        <td>
                            <button class="btn btn-warning">Edit</button>
                        </td>
                        <td>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
    			@endforeach
    		</tbody>
    	</table>
        {{ $studentList->links() }}
    </div>
</body>
</html>