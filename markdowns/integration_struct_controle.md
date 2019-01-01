# Les structures de contrôle

Les différentes structures de contrôle peuvent être utilisées afin de générer du code `HTML`. 

Les principales structures de contrôle sont : 
- Alternatives
- Répétitions
- Fonctions

## Exemple 1

Le premier exemple utilise simplement le fonction `date()` pour afficher une date dynamique à chaque appel de la page.

@[Exemple date]({"stubs": ["exemple1.php"], "command": "/bin/bash run.sh exemple1.php"})

## Exemple 2

Cet exemple utilise l'alternative pour afficher le contenu selon que les minutes de l'heure courante soient paire ou impaire.

@[Exemple Alternative]({"stubs": ["exemple2.php"], "command": "/bin/bash run.sh exemple2.php"})

## Exemple 3

Les entrées d'un menu sont sauvées dans un tableau, les clés sont les noms du menu et les contenus sont les liens vers lesquel ils renvoient. L'exemple utilise une boucle pour afficher le menu.

@[Exemple Répétition]({"stubs": ["exemple3.php"], "command": "/bin/bash run.sh exemple3.php"})

## Exemple 4

Dans l'exemple suivant, on a un peu amélioré l'exemple 3. La fonction `display_menu` permet d'afficher le menu passé en paramètre. Cette fonction ainsi que 2 menus possibles sont conservés dans un fichier qui sera inclut dans la page principale.

Le fichier inclut contient également une fonction renvoyant 1 ou 0 selon que l'année passée en paramètre est bissextile ou non.  

@[Exemple Fonction]({"stubs": ["exemple4.php", "exemple4.inc.php"], "command": "/bin/bash run.sh exemple4.php"})
