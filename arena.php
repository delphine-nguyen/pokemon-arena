<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/theme.css">
    <link rel="stylesheet" href="./assets/css/arena.css">
    <title>Arena</title>
</head>

<?php
require_once("./class/Pokemon.php");
require_once("./class/PokemonFire.php");
require_once("./class/PokemonPlant.php");
require_once("./class/PokemonWater.php");
?>

<body>
    <div class="nav-container thirdColorBg">
        <?php include("./navBar.php"); ?>
    </div>

    <header>
        <h2 class="fontMain">Arena</h2>
    </header>

    <main>
        <?php session_start();
        $pokemon2 = $_SESSION["pokemon2"];
        $pokemon1 = $_SESSION["pokemon1"];
        ?>

        <section id="combat">
            <article id="pokemon2">
                <div class="info">
                    <h3 class="fontMain"><?php echo $pokemon2->getName(); ?></h3>
                    <p>HP : <?php echo $pokemon2->getHp(); ?></p>
                </div>
                <img src="<?php echo $pokemon2->getSprite() ?>" alt="<?php echo $pokemon2->getName() ?>" class="bigSprite">
            </article>

            <article id="pokemon1">
                <img src="<?php echo $pokemon1->getSprite() ?>" alt="<?php echo $pokemon1->getName() ?>" class="bigSprite">
                <div class="info">
                    <h3 class="fontMain"><?php echo $pokemon1->getName(); ?></h3>
                    <p>HP : <?php echo $pokemon1->getHp(); ?></p>
                </div>
            </article>

            <article id="msg">
                <?php
                foreach ($_SESSION["combatDisplay"] as $msg) : ?>
                    <p><?php echo $msg; ?>
                    <?php endforeach; ?>
            </article>
        </section>


        </section>

    </main>
    <script type="text/javascript" src="./assets/js/combat.js"></script>
</body>

</html>