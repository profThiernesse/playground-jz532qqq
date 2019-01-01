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

@[Exemple Fonction]({"stubs": ["exemple4.php", "exemple4.inc.php"], "command": "/bin/bash run.sh exemple4.php"})
