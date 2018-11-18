<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
	<title>Add Video</title>
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
	<form action="/addvideo" method="POST">
		{{ csrf_field() }}
		<h1 class="h1">Video</h1>
		<center>
			<table>
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
						Link
					</td>
					<td>
						<input type="text" name="link">
					</td>
				</tr>

				<tr>
					<td>
						Title
					</td>
					<td>
						<input type="text" name="title">
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