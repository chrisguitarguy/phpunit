--TEST--
GH-2526: no errors reported from dataProviders when using --filter argument
--FILE--
<?php

$_SERVER['argv'][] = '--no-configuration';
$_SERVER['argv'][] = '--filter';
$_SERVER['argv'][] = 'FilterThisName';
$_SERVER['argv'][] = '--stop-on-failure';
$_SERVER['argv'][] = 'Issue2526Test';
$_SERVER['argv'][] = __DIR__ . '/2526/Issue2526Test.php';

require __DIR__ . '/../../bootstrap.php';
PHPUnit\TextUI\Command::main();
?>
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

W                                                                   1 / 1 (100%)

Time: %s, Memory: %s

There was 1 warning:

1) Warning
The data provider specified for %s is invalid.
oops

WARNINGS!
Tests: 1, Assertions: 0, Warnings: 1.
