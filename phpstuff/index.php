<?php

require 'functions.php';
require 'classes.php';

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

$tasks = [
    new Task('Move to 14'),
    new Task('Run home'),
    new Task('Walk the dog'),
];

$tasks[0]->completer();

$username = getenv('username');
$password = getenv('password');



try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=mytodo', $username, $password);
} catch (PDOException $e) {
    die('Could not connect.');
}



// $ta = new Task('Get a class working!');
// $ta->completer();
// var_dump($ta->isComplete());
// $ta->completer();
// var_dump($ta->isComplete());
// $ta->completer();
// var_dump($ta->isComplete());

// kill($ta);


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
