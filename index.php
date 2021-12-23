<?php

require_once __DIR__ . "/vendor/autoload.php";
use hellokant\connection\ConnectionFactory;


try {
    $conf = parse_ini_file('src/conf/conf.ini') ;
    ConnectionFactory::makeConnection($conf);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

echo "<h1>Micro orm</h1>";
echo "Voici l'application Micro orm créé par Ziyi WANG,";
echo "<br><br>";
echo " pour afficher le test de Model, ajouter directement /model-test.php sur url";
echo "<br><br>";
echo "pour afficher le test de Query, ajouter  directement /query-test.php  sur url. Merci!";
echo "<br><br>";

