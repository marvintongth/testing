<!DOCTYPE html>
<html>
<head>
	<title></title>

<style type="text/css">
	.border{
		border-color: black;
	}
</style>
</head>
<body>
	<h1>Simple Shopping App</h1>

	<div class="border">
		<div>
			<img src="{{ URL::asset('/image/500x400.png')}}" alt="..." height="500" width="400">
		</div>
		<div>
			<p>Brand</p>
			<p>Product Name</p>
		</div>
		<div>
			<span>RM 0.00</span>
			<span><strike>RM 0.00 TESTING</strike></span>
		</div>
		<div>
			<span>
				<select name="quantity">
				@for( $i=1)	
					<option value="">	
				</select>
			</span>
		</div>
	</div>
</body>
</html>