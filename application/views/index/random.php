<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title><?php echo $title; ?></title>
</head>
<body>
<h2>Credit Card Validation Demo Tester (using lib/FormValidator)</h2>
<p>Luhn's Algorithm used for Mod 10 Check Digit</p>
<form name="creditcardtester" action="\index\test" method="POST">
	<input type="text" size="20" name="cc" />
	<select name="cardtype">
		<option value="visa">Visa</option>
		<option value="mastercard">Master Card</option>
		<option value="dinersclub">Diners Club</option>
		<option value="amex">American Express</option>
		<option value="discover">Discover</option>
		<option value="enroute">EnRoute</option>
		<option value="jcb">JCB</option>
	</select>
	<input type="submit" name="check" value="Check">
</form>
</body>
</html>