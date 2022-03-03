<?php
require_once('templateHtml.php');
require_once('DocType.php');
require_once('Head.php');
require_once('Title.php');
require_once('Body.php');
require_once('Tabela.php');

$oHead = new Head([new Meta("UTF-8"), new Meta('', "X-UA-Compatible", "IE=edge"), new Meta('', '', "width=device-width, initial-scale=1.0", "viewport")], new Title('Att'));
$oBody = new Body('<h1>Tabela</h1>');

$aConteudo = [['codigo' => 1, 'item' => 'Teste'], ['codigo' => 2, 'item' => 'Teste'], ['codigo' => 3, 'item' => 'Teste']];

$oBody->addComponente(new Table(['Código', 'Item'], 3, $aConteudo));
$oHtml = new Html('pt-BR', $oHead, $oBody);

$oTemplate = new templateHtml(new DocType(), $oHtml);

echo $oTemplate;