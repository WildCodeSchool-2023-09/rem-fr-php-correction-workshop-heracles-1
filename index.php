<?php

// First Labour : Heracles vs Nemean Lion
// use your Figher class here

require 'src/Fighter.php';

$heracles = new Fighter('🧔 Héraclès', 20, 6);
$lion = new Fighter('🦁 Lion de Némée', 11, 13);


$round= 1;
while ($heracles->isAlive() && $lion->isAlive() ) {
    echo "🕛 Round #" . $round++ . PHP_EOL;
    echo $heracles->fight($lion) . PHP_EOL;
    echo $lion->fight($heracles) . PHP_EOL;
}

// if classique

if($heracles->isAlive()) {
    return '🏆 ' . $heracles->getName() . ' wins 💙' . $winner->getLife() . PHP_EOL
   . '💀 ' . $lion->getName() . 'is dead' . PHP_EOL;
} else {
    return '🏆 ' . $lion->getName() . ' wins 💙' . $lion->getLife() . PHP_EOL
   . '💀 ' . $heracles->getName() . 'is dead' . PHP_EOL;
}

// version ternaire

$winner = $heracles->isAlive() === true ? $heracles : $lion;
$looser = $heracles->isAlive() === false ? $heracles : $lion;

echo "💀 " . $looser->getName() . " is dead" . PHP_EOL;
echo "🏆 " . $winner->getName() . " wins 💙 "  . $winner->getLife() . PHP_EOL;
