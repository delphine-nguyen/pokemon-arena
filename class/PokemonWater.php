<?php

require_once("./class/Pokemon.php");

class PokemonWater extends Pokemon
{
    public function __construct(
        string $name,
        int $maxHp,
        int $atk,
        string $sprite,
        int $id
    ) {
        parent::__construct($name, $maxHp, $atk, $sprite, $id);
    }

    public function getType(): string
    {
        return "water";
    }
    public function attack(Pokemon $pokemon): void
    {
        switch (true) {
            case $pokemon instanceof PokemonFire:
                $damage = $this->atk * 2;
                break;
            case $pokemon instanceof PokemonPlant:
            case $pokemon instanceof PokemonWater:
                $damage = $this->atk * 0.5;
                break;
            default:
                $damage = $this->atk;
        }
        $pokemon->setHp($pokemon->getHp() - $damage);
    }
}
