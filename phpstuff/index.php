<?php

require 'functions.php';

// without the htmlspecialchars function this is vulnerable to users injecting scripts into the url 
$treet = "Hi, my name is " . htmlspecialchars($_GET['name']) . " I live in " . htmlspecialchars($_GET['place']) . "."; 

$greeting = "hiya";

$names = [
    'fred',
    'jay',
    'roger'
];

// associative arrays appear to be the javascript equivalent for objects?
$person = [
    'age' => 31,
    'name' => 'fred',
];

$task = [
    'title' => 'dev',
    'due' => 'Aug 1',
    'assigned_to' => 'fred',
    'completed' => false,
];

//this will remove age from the array
// unset($person['age']);
// unset($names[0]);


// kill($task);

bouncer(22);

kill($task);



// var_dump($names);

// this will dump the array and then kill the run so it stops the code after running this line
// var_dump($person);
// var_dump($names);
// die();


// wrapping it like this makes formats the output and makes it easier to read
// echo '<pre>';
// var_dump($names);
// echo '</pre>';

require 'index.view.php';