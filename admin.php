<?php 
	if ($_SESSION['user']['valid'] == 'true') {
		if (!isset($action)) { $action = 1; }
		print '
		<h1>Administracija</h1>
		<div id="admin">
			<ul>
				<li><a href="index.php?menu=7&amp;action=1">Korisnici</a></li>
				<li><a href="index.php?menu=7&amp;action=2">Novosti</a></li>
			</ul>';
			
			if ($action == 1) { include("admin/users.php"); }
			
			
			else if ($action == 2) { include("admin/news.php"); }
		print '
		</div>';
	}
	else {
		$_SESSION['message'] = '<p>Molimo registrirajte se ili se prijavite sa postojećim računom!</p>';
		header("Location: index.php?menu=6");
	}
?>