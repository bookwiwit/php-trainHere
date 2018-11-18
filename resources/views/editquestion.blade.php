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
						
						

							$choices0[] = $value['choices'][0];
							
						
						if(isset($value['choices'][1])){

							$choices1[$a] = $value['choices'][1];
							
						}
						if(isset($value['choices'][2])){

							$choices2[$a] = $value['choices'][2];
						}
						if(isset($value['choices'][3])){

							$choices3[$a] = $value['choices'][3];
							
						}
						if(isset($value['choices'][4])){

							$choices4[$a] = $value['choices'][4];
							
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
							{{ $choices0[$b] }}
						</td>
						<?php if(isset($choices1[$b])) { ?>
						<td>
							{{ $choices1[$b] }}
						</td>
						<?php } ?>
						<?php if(isset($choices2[$b])) { ?>
						<td>
							{{ $choices2[$b] }}
						</td>
						<?php } ?>
						<?php if(isset($choices3[$b])) { ?>
						<td>
							{{ $choices3[$b] }}
						</td>
						<?php } ?>
						<?php if(isset($choices4[$b])) { ?>
						<td>
							{{ $choices4[$b] }}
						</td>
						<?php } ?>
						
						
						
						
					</tr>

					<?php } ?>

	</table>
	
</body>
</html>