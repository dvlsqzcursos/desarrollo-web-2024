<?php
    $name = "Luis Enrique";
    $isDev = true;
    $age = 24;

    define('LOGO_URL', 'https://cdn.freebiesupply.com/logos/large/2x/fifa-18-logo-svg-vector.svg');

    $output = "Hola \"$name\", con una edad de $age";

    $outputAge = match (true) {
        $age < 2 => "Eres un bebe, $name",
        $age < 10 => "Eres un niño, $name",
        $age < 18 => "Eres un adolecente, $name",
        $age == 18 => "Eres mayor de edad, $name",
        $age < 40 => "Eres un adulto joven, $name",
        $age < 60 => "Eres un adulto viejo, $name",
        default => "Hueles mas a madera que a fruta, $name",
    };


    $bestlanguages = ["PHP", "JavaScript", "Phyton"];
    $bestlanguages[] = "Java";
    $bestlanguages[] = "TypesScript";


    $person = [
        "name" => "Luis",
        "age" => 78,
        "isDev" => true,
        "languages" => ["PHP", "JavaScript", "Python"],
    ];

    $person["name"] = "Enrique";
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