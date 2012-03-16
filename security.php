<?php

if(isset($_GET['delete']) && $_GET['delete'] == 'yes') {
	$file = $_GET['file'];
	unlink($file);
}


?>