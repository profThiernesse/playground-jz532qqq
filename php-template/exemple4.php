<?php include("exemple4.inc.php"); ?>
<html>
    <head>
        <title>Exemple</title>
		<meta charset="UTF-8">
    </head>
    <body>
		<h1>Les bases d'un menu</h1>
		<article>
			<h2>Informations</h2>
			<p>
			L'affichage ci-après n'inclut aucune mise en forme. 
			Avec l'ajout de CSS, on obtiendra un menu ressemblant à un menu. 
			</p>
		</article>
		<nav>
			<h2>Le menu</h2>
			<ul>
			<?php
				display_menu($menu_techio);
			?>
			</ul>
			<p>
				<em>Remarque :</em> Les liens externes à tech.io ne sont pas nécessairement fonctionnels pour des raisons de sécurité.
			</p>
			<p>
				Le menu passé en paramètre peut-être modifié pour afficher un menu différent.
			</p>
		</nav>
		<article>
			<h2>Fonction sans affichage</h2>
			<p>Nous allons ici utiliser le résultat d'une fonction sans affichage pour afficher si nous sommes dans une année bissextile ou non<p>
			<p>
				<?php
					echo date("Y") . " est une année : ";
					if (bissextile(date("Y")))
						echo "bissextile";
					else
						echo "non-bissextile";
				?>
			</p>
		</article>		
    </body>
</html>