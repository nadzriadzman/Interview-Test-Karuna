<!DOCTYPE html>
<html>
    <head>
        <title>Edit Product</title>
		
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
							<h2>Edit Product</h2>
							<a href="{{ route('products.index') }}">
								<button style="background-color: #2F55E1; color: white; float:right; width:60px; height:30px;">Back</button>
							</a>
							<form method="POST" action="{{ route('products.update', $product->id) }}">
								{!! csrf_field() !!}
								<div class="form-group" style="padding-bottom:10px">
									<label for="name">Name:</label><br>
									<input type="text" name="name" class="form-control" id="name" value={{$product->name}} style="width:100%;display:block" required>
								</div>
								<div class="form-group" style="padding-bottom:10px">
									<label for="price">Price:</label><br>
									<input type="text" name="price" class="form-control" id="price" value={{$product->price}} style="width:100%;display:block"  required>
								</div>
								<div class="form-group" style="padding-bottom:10px">
									<label for="details">Details:</label><br>
									<textarea name="details" class="form-control" id="details" required  style="width:100%;display:block">{{$product->details}}</textarea>
								</div>
								<div class="form-group" style="padding-bottom:10px">
									<label for="status">Publish:</label>
									<br>
									<input type="radio" id="Yes" name="publish" value="1" {{ ($product->publish=="1")? "checked" : "" }}>
									<label for="html">Yes</label><br>
									<input type="radio" id="No" name="publish" value="2"  {{ ($product->publish=="0")? "checked" : "" }}>
									<label for="css">No</label><br>
								</div>
								<div class="wrapper">
									<button type="submit" style="background-color: #2F55E1; color: white;  width:60px; height:30px;">Update</button>
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