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
			<img src="" alt="..." height="500" width="400">
		</div>
		<div>
			<p>Brand</p>
			<p>Product Name</p>
		</div>
		<div>
			<span>RM 0.00</span>
			<br>
			<span><strike>RM 0.00</strike></span>
		</div>
			<span>
				<select name="quantity">
					
					@for($i=1 ; $i<=10 ; $i++)
						<option>{{ $i }}</option>
					@endfor
				  
				</select>
			</span>
		<div>
		</div>
	</div>
</body>
</html>