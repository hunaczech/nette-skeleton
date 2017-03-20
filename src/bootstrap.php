<?php

require __DIR__ . '/../vendor/autoload.php';

$configurator = new Nette\Configurator;
$configurator->enableTracy(__DIR__ . '/../var/log');

$configurator->setTimeZone('Europe/Prague');
$configurator->setTempDirectory(__DIR__ . '/../var/temp');

$configurator->addConfig(__DIR__ . '/../config/config.neon');
$configurator->addConfig(__DIR__ . '/../config/config.local.neon');

$container = $configurator->createContainer();

return $container;
