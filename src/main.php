<?php

require 'vendor/autoload.php';

use App\Cow;
use App\Farm;
use App\FarmInfo;
use App\Hen;

$unclesFarm = new Farm();

/*
* Print info about animals in general
*/
$info = new FarmInfo();
echo 'В хлеву живут 10 коров и 20 кур: ' . PHP_EOL;

$countOfHens = 20;
$countOfCows = 10;

for ($i = 0; $i < $countOfHens; $i++) {
    $hen = new Hen;
    $unclesFarm->addAnimal($hen);
}
for ($i = 0; $i < $countOfCows; $i++) {
    $cow = new Cow;
    $unclesFarm->addAnimal($cow);
}

$weekBeginning = 1;
$weekend = 7;
for ($i = $weekBeginning; $i <= $weekend; $i++) {
    $unclesFarm->collectProducts();
}
$info->printCollection($unclesFarm);
echo 'Купили новых кур и корову на рынке, получилось: ' . PHP_EOL;

$countOfHens = 5;

for ($i = 0; $i < $countOfHens; $i++) {
    $hen = new Hen;
    $unclesFarm->addAnimal($hen);
}
$newCow = new Cow;
$unclesFarm->addAnimal($newCow);

$info->printAnimals($unclesFarm);

for ($i = $weekBeginning; $i <= $weekend; $i++) {
    $unclesFarm->collectProducts();
}
$info->printCollection($unclesFarm);
