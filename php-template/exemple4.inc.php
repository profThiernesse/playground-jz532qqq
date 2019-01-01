<?php
	$menu1['Google'] = "http://www.google.be";
	$menu1['Base PHP'] = "https://tech.io/playgrounds/34845/le-php---les-bases-du-langage/introduction";
	$menu1['w3schools'] = "https://www.w3schools.com/";
	$menu1['Références PHP'] = "http://php.net/";
	
	$menu_techio['Introduction']="https://tech.io/playgrounds/34845/le-php---les-bases-du-langage/introduction";
	$menu_techio['Le langage']="https://tech.io/playgrounds/34845/le-php---les-bases-du-langage/le-langage";
	$menu_techio['Les variables']="https://tech.io/playgrounds/34845/le-php---les-bases-du-langage/les-variables";
	$menu_techio['Opérateurs logiques et de comparaisons']="https://tech.io/playgrounds/34845/le-php---les-bases-du-langage/operateurs-logiques-et-de-comparaisons";
	$menu_techio['Les tableaux']="https://tech.io/playgrounds/34845/le-php---les-bases-du-langage/les-tableaux";
	$menu_techio['Les alternatives']="https://tech.io/playgrounds/34845/le-php---les-bases-du-langage/les-alternatives";
	$menu_techio['Les répétitions']="https://tech.io/playgrounds/34845/le-php---les-bases-du-langage/les-repetitions";
	$menu_techio['Les fonctions']="https://tech.io/playgrounds/34845/le-php---les-bases-du-langage/les-fonctions";
	
	function display_menu($menu) {
		echo "<ul>";
		foreach($menu as $nom => $url)
			echo "<li><a href='$url'>$nom</a></li>";
		echo "</ul>";
	}
	
	function bissextile($a) {
		return ($a % 400 == 0) || ($a % 4 == 0 && $a % 100 != 0);
	}
	
?>
