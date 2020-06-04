<!DOCTYPE html>
<html>
<head>

<title>Bootstrap Blade View</title>

<link rel="stylesheet" type="text/css" href="{{URL::to('')}}/public/assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">

</head>

<body style="background: #358597">
<div class="container">
	<a href="{{URL::to('yajra-datatables')}}" class="btn btn-info" style="margin: 10px;">Yajra DataTable </a>
	<div class="table-responsive">
		<table id="customer" class="table table-primary">
			<thead>
					<th scope="col">Customer ID</th>
					<th scope="col">Customer Name</th>
					<th scope="col">Customer Email</th>
					<th scope="col">Customer Address</th>
					<th scope="col">Customer Phone No</th>
					<th scope="col">Customer CNIC</th>
			</thead>
			<tbody>
				@foreach($customers as $customer)
				<tr>
					<td scope="row">{{$customer->id}}</td>
					<td>{{$customer->name}}</td>
					<td>{{$customer->email}}</td>
					<td>{{$customer->address}}</td>
					<td>{{$customer->phoneno}}</td>
					<td>{{$customer->cnic}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>	
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">

	$(document).ready( function () {
	    $('#customer').DataTable();
	} );

</script>
</body>

</html>