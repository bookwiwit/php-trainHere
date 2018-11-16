<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
	<title>Add Question</title>
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
		margin-top: 50px;
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
	<form action="/addquestion" method="POST">
		{{ csrf_field() }}
		<h1 class="h1">Add Question</h1>
		<center>
		<table>
			<tr>
				<td>
					Lastest Question Number
				</td>
				<td>
					<?php foreach (array_keys(Session::get('ref')) as $a => $value) {
						$i[] = $value;
					} 
					echo count($i);
					?>

				</td>
			</tr>
			<tr>
				<td>
					Number of New Question
				</td>
				<td>
					<input type="text" name="num">
				</td>
			</tr>
			<tr>
				<td>
				Question
				</td>
				<td>
					<input type="text" name="question">
				</td>
			</tr>
			<tr>
				<td>
				Choice 1
				</td>
				<td>
					<input type="text" name="choice1">
				</td>
			</tr>
			<tr>
				<td>
				Choice 2
				</td>
				<td>
					<input type="text" name="choice2">
				</td>
			</tr>
			<tr>
				<td>
				Choice 3
				</td>
				<td>
					<input type="text" name="choice3">
				</td>
			</tr>
			<tr>
				<td>
				Choice 4
				</td>
				<td>
					<input type="text" name="choice4">
				</td>
			</tr>
			<tr>
				<td>
				Choice 5
				</td>
				<td>
					<input type="text" name="choice5">
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