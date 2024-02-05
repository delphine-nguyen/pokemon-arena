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

    <main id="main">
        <section class="logError">
            <?php
            session_start();
            if (isset($_SESSION["errorMsg"]) && !empty($_SESSION["errorMsg"])) {
                echo "<p class='errorMsg'>" . $_SESSION["errorMsg"] . "</p>";
            }
            ?>
        </section>
        <form action="./handleChoice.php" id="choiceMenu" method="get">
            <section>
                <input type="submit" name="fight" value="Fight!" />
                <input type="submit" name="heal" value="Heal everyone" />
                <input type="submit" name="delete" value="Delete everyone" />
            </section>
            <section id="contestantsCards">
                <?php
                if (isset($_SESSION["contestants"]) && !empty($_SESSION["contestants"])) :
                    $index = 0;
                    foreach ($_SESSION["contestants"] as $pokemon) : ?>

                        <article class='card fourthColorBg'>

                            <img class='sprite' src='<?php
                                                        echo $pokemon->getSprite(); ?>' />

                            <h3 class='fontMain name'>
                                <?php echo $pokemon->getName(); ?>
                            </h3>

                            <section class="properties">
                                <div class='hp'>
                                    <p>HP</p>
                                    <p>
                                        <?php echo $pokemon->getHp() ?>
                                    </p>
                                </div>

                                <div class='atk'>
                                    <p>ATK</p>
                                    <p>
                                        <?php echo $pokemon->getAtk() ?>
                                    </p>
                                </div>
                                <div class='typePokemon'>
                                    <p>Type</p>
                                    <p>
                                        <?php echo $pokemon->getType() ?>
                                    </p>
                                </div>
                            </section>
                            <input type='checkbox' name='<?php echo $index ?>'>
                        </article>
                        <?php $index++; ?>
                <?php endforeach;
                endif ?>
            </section>
        </form>
    </main>
    <script type="text/javascript" src="./assets/js/background.js"></script>
</body>


</html>