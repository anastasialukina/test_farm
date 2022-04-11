<?php
require_once "Farm.php";
require_once "FarmInfo.php";
require_once "Animal.php";
require_once "Cow.php";
require_once "Hen.php";

$unclesFarm = new Farm();
/*
* Print info about animals in general
*/
$info = new FarmInfo();
echo 'В хлеву живут 10 коров и 20 кур: ' . PHP_EOL;
$unclesFarm->createAnimals([
    'Cow' => 10,
    'Hen' => 20,
]);
$info->printAnimals($unclesFarm);

$weekBeginning = 1;
$weekend = 7;
for ($i = $weekBeginning; $i < $weekend; $i++) {
    $unclesFarm->collectProducts();
}
$info->printCollection($unclesFarm);
echo 'Купили новых кур и корову на рынке, получилось: ' . PHP_EOL;
$unclesFarm->createAnimals([
    'Cow' => 1,
    'Hen' => 5,
]);
$info->printAnimals($unclesFarm);

for ($i = $weekBeginning; $i < $weekend; $i++) {
    $unclesFarm->collectProducts();
}
$info->printCollection($unclesFarm);
