<?php
/**
 * Copyright (c) since 2004 Martin Takáč (http://martin.takac.name)
 * @author     Martin Takáč <martin@takac.name>
 */

// Load Nette Framework
if (@!include __DIR__ . '/../vendor/autoload.php') {
	die('Install Nette using `composer update`');
}
require __DIR__ . '/../app/libs/interfaces.php';
require __DIR__ . '/../app/libs/ContainerPresenter.php';

// Configure application
$configurator = new Nette\Configurator;

// Enable Nette Debugger for error visualisation & logging
$configurator->enableDebugger(__DIR__ . '/../var/log');
error_reporting(~E_USER_DEPRECATED);


// Create Dependency Injection container
$configurator->setTempDirectory(__DIR__ . '/../temp');
$configurator->addConfig(__DIR__ . '/../app/config.neon');
$configurator->addConfig(__DIR__ . '/../app/config.local.neon', $configurator::NONE); // none section
$container = $configurator->createContainer();

// Run the application!
$container->getByType('Nette\Application\Application')
	->run();
