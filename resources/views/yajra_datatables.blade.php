<!DOCTYPE html>
<html>
<head>

<title>Yajra DataTables</title>

<link rel="stylesheet" type="text/css" href="{{URL::to('')}}/public/assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">

</head>

<body style="background: #358597">
	<div class="container">
		<a href="{{URL::to('excel-download')}}" class="btn btn-info" style="margin: 10px;">Download in Excel </a>
		<a href="{{URL::to('pdf-download')}}" class="btn btn-info" style="margin: 10px;">Download in PDF </a>
		<div class="table-responsive">
			<table id="customer" class="table table-info">
				<thead>
					<th scope="col">Customer ID</th>
					<th scope="col">Customer Name</th>
					<th scope="col">Customer Email</th>
					<th scope="col">Customer Address</th>
					<th scope="col">Customer Phone No</th>
					<th scope="col">Customer CNIC</th>
					
				</thead>
				
			</table>
		</div>	
		
	</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>


<script type="text/javascript">

	$(document).ready( function () {
	    $('#customer').DataTable({
	    	processing: true,
	        serverSide: true,   //DataTables set to server side rendering
	        ajax: '{!! route('get.customers') !!}',
	        columns: [
	        	{ data: 'id', name: 'id' },
	            { data: 'name', name: 'name' },
	            { data: 'email', name: 'email' },
	            { data: 'address', name: 'address' },
	            { data: 'phoneno', name: 'phoneno' },
	            { data: 'cnic', name: 'cinc' },

	        ]
		});
	});


</script>
</body>

</html>
