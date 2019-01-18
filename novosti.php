<?php
	
	if (isset($action) && $action != '') {
		$query  = "SELECT * FROM news";
		$query .= " WHERE id=" . $_GET['action'];
		$result = @mysqli_query($MySQL, $query);
		$row = @mysqli_fetch_array($result);
			print '
			<div class="novosti">
				<img src="novosti/' . $row['picture'] . '" alt="' . $row['title'] . '" title="' . $row['title'] . '">
				<h2>' . $row['title'] . '</h2>
				<p>'  . $row['description'] . '</p>
				<time datetime="' . $row['date'] . '">' . pickerDateToMysql($row['date']) . '</time>
				<hr>
			</div>';
	}
	else {
		print '<h1>Novosti</h1>';
		$query  = "SELECT * FROM news";
		$query .= " WHERE archive='N'";
		$query .= " ORDER BY date ASC";
		$result = @mysqli_query($MySQL, $query);
		while($row = @mysqli_fetch_array($result)) {
			print '
			<div class="novosti">
				<img src="novosti/' . $row['picture'] . '" alt="' . $row['title'] . '" title="' . $row['title'] . '">
				<h2>' . $row['title'] . '</h2>';
				if(strlen($row['description']) > 100) {
					echo substr(strip_tags($row['description']), 0, 100).'... <a href="index.php?menu=' . $menu . '&amp;action=' . $row['id'] . '">Više</a>';
				} else {
					echo strip_tags($row['description']);
				}
				print '
				<time datetime="' . $row['date'] . '">' . pickerDateToMysql($row['date']) . '</time>
				<hr>
			</div>';
		}
	}
?>
