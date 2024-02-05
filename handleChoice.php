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
        header("Location:./pokedex.php#main");
        exit();
    } elseif (count($chosen) - 1 < 2) {
        $_SESSION["errorMsg"] = "Please select two pokemons";
        header("Location:./pokedex.php#main");
        exit();
    } else {

        $_SESSION["pokemon1"] = $contestants[$chosen[1]];
        $_SESSION["pokemon2"] = $contestants[$chosen[2]];

        $_SESSION["errorMsg"] = "";

        header("Location: ./combat.php");
        exit();
    }
} elseif (isset($_GET['heal'])) {
    foreach ($_SESSION["contestants"] as $pokemon) {
        $pokemon->setHp($pokemon->getMaxHp());
    }
    $_SESSION["errorMsg"] = "";
    header("Location: ./pokedex.php#main");
    exit();
} elseif (isset($_GET['delete'])) {
    session_destroy();
    header("Location: ./index.php#main");
    exit();
}
