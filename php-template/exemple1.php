<html>
    <head>
        <title>Exemple</title>
		<meta charset="UTF-8">
    </head>
    <body>
		<h1>Un page avec la date courante</h1>
        <p>Nous sommes actuellement le
		<?php 
           echo date("d/m/Y") . " il est " . date("G:i:s");
        ?>
		</p>
		<p>La date n'évolue pas seule. Elle ne change que chaque fois que la page est rechargée. <em>Attention: la date affichée est la date sur le serveur.</em></p>
    </body>
</html>