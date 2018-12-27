# Introduction

L'objectif de cette présentation est de comprendre l'intégration du `PHP` et du `HTML` 

Le code PHP peut facilement être mélangé avec du code HTML au sein d'un fichier PHP.

Le PHP est délimité par les balises ouvrante <?php et fermante ?>. Lorsque l'interpréteur PHP traite un fichier, il cherche les balises d'ouverture et de fermeture qui délimitent le code qu'il doit interpréter. De cette manière, cela permet à PHP d'être intégré dans toutes sortes de documents, car tout ce qui se trouve en dehors des balises ouvrantes/fermantes de PHP est ignoré.

**Attention :**
- Un fichier *.php peut ne pas contenir de code PHP mais uniquement des balises HTML, cela ne pose aucun problème.
- Un fichier *.html peut contenir du code PHP, par défaut il ne sera pas interprété sauf si c'est spécifié dans le fichier de configuration php.ini

Le `PHP` permet de générer du code/texte (le plus souvent du HTML). Il est également utile à structurer/découper vos fichiers dans le but de faciliter le développement et le maintien de vos applications.

L'exemple ci-dessous présente un simple script PHP intégré dans une page HTML. Le résultat de l'exécution produit une page HTML qui doit encore être interprétée par un navigateur.

@[Exemple simple]({"stubs": ["exemple1.php"], "command": "/bin/bash run.sh exemple1.php"})

Le `PHP` a servi à générer un document `HTML`. L'instruction d'affichage (`echo`, `printf`,...) du `PHP` "écrive" le code `HTML`.

