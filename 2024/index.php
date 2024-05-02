<?php
  $name = "Bryan Ariel sanchez Anariba";
  $isDev = false;
  $age = 18;

  var_dump($name);
  var_dump($isDev);
  // gettype($age);
  is_integer($age);

  // ConstanteS GLOBALES
  define('PORT', 3500);
  // ConstanteS LOCALES
  const APP_NAME = "products_app";

  // Match vs Switch => es mejor Match pero no se si dependa de la version
  $outputAge = match(true) {
    $age < 2 => "Eres un bebe $name!",
    $age < 10 => "Eres un nino $name",
    $age < 18 => "Eres adolecente $name",
    $age === 18 => "Eres mayor de edad $name",
    $age < 40 => "Eres adulto joven $name",
    $age < 60 => "Eres adulto viejo $name",
    default => "Eres un jenor $name",
  };

  // Arrays
  $bestLenguages = ["PHP", "Javascript", "Python", "GO"];
  $bestLenguages[] = "Java";
  $bestLenguages[] = "Typescript";

  // Arrays Asociativos
  $person = [
    "name" => "Miguel",
    "age" => 78,
    "isDev" => true,
    "languages" => ["PHP", "Javascript"],
  ];
?>

<h1><?= "Mi primera app $name!"; ?></h1>
<h2><?= $outputAge; ?></h2>
<ul>
  <?php foreach ($bestLenguages as $key => $lenguage): ?>
    <li><?=($key+1) . ". $lenguage";?></li>
  <?php endforeach; ?>
</ul>


<style>
  :root {
    color-scheme: light-dark;
  }

  body {
    display: grid;
    place-content: center;
  }
</style>