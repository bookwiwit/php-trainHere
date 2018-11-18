<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
	<title>Delete User</title>
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
		padding: 30px;
	}
	th{
		color: #FFBE5A;
	}
</style>
<body class="content">

	<h1 class="h1">Delete User</h1>
	<form action="/deluser" method="POST">
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
			
			
		</table>
	</center>
	<br>
		
		

		<button type="submit" class="button">Delete Data</button>
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
				Date of Birth
			</th>
			<th>
				Email
			</th>
			<th>
				Firstname
			</th>
			<th>
				Lastname
			</th>
			<th>
				Gender
			</th>
			<th>
				Weight
			</th>
			<th>
				Height
			</th>
			<th>
				Waist Measurement
			</th>
			<th>
				Password
			</th>
			

		</tr>
		

		

	<?php
			foreach(Session::get('key2') as $key){
				$key2[] = $key;
			
		?>

		<?php } ?>
		

		<?php
			foreach(array_values(Session::get('ref')) as $i => $value){ 
				$dateofbirth = $value['dateofbirth'];
				$email = $value['email'];
				$fName = $value['fName'];
				$lName = $value['lName'];
				$gender = $value['gender'];
				$weight = $value['weight'];
				$height = $value['height'];
				$waistMeasurement = $value['waistMeasurement'];
				$password = $value['password'];
				
			
			
			
			
			?>

			
		
		
			
		
			
			<tr>
		 	<td>
			{{ $key2[$i] }}
		 	</td>
		 	<td>
		 	{{ $dateofbirth }}
		 	</td>
		 	<td>
		 	{{ $email }}
		 	</td>
		 	<td>
		 	{{ $fName }}
		 	</td>
		 	<td>
		 	{{ $lName }}
		 	</td>
		 	<td>
		 	{{ $gender }}
		 	</td>
		 	<td>
		 	{{ $weight }}
		 	</td>
		 	<td>
		 	{{ $height }}
		 	</td>
		 	<td>
		 	{{ $waistMeasurement }}
		 	</td>
		 	<td>
		 	{{ $password }}
		 	</td>
		 	

		 	
			 
		</tr>
			
		
		<?php } ?>
		 
		
	</table>
	
	
</body>
</html>