<?php 
	
	define('__APP__', TRUE);
	
    session_start();
	
	include ("dbconn.php");
	
	
    if(isset($_GET['menu'])) { $menu   = (int)$_GET['menu']; }
	if(isset($_GET['action'])) { $action   = (int)$_GET['action']; }
	
	
    if(!isset($_POST['_action_']))  { $_POST['_action_'] = FALSE;  }
	
	if (!isset($menu)) { $menu = 1; }
	
    include_once("functions.php");
	
print '
<!DOCTYPE html>
<html>
	<head>
		
		<link rel="stylesheet" href="style.css">
		
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
		
        <meta charset="utf-8">
		
		<meta name="author" content="jfadlje@vvg.hr">
		
		<link rel="icon" href="favicon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
		
		<title>Business</title>
	</head>
<body>
	<header>
		<div'; if ($menu > 1) { print ' class="business-subimage"'; } else { print ' class="business"'; }  print '></div>
		<nav>';
			include("menu.php");
		print '</nav>
	</header>
	<main>';
		if (isset($_SESSION['message'])) {
			print $_SESSION['message'];
			unset($_SESSION['message']);
		}
	
	
	if (!isset($menu) || $menu == 1) { include("home.php"); }
	else if ($menu == 2) { include("novosti.php"); }
	else if ($menu == 3) { include("kontakt.php"); }
	else if ($menu == 4) { include("o_nama.php"); }
	else if ($menu == 5) { include("register.php"); }
	else if ($menu == 6) { include("signin.php"); }
	else if ($menu == 7) { include("admin.php"); }

print '
	</main>
	<footer>
		<p>Copyright &copy; Fadljević Josip &nbsp
				   <a href="https://www.facebook.com/www.business.hr/" target="_blank"><img src="img/facebook.svg" alt="Facebook" title="Facebook" style="width:25px; margin-top:0.5em"></a>
			       <a href="https://twitter.com/businesshr?lang=hr" target="_blank"><img src="img/twitter.svg" alt="Twitter" title="Twitter" style="width:25px; margin-top:0.5em"></a>
			       <a href="https://www.linkedin.com/company/business.hr" target="_blank"><img src="img/linkedin.svg" alt="Linkedin" title="Linkedin" style="width:25px; margin-top:0.5em"></a>
				   <a href="https://github.com/webiapp/web_projekt"target="_blank"><img src="img/github.svg" alt="Github" title="Github" style="width:25px; margin-top:0.5em"></a></p>
	</footer>
</body>
</html>';
?>	
