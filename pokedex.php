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
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/theme.css">
    <link rel="stylesheet" href="./assets/css/pokedex.css">
    <title>Pokedex</title>
</head>

<body class="gradient3">


    <?php include("./background.php"); ?>

    <div class="nav-container fourthColorBg">
        <?php include("./navBar.php"); ?>
    </div>

    <header>
        <h2 class="fontMain">Pokedex</h2>
    </header>

    <main>
        <form action="./handleChoice.php" id="choiceMenu" method="get">
            <section id="contestantsCards">
                <?php
                session_start();
                if (isset($_SESSION["contestants"]) && !empty($_SESSION["contestants"])) :
                    foreach ($_SESSION["contestants"] as $pokemon) :
                        $id = $pokemon->getId(); ?>

                        <section class='card'>

                            <article class='sprite'>
                                <img class='sprite' src='<?php
                                                            echo $pokemon->getSprite(); ?>' />
                            </article>

                            <h3 class='fontMain name'>
                                <?php echo $pokemon->getName(); ?>
                            </h3>
                            <article class='hp'>
                                <p>HP</p>
                                <p>
                                    <?php echo $pokemon->getHp() ?>
                                </p>
                            </article>

                            <article class='atk'>
                                <p>ATK</p>
                                <p>
                                    <?php echo $pokemon->getAtk() ?>
                                </p>
                            </article>
                            <article class='typePokemon'>
                                <p>Type</p>
                                <p>
                                    <?php echo $pokemon->getType() ?>
                                </p>
                            </article>
                            <input type='checkbox' name='<?php echo $id ?>'>
                        </section>
                <?php endforeach;
                endif ?>
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