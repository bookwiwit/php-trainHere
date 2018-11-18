<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
	<title>Delete Collection</title>
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
	th{
		font-size: 17px;
		color: #FFBE5A;
	}
</style>
<body class="content">
	<form action="/delcollection" method="POST">
		{{ csrf_field() }}
		<h1 class="h1">Delete Workout Collection</h1>
		<center>
			<table>
				<tr>
					<th>
						Key
					</th>
					<td>
						<input type="text" name="key2">
					</td>
				</tr>
				
				
				
				
			</table>
		</center>
		
		

		<button type="submit" class="button">Delete Data</button>
	</form>
	<div>
			@if(isset($message))
				<p>{{ $message }}</p>
			@endif
		</div>
		<br>
		<br>
	<table style="width:80%;margin: 0 auto;padding: 40px 0px;border: 2px solid #ffffff">
		<tr>
			<th>
				Key
			</th>
			
			<th>
				Avg time
			</th>
			<th>
				Description
			</th>
			<th>
				Equipment
			</th>
			<th>
				Name
			</th>
			<th>
				Pic
			</th>
		</tr>
			<?php foreach (Session::get('key2') as $key) {
						$key2[] = $key;
					 
					
					?>
					<?php } ?>
					<?php foreach (array_values(Session::get('ref')) as $a => $value){ 
						
						

							
						
						

							
							
						
						if(isset($value['equipment'][0])){

							$equipment0[$a] = $value['equipment'][0];
						}
						if(isset($value['equipment'][1])){

							$equipment1[$a] = $value['equipment'][1];
						}
						if(isset($value['equipment'][2])){

							$equipment2[$a] = $value['equipment'][2];
						}
						
						

							
						
						
						
							
							
							

					?>
					<?php } ?>
				
					
					

					<?php foreach (array_values(Session::get('ref')) as $b => $value2){ 
						$avgTime = $value2['avgtime'];
						$description = $value2['description'];
						$name = $value2['name'];
						$pic = $value2['pic'];

					?>


					<tr>
						<td>
							{{ $key2[$b] }}
						</td>
						
						<td>
							{{ $avgTime }}
						</td>
						<td>
							{{ $description }}
						</td>
						
						<?php if(isset($equipment0[$b])) { ?>
						
						
						<td>
							{{ $equipment0[$b] }},<?php if(isset($equipment1[$b])) { ?>{{ $equipment1[$b] }},<?php if(isset($equipment2[$b])) { ?>{{ $equipment2[$b] }}
						</td>
						<?php } ?>
						<?php } ?>
						<?php } ?>
						<td>
							{{ $name }}
						</td>
						<td>
							{{ $pic }}
						</td>
						
						
						
						
						
					</tr>

					<?php } ?>

	</table>
	
</body>
</html>