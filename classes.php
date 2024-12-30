<?php

declare(strict_types=1);

class Superhero
{
    // Promoted properties are properties that are automatically created and initialized when an object is created.
    public function __construct(
        private $name,
        public string $alias,
        public array $super_power
    ) {}

    public function get_name()
    {
        return $this->name;
    }

    public function get_alias()
    {
        return $this->alias;
    }

    public function get_super_powers()
    {
        $super_powers = implode(', ', $this->super_power);
        return $super_powers;
    }


    public static function get_random_superhero()
    {
        $names = ['The Hulk', 'Superman', 'Batman', 'Spider-Man', 'Iron Man', 'Thor', 'Captain America', 'Hulk', 'Superman', 'Batman', 'Spider-Man', 'Iron Man', 'Thor', 'Captain America'];
        $aliases = ['Jhon Wick', 'Bruce Wayne', 'Clark Kent', 'Peter Parker', 'Tony Stark', 'Thor Odinson', 'Steve Rogers', 'Bruce Banner', 'Lex Luthor', 'Joao Pedro', 'Thiago Silva', 'Uriel Oliveira', 'Lokito por ti', 'Rodolfo da Silva'];
        $super_powers = [['Super jump', 'Teletransport', 'Fly'], ['Hipervision', 'Super Hearing', 'Laser rays'], ['Smash', 'Throw', 'Run', 'Jump']];

        $name = $names[array_rand($names)];
        $alias = $aliases[array_rand($aliases)];
        $super_power = $super_powers[array_rand($super_powers)];

        return new self($name, $alias, $super_power);
    }
}

$superhero = Superhero::get_random_superhero();
echo $superhero->get_name() . PHP_EOL;
echo $superhero->get_alias() . PHP_EOL;
echo $superhero->get_super_powers() . PHP_EOL;
