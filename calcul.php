<html>
	<body>
		<h2><a href="index.php">Index</a></h2>
		<h2 align=center> Simple Calculette</h2>
		<p>
			<form method="post">
				Premiere valeur : <input type="text" name="valeur1"><br>
				Seconde valeur : <input type="text" name="valeur2"><br>
				<input type="submit" name="operation" value="+">
				<input type="submit" name="operation" value="-">
			</form>
		</p>
		<?php
			if(isset($_POST["valeur1"]) && isset($_POST["valeur2"])){
				$val1 = $_POST["valeur1"];
				$val2 = $_POST["valeur2"];
				if($_POST["operation"] == "+"){
					$resultat = $val1 + $val2;
				}
				else{
					$resultat = $val1 - $val2;
				}
				echo "resultat = $resultat";
			}
		?>
	</body>
		
</html>