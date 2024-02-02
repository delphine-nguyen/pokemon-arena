<?php

require_once("./class/Pokemon.php");
require_once("./class/PokemonFire.php");
require_once("./class/PokemonPlant.php");
require_once("./class/PokemonWater.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/arena.css">
    <title>Choose Your Contestants</title>
</head>

<body>
    <header>
        <h2>Choose Your Contestants</h2>
    </header>

    <main>
        <form action="./handleChoice.php" id="choiceMenu" method="get">
            <section id="contestantsCards">
                <?php
                session_start();
                if (isset($_SESSION["contestants"]) && !empty($_SESSION["contestants"])) {
                    foreach ($_SESSION["contestants"] as $pokemon) {
                        $id = $pokemon->getId();
                        echo "<section class='pokemonCard'>";
                        echo "<article class='sprite'>";
                        echo "<img class='sprite' src='";
                        echo $pokemon->getSprite();
                        echo "'/>";
                        echo "</article>";
                        echo "<article class='name'>";
                        echo $pokemon->getName();
                        echo "</article>";
                        echo "<article class='hp'>";
                        echo $pokemon->getHp();
                        echo "</article>";
                        echo "<article class='atk'>";
                        echo $pokemon->getAtk();
                        echo "</article>";
                        echo "<article class='typePokemon'>";
                        echo $pokemon->getType();
                        echo "</article>";
                        echo "<input type='checkbox' name='$id' >";
                        echo "</section>";
                    }
                }
                ?>
            </section>
            <input type="submit" name="fight" value="Fight!" />
            <input type="submit" name="heal" value="Heal everyone" />
            <input type="submit" name="delete" value="Delete everyone" />

        </form>
        <section class="logError">
            <?php
            if (isset($_SESSION["errorMsg"]) && !empty($_SESSION["errorMsg"])) {
                echo "<p class='errorMsg'>" . $_SESSION["errorMsg"] . "</p>";
            }
            ?>
        </section>
    </main>
</body>


</html>