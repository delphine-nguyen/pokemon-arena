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
$_SESSION["atelierErrorMsg"] = "";  // Clear previous error message

$properties = ["name", "hp", "atk", "typePokemon"];
$pokemonInfo = [];

foreach ($properties as $property) {
    if (isset($_POST[$property]) && !empty(trim($_POST[$property]))) {
        $pokemonInfo[$property] = cleanInput($_POST[$property]);
        echo $pokemonInfo[$property];
    } else {
        $_SESSION["atelierErrorMsg"] = "Please fill input '$property'";
        header("Location: ./atelier.php#main");
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
        );
        break;
    case "water":
        $pokemon = new PokemonWater(
            name: $pokemonInfo["name"],
            maxHp: $pokemonInfo["hp"],
            atk: $pokemonInfo["atk"],
            sprite: $pokemonInfo["sprite"]
        );
        break;
    case "plant":
        $pokemon = new PokemonPlant(
            name: $pokemonInfo["name"],
            maxHp: $pokemonInfo["hp"],
            atk: $pokemonInfo["atk"],
            sprite: $pokemonInfo["sprite"],
        );
        break;
    case "normal":
        $pokemon = new Pokemon(
            name: $pokemonInfo["name"],
            maxHp: $pokemonInfo["hp"],
            atk: $pokemonInfo["atk"],
            sprite: $pokemonInfo["sprite"],
        );
        break;
    default:
        $_SESSION["atelierErrorMsg"] = "Type of pokemon must be either 'normal', 'water', 'fire' or 'plant'";
        header("Location: ./atelier.php#main");
        exit();
}

// Check if list of contestants exists,
// Create it if it doesn't
if ($_SESSION["contestants"] == null) {
    $_SESSION["contestants"] = [];
}

array_push($_SESSION["contestants"], $pokemon);
header("Location: ./atelier.php#main");
exit();
