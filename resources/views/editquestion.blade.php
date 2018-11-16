<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
	<title>Edit Question</title>
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
		<h1 class="h1">Edit Question</h1>
		<center>
		<table>
			<tr>
				<td>
					Number of Question
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
		<br>
		<br>
	<table style="width:80%;margin: 0 auto;padding: 40px 0px;border: 2px solid #ffffff">
		<tr>
			<th>
				Question Number
			</th>
			<th>
				Question 
			</th>
			<th>
				Choice 1
			</th>
			<th>
				Choice 2
			</th>
			<th>
				Choice 3
			</th>
			<th>
				Choice 4
			</th>
			<th>
				Choice 5
			</th>
		</tr>
			<?php foreach (Session::get('key2') as $number) {
						$i[] = $number;
					 
					
					?>
					<?php } ?>
					<?php foreach (array_values(Session::get('ref')) as $a => $value){ 
						
						$choice0[] = $value['choices'][0];
						$choice1[] = $value['choices'][1];
						if(isset($value['choices'][2])){
							$choice2[] = $value['choices'][2];
						}
						if(isset($value['choices'][3])){
							$choice3[] = $value['choices'][3];
						}
						if(isset($value['choices'][4])){
							$choice4[] = $value['choices'][4];
						}
						
						

					?>
					<?php } ?>
				
					
					

					<?php foreach (array_values(Session::get('ref')) as $b => $value2){ 
						
						$question = $value2['question'];

					?>


					<tr>
						<td>
							{{ $i[$b] }}
						</td>
						<td>
							{{ $question }}
						</td>
						<td>
							{{ $choice0[$b] }}
						</td>
						<td>
							{{ $choice1[$b] }}
						</td>
						<?php
							if(isset($choice2[$b])){ ?>
						<td>
							
							{{ $choice2[$b] }}
							
							
						</td>
						<?php
						}
						?>
						<?php
							if(isset($choice3[$b])){ ?>
						<td>
							
							{{ $choice3[$b] }}
							
							
						</td>
						<?php
						}
						?>
						<?php
							if(isset($choice4[$b])){ ?>
						<td>
							
							{{ $choice4[$b] }}
							
							
						</td>
						<?php
						}
						?>
						
					</tr>

					<?php } ?>

	</table>
	
</body>
</html>