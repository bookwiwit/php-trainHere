<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
	<title>Add Collection</title>
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
	<form action="/addcollection" method="POST">
		{{ csrf_field() }}
		<h1 class="h1">Add Workout Collection</h1>
		<center>
			<table>
				<tr>
					<th>
						AVG Time
					</th>
					<td>
						<input type="text" name="avgTime">
					</td>
				</tr>
				<tr>
					<td>
						Description
					</td>
					<td>
						<input type="text" name="description">
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
					<td>
						Equipment 3
					</td>
					<td>
						<input type="text" name="equipment3">
					</td>
				</tr>
				<tr>
					<th>
						Name
					</th>
					<td>
						<input type="text" name="name">
					</td>
				</tr>
				<tr>
					<th>
						Picture
					</th>
					<td>
						<input type="text" name="pic">
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
				<tr>
					<th colspan="1">
						Day 3
					</th>
				</tr>
				<tr>
					<td>
						Body Parts
					</td>
					<td>
						<input type="text" name="bodyParts3">
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
						<input type="text" name="set31" placeholder="set number">
					</td>
				</tr>
				<tr>
					<td>
						Amount 1
					</td>
					<td>
						<input type="text" name="amount311">
					</td>
					<td>
						Title 1
					</td>
					<td>
						<input type="text" name="title311">
					</td>
				</tr>
				<tr>
					<td>
						Amount 2
					</td>
					<td>
						<input type="text" name="amount312">
					</td>
					<td>
						Title 2
					</td>
					<td>
						<input type="text" name="title312">
					</td>
				</tr>
				<tr>
					<td>
						Amount 3
					</td>
					<td>
						<input type="text" name="amount313">
					</td>
					<td>
						Title 3
					</td>
					<td>
						<input type="text" name="title313">
					</td>
				</tr>
				<tr>
					<td>
						Amount 4
					</td>
					<td>
						<input type="text" name="amount314">
					</td>
					<td>
						Title 4
					</td>
					<td>
						<input type="text" name="title314">
					</td>
				</tr>
				<tr>
					<td>
						Amount 5
					</td>
					<td>
						<input type="text" name="amount315">
					</td>
					<td>
						Title 5
					</td>
					<td>
						<input type="text" name="title315">
				</tr>
				<tr>
					<td>
						Amount 6
					</td>
					<td>
						<input type="text" name="amount316">
					</td>
					<td>
						Title 6
					</td>
					<td>
						<input type="text" name="title316">
					</td>
				</tr>
				<tr>
					<td>
						Amount 7
					</td>
					<td>
						<input type="text" name="amount317">
					</td>
					<td>
						Title 7
					</td>
					<td>
						<input type="text" name="title317">
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
						<input type="text" name="set32" placeholder="set number">
					</td>
				</tr>
				<tr>
					<td>
						Amount 1
					</td>
					<td>
						<input type="text" name="amount321">
					</td>
					<td>
						Title 1
					</td>
					<td>
						<input type="text" name="title321">
					</td>
				</tr>
				<tr>
					<td>
						Amount 2
					</td>
					<td>
						<input type="text" name="amount322">
					</td>
					<td>
						Title 2
					</td>
					<td>
						<input type="text" name="title322">
					</td>
				</tr>
				<tr>
					<td>
						Amount 3
					</td>
					<td>
						<input type="text" name="amount323">
					</td>
					<td>
						Title 3
					</td>
					<td>
						<input type="text" name="title323">
					</td>
				</tr>
				<tr>
					<td>
						Amount 4
					</td>
					<td>
						<input type="text" name="amount324">
					</td>
					<td>
						Title 4
					</td>
					<td>
						<input type="text" name="title324">
					</td>
				</tr>
				<tr>
					<td>
						Amount 5
					</td>
					<td>
						<input type="text" name="amount325">
					</td>
					<td>
						Title 5
					</td>
					<td>
						<input type="text" name="title325">
				</tr>
				<tr>
					<td>
						Amount 6
					</td>
					<td>
						<input type="text" name="amount326">
					</td>
					<td>
						Title 6
					</td>
					<td>
						<input type="text" name="title326">
					</td>
				</tr>
				<tr>
					<td>
						Amount 7
					</td>
					<td>
						<input type="text" name="amount327">
					</td>
					<td>
						Title 7
					</td>
					<td>
						<input type="text" name="title327">
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
						<input type="text" name="set33" placeholder="set number">
					</td>
				</tr>
				<tr>
					<td>
						Amount 1
					</td>
					<td>
						<input type="text" name="amount331">
					</td>
					<td>
						Title 1
					</td>
					<td>
						<input type="text" name="title331">
					</td>
				</tr>
				<tr>
					<td>
						Amount 2
					</td>
					<td>
						<input type="text" name="amount332">
					</td>
					<td>
						Title 2
					</td>
					<td>
						<input type="text" name="title332">
					</td>
				</tr>
				<tr>
					<td>
						Amount 3
					</td>
					<td>
						<input type="text" name="amount333">
					</td>
					<td>
						Title 3
					</td>
					<td>
						<input type="text" name="title333">
					</td>
				</tr>
				<tr>
					<td>
						Amount 4
					</td>
					<td>
						<input type="text" name="amount334">
					</td>
					<td>
						Title 4
					</td>
					<td>
						<input type="text" name="title334">
					</td>
				</tr>
				<tr>
					<td>
						Amount 5
					</td>
					<td>
						<input type="text" name="amount335">
					</td>
					<td>
						Title 5
					</td>
					<td>
						<input type="text" name="title335">
				</tr>
				<tr>
					<td>
						Amount 6
					</td>
					<td>
						<input type="text" name="amount336">
					</td>
					<td>
						Title 6
					</td>
					<td>
						<input type="text" name="title336">
					</td>
				</tr>
				<tr>
					<td>
						Amount 7
					</td>
					<td>
						<input type="text" name="amount337">
					</td>
					<td>
						Title 7
					</td>
					<td>
						<input type="text" name="title337">
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
						<input type="text" name="set34" placeholder="set number">
					</td>
				</tr>
				<tr>
					<td>
						Amount 1
					</td>
					<td>
						<input type="text" name="amount341">
					</td>
					<td>
						Title 1
					</td>
					<td>
						<input type="text" name="title341">
					</td>
				</tr>
				<tr>
					<td>
						Amount 2
					</td>
					<td>
						<input type="text" name="amount342">
					</td>
					<td>
						Title 2
					</td>
					<td>
						<input type="text" name="title342">
					</td>
				</tr>
				<tr>
					<td>
						Amount 3
					</td>
					<td>
						<input type="text" name="amount343">
					</td>
					<td>
						Title 3
					</td>
					<td>
						<input type="text" name="title343">
					</td>
				</tr>
				<tr>
					<td>
						Amount 4
					</td>
					<td>
						<input type="text" name="amount344">
					</td>
					<td>
						Title 4
					</td>
					<td>
						<input type="text" name="title344">
					</td>
				</tr>
				<tr>
					<td>
						Amount 5
					</td>
					<td>
						<input type="text" name="amount345">
					</td>
					<td>
						Title 5
					</td>
					<td>
						<input type="text" name="title345">
				</tr>
				<tr>
					<td>
						Amount 6
					</td>
					<td>
						<input type="text" name="amount346">
					</td>
					<td>
						Title 6
					</td>
					<td>
						<input type="text" name="title346">
					</td>
				</tr>
				<tr>
					<td>
						Amount 7
					</td>
					<td>
						<input type="text" name="amount347">
					</td>
					<td>
						Title 7
					</td>
					<td>
						<input type="text" name="title347">
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
						<input type="text" name="set35" placeholder="set number">
					</td>
				</tr>
				<tr>
					<td>
						Amount 1
					</td>
					<td>
						<input type="text" name="amount351">
					</td>
					<td>
						Title 1
					</td>
					<td>
						<input type="text" name="title351">
					</td>
				</tr>
				<tr>
					<td>
						Amount 2
					</td>
					<td>
						<input type="text" name="amount352">
					</td>
					<td>
						Title 2
					</td>
					<td>
						<input type="text" name="title352">
					</td>
				</tr>
				<tr>
					<td>
						Amount 3
					</td>
					<td>
						<input type="text" name="amount353">
					</td>
					<td>
						Title 3
					</td>
					<td>
						<input type="text" name="title353">
					</td>
				</tr>
				<tr>
					<td>
						Amount 4
					</td>
					<td>
						<input type="text" name="amount354">
					</td>
					<td>
						Title 4
					</td>
					<td>
						<input type="text" name="title354">
					</td>
				</tr>
				<tr>
					<td>
						Amount 5
					</td>
					<td>
						<input type="text" name="amount355">
					</td>
					<td>
						Title 5
					</td>
					<td>
						<input type="text" name="title355">
				</tr>
				<tr>
					<td>
						Amount 6
					</td>
					<td>
						<input type="text" name="amount356">
					</td>
					<td>
						Title 6
					</td>
					<td>
						<input type="text" name="title356">
					</td>
				</tr>
				<tr>
					<td>
						Amount 7
					</td>
					<td>
						<input type="text" name="amount357">
					</td>
					<td>
						Title 7
					</td>
					<td>
						<input type="text" name="title357">
					</td>
				</tr>
				<tr>
					<th colspan="1">
						Day 4
					</th>
				</tr>
				<tr>
					<td>
						Body Parts
					</td>
					<td>
						<input type="text" name="bodyParts4">
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
						<input type="text" name="set41" placeholder="set number">
					</td>
				</tr>
				<tr>
					<td>
						Amount 1
					</td>
					<td>
						<input type="text" name="amount411">
					</td>
					<td>
						Title 1
					</td>
					<td>
						<input type="text" name="title411">
					</td>
				</tr>
				<tr>
					<td>
						Amount 2
					</td>
					<td>
						<input type="text" name="amount412">
					</td>
					<td>
						Title 2
					</td>
					<td>
						<input type="text" name="title412">
					</td>
				</tr>
				<tr>
					<td>
						Amount 3
					</td>
					<td>
						<input type="text" name="amount413">
					</td>
					<td>
						Title 3
					</td>
					<td>
						<input type="text" name="title413">
					</td>
				</tr>
				<tr>
					<td>
						Amount 4
					</td>
					<td>
						<input type="text" name="amount414">
					</td>
					<td>
						Title 4
					</td>
					<td>
						<input type="text" name="title414">
					</td>
				</tr>
				<tr>
					<td>
						Amount 5
					</td>
					<td>
						<input type="text" name="amount415">
					</td>
					<td>
						Title 5
					</td>
					<td>
						<input type="text" name="title415">
				</tr>
				<tr>
					<td>
						Amount 6
					</td>
					<td>
						<input type="text" name="amount416">
					</td>
					<td>
						Title 6
					</td>
					<td>
						<input type="text" name="title416">
					</td>
				</tr>
				<tr>
					<td>
						Amount 7
					</td>
					<td>
						<input type="text" name="amount417">
					</td>
					<td>
						Title 7
					</td>
					<td>
						<input type="text" name="title417">
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
						<input type="text" name="set42" placeholder="set number">
					</td>
				</tr>
				<tr>
					<td>
						Amount 1
					</td>
					<td>
						<input type="text" name="amount421">
					</td>
					<td>
						Title 1
					</td>
					<td>
						<input type="text" name="title421">
					</td>
				</tr>
				<tr>
					<td>
						Amount 2
					</td>
					<td>
						<input type="text" name="amount422">
					</td>
					<td>
						Title 2
					</td>
					<td>
						<input type="text" name="title422">
					</td>
				</tr>
				<tr>
					<td>
						Amount 3
					</td>
					<td>
						<input type="text" name="amount423">
					</td>
					<td>
						Title 3
					</td>
					<td>
						<input type="text" name="title423">
					</td>
				</tr>
				<tr>
					<td>
						Amount 4
					</td>
					<td>
						<input type="text" name="amount424">
					</td>
					<td>
						Title 4
					</td>
					<td>
						<input type="text" name="title424">
					</td>
				</tr>
				<tr>
					<td>
						Amount 5
					</td>
					<td>
						<input type="text" name="amount425">
					</td>
					<td>
						Title 5
					</td>
					<td>
						<input type="text" name="title425">
				</tr>
				<tr>
					<td>
						Amount 6
					</td>
					<td>
						<input type="text" name="amount426">
					</td>
					<td>
						Title 6
					</td>
					<td>
						<input type="text" name="title426">
					</td>
				</tr>
				<tr>
					<td>
						Amount 7
					</td>
					<td>
						<input type="text" name="amount427">
					</td>
					<td>
						Title 7
					</td>
					<td>
						<input type="text" name="title427">
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
						<input type="text" name="set43" placeholder="set number">
					</td>
				</tr>
				<tr>
					<td>
						Amount 1
					</td>
					<td>
						<input type="text" name="amount431">
					</td>
					<td>
						Title 1
					</td>
					<td>
						<input type="text" name="title431">
					</td>
				</tr>
				<tr>
					<td>
						Amount 2
					</td>
					<td>
						<input type="text" name="amount432">
					</td>
					<td>
						Title 2
					</td>
					<td>
						<input type="text" name="title432">
					</td>
				</tr>
				<tr>
					<td>
						Amount 3
					</td>
					<td>
						<input type="text" name="amount433">
					</td>
					<td>
						Title 3
					</td>
					<td>
						<input type="text" name="title433">
					</td>
				</tr>
				<tr>
					<td>
						Amount 4
					</td>
					<td>
						<input type="text" name="amount434">
					</td>
					<td>
						Title 4
					</td>
					<td>
						<input type="text" name="title434">
					</td>
				</tr>
				<tr>
					<td>
						Amount 5
					</td>
					<td>
						<input type="text" name="amount435">
					</td>
					<td>
						Title 5
					</td>
					<td>
						<input type="text" name="title435">
				</tr>
				<tr>
					<td>
						Amount 6
					</td>
					<td>
						<input type="text" name="amount436">
					</td>
					<td>
						Title 6
					</td>
					<td>
						<input type="text" name="title436">
					</td>
				</tr>
				<tr>
					<td>
						Amount 7
					</td>
					<td>
						<input type="text" name="amount437">
					</td>
					<td>
						Title 7
					</td>
					<td>
						<input type="text" name="title437">
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
						<input type="text" name="set44" placeholder="set number">
					</td>
				</tr>
				<tr>
					<td>
						Amount 1
					</td>
					<td>
						<input type="text" name="amount441">
					</td>
					<td>
						Title 1
					</td>
					<td>
						<input type="text" name="title441">
					</td>
				</tr>
				<tr>
					<td>
						Amount 2
					</td>
					<td>
						<input type="text" name="amount442">
					</td>
					<td>
						Title 2
					</td>
					<td>
						<input type="text" name="title442">
					</td>
				</tr>
				<tr>
					<td>
						Amount 3
					</td>
					<td>
						<input type="text" name="amount443">
					</td>
					<td>
						Title 3
					</td>
					<td>
						<input type="text" name="title443">
					</td>
				</tr>
				<tr>
					<td>
						Amount 4
					</td>
					<td>
						<input type="text" name="amount444">
					</td>
					<td>
						Title 4
					</td>
					<td>
						<input type="text" name="title444">
					</td>
				</tr>
				<tr>
					<td>
						Amount 5
					</td>
					<td>
						<input type="text" name="amount445">
					</td>
					<td>
						Title 5
					</td>
					<td>
						<input type="text" name="title445">
				</tr>
				<tr>
					<td>
						Amount 6
					</td>
					<td>
						<input type="text" name="amount446">
					</td>
					<td>
						Title 6
					</td>
					<td>
						<input type="text" name="title446">
					</td>
				</tr>
				<tr>
					<td>
						Amount 7
					</td>
					<td>
						<input type="text" name="amount447">
					</td>
					<td>
						Title 7
					</td>
					<td>
						<input type="text" name="title447">
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
						<input type="text" name="set45" placeholder="set number">
					</td>
				</tr>
				<tr>
					<td>
						Amount 1
					</td>
					<td>
						<input type="text" name="amount451">
					</td>
					<td>
						Title 1
					</td>
					<td>
						<input type="text" name="title451">
					</td>
				</tr>
				<tr>
					<td>
						Amount 2
					</td>
					<td>
						<input type="text" name="amount452">
					</td>
					<td>
						Title 2
					</td>
					<td>
						<input type="text" name="title452">
					</td>
				</tr>
				<tr>
					<td>
						Amount 3
					</td>
					<td>
						<input type="text" name="amount453">
					</td>
					<td>
						Title 3
					</td>
					<td>
						<input type="text" name="title453">
					</td>
				</tr>
				<tr>
					<td>
						Amount 4
					</td>
					<td>
						<input type="text" name="amount454">
					</td>
					<td>
						Title 4
					</td>
					<td>
						<input type="text" name="title454">
					</td>
				</tr>
				<tr>
					<td>
						Amount 5
					</td>
					<td>
						<input type="text" name="amount455">
					</td>
					<td>
						Title 5
					</td>
					<td>
						<input type="text" name="title455">
				</tr>
				<tr>
					<td>
						Amount 6
					</td>
					<td>
						<input type="text" name="amount456">
					</td>
					<td>
						Title 6
					</td>
					<td>
						<input type="text" name="title456">
					</td>
				</tr>
				<tr>
					<td>
						Amount 7
					</td>
					<td>
						<input type="text" name="amount457">
					</td>
					<td>
						Title 7
					</td>
					<td>
						<input type="text" name="title457">
					</td>
				</tr>
				<tr>
					<th colspan="1">
						Day 5
					</th>
				</tr>
				<tr>
					<td>
						Body Parts
					</td>
					<td>
						<input type="text" name="bodyParts5">
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
						<input type="text" name="set51" placeholder="set number">
					</td>
				</tr>
				<tr>
					<td>
						Amount 1
					</td>
					<td>
						<input type="text" name="amount511">
					</td>
					<td>
						Title 1
					</td>
					<td>
						<input type="text" name="title511">
					</td>
				</tr>
				<tr>
					<td>
						Amount 2
					</td>
					<td>
						<input type="text" name="amount512">
					</td>
					<td>
						Title 2
					</td>
					<td>
						<input type="text" name="title512">
					</td>
				</tr>
				<tr>
					<td>
						Amount 3
					</td>
					<td>
						<input type="text" name="amount513">
					</td>
					<td>
						Title 3
					</td>
					<td>
						<input type="text" name="title513">
					</td>
				</tr>
				<tr>
					<td>
						Amount 4
					</td>
					<td>
						<input type="text" name="amount514">
					</td>
					<td>
						Title 4
					</td>
					<td>
						<input type="text" name="title514">
					</td>
				</tr>
				<tr>
					<td>
						Amount 5
					</td>
					<td>
						<input type="text" name="amount515">
					</td>
					<td>
						Title 5
					</td>
					<td>
						<input type="text" name="title515">
				</tr>
				<tr>
					<td>
						Amount 6
					</td>
					<td>
						<input type="text" name="amount516">
					</td>
					<td>
						Title 6
					</td>
					<td>
						<input type="text" name="title516">
					</td>
				</tr>
				<tr>
					<td>
						Amount 7
					</td>
					<td>
						<input type="text" name="amount517">
					</td>
					<td>
						Title 7
					</td>
					<td>
						<input type="text" name="title517">
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
						<input type="text" name="set52" placeholder="set number">
					</td>
				</tr>
				<tr>
					<td>
						Amount 1
					</td>
					<td>
						<input type="text" name="amount521">
					</td>
					<td>
						Title 1
					</td>
					<td>
						<input type="text" name="title521">
					</td>
				</tr>
				<tr>
					<td>
						Amount 2
					</td>
					<td>
						<input type="text" name="amount522">
					</td>
					<td>
						Title 2
					</td>
					<td>
						<input type="text" name="title522">
					</td>
				</tr>
				<tr>
					<td>
						Amount 3
					</td>
					<td>
						<input type="text" name="amount523">
					</td>
					<td>
						Title 3
					</td>
					<td>
						<input type="text" name="title523">
					</td>
				</tr>
				<tr>
					<td>
						Amount 4
					</td>
					<td>
						<input type="text" name="amount524">
					</td>
					<td>
						Title 4
					</td>
					<td>
						<input type="text" name="title524">
					</td>
				</tr>
				<tr>
					<td>
						Amount 5
					</td>
					<td>
						<input type="text" name="amount525">
					</td>
					<td>
						Title 5
					</td>
					<td>
						<input type="text" name="title525">
				</tr>
				<tr>
					<td>
						Amount 6
					</td>
					<td>
						<input type="text" name="amount526">
					</td>
					<td>
						Title 6
					</td>
					<td>
						<input type="text" name="title526">
					</td>
				</tr>
				<tr>
					<td>
						Amount 7
					</td>
					<td>
						<input type="text" name="amount527">
					</td>
					<td>
						Title 7
					</td>
					<td>
						<input type="text" name="title527">
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
						<input type="text" name="set53" placeholder="set number">
					</td>
				</tr>
				<tr>
					<td>
						Amount 1
					</td>
					<td>
						<input type="text" name="amount531">
					</td>
					<td>
						Title 1
					</td>
					<td>
						<input type="text" name="title531">
					</td>
				</tr>
				<tr>
					<td>
						Amount 2
					</td>
					<td>
						<input type="text" name="amount532">
					</td>
					<td>
						Title 2
					</td>
					<td>
						<input type="text" name="title532">
					</td>
				</tr>
				<tr>
					<td>
						Amount 3
					</td>
					<td>
						<input type="text" name="amount533">
					</td>
					<td>
						Title 3
					</td>
					<td>
						<input type="text" name="title533">
					</td>
				</tr>
				<tr>
					<td>
						Amount 4
					</td>
					<td>
						<input type="text" name="amount534">
					</td>
					<td>
						Title 4
					</td>
					<td>
						<input type="text" name="title534">
					</td>
				</tr>
				<tr>
					<td>
						Amount 5
					</td>
					<td>
						<input type="text" name="amount535">
					</td>
					<td>
						Title 5
					</td>
					<td>
						<input type="text" name="title535">
				</tr>
				<tr>
					<td>
						Amount 6
					</td>
					<td>
						<input type="text" name="amount536">
					</td>
					<td>
						Title 6
					</td>
					<td>
						<input type="text" name="title536">
					</td>
				</tr>
				<tr>
					<td>
						Amount 7
					</td>
					<td>
						<input type="text" name="amount537">
					</td>
					<td>
						Title 7
					</td>
					<td>
						<input type="text" name="title537">
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
						<input type="text" name="set54" placeholder="set number">
					</td>
				</tr>
				<tr>
					<td>
						Amount 1
					</td>
					<td>
						<input type="text" name="amount541">
					</td>
					<td>
						Title 1
					</td>
					<td>
						<input type="text" name="title541">
					</td>
				</tr>
				<tr>
					<td>
						Amount 2
					</td>
					<td>
						<input type="text" name="amount542">
					</td>
					<td>
						Title 2
					</td>
					<td>
						<input type="text" name="title542">
					</td>
				</tr>
				<tr>
					<td>
						Amount 3
					</td>
					<td>
						<input type="text" name="amount543">
					</td>
					<td>
						Title 3
					</td>
					<td>
						<input type="text" name="title543">
					</td>
				</tr>
				<tr>
					<td>
						Amount 4
					</td>
					<td>
						<input type="text" name="amount544">
					</td>
					<td>
						Title 4
					</td>
					<td>
						<input type="text" name="title544">
					</td>
				</tr>
				<tr>
					<td>
						Amount 5
					</td>
					<td>
						<input type="text" name="amount545">
					</td>
					<td>
						Title 5
					</td>
					<td>
						<input type="text" name="title545">
				</tr>
				<tr>
					<td>
						Amount 6
					</td>
					<td>
						<input type="text" name="amount546">
					</td>
					<td>
						Title 6
					</td>
					<td>
						<input type="text" name="title546">
					</td>
				</tr>
				<tr>
					<td>
						Amount 7
					</td>
					<td>
						<input type="text" name="amount547">
					</td>
					<td>
						Title 7
					</td>
					<td>
						<input type="text" name="title547">
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
						<input type="text" name="set55" placeholder="set number">
					</td>
				</tr>
				<tr>
					<td>
						Amount 1
					</td>
					<td>
						<input type="text" name="amount551">
					</td>
					<td>
						Title 1
					</td>
					<td>
						<input type="text" name="title551">
					</td>
				</tr>
				<tr>
					<td>
						Amount 2
					</td>
					<td>
						<input type="text" name="amount552">
					</td>
					<td>
						Title 2
					</td>
					<td>
						<input type="text" name="title552">
					</td>
				</tr>
				<tr>
					<td>
						Amount 3
					</td>
					<td>
						<input type="text" name="amount553">
					</td>
					<td>
						Title 3
					</td>
					<td>
						<input type="text" name="title553">
					</td>
				</tr>
				<tr>
					<td>
						Amount 4
					</td>
					<td>
						<input type="text" name="amount554">
					</td>
					<td>
						Title 4
					</td>
					<td>
						<input type="text" name="title554">
					</td>
				</tr>
				<tr>
					<td>
						Amount 5
					</td>
					<td>
						<input type="text" name="amount555">
					</td>
					<td>
						Title 5
					</td>
					<td>
						<input type="text" name="title555">
				</tr>
				<tr>
					<td>
						Amount 6
					</td>
					<td>
						<input type="text" name="amount556">
					</td>
					<td>
						Title 6
					</td>
					<td>
						<input type="text" name="title556">
					</td>
				</tr>
				<tr>
					<td>
						Amount 7
					</td>
					<td>
						<input type="text" name="amount557">
					</td>
					<td>
						Title 7
					</td>
					<td>
						<input type="text" name="title557">
					</td>
				</tr>
				<tr>
					<th colspan="1">
						Day 6
					</th>
				</tr>
				<tr>
					<td>
						Body Parts
					</td>
					<td>
						<input type="text" name="bodyParts6">
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
						<input type="text" name="set61" placeholder="set number">
					</td>
				</tr>
				<tr>
					<td>
						Amount 1
					</td>
					<td>
						<input type="text" name="amount611">
					</td>
					<td>
						Title 1
					</td>
					<td>
						<input type="text" name="title611">
					</td>
				</tr>
				<tr>
					<td>
						Amount 2
					</td>
					<td>
						<input type="text" name="amount612">
					</td>
					<td>
						Title 2
					</td>
					<td>
						<input type="text" name="title612">
					</td>
				</tr>
				<tr>
					<td>
						Amount 3
					</td>
					<td>
						<input type="text" name="amount613">
					</td>
					<td>
						Title 3
					</td>
					<td>
						<input type="text" name="title613">
					</td>
				</tr>
				<tr>
					<td>
						Amount 4
					</td>
					<td>
						<input type="text" name="amount614">
					</td>
					<td>
						Title 4
					</td>
					<td>
						<input type="text" name="title614">
					</td>
				</tr>
				<tr>
					<td>
						Amount 5
					</td>
					<td>
						<input type="text" name="amount615">
					</td>
					<td>
						Title 5
					</td>
					<td>
						<input type="text" name="title615">
				</tr>
				<tr>
					<td>
						Amount 6
					</td>
					<td>
						<input type="text" name="amount616">
					</td>
					<td>
						Title 6
					</td>
					<td>
						<input type="text" name="title616">
					</td>
				</tr>
				<tr>
					<td>
						Amount 7
					</td>
					<td>
						<input type="text" name="amount617">
					</td>
					<td>
						Title 7
					</td>
					<td>
						<input type="text" name="title617">
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
						<input type="text" name="set62" placeholder="set number">
					</td>
				</tr>
				<tr>
					<td>
						Amount 1
					</td>
					<td>
						<input type="text" name="amount621">
					</td>
					<td>
						Title 1
					</td>
					<td>
						<input type="text" name="title621">
					</td>
				</tr>
				<tr>
					<td>
						Amount 2
					</td>
					<td>
						<input type="text" name="amount622">
					</td>
					<td>
						Title 2
					</td>
					<td>
						<input type="text" name="title622">
					</td>
				</tr>
				<tr>
					<td>
						Amount 3
					</td>
					<td>
						<input type="text" name="amount623">
					</td>
					<td>
						Title 3
					</td>
					<td>
						<input type="text" name="title623">
					</td>
				</tr>
				<tr>
					<td>
						Amount 4
					</td>
					<td>
						<input type="text" name="amount624">
					</td>
					<td>
						Title 4
					</td>
					<td>
						<input type="text" name="title624">
					</td>
				</tr>
				<tr>
					<td>
						Amount 5
					</td>
					<td>
						<input type="text" name="amount625">
					</td>
					<td>
						Title 5
					</td>
					<td>
						<input type="text" name="title625">
				</tr>
				<tr>
					<td>
						Amount 6
					</td>
					<td>
						<input type="text" name="amount626">
					</td>
					<td>
						Title 6
					</td>
					<td>
						<input type="text" name="title626">
					</td>
				</tr>
				<tr>
					<td>
						Amount 7
					</td>
					<td>
						<input type="text" name="amount627">
					</td>
					<td>
						Title 7
					</td>
					<td>
						<input type="text" name="title627">
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
						<input type="text" name="set63" placeholder="set number">
					</td>
				</tr>
				<tr>
					<td>
						Amount 1
					</td>
					<td>
						<input type="text" name="amount631">
					</td>
					<td>
						Title 1
					</td>
					<td>
						<input type="text" name="title631">
					</td>
				</tr>
				<tr>
					<td>
						Amount 2
					</td>
					<td>
						<input type="text" name="amount632">
					</td>
					<td>
						Title 2
					</td>
					<td>
						<input type="text" name="title632">
					</td>
				</tr>
				<tr>
					<td>
						Amount 3
					</td>
					<td>
						<input type="text" name="amount633">
					</td>
					<td>
						Title 3
					</td>
					<td>
						<input type="text" name="title633">
					</td>
				</tr>
				<tr>
					<td>
						Amount 4
					</td>
					<td>
						<input type="text" name="amount634">
					</td>
					<td>
						Title 4
					</td>
					<td>
						<input type="text" name="title634">
					</td>
				</tr>
				<tr>
					<td>
						Amount 5
					</td>
					<td>
						<input type="text" name="amount635">
					</td>
					<td>
						Title 5
					</td>
					<td>
						<input type="text" name="title635">
				</tr>
				<tr>
					<td>
						Amount 6
					</td>
					<td>
						<input type="text" name="amount636">
					</td>
					<td>
						Title 6
					</td>
					<td>
						<input type="text" name="title636">
					</td>
				</tr>
				<tr>
					<td>
						Amount 7
					</td>
					<td>
						<input type="text" name="amount637">
					</td>
					<td>
						Title 7
					</td>
					<td>
						<input type="text" name="title637">
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
						<input type="text" name="set64" placeholder="set number">
					</td>
				</tr>
				<tr>
					<td>
						Amount 1
					</td>
					<td>
						<input type="text" name="amount641">
					</td>
					<td>
						Title 1
					</td>
					<td>
						<input type="text" name="title641">
					</td>
				</tr>
				<tr>
					<td>
						Amount 2
					</td>
					<td>
						<input type="text" name="amount642">
					</td>
					<td>
						Title 2
					</td>
					<td>
						<input type="text" name="title642">
					</td>
				</tr>
				<tr>
					<td>
						Amount 3
					</td>
					<td>
						<input type="text" name="amount643">
					</td>
					<td>
						Title 3
					</td>
					<td>
						<input type="text" name="title643">
					</td>
				</tr>
				<tr>
					<td>
						Amount 4
					</td>
					<td>
						<input type="text" name="amount644">
					</td>
					<td>
						Title 4
					</td>
					<td>
						<input type="text" name="title644">
					</td>
				</tr>
				<tr>
					<td>
						Amount 5
					</td>
					<td>
						<input type="text" name="amount645">
					</td>
					<td>
						Title 5
					</td>
					<td>
						<input type="text" name="title645">
				</tr>
				<tr>
					<td>
						Amount 6
					</td>
					<td>
						<input type="text" name="amount646">
					</td>
					<td>
						Title 6
					</td>
					<td>
						<input type="text" name="title646">
					</td>
				</tr>
				<tr>
					<td>
						Amount 7
					</td>
					<td>
						<input type="text" name="amount647">
					</td>
					<td>
						Title 7
					</td>
					<td>
						<input type="text" name="title647">
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
						<input type="text" name="set65" placeholder="set number">
					</td>
				</tr>
				<tr>
					<td>
						Amount 1
					</td>
					<td>
						<input type="text" name="amount651">
					</td>
					<td>
						Title 1
					</td>
					<td>
						<input type="text" name="title651">
					</td>
				</tr>
				<tr>
					<td>
						Amount 2
					</td>
					<td>
						<input type="text" name="amount652">
					</td>
					<td>
						Title 2
					</td>
					<td>
						<input type="text" name="title652">
					</td>
				</tr>
				<tr>
					<td>
						Amount 3
					</td>
					<td>
						<input type="text" name="amount653">
					</td>
					<td>
						Title 3
					</td>
					<td>
						<input type="text" name="title653">
					</td>
				</tr>
				<tr>
					<td>
						Amount 4
					</td>
					<td>
						<input type="text" name="amount654">
					</td>
					<td>
						Title 4
					</td>
					<td>
						<input type="text" name="title654">
					</td>
				</tr>
				<tr>
					<td>
						Amount 5
					</td>
					<td>
						<input type="text" name="amount655">
					</td>
					<td>
						Title 5
					</td>
					<td>
						<input type="text" name="title655">
				</tr>
				<tr>
					<td>
						Amount 6
					</td>
					<td>
						<input type="text" name="amount656">
					</td>
					<td>
						Title 6
					</td>
					<td>
						<input type="text" name="title656">
					</td>
				</tr>
				<tr>
					<td>
						Amount 7
					</td>
					<td>
						<input type="text" name="amount657">
					</td>
					<td>
						Title 7
					</td>
					<td>
						<input type="text" name="title657">
					</td>
				</tr>
				<tr>
					<th colspan="1">
						Day 7
					</th>
				</tr>
				<tr>
					<td>
						Body Parts
					</td>
					<td>
						<input type="text" name="bodyParts7">
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
						<input type="text" name="set71" placeholder="set number">
					</td>
				</tr>
				<tr>
					<td>
						Amount 1
					</td>
					<td>
						<input type="text" name="amount711">
					</td>
					<td>
						Title 1
					</td>
					<td>
						<input type="text" name="title711">
					</td>
				</tr>
				<tr>
					<td>
						Amount 2
					</td>
					<td>
						<input type="text" name="amount712">
					</td>
					<td>
						Title 2
					</td>
					<td>
						<input type="text" name="title712">
					</td>
				</tr>
				<tr>
					<td>
						Amount 3
					</td>
					<td>
						<input type="text" name="amount713">
					</td>
					<td>
						Title 3
					</td>
					<td>
						<input type="text" name="title713">
					</td>
				</tr>
				<tr>
					<td>
						Amount 4
					</td>
					<td>
						<input type="text" name="amount714">
					</td>
					<td>
						Title 4
					</td>
					<td>
						<input type="text" name="title714">
					</td>
				</tr>
				<tr>
					<td>
						Amount 5
					</td>
					<td>
						<input type="text" name="amount715">
					</td>
					<td>
						Title 5
					</td>
					<td>
						<input type="text" name="title715">
				</tr>
				<tr>
					<td>
						Amount 6
					</td>
					<td>
						<input type="text" name="amount716">
					</td>
					<td>
						Title 6
					</td>
					<td>
						<input type="text" name="title716">
					</td>
				</tr>
				<tr>
					<td>
						Amount 7
					</td>
					<td>
						<input type="text" name="amount717">
					</td>
					<td>
						Title 7
					</td>
					<td>
						<input type="text" name="title717">
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
						<input type="text" name="set72" placeholder="set number">
					</td>
				</tr>
				<tr>
					<td>
						Amount 1
					</td>
					<td>
						<input type="text" name="amount721">
					</td>
					<td>
						Title 1
					</td>
					<td>
						<input type="text" name="title721">
					</td>
				</tr>
				<tr>
					<td>
						Amount 2
					</td>
					<td>
						<input type="text" name="amount722">
					</td>
					<td>
						Title 2
					</td>
					<td>
						<input type="text" name="title722">
					</td>
				</tr>
				<tr>
					<td>
						Amount 3
					</td>
					<td>
						<input type="text" name="amount723">
					</td>
					<td>
						Title 3
					</td>
					<td>
						<input type="text" name="title723">
					</td>
				</tr>
				<tr>
					<td>
						Amount 4
					</td>
					<td>
						<input type="text" name="amount724">
					</td>
					<td>
						Title 4
					</td>
					<td>
						<input type="text" name="title724">
					</td>
				</tr>
				<tr>
					<td>
						Amount 5
					</td>
					<td>
						<input type="text" name="amount725">
					</td>
					<td>
						Title 5
					</td>
					<td>
						<input type="text" name="title725">
				</tr>
				<tr>
					<td>
						Amount 6
					</td>
					<td>
						<input type="text" name="amount726">
					</td>
					<td>
						Title 6
					</td>
					<td>
						<input type="text" name="title726">
					</td>
				</tr>
				<tr>
					<td>
						Amount 7
					</td>
					<td>
						<input type="text" name="amount727">
					</td>
					<td>
						Title 7
					</td>
					<td>
						<input type="text" name="title727">
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
						<input type="text" name="set73" placeholder="set number">
					</td>
				</tr>
				<tr>
					<td>
						Amount 1
					</td>
					<td>
						<input type="text" name="amount731">
					</td>
					<td>
						Title 1
					</td>
					<td>
						<input type="text" name="title731">
					</td>
				</tr>
				<tr>
					<td>
						Amount 2
					</td>
					<td>
						<input type="text" name="amount732">
					</td>
					<td>
						Title 2
					</td>
					<td>
						<input type="text" name="title732">
					</td>
				</tr>
				<tr>
					<td>
						Amount 3
					</td>
					<td>
						<input type="text" name="amount733">
					</td>
					<td>
						Title 3
					</td>
					<td>
						<input type="text" name="title733">
					</td>
				</tr>
				<tr>
					<td>
						Amount 4
					</td>
					<td>
						<input type="text" name="amount734">
					</td>
					<td>
						Title 4
					</td>
					<td>
						<input type="text" name="title734">
					</td>
				</tr>
				<tr>
					<td>
						Amount 5
					</td>
					<td>
						<input type="text" name="amount735">
					</td>
					<td>
						Title 5
					</td>
					<td>
						<input type="text" name="title735">
				</tr>
				<tr>
					<td>
						Amount 6
					</td>
					<td>
						<input type="text" name="amount736">
					</td>
					<td>
						Title 6
					</td>
					<td>
						<input type="text" name="title736">
					</td>
				</tr>
				<tr>
					<td>
						Amount 7
					</td>
					<td>
						<input type="text" name="amount737">
					</td>
					<td>
						Title 7
					</td>
					<td>
						<input type="text" name="title737">
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
						<input type="text" name="set74" placeholder="set number">
					</td>
				</tr>
				<tr>
					<td>
						Amount 1
					</td>
					<td>
						<input type="text" name="amount741">
					</td>
					<td>
						Title 1
					</td>
					<td>
						<input type="text" name="title741">
					</td>
				</tr>
				<tr>
					<td>
						Amount 2
					</td>
					<td>
						<input type="text" name="amount742">
					</td>
					<td>
						Title 2
					</td>
					<td>
						<input type="text" name="title742">
					</td>
				</tr>
				<tr>
					<td>
						Amount 3
					</td>
					<td>
						<input type="text" name="amount743">
					</td>
					<td>
						Title 3
					</td>
					<td>
						<input type="text" name="title743">
					</td>
				</tr>
				<tr>
					<td>
						Amount 4
					</td>
					<td>
						<input type="text" name="amount744">
					</td>
					<td>
						Title 4
					</td>
					<td>
						<input type="text" name="title744">
					</td>
				</tr>
				<tr>
					<td>
						Amount 5
					</td>
					<td>
						<input type="text" name="amount745">
					</td>
					<td>
						Title 5
					</td>
					<td>
						<input type="text" name="title745">
				</tr>
				<tr>
					<td>
						Amount 6
					</td>
					<td>
						<input type="text" name="amount746">
					</td>
					<td>
						Title 6
					</td>
					<td>
						<input type="text" name="title746">
					</td>
				</tr>
				<tr>
					<td>
						Amount 7
					</td>
					<td>
						<input type="text" name="amount747">
					</td>
					<td>
						Title 7
					</td>
					<td>
						<input type="text" name="title747">
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
						<input type="text" name="set75" placeholder="set number">
					</td>
				</tr>
				<tr>
					<td>
						Amount 1
					</td>
					<td>
						<input type="text" name="amount751">
					</td>
					<td>
						Title 1
					</td>
					<td>
						<input type="text" name="title751">
					</td>
				</tr>
				<tr>
					<td>
						Amount 2
					</td>
					<td>
						<input type="text" name="amount752">
					</td>
					<td>
						Title 2
					</td>
					<td>
						<input type="text" name="title752">
					</td>
				</tr>
				<tr>
					<td>
						Amount 3
					</td>
					<td>
						<input type="text" name="amount753">
					</td>
					<td>
						Title 3
					</td>
					<td>
						<input type="text" name="title753">
					</td>
				</tr>
				<tr>
					<td>
						Amount 4
					</td>
					<td>
						<input type="text" name="amount754">
					</td>
					<td>
						Title 4
					</td>
					<td>
						<input type="text" name="title754">
					</td>
				</tr>
				<tr>
					<td>
						Amount 5
					</td>
					<td>
						<input type="text" name="amount755">
					</td>
					<td>
						Title 5
					</td>
					<td>
						<input type="text" name="title755">
				</tr>
				<tr>
					<td>
						Amount 6
					</td>
					<td>
						<input type="text" name="amount756">
					</td>
					<td>
						Title 6
					</td>
					<td>
						<input type="text" name="title756">
					</td>
				</tr>
				<tr>
					<td>
						Amount 7
					</td>
					<td>
						<input type="text" name="amount757">
					</td>
					<td>
						Title 7
					</td>
					<td>
						<input type="text" name="title757">
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