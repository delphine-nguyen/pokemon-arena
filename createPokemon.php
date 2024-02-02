<?php

require_once("./class/Pokemon.php");
require_once("./class/PokemonFire.php");
require_once("./class/PokemonPlant.php");
require_once("./class/PokemonWater.php");

function cleanInput($input): string
{
    $input = htmlspecialchars($input);
    $input = trim($input);
    return $input;
}

session_start();
$_SESSION["errorMsg"] = "";  // Clear previous error message
if (!isset($_SESSION["counter"])) {
    $_SESSION["counter"] = 0;
}

$properties = ["name", "hp", "atk", "typePokemon"];
$pokemonInfo = [];

foreach ($properties as $property) {
    if (isset($_POST[$property]) && !empty(trim($_POST[$property]))) {
        $pokemonInfo[$property] = cleanInput($_POST[$property]);
        echo $pokemonInfo[$property];
    } else {
        $_SESSION["errorMsg"] = "Please fill input '$property'";
        header("Location: ./atelier.php#menu");
        exit();
    }
}

if (isset($_POST["sprite"]) && !empty($_POST["sprite"])) {
    $pokemonInfo["sprite"] = cleanInput($_POST["sprite"]);
} else {
    $pokemonInfo["sprite"] = "./assets/img/pokeball_closed.png";
}

switch ($pokemonInfo["typePokemon"]) {
    case "fire":
        $pokemon = new PokemonFire(
            name: $pokemonInfo["name"],
            maxHp: $pokemonInfo["hp"],
            atk: $pokemonInfo["atk"],
            sprite: $pokemonInfo["sprite"],
            id: $_SESSION["counter"]++
        );
        break;
    case "water":
        $pokemon = new PokemonWater(
            name: $pokemonInfo["name"],
            maxHp: $pokemonInfo["hp"],
            atk: $pokemonInfo["atk"],
            sprite: $pokemonInfo["sprite"],
            id: $_SESSION["counter"]++
        );
        break;
    case "plant":
        $pokemon = new PokemonPlant(
            name: $pokemonInfo["name"],
            maxHp: $pokemonInfo["hp"],
            atk: $pokemonInfo["atk"],
            sprite: $pokemonInfo["sprite"],
            id: $_SESSION["counter"]++
        );
        break;
    case "normal":
        $pokemon = new Pokemon(
            name: $pokemonInfo["name"],
            maxHp: $pokemonInfo["hp"],
            atk: $pokemonInfo["atk"],
            sprite: $pokemonInfo["sprite"],
            id: $_SESSION["counter"]++
        );
        break;
    default:
        $_SESSION["errorMsg"] = "Type of pokemon must be either 'normal', 'water', 'fire' or 'plant'";
        header("Location: ./atelier.php#menu");
        exit();
}

// Check if list of contestants exists,
// Create it if it doesn't
if ($_SESSION["contestants"] == null) {
    $_SESSION["contestants"] = [];
}

array_push($_SESSION["contestants"], $pokemon);
header("Location: ./pokedex.php");
exit();
