<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form method="post" action="">
		<div>
			<label>jour</label>
			<input type="number" name="j">
		</div>
		<div>
			<label>mois</label>
			<input type="number" name="m">
		</div>
		<div>
			<label>annee</label>
			<input type="number" name="a">
		</div>
		<input type="submit" name="submit" value="chercher">
	</form>
</body>
</html>

<?php 
	if (isset($_POST['j']) && isset($_POST['m']) && isset($_POST['a'])) {
		$j = $_POST['j'];
		$m = $_POST['m'];
		$a = $_POST['a'];

		$result = date("l", mktime(0, 0, 0, $m, $j, $a));

		switch ($result) {
			case 'Monday':
				echo "alatsinainy";
				break;
			case 'Tuesday':
				echo "talata";
				break;
			case 'Wednesday':
				echo "alarobia";
				break;
			case 'Thursday':
				echo "lakamisy";
				break;
			case 'Friday':
				echo "zoma";
				break;
			case 'Saturday':
				echo "sabotsy";
				break;
			case 'Sunday':
				echo "lahady";
				break;
			default:
				echo "erreur";
				break;
		}
		
	
	}
 ?>