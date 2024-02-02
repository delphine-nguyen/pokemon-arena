<?php

require_once("./class/Pokemon.php");
require_once("./class/PokemonFire.php");
require_once("./class/PokemonPlant.php");
require_once("./class/PokemonWater.php");

session_start();
if (isset($_GET['fight'])) {
    $chosen = array_keys($_GET);


    $contestants = $_SESSION["contestants"];

    if (count($chosen) - 1 > 2) {
        $_SESSION["errorMsg"] = "Only choose two contestants at a time";
        header("Location:./arena.php");
        exit();
    } elseif (count($chosen) - 1 < 2) {
        $_SESSION["errorMsg"] = "Please select two pokemons";
        header("Location:./arena.php");
        exit();
    } else {

        foreach ($contestants as $pokemon) {
            if ($pokemon->getId() == $chosen[0]) {
                $_SESSION["pokemon1"] = $pokemon;
            } elseif ($pokemon->getId() == $chosen[1]) {
                $_SESSION["pokemon2"] = $pokemon;
            }
        }

        $_SESSION["errorMsg"] = "";

        header("Location: ./combat.php");
        exit();
    }
} elseif (isset($_GET['heal'])) {
    foreach ($_SESSION["contestants"] as $pokemon) {
        $pokemon->setHp($pokemon->getMaxHp());
    }
    $_SESSION["errorMsg"] = "";
    header("Location: ./arena.php");
    exit();
} elseif (isset($_GET['delete'])) {
    session_destroy();
    header("Location: ./index.php");
    exit();
}
