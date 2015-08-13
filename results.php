<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1">
    <title>De Dieren van Artis</title>
	<link href="stijl/all.css" rel="stylesheet">
    <link href="stijl/results.css" rel="stylesheet">
</head>

<body>
	<h1>De Dieren van Artis</h1>
    
    <p>Resultaten</p>
    
    <!-- checks en database dingen -->
    
    <!-- dan een redirect - MVC - en dubbel submit voorkomen -->
    
    <!-- dan het lijst echoen -->   
    <?php
		$dieren = $_POST['dier'];
		echo'<ul>';
		foreach ($dieren as $key => $value)
			echo'<li class="'.$value.'">'.$key.'</li>';
		echo'</ul>';
	?>
</body>
</html>
