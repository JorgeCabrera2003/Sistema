<?php 
	if (!empty($_GET['page'])) {
		$page = $_GET['page'];
	}

	if (is_file("view/".$page.".php")) {
		if (!empty($_POST)) {
			$page = "main";
		}
		require_once "view/$page.php";

	} else {
		require_once "view/404.php";
	}
 ?>