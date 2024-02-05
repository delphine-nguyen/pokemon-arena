<?php

require_once("./class/Pokemon.php");
require_once("./class/PokemonFire.php");
require_once("./class/PokemonPlant.php");
require_once("./class/PokemonWater.php");

function combat($pokemon1, $pokemon2)
{
    $display = [];
    $turn = 0;
    while (!$pokemon1->isDead() && !$pokemon2->isDead()) {
        $pokemon1Hp = $pokemon1->getHp();
        $pokemon2Hp = $pokemon2->getHp();
        if ($turn % 2 == 0) {
            array_push($display, $pokemon1->getName() . " attacks " . $pokemon2->getName());
            $pokemon1->attack($pokemon2);
            array_push($display, $pokemon2->getName() . " loses " . $pokemon2Hp - $pokemon2->getHp());
        } else {
            array_push($display, $pokemon2->getName() . " attacks " . $pokemon1->getName());
            $pokemon2->attack($pokemon1);
            array_push($display, $pokemon1->getName() . " loses " . $pokemon1Hp - $pokemon1->getHp());
        }
        $turn++;
    }
    array_push($display, $pokemon1->isDead() ? $pokemon2->getName() . " wins!" : $pokemon1->getName() . " wins!");
    return $display;
}
session_start();
$_SESSION["combatDisplay"] = combat($_SESSION["pokemon1"], $_SESSION["pokemon2"]);
header("Location: ./arena.php");
exit();
