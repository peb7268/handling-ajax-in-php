<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="ie6"> <![endif]-->
<!--[if IE 7]>         <html class="ie7"> <![endif]-->
<!--[if IE 8]>         <html class="ie8"> <![endif]-->
<!--[if gt IE 8]><!--> <html>         <!--<![endif]-->

<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<title>Page Title</title>
	<link rel="stylesheet" href="styles/styles.css" type="text/css" media="screen" title="no title" charset="utf-8">
	
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
	<script type="text/javascript" src="js/global.js" charset="utf-8"></script>
</head>
<body>
	<form name="form" id="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<input type="text" name="name" placeholder="name">
		<input type="text" name="age" placeholder="age">
		<input type="text" name="email" placeholder="email">
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>
