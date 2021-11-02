<?php 

require __DIR__ . "./classes/Movie.php";

$film1 = new Movie ("Ai confini del male", 101, "DRAMMATICO / THRILLER", 2021, "7.4");

$film2 = new Movie ("Halloween Kills", 106, "AZIONE / HORROR / CINEMA", 2021, "6.7");

echo "<h1>Film 1:</h1>";
echo "<h2>Titolo: {$film1->titolo}</h2>";
echo "<h2>Durata: {$film1->durata}</h2>";
echo "<h3>Genere: {$film1->getGenere()}</h3>";
echo "<h3>Anno: {$film1->anno}</h3>";
echo "<h4>Voto medio: {$film1->getVoto()}</h4>";

echo "<h1>Film 2:</h1>";
echo "<h2>Titolo: {$film2->titolo}</h2>";
echo "<h2>Durata: {$film2->durata}</h2>";
echo "<h3>Genere: {$film2->getGenere()}</h3>";
echo "<h3>Anno: {$film2->anno}</h3>";
echo "<h4>Voto medio: {$film2->getVoto()}</h4>";
