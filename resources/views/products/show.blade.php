<!DOCTYPE html>
<html>
    <head>
        <title>Show Product</title>
		
		<style>
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
			}
		</style>
		
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.3/datatables.min.css"/>
	<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.11.3/datatables.min.js"></script>
	<script type="text/javascript" src="/test/wp-content/themes/child/script/jquery.jcarousel.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    </head>
    <body>  
		<div class="container" style="width:500px; margin:0 auto;">
			<div class="row justify-content-center">
				<div class="col-md-8">
					<div class="card">
						<div class="card-body">
							<h2>Show Product</h2>
							<a href="{{ route('products.index') }}">
								<button style="background-color: #2F55E1; color: white; float:right; width:60px; height:30px;">Back</button>
							</a>							
							<p><b>Name:</b> {{ $product->name }}</p>
							<p><b>Price:</b> {{ $product->price }}</p>
							<p><b>Details:</b> {{ $product->details }}</p>
							<p><b>Publish:</b> {{ $product->status = 1 ? 'Yes' : 'No' }}</p>
						</div>
					</div>
				</div>
			</div>
		</div>		
    </body>	
</html>