<?php
	$menu['Google'] = "http://www.google.be";
	$menu['Base PHP'] = "https://tech.io/playgrounds/34845/le-php---les-bases-du-langage/introduction";
	$menu['w3schools'] = "https://www.w3schools.com/";
	$menu['Références PHP'] = "http://php.net/";
?>
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
				foreach($menu as $nom => $url)
					echo "<li><a href='$url'>$nom</a></li>";
			?>
			</ul>
		</nav>
    </body>
</html>