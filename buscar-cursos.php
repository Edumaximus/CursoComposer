<?php

require 'vendor/autoload.php';

use Alura\BuscadorDeCursos\Buscador;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new \GuzzleHttp\Client(['base_uri' => 'http://www.alura.com.br/']);
$crawler = new Crawler();

$buscador = new \Alura\BuscadorDeCursos\Buscador($client, $crawler);
$cursos = $buscador->buscar('http://alura.com.br/cursos-online-programacao/php');

foreach ($cursos as $curso) {
    echo  exibeMensagem($curso);
}
