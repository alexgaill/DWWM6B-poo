<?php

// Point d'entrée du projet qui ne contient que la logique de chargement des fichiers.
// On charge le fichier de la class
require "MaClasse.php";
require "YoungClass.php";
// On instancie la class pour créer un objet
$class = new MaClasse(['test', "ok"]);
$young = new YoungClass(5, ['test', "ok"]);

// var_dump($class);
// $class->prop1;
echo "<br>";
// On appelle la property prop2
echo $class->prop2;
echo "<br>";
// echo $class->sayHello();
echo "<br>";
// On appelle la method sayHelloWorld
echo $class->sayHelloWorld();
echo "<br>";
echo $class->sayHelloDude("Alex");
echo "<br>";
echo $young->sayHelloWorld();
echo "<br>";
echo $young->sayBye();
echo "<br>";
var_dump($young->prop1);
echo "<br>";
// J'utilise la constante de la class sans avoir à instancier un objet
echo YoungClass::CONSTANTE;
echo "<br>";
echo YoungClass::$property1;
echo "<br>";
echo YoungClass::staticHello();