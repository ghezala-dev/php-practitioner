<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Boolean</title>
</head>
<body>
<h1>Our Assignment</h1>
<ul>
    <li>
    	<strong>Title:</strong><?= $task['Title']; ?>
    </li>
    <li>
    	<strong>Due:</strong><?= $task['Due']; ?>
    </li>
    <li>
    	<strong>Assigned_to:</strong><?= $task['Assigned_to']; ?>
    </li>
     <li>
    	<strong>Completed:</strong><?= $task['Completed'] ? 'Complete' : 'Incomplete'; ?>
    </li>
	</ul>
</body>
</html>