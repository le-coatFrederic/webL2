<html>
	<head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/page_gen.css" />
        <title>Page Exo 3</title>
    </head>
	<body>
		<h2><a href="index.php">Index</a></h2>
		<h2>A corriger 2</h2>
			<p>
				<?php
					$tab = array(3, 5, 7, 1, 2, 8, 6, 4) ;
					echo 'tableau<br>';
					echo '<table border=\"1\">';
					for($i = 0 ; $i < count($tab); $i++)
						print ("<tr><td> $i </td><td> $tab[$i]</td></tr>");
					echo '</table>';
					for($i = 0 ; $i < count($tab); $i++)
						$somme = $tab[$i] + $somme;
						print ("<br/>somme = $somme") ;
				?>
			</p>
	</body>
</html>