<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
	<title>Add User</title>
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
	<form action="/adduser" method="POST">
		{{ csrf_field() }}
		<h1 class="h1">User</h1>
		<center>
			<table>
				<tr>
					<td>
						Date of Birth
					</td>
					<td>
						<input type="text" name="dob">
					</td>
				</tr>
				<tr>
					<td>
						E-mail
					</td>
					<td>
						<input type="text" name="email">
					</td>
				</tr>

				<tr>
					<td>
						Firstname
					</td>
					<td>
						<input type="text" name="fname">
					</td>
				</tr>
				<tr>
					<td>
						Gender
					</td>
					<td>
						<input type="text" name="gender">
					</td>
				</tr>
				<tr>
					<td>
						Height
					</td>
					<td>
						<input type="text" name="height">
					</td>
				</tr>
				<tr>
					<td>
						Lastname
					</td>
					<td>
						<input type="text" name="lname">
					</td>
				</tr>
				<tr>
					<td>
						Password
					</td>
					<td>
						<input type="text" name="password">
					</td>
				</tr>
				<tr>
					<td>
						Waist Measurement
					</td>
					<td>
						<input type="text" name="waist">
					</td>
				</tr>
				<tr>
					<td>
						Weight
					</td>
					<td>
						<input type="text" name="weight">
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