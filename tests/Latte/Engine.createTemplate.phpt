<?php

use Tester\Assert;


require __DIR__ . '/../bootstrap.php';


$latte = new Latte\Engine;

$template = $latte->createTemplate(__DIR__ . '/templates/general.latte');
Assert::type('Latte\Runtime\Template', $template);
Assert::null($template->getReferringTemplate());
Assert::null($template->getReferenceType());


$template = $latte->createTemplate(__DIR__ . '/templates/general.latte');
Assert::type('Latte\Runtime\Template', $template);
Assert::null($template->getReferringTemplate());
Assert::null($template->getReferenceType());
