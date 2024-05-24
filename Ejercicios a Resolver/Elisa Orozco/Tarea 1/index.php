<?php
$name = "Elisa";
$isDev = true;
$age = 19;

$isOld = !$isDev && $age > 20;
 
define('LOGO_URL', 'https://cdn.freebiesupply.com/logos/large/2x/php-1-logo-svg-vector.svg');
$output = "Hola $name ";
$output = "con una edad de $age. :p";

$outputAge = match (true) {

        default => "Eres un adulto, $name", 
        $age <= 10 => "Eres un niño, $name",
        $age < 2  => "Eres un bebé, $name", 
        $age < 18 => "Eres un adolescente, $name",
        $age < 40 => "Eres un adulto joven, $name",
        $age < 60 => "Eres un adulto maduro, $name" 
};

$bestLanguages = ["PHP", "JavaScipt", "Python", 1, 2];
$bestLanguages []= "Java";
$bestLanguages []= "TypeScript";

$person = [
    "name" => "Elisa",
    "age"=> 78,
    "isDev" => true,
    "languages" => ["PHP". "JavaScript", "Python"],
];
 ?>

<ul>
    <?php foreach ($bestLanguages as $key => $language ) : ?> 
        <li><?= $key . " " . $lanfuage ?></li>
    <php endforeach; ?>
</ul>


<h2><?= $outputAge ?></h2>


<?php if ($isOld) : ?>
    "<h2>Estas viejo, eres viejo, ni modo</h2>";
<?php elseif ($isDev) : ?>
    "<h2>No estas viejo, pero no eres dev, te jodiste</h2>";
<php else : ?>
    "<h2>Estas joven, eres joven, FELICIDADES >:D</h2>";
<?php endif ; ?>
   
 


 
?>
<img src="<?= LOGO_URL ?> alt="PHP Logo" width="200">

<h1>
    <?= $output ?> 
"echo'Hola mundo';"
<h2>
    
<style>
    :root {
        color-scheme: light dark;
    }

    body{
        display: grid;
        place-content: center;
    }
</style>

