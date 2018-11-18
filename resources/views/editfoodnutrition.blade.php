<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
	<title>Edit Food Nutrition</title>
</head>
<style type="text/css">
	.button{
		width: 100px;
		height: 50px;
		background-color: #848484;
		border-style: solid;
		border-radius: 30px;
		
		font-family: 'Kanit', sans-serif;
	
	}
	.content{
		font-family: 'Kanit', sans-serif;
		background-color: #353945;
		text-align: center;
		margin-top: 70px;
		color: white;

	}
	.h1{
		font-family: 'Kanit', sans-serif;
		color: #FFBE5A;
		font-size: 50px;
	}
	.p{
		font-family: 'Kanit', sans-serif;
		color: #FFBE5A;
		font-size: 35px;
	}
	.warn{
		font-family: 'Kanit', sans-serif;
		color: red;
		font-size: 15px;
	}
	td{
		padding: 5px;
	}
	th{
		color: #FFBE5A;
	}
</style>
<body class="content">

	<h1 class="h1">Edit Food Nutrition</h1>
	<form action="/editfoodnutrition" method="POST">
		{{ csrf_field() }}
		<center>
		<p class="warn">* Please copy key from the below table and put in Key field.</p>
		<table>
			<tr>
				<td>
					Key
				</td>
				<td>
					<input type="text" name="key2">
				</td>
			</tr>
			<tr>
				<td>
					Calories
				</td>
				<td>
					<input type="text" name="calories">
				</td>
			</tr>
			<tr>
				<td>
					Carb
				</td>
				<td>
					<input type="text" name="carbs">
				</td>
			</tr>
			<tr>
				<td>
					Category
				</td>
				<td>
					<input type="text" name="category">
				</td>
			</tr>
			<tr>
				<td>
					Fat
				</td>
				<td>
					<input type="text" name="fat">
				</td>
			</tr>
			<tr>
				<td>
					Name
				</td>
				<td>
					<input type="text" name="name">
				</td>
			</tr>
			<tr>
				<td>
					Protein
				</td>
				<td>
					<input type="text" name="protein">
				</td>
			</tr>
			<tr>
				<td>
					Volume
				</td>
				<td>
					<input type="text" name="volume">
				</td>
			</tr>
			
		</table>
	</center>
	<br>
		
		

		<button type="submit" class="button">Edit Data</button>
	</form>
	<div>
			@if(isset($message))
				<p>{{ $message }}</p>
			@endif
		</div>

		<br>
		
	<table style="width:80%;margin: 0 auto;padding: 40px 0px;border: 2px solid #ffffff">
		<tr>
			
			<th>
				Key
			</th>
			<th>
				Name
			</th>
			<th>
				Calories
			</th>
			<th>
				Carbs
			</th>
			<th>
				Category
			</th>
			<th>
				Fat
			</th>
			<th>
				Protein
			</th>
			<th>
				Volume
			</th>

		</tr>
		

		

	<?php
			foreach(Session::get('key2') as $key){
				$key2[] = $key;
			
		?>

		<?php } ?>
		

		<?php
			foreach(array_values(Session::get('ref')) as $i => $value){ 
			
			$calories = $value['calories'];
			$carbs = $value['carbs'];
			$category = $value['category'];
			$fat = $value['fat'];
			$name = $value['name'];
			$protein = $value['protein'];
			$volume = $value['volume'];	
			
			?>

			
		
		
			
		
			
			<tr>

		 	<td>
		 	
			{{ $key2[$i] }}
		
		 	</td>
		 	<td>
		 	{{ $name }}
		 	</td>
		 	<td>
			{{ $calories }}
		 	</td>
		 	<td>
			{{ $carbs }}
		 	</td>
		 	<td>
			{{ $category }}
		 	</td>
		 	<td>
			{{ $fat }}
		 	</td>
		 	<td>
			{{ $protein }}
		 	</td>
		 	<td>
			{{ $volume }}
		 	</td>
			 
		</tr>
			
		
		<?php } ?>
		 
		
	</table>
	
	
</body>
</html>