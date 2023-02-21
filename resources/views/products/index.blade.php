<!DOCTYPE html>
<html>
    <head>
        <title>Product List</title>

		
		<style>
			table, th, td {
				border: 1px solid black;
			}			
			th {
				text-align: left;
			}
			h2 {
				font-size: 29px;
				font-weight: lighter;
				display: inline-block;
				font-family:'Open Sans', sans-serif;
				margin:0;
				margin-right: 42px;
			}
			button {
				margin:0;
				display: inline-block;
				vertical-align:left;
				border: none;
				border-radius: 8px;
				width:80px; 
				height:25px;
			}

		</style>
		
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.3/datatables.min.css"/>
		<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.11.3/datatables.min.js"></script>
		<script type="text/javascript" src="/test/wp-content/themes/child/script/jquery.jcarousel.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    </head>
    <body>  
		<div style="width:800px; margin:0 auto;">
			<div>
				<h2>Laravel</h2> 
				<a href="{{ route('products.create') }}"><button style="background-color: #3EE243; color: white; float:right; width:150px;">Create Product</button></a>
				<table id="product-table" style="width:100%;">
					<thead>
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Price</th>
							<th>Details</th>
							<th>Status</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($products as $product)
						<tr>
							<td>{{ $product->id }}</td>
							<td>{{ $product->name }}</td>
							<td>{{ $product->price }}</td>
							<td>{{ $product->details }}</td>
							<td>{{ $product->publish == 1 ? 'Yes' : 'No' }}</td>
							<td >
								<a href="{{ route('products.show', $product->id) }}">
									<button style="background-color: #43F6F1; color: white;" >Show</button>
								</a>
								<a href="{{ route('products.edit', $product->id) }}">
									<button style="background-color: #2F55E1; color: white;">Edit</button>
								</a>
								<a href="{{ route('products.destroy', $product->id) }}">
									<button style="background-color: red; color: white;" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
								</a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>			
		</div>
    </body>	
	<script>
		$(document).ready( function () {
			$('#product-table').DataTable();
		} );

	</script>
</html>