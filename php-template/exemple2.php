<html>
    <head>
        <title>Exemple</title>
		<meta charset="UTF-8">
    </head>
    <body>
		<h1>Un page signalant si les minutes sont paires ou impaires</h1>
        <p>Il est <?php echo date("G:i:s"); ?></p>
		<p>Le nombre des minutes est une valeur : 
		<?php
			if (date("i")%2==0)
				echo "paire.";
			else
				echo "impaire.";
		?>
		</p>
		<h2>En utilisant l'alternative ternaire</h2>
		<p>Le nombre des minutes est une valeur : <?php echo (date("i")%2==0) ? "paire." : "impaire."; ?></p>
    </body>
</html>