<html>
<head>
<title><?= $title; ?></title>
</head>
<body>
<h1><?= $title; ?></h1>

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