<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
	<title>AddFitplan</title>
</head>
<style type="text/css">
	.button{
		width: 100px;
		height: 50px;
		background-color: #848484;
		border-style: solid;
		border-radius: 30px;
		margin-top: 50px;

	}
	.content{
		font-family: 'Kanit', sans-serif;
		background-color: #353945;
		text-align: center;
		margin-top: 70px;

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
</style>
<body class="content">
	<form action="/addfitplan2" method="POST">
		{{ csrf_field() }}
		ageEnd<input type="text" name="ageEnd"><br>
		ageStart<input type="text" name="ageStart"><br>
		avgTime<input type="text" name="avgTime"><br>
		bmiEnd<input type="text" name="bmiEnd"><br>
		bmiStart<input type="text" name="bmiStart"><br>
		category<input type="text" name="category"><br>
		difficult<input type="text" name="difficult"><br>
		equipment0<input type="text" name="equipment0"><br>
		equipment1<input type="text" name="equipment1"><br>
		gender0<input type="text" name="gender0"><br>
		gender1<input type="text" name="gender1"><br>
		intensity<input type="text" name="intensity"><br>
		bodyParts<input type="text" name="bodyParts"><br>
		set1<input type="text" name="set1"><br>
		amount1<input type="text" name="amount1"><br>
		title1<input type="text" name="title1"><br>
		amount2<input type="text" name="amount2"><br>
		title2<input type="text" name="title2"><br>
		amount3<input type="text" name="amount3"><br>
		title3<input type="text" name="title3"><br>
		amount4<input type="text" name="amount4"><br>
		title4<input type="text" name="title4"><br>
		amount5<input type="text" name="amount5"><br>
		title5<input type="text" name="title5"><br>
		amount6<input type="text" name="amount6"><br>
		title6<input type="text" name="title6"><br>
		amount7<input type="text" name="amount7"><br>
		title7<input type="text" name="title7">

		<button type="submit">Test</button>
	</form>
	
</body>
</html>