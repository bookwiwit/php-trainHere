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
	<form action="/addfitplan" method="POST">
		{{ csrf_field() }}
		<h1 class="h1">Add Fitness Plan</h1>
		<center>
			<table>
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
				<tr>
					<th colspan="1">
						Day 1
					</th>
				</tr>
				<tr>
					<td>
						Body Parts
					</td>
					<td>
						<input type="text" name="bodyParts1">
					</td>
				</tr>
				<tr>
					<td colspan="1">
						Set 1
					</td>
				</tr>
				<tr>
					<td colspan="1">
						Workout
					</td>
				</tr>
				<tr>
					<td>
						Title 
					</td>
					<td>
						<input type="text" name="set11" placeholder="set number">
					</td>
				</tr>
				<tr>
					<td>
						Amount 1
					</td>
					<td>
						<input type="text" name="amount111">
					</td>
					<td>
						Title 1
					</td>
					<td>
						<input type="text" name="title111">
					</td>
				</tr>
				<tr>
					<td>
						Amount 2
					</td>
					<td>
						<input type="text" name="amount112">
					</td>
					<td>
						Title 2
					</td>
					<td>
						<input type="text" name="title112">
					</td>
				</tr>
				<tr>
					<td>
						Amount 3
					</td>
					<td>
						<input type="text" name="amount113">
					</td>
					<td>
						Title 3
					</td>
					<td>
						<input type="text" name="title113">
					</td>
				</tr>
				<tr>
					<td>
						Amount 4
					</td>
					<td>
						<input type="text" name="amount114">
					</td>
					<td>
						Title 4
					</td>
					<td>
						<input type="text" name="title114">
					</td>
				</tr>
				<tr>
					<td>
						Amount 5
					</td>
					<td>
						<input type="text" name="amount115">
					</td>
					<td>
						Title 5
					</td>
					<td>
						<input type="text" name="title115">
				</tr>
				<tr>
					<td>
						Amount 6
					</td>
					<td>
						<input type="text" name="amount116">
					</td>
					<td>
						Title 6
					</td>
					<td>
						<input type="text" name="title116">
					</td>
				</tr>
				<tr>
					<td>
						Amount 7
					</td>
					<td>
						<input type="text" name="amount117">
					</td>
					<td>
						Title 7
					</td>
					<td>
						<input type="text" name="title117">
					</td>
				</tr>
				<tr>
					<td colspan="1">
						Set 2
					</td>
				</tr>
				<tr>
					<td colspan="1">
						Workout
					</td>
				</tr>
				<tr>
					<td>
						Title 
					</td>
					<td>
						<input type="text" name="set12" placeholder="set number">
					</td>
				</tr>
				<tr>
					<td>
						Amount 1
					</td>
					<td>
						<input type="text" name="amount121">
					</td>
					<td>
						Title 1
					</td>
					<td>
						<input type="text" name="title121">
					</td>
				</tr>
				<tr>
					<td>
						Amount 2
					</td>
					<td>
						<input type="text" name="amount122">
					</td>
					<td>
						Title 2
					</td>
					<td>
						<input type="text" name="title122">
					</td>
				</tr>
				<tr>
					<td>
						Amount 3
					</td>
					<td>
						<input type="text" name="amount123">
					</td>
					<td>
						Title 3
					</td>
					<td>
						<input type="text" name="title123">
					</td>
				</tr>
				<tr>
					<td>
						Amount 4
					</td>
					<td>
						<input type="text" name="amount124">
					</td>
					<td>
						Title 4
					</td>
					<td>
						<input type="text" name="title124">
					</td>
				</tr>
				<tr>
					<td>
						Amount 5
					</td>
					<td>
						<input type="text" name="amount125">
					</td>
					<td>
						Title 5
					</td>
					<td>
						<input type="text" name="title125">
				</tr>
				<tr>
					<td>
						Amount 6
					</td>
					<td>
						<input type="text" name="amount126">
					</td>
					<td>
						Title 6
					</td>
					<td>
						<input type="text" name="title126">
					</td>
				</tr>
				<tr>
					<td>
						Amount 7
					</td>
					<td>
						<input type="text" name="amount127">
					</td>
					<td>
						Title 7
					</td>
					<td>
						<input type="text" name="title127">
					</td>
				</tr>
				<tr>
					<td colspan="1">
						Set 3
					</td>
				</tr>
				<tr>
					<td colspan="1">
						Workout
					</td>
				</tr>
				<tr>
					<td>
						Title 
					</td>
					<td>
						<input type="text" name="set13" placeholder="set number">
					</td>
				</tr>
				<tr>
					<td>
						Amount 1
					</td>
					<td>
						<input type="text" name="amount131">
					</td>
					<td>
						Title 1
					</td>
					<td>
						<input type="text" name="title131">
					</td>
				</tr>
				<tr>
					<td>
						Amount 2
					</td>
					<td>
						<input type="text" name="amount132">
					</td>
					<td>
						Title 2
					</td>
					<td>
						<input type="text" name="title132">
					</td>
				</tr>
				<tr>
					<td>
						Amount 3
					</td>
					<td>
						<input type="text" name="amount133">
					</td>
					<td>
						Title 3
					</td>
					<td>
						<input type="text" name="title133">
					</td>
				</tr>
				<tr>
					<td>
						Amount 4
					</td>
					<td>
						<input type="text" name="amount134">
					</td>
					<td>
						Title 4
					</td>
					<td>
						<input type="text" name="title134">
					</td>
				</tr>
				<tr>
					<td>
						Amount 5
					</td>
					<td>
						<input type="text" name="amount135">
					</td>
					<td>
						Title 5
					</td>
					<td>
						<input type="text" name="title135">
				</tr>
				<tr>
					<td>
						Amount 6
					</td>
					<td>
						<input type="text" name="amount136">
					</td>
					<td>
						Title 6
					</td>
					<td>
						<input type="text" name="title136">
					</td>
				</tr>
				<tr>
					<td>
						Amount 7
					</td>
					<td>
						<input type="text" name="amount137">
					</td>
					<td>
						Title 7
					</td>
					<td>
						<input type="text" name="title137">
					</td>
				</tr>
				<tr>
					<td colspan="1">
						Set 4
					</td>
				</tr>
				<tr>
					<td colspan="1">
						Workout
					</td>
				</tr>
				<tr>
					<td>
						Title 
					</td>
					<td>
						<input type="text" name="set14" placeholder="set number">
					</td>
				</tr>
				<tr>
					<td>
						Amount 1
					</td>
					<td>
						<input type="text" name="amount141">
					</td>
					<td>
						Title 1
					</td>
					<td>
						<input type="text" name="title141">
					</td>
				</tr>
				<tr>
					<td>
						Amount 2
					</td>
					<td>
						<input type="text" name="amount142">
					</td>
					<td>
						Title 2
					</td>
					<td>
						<input type="text" name="title142">
					</td>
				</tr>
				<tr>
					<td>
						Amount 3
					</td>
					<td>
						<input type="text" name="amount143">
					</td>
					<td>
						Title 3
					</td>
					<td>
						<input type="text" name="title143">
					</td>
				</tr>
				<tr>
					<td>
						Amount 4
					</td>
					<td>
						<input type="text" name="amount144">
					</td>
					<td>
						Title 4
					</td>
					<td>
						<input type="text" name="title144">
					</td>
				</tr>
				<tr>
					<td>
						Amount 5
					</td>
					<td>
						<input type="text" name="amount145">
					</td>
					<td>
						Title 5
					</td>
					<td>
						<input type="text" name="title145">
				</tr>
				<tr>
					<td>
						Amount 6
					</td>
					<td>
						<input type="text" name="amount146">
					</td>
					<td>
						Title 6
					</td>
					<td>
						<input type="text" name="title146">
					</td>
				</tr>
				<tr>
					<td>
						Amount 7
					</td>
					<td>
						<input type="text" name="amount147">
					</td>
					<td>
						Title 7
					</td>
					<td>
						<input type="text" name="title147">
					</td>
				</tr>
				<tr>
					<td colspan="1">
						Set 5
					</td>
				</tr>
				<tr>
					<td colspan="1">
						Workout
					</td>
				</tr>
				<tr>
					<td>
						Title 
					</td>
					<td>
						<input type="text" name="set15" placeholder="set number">
					</td>
				</tr>
				<tr>
					<td>
						Amount 1
					</td>
					<td>
						<input type="text" name="amount151">
					</td>
					<td>
						Title 1
					</td>
					<td>
						<input type="text" name="title151">
					</td>
				</tr>
				<tr>
					<td>
						Amount 2
					</td>
					<td>
						<input type="text" name="amount152">
					</td>
					<td>
						Title 2
					</td>
					<td>
						<input type="text" name="title152">
					</td>
				</tr>
				<tr>
					<td>
						Amount 3
					</td>
					<td>
						<input type="text" name="amount153">
					</td>
					<td>
						Title 3
					</td>
					<td>
						<input type="text" name="title153">
					</td>
				</tr>
				<tr>
					<td>
						Amount 4
					</td>
					<td>
						<input type="text" name="amount154">
					</td>
					<td>
						Title 4
					</td>
					<td>
						<input type="text" name="title154">
					</td>
				</tr>
				<tr>
					<td>
						Amount 5
					</td>
					<td>
						<input type="text" name="amount155">
					</td>
					<td>
						Title 5
					</td>
					<td>
						<input type="text" name="title155">
				</tr>
				<tr>
					<td>
						Amount 6
					</td>
					<td>
						<input type="text" name="amount156">
					</td>
					<td>
						Title 6
					</td>
					<td>
						<input type="text" name="title156">
					</td>
				</tr>
				<tr>
					<td>
						Amount 7
					</td>
					<td>
						<input type="text" name="amount157">
					</td>
					<td>
						Title 7
					</td>
					<td>
						<input type="text" name="title157">
					</td>
				</tr>
				<tr>
					<th colspan="1">
						Day 2
					</th>
				</tr>
				<tr>
					<td>
						Body Parts
					</td>
					<td>
						<input type="text" name="bodyParts2">
					</td>
				</tr>
				<tr>
					<td colspan="1">
						Set 1
					</td>
				</tr>
				<tr>
					<td colspan="1">
						Workout
					</td>
				</tr>
				<tr>
					<td>
						Title 
					</td>
					<td>
						<input type="text" name="set21" placeholder="set number">
					</td>
				</tr>
				<tr>
					<td>
						Amount 1
					</td>
					<td>
						<input type="text" name="amount211">
					</td>
					<td>
						Title 1
					</td>
					<td>
						<input type="text" name="title211">
					</td>
				</tr>
				<tr>
					<td>
						Amount 2
					</td>
					<td>
						<input type="text" name="amount212">
					</td>
					<td>
						Title 2
					</td>
					<td>
						<input type="text" name="title212">
					</td>
				</tr>
				<tr>
					<td>
						Amount 3
					</td>
					<td>
						<input type="text" name="amount213">
					</td>
					<td>
						Title 3
					</td>
					<td>
						<input type="text" name="title213">
					</td>
				</tr>
				<tr>
					<td>
						Amount 4
					</td>
					<td>
						<input type="text" name="amount214">
					</td>
					<td>
						Title 4
					</td>
					<td>
						<input type="text" name="title214">
					</td>
				</tr>
				<tr>
					<td>
						Amount 5
					</td>
					<td>
						<input type="text" name="amount215">
					</td>
					<td>
						Title 5
					</td>
					<td>
						<input type="text" name="title215">
				</tr>
				<tr>
					<td>
						Amount 6
					</td>
					<td>
						<input type="text" name="amount216">
					</td>
					<td>
						Title 6
					</td>
					<td>
						<input type="text" name="title216">
					</td>
				</tr>
				<tr>
					<td>
						Amount 7
					</td>
					<td>
						<input type="text" name="amount217">
					</td>
					<td>
						Title 7
					</td>
					<td>
						<input type="text" name="title217">
					</td>
				</tr>
				<tr>
					<td colspan="1">
						Set 2
					</td>
				</tr>
				<tr>
					<td colspan="1">
						Workout
					</td>
				</tr>
				<tr>
					<td>
						Title 
					</td>
					<td>
						<input type="text" name="set22" placeholder="set number">
					</td>
				</tr>
				<tr>
					<td>
						Amount 1
					</td>
					<td>
						<input type="text" name="amount221">
					</td>
					<td>
						Title 1
					</td>
					<td>
						<input type="text" name="title221">
					</td>
				</tr>
				<tr>
					<td>
						Amount 2
					</td>
					<td>
						<input type="text" name="amount222">
					</td>
					<td>
						Title 2
					</td>
					<td>
						<input type="text" name="title222">
					</td>
				</tr>
				<tr>
					<td>
						Amount 3
					</td>
					<td>
						<input type="text" name="amount223">
					</td>
					<td>
						Title 3
					</td>
					<td>
						<input type="text" name="title223">
					</td>
				</tr>
				<tr>
					<td>
						Amount 4
					</td>
					<td>
						<input type="text" name="amount224">
					</td>
					<td>
						Title 4
					</td>
					<td>
						<input type="text" name="title224">
					</td>
				</tr>
				<tr>
					<td>
						Amount 5
					</td>
					<td>
						<input type="text" name="amount225">
					</td>
					<td>
						Title 5
					</td>
					<td>
						<input type="text" name="title225">
				</tr>
				<tr>
					<td>
						Amount 6
					</td>
					<td>
						<input type="text" name="amount226">
					</td>
					<td>
						Title 6
					</td>
					<td>
						<input type="text" name="title226">
					</td>
				</tr>
				<tr>
					<td>
						Amount 7
					</td>
					<td>
						<input type="text" name="amount227">
					</td>
					<td>
						Title 7
					</td>
					<td>
						<input type="text" name="title227">
					</td>
				</tr>
				<tr>
					<td colspan="1">
						Set 3
					</td>
				</tr>
				<tr>
					<td colspan="1">
						Workout
					</td>
				</tr>
				<tr>
					<td>
						Title 
					</td>
					<td>
						<input type="text" name="set23" placeholder="set number">
					</td>
				</tr>
				<tr>
					<td>
						Amount 1
					</td>
					<td>
						<input type="text" name="amount231">
					</td>
					<td>
						Title 1
					</td>
					<td>
						<input type="text" name="title231">
					</td>
				</tr>
				<tr>
					<td>
						Amount 2
					</td>
					<td>
						<input type="text" name="amount232">
					</td>
					<td>
						Title 2
					</td>
					<td>
						<input type="text" name="title232">
					</td>
				</tr>
				<tr>
					<td>
						Amount 3
					</td>
					<td>
						<input type="text" name="amount233">
					</td>
					<td>
						Title 3
					</td>
					<td>
						<input type="text" name="title233">
					</td>
				</tr>
				<tr>
					<td>
						Amount 4
					</td>
					<td>
						<input type="text" name="amount234">
					</td>
					<td>
						Title 4
					</td>
					<td>
						<input type="text" name="title234">
					</td>
				</tr>
				<tr>
					<td>
						Amount 5
					</td>
					<td>
						<input type="text" name="amount235">
					</td>
					<td>
						Title 5
					</td>
					<td>
						<input type="text" name="title235">
				</tr>
				<tr>
					<td>
						Amount 6
					</td>
					<td>
						<input type="text" name="amount236">
					</td>
					<td>
						Title 6
					</td>
					<td>
						<input type="text" name="title236">
					</td>
				</tr>
				<tr>
					<td>
						Amount 7
					</td>
					<td>
						<input type="text" name="amount237">
					</td>
					<td>
						Title 7
					</td>
					<td>
						<input type="text" name="title237">
					</td>
				</tr>
				<tr>
					<td colspan="1">
						Set 4
					</td>
				</tr>
				<tr>
					<td colspan="1">
						Workout
					</td>
				</tr>
				<tr>
					<td>
						Title 
					</td>
					<td>
						<input type="text" name="set24" placeholder="set number">
					</td>
				</tr>
				<tr>
					<td>
						Amount 1
					</td>
					<td>
						<input type="text" name="amount241">
					</td>
					<td>
						Title 1
					</td>
					<td>
						<input type="text" name="title241">
					</td>
				</tr>
				<tr>
					<td>
						Amount 2
					</td>
					<td>
						<input type="text" name="amount242">
					</td>
					<td>
						Title 2
					</td>
					<td>
						<input type="text" name="title242">
					</td>
				</tr>
				<tr>
					<td>
						Amount 3
					</td>
					<td>
						<input type="text" name="amount243">
					</td>
					<td>
						Title 3
					</td>
					<td>
						<input type="text" name="title243">
					</td>
				</tr>
				<tr>
					<td>
						Amount 4
					</td>
					<td>
						<input type="text" name="amount244">
					</td>
					<td>
						Title 4
					</td>
					<td>
						<input type="text" name="title244">
					</td>
				</tr>
				<tr>
					<td>
						Amount 5
					</td>
					<td>
						<input type="text" name="amount245">
					</td>
					<td>
						Title 5
					</td>
					<td>
						<input type="text" name="title245">
				</tr>
				<tr>
					<td>
						Amount 6
					</td>
					<td>
						<input type="text" name="amount246">
					</td>
					<td>
						Title 6
					</td>
					<td>
						<input type="text" name="title246">
					</td>
				</tr>
				<tr>
					<td>
						Amount 7
					</td>
					<td>
						<input type="text" name="amount247">
					</td>
					<td>
						Title 7
					</td>
					<td>
						<input type="text" name="title247">
					</td>
				</tr>
				<tr>
					<td colspan="1">
						Set 5
					</td>
				</tr>
				<tr>
					<td colspan="1">
						Workout
					</td>
				</tr>
				<tr>
					<td>
						Title 
					</td>
					<td>
						<input type="text" name="set25" placeholder="set number">
					</td>
				</tr>
				<tr>
					<td>
						Amount 1
					</td>
					<td>
						<input type="text" name="amount251">
					</td>
					<td>
						Title 1
					</td>
					<td>
						<input type="text" name="title251">
					</td>
				</tr>
				<tr>
					<td>
						Amount 2
					</td>
					<td>
						<input type="text" name="amount252">
					</td>
					<td>
						Title 2
					</td>
					<td>
						<input type="text" name="title252">
					</td>
				</tr>
				<tr>
					<td>
						Amount 3
					</td>
					<td>
						<input type="text" name="amount253">
					</td>
					<td>
						Title 3
					</td>
					<td>
						<input type="text" name="title253">
					</td>
				</tr>
				<tr>
					<td>
						Amount 4
					</td>
					<td>
						<input type="text" name="amount254">
					</td>
					<td>
						Title 4
					</td>
					<td>
						<input type="text" name="title254">
					</td>
				</tr>
				<tr>
					<td>
						Amount 5
					</td>
					<td>
						<input type="text" name="amount255">
					</td>
					<td>
						Title 5
					</td>
					<td>
						<input type="text" name="title255">
				</tr>
				<tr>
					<td>
						Amount 6
					</td>
					<td>
						<input type="text" name="amount256">
					</td>
					<td>
						Title 6
					</td>
					<td>
						<input type="text" name="title256">
					</td>
				</tr>
				<tr>
					<td>
						Amount 7
					</td>
					<td>
						<input type="text" name="amount257">
					</td>
					<td>
						Title 7
					</td>
					<td>
						<input type="text" name="title257">
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