<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">

	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="testing.css">
	<style>
		header{
		background: #e3e3e3;
		padding: 2em;
		text-align:center;
	}
	</style>
</head>
<body>
	<h1>TASK FOR THE DAY</h1>
		<ul>
			<li>
			<strong>Name:</strong> <?= $task['title'];?>
			</li>
			<li>
			<strong>Due Date:</strong> <?= $task['due'];?>
			</li>
			<li>
			<strong>Person Responsible:</strong> <?= $task['assigned to'];?>
			</li>
			<li>
			<strong>Status:</strong>

			<?php if($task['completed']): ?>
				<span class="icon-tick">&#9989;</span>
			<?php else : ?>
				<span class="icon">Incomplete</span>
			<?php endif; ?>

			</li>

		</ul>
</body>