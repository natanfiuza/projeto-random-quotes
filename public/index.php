<?php 


use Natanfiuza\RandomQuotes\RandomQuote;

require __DIR__.'/../vendor/autoload.php';

$quoteClass = new RandomQuote();


echo "\n\n";
echo $quoteClass->from('Jane Austen');
echo "\n\n";
