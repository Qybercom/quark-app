<?php
use Quark\Quark;
use Quark\QuarkConfig;

include __DIR__ . '/loader.php';

$config = new QuarkConfig(__DIR__ . '/runtime/application.ini');

$config->Localization(__DIR__ . '/localization.ini');

Quark::Run($config);