<?php 

include("db.class.php");
$db = new DB('cloudapp', '54.76.240.41', 'root', '');

$res = $db->query('SELECT * FROM scores ORDER BY score DESC LIMIT 20');

?>

<!DOCTYPE html>
<html>
<head>
<title>My cloud app</title>
<link rel="stylesheet" type="text/css" href="table.css" />
</head>
<body style="background-image: url('Tetris.jpg');">
  <div class="container">
  	<h1>Highscores</h1>
	
	<div class="CSSTableGenerator" style="margin-left:44%;">
		<table>
			<tr>
				<td>
					Name
				</td>
				<td >
					Score
				</td>
				</tr>
			<?php while($myscore = $db->fetchNextObject($res)){ ?>	
			<tr>
				<td>
					<?php echo $myscore->name; ?>
				</td>
				<td>
					<?php echo $myscore->score; ?>
				</td>
			</tr>
			<?php } ?>
		</table>
	</div><br>
    <a style="background-color: white;" href="./index.html">Go play again.</a>
  </div>
</body>
</html>
