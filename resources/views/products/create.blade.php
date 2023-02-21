<!DOCTYPE html>
<html>
    <head>
        <title>Create Product</title>
		
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
			.wrapper {
				text-align: center;
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
							<h2>Add New Product</h2>
							<a href="{{ route('products.index') }}">
								<button style="background-color: #2F55E1; color: white; float:right; width:60px; height:30px;">Back</button>
							</a>
							<form method="POST" action="{{ route('products.store') }}">
								{!! csrf_field() !!}
								<div class="form-group" style="padding-bottom:10px">
									<label for="name"><b>Name:</b></label><br>
									<input type="text" name="name" placeholder="Name" class="form-control" id="name" style="width:100%;display:block" required>
								</div>
								<div class="form-group" style="padding-bottom:10px">
									<label for="price"><b>Price:</b></label><br>
									<input type="text" name="price" placeholder="Price" class="form-control" id="price" style="width:100%;display:block" required>
								</div>
								<div class="form-group" style="padding-bottom:10px">
									<label for="details"><b>Details:</b></label><br>
									<textarea name="details" placeholder="Details" class="form-control" id="details" style="width:100%;display:block" required></textarea>
								</div>
								<div class="form-group" style="padding-bottom:10px">
									<label for="status"><b>Publish:</b></label>
									<br>
									<input type="radio" id="Yes" name="publish" value="1" checked>
									<label for="html">Yes</label><br>
									<input type="radio" id="No" name="publish" value="0">
									<label for="css">No</label><br>
								</div>
								<div class="wrapper">
									<button type="submit" style="background-color: #2F55E1; color: white;  width:60px; height:30px;">Submit</button>
								</div>								
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
    </body>	
	<script>
	</script>
</html>