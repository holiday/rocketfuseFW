<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title><?php echo $title; ?></title>
</head>
<body>
	<h1><?php echo $title; ?></h1>
	<form name="loginForm" action="/index/index" method="POST">
		<label for"username">Username</label>
		<br>
		<input id="username" type="text" name="username" size="100" />
		<br>
		<label for"username">Email</label>
		<br>
		<input id="email" type="text" name="email" size="100" />
		<br>
		<label for"username">Password</label>
		<br>
		<input id="password" type="password" name="password" size="100" />
		<br />
		<input type="submit" name="Send Request" />
	</form>
	
</body>
</html>