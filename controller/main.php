<?php 
	if (!empty($_GET['page'])) {
		$page = $_GET['page'];
	}

	if (is_file("view/".$page.".php")) {
		require_once "view/$page.php";
	} else {
		require_once "view/404.php";
	}
 ?>