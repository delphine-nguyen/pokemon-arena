<?php

require_once("./class/Pokemon.php");
require_once("./class/PokemonFire.php");
require_once("./class/PokemonPlant.php");
require_once("./class/PokemonWater.php");

function combat($pokemon1, $pokemon2)
{
    $turn = 0;
    while (!$pokemon1->isDead() && !$pokemon2->isDead()) {
        $pokemon1Hp = $pokemon1->getHp();
        $pokemon2Hp = $pokemon2->getHp();
        if ($turn % 2 == 0) {
            echo $pokemon1->getName() . " attacks " . $pokemon2->getName();
            $pokemon1->attack($pokemon2);
            echo "<br>";
            echo $pokemon2->getName() . " loses " . $pokemon2Hp - $pokemon2->getHp() . " HP (curent : " . $pokemon2->getHp() . ")";
        } else {
            echo $pokemon2->getName() . " attacks " . $pokemon1->getName();
            $pokemon2->attack($pokemon1);
            echo "<br>";
            echo $pokemon1->getName() . " loses " . $pokemon1Hp - $pokemon1->getHp() . " HP (curent : " . $pokemon1->getHp() . ")";
        }
        echo "<br>---<br>";
        $turn++;
    }
    echo ($pokemon1->isDead()) ? $pokemon2->getName() : $pokemon1->getName();
    echo " wins!";
}
session_start();
combat($_SESSION["pokemon1"], $_SESSION["pokemon2"]);
