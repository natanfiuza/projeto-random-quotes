<?php

require __DIR__ . '/../vendor/autoload.php';

use NFePHP\Ibge\Ibge;

try {
    $uf = 'SP';
    $ibge = new Ibge();
    $resp = $ibge->cidades($uf)->get();
    echo "<pre>";
    print_r($resp);
    echo "</pre>";
} catch (\Exception $e) {
    echo $e->getMessage();
}