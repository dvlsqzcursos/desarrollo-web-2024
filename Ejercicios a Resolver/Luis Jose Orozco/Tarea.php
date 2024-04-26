<?php
    $name = "LuisJo";
    $isDev = true;
    $age = 24;


    define('LOGO_URL', 'https://logolook.net/wp-content/uploads/2021/11/Real-Madrid-Logo.png');

        $output = "Hola \"$name\", Cuantos años tienes? $age";

    $outputAge = match (true) {
        $age < 2 => "Es un Infante, $name",
        $age < 10 => "Es un niño, $name",
        $age < 18 => "Es un adolecente, $name",
        $age == 18 => "Es mayor de edad, $name",
        $age < 40 => "Es un adulto joven, $name",
        $age < 60 => "Es un adulto viejo, $name",
            default => "Tiene una buena edad, $name",
    };


    $bestlanguages = ["PHP", "JavaScript", "Phyton"];
         $bestlanguages[] = "Java";
    $bestlanguages[] = "TypesScript";


    $person = [
        "name" => "LuisJo",
        "age" => 36,
        "isDev" => true,
        "languages" => ["PHP", "JavaScript", "Python"],
    ];

    $person["name"] = "David";
    $person["Languages"][] = "Java";
?>

<ul>
    <?php foreach ($bestlanguages as $key => $language) : ?>
        <li><?= $key . " " . $language ?></li>
    <?php endforeach; ?>
</ul>

<h2><?=$outputAge?></h2>

<center><img src="<?= LOGO_URL ?>" alt="PHP Logo" width="200"></center>


<h1>
    <?= $output ?>
</h1>


<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }
</style>