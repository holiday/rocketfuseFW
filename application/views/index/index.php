
<?php $this->Registry->Template->render('header'); ?>

<h1><?php echo $title; ?></h1>
<hr />
<!--
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
--!>

<?php $this->Registry->Template->render('footer'); ?>