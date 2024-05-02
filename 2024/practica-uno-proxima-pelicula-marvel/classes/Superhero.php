<?php
  declare(strict_types=1);

  class Superhero {
    
    private string $name;
    private array $powers;
    private string $planet;

    public function __construct(string $name, array $powers, string $planet) {
      $this->name = $name;
      $this->powers = $powers;
      $this->planet = $planet;
    }

    public function attack () {
      return "$this->name take a hit!";
    }
    
    public function description () {
      $powers = implode(", ", $this->powers);
      return "Hero: $this->name, Powers: $powers, Planet: $this->planet";
    }

    public static function random () {
      $names = ["Thor", "Spiderman", "Hulk"];
      $powers = [["Strong"], ["Fligth"], ["Laser Vision"]];
      $planets = ["Asgard", "Kripton","Vegitta","Pluton"];
      $name = $names[array_rand($names)];
      $power = $powers[array_rand($powers)];
      $planet = $planets[array_rand($planets)];
      //echo "Hero Selected: $name";
      return new self($name, $power, $planet);
    }

  }

  // Instance of class
  $batman = new Superhero("Batman", ["Strong"], "Hearth");
  echo $batman->description();
  $superman = new Superhero("Superman", ["Super Strong"], "Kripton");
  echo $superman->description();

  // Static method
  $hero = Superhero::random();
  echo "Random Hero selected: \n" . $hero->description();