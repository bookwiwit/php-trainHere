<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
	<title>Add Food Nutrition</title>
</head>
<style type="text/css">
	.button{
		width: 100px;
		height: 50px;
		background-color: #848484;
		border-style: solid;
		border-radius: 30px;
		margin-top: 50px;
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
	td{
		padding: 15px;
	}
</style>
<body class="content">
	<form action="/addfoodnutrition" method="POST">
		{{ csrf_field() }}
		<h1 class="h1">Add Food Nutrition</h1>
		<center>
		<table>
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
					Carbs
				</td>
				<td>
					<input type="text" name="carbs">
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
		
		
		
		
		

		<button type="submit" class="button">Add Data</button>
	</form>

	<div>
			@if(isset($message))
				<p>{{ $message }}</p>
			@endif
		</div>
	
</body>
</html>