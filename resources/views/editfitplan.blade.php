<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
	<title>Edit Fitplan</title>
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
	<form action="/editquestion" method="POST">
		{{ csrf_field() }}
		<h1 class="h1">Edit Fitplan</h1>
		<center>
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
					<th colspan="1">
						Age
					</th>
				</tr>
				<tr>
					<td>
						Age End
					</td>
					<td>
						<input type="text" name="ageEnd">
					</td>
					<td>
						Age Start
					</td>
					<td>
						<input type="text" name="ageStart">
					</td>
				</tr>
				<tr>
					<th>
						AVG Time
					</th>
					<td>
						<input type="text" name="avgTime">
					</td>
				</tr>
				<tr>
					<th colspan="1">
						BMI
					</th>
				</tr>
				<tr>
					<td>
						BMI End
					</td>
					<td>
						<input type="text" name="bmiEnd">
					</td>
					<td>
						BMI Start
					</td>
					<td>
						<input type="text" name="bmiStart">
					</td>
				</tr>
				<tr>
					<th>
						Category
					</th>
					<td>
						<input type="text" name="category">
					</td>
				</tr>
				<tr>
					<th>
						Difficult
					</th>
					<td>
						<input type="text" name="difficult">
					</td>
				</tr>
				<tr>
					<th colspan="1">
						Equipment
					</th>
				</tr>
				<tr>
					<td>
						Equipment 1
					</td>
					<td>
						<input type="text" name="equipment0">
					</td>
					<td>
						Equipment 2
					</td>
					<td>
						<input type="text" name="equipment1">
					</td>
				</tr>
				<tr>
					<th colspan="1">
						Gender
					</th>
				</tr>
				<tr>
					<td>
						Gender 1
					</td>
					<td>
						<input type="text" name="gender0">
					</td>
					<td>
						Gender 2
					</td>
					<td>
						<input type="text" name="gender1">
					</td>
				</tr>
				<tr>
					<th>
						Intensity
					</th>
					<td>
						<input type="text" name="intensity">
					</td>
				</tr>
		</table>
	</center>
		
		

		<button type="submit" class="button">Edit Data</button>
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
				Age end/start
			</th>
			<th>
				BMI end/start
			</th>
			<th>
				Avg time
			</th>
			<th>
				Category
			</th>
			<th>
				Difficult
			</th>
			<th>
				Equipment
			</th>
			<th>
				Gender
			</th>
			<th>
				Intensity
			</th>
		</tr>
			<?php foreach (Session::get('key2') as $key) {
						$key2[] = $key;
					 
					
					?>
					<?php } ?>
					<?php foreach (array_values(Session::get('ref')) as $a => $value){ 
						
						

							$ageEnd[$a] = $value['age']['end'];
							$ageStart[$a] = $value['age']['start'];

							$bmiEnd[$a] = $value['bmi']['end'];
							$bmiStart[$a] = $value['bmi']['start'];
						
						

							
							
						
						if(isset($value['equipment'][0])){

							$equipment0[$a] = $value['equipment'][0];
						}
						if(isset($value['equipment'][1])){

							$equipment1[$a] = $value['equipment'][1];
						}
						if(isset($value['equipment'][2])){

							$equipment2[$a] = $value['equipment'][2];
						}
						if(isset($value['gender'][0])){

							$gender0[$a] = $value['gender'][0];
							
						}if(isset($value['gender'][1])){

							$gender1[$a] = $value['gender'][1];
							
						}
						

							
						
						
						
							
							
							

					?>
					<?php } ?>
				
					
					

					<?php foreach (array_values(Session::get('ref')) as $b => $value2){ 
						$avgTime = $value2['avgtime'];
						$category = $value2['category'];
						$difficult = $value2['difficult'];
						$intensity = $value2['intensity'];

					?>


					<tr>
						<td>
							{{ $key2[$b] }}
						</td>
						<td>
							{{ $ageEnd[$b] }}/{{ $ageStart[$b] }}
						</td>
						<td>
							{{ $bmiEnd[$b] }}/{{ $bmiStart[$b] }}
						</td>
						<td>
							{{ $avgTime }}
						</td>
						<td>
							{{ $category }}
						</td>
						<td>
							{{ $difficult }}
						</td>
						<?php if(isset($equipment0[$b])) { ?>
						
						
						<td>
							{{ $equipment0[$b] }},<?php if(isset($equipment1[$b])) { ?>{{ $equipment1[$b] }},<?php if(isset($equipment2[$b])) { ?>{{ $equipment2[$b] }}
						</td>
						<?php } ?>
						<?php } ?>
						<?php } ?>
						<?php if(isset($gender0[$b])) { ?>
						
						<td>
							{{ $gender0[$b] }}-<?php if(isset($gender1[$b])) { ?>{{ $gender1[$b] }}
						</td>
						<?php } ?>
						<?php } ?>
						<td>
							{{ $intensity }}
						</td>
						
						
						
						
						
					</tr>

					<?php } ?>

	</table>
	
</body>
</html>