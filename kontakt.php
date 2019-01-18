<?php
print '
<!DOCTYPE html>
<html lang=hr>
	<head>
		
		<link rel="stylesheet" href="style.css">
		
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
		
        <meta charset="utf-8">
		
		<meta name="author" content="jfadlje@vvg.hr">
		
		<link rel="icon" href="favicon1.ico" type="image/x-icon"/>
		<link rel="shortcut icon" href="favicon1.ico" type="image/x-icon"/>
		
		<title>Business</title>
	</head>
<body>
	<main>
		<h1>Kontakt</h1>
		<div class="section"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2785.8500532384664!2d16.0747267!3d45.7140449!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47667e543ebb2c65%3A0xe159703d90972cf3!2sVeleu%C4%8Dili%C5%A1te+Velika+Gorica!5e0!3m2!1sen!2shr!4v1540377542559" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		<div id="contact">     			
				<label for="ime">Ime *</label>
				<input type="text" id="ime" name="ime" placeholder="Vaše ime.." required>

				<label for="prezime">Prezime *</label>
				<input type="text" id="prezime" name="prezime" placeholder="Vaše prezime.." required>
				
				<label for="email">E-mail adresa *</label>
				<input type="email" id="email" name="email" placeholder="Vaš e-mail.." required>

				<label for="Država">Država</label>
				<select id="država" name="država">
				  <option value="">Molimo izabrati</option>
				  <option value="BA">Bosna i Hercegovina</option>
				  <option value="HR">Hrvatska</option>
				  <option value="SI">Slovenija</option>
				  <option value="RS">Srbija</option>
				</select>

				<label for="opis">Opis</label>
				<textarea id="opis" name="opis" placeholder="Pišite ovdje.." style="height:150px"></textarea>

				<input type="submit" value="Pošalji">
				<p>* Obavezno polje</p>
			
		</div>
		
	</main>
	               
</body>
</html>';
?>
