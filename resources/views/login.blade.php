<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
	<title>Login</title>
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
		font-size: 18px;

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
		color: #FFFFFF;
		font-size: 25px;
	}
	
	</style>
<body class="content">
	<form action="/login" method="POST">
		{{ csrf_field() }}
	<h1 class="h1">Log in</h1>
	<img src="https://image.flaticon.com/icons/svg/755/755359.svg" height="250" width="250"><br><br>
	<div class="p">
		Username <input type="text" name="username" style="margin-left: 8px; border-radius: 30px;"><br>
		Password <input type="text" name="password" style="margin-left: 16px; border-radius: 30px;"><br>
	</div>
	
	<button type="submit" class="button">Log in</button>
	
	</form>
	<a href="/cancel"><button type="submit" class="button">Cancel</button></a>
	<div>
			@if(isset($message))
				<p>{{ $message }}</p>
			@endif
		</div>
</body>
</html>