<?php
require_once 'Stack.php';

$stack = new Stack();

$stack->push(1);
$stack->push(2);
$stack->push(3);
$stack->push(4);
$stack->push(5);

for ($i = 0; $i < 3; $i++) {
    $stack->pop();
}

$stack->push(6);
$stack->push(7);

var_dump($stack->isEmpty());

for ($i = 0; $i < 4; $i++) {
    $stack->pop();
}

var_dump($stack->isEmpty());
