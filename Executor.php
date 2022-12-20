<?php
if (version_compare(phpversion(), '8.0', '<')) {
    die('At least PHP 8.0 is required');
}

require_once(__DIR__ . '/Tasks/TaskOne.php');
require_once(__DIR__ . '/Tasks/TaskTwo.php');
require_once(__DIR__ . '/Tasks/TaskThree.php');
require_once(__DIR__ . '/Tasks/TaskFour.php');
require_once(__DIR__ . '/Tasks/TaskFive.php');
require_once(__DIR__ . '/Tasks/TaskSix.php');

function writeTitle(string $task): void
{
    echo PHP_EOL . 'Executing examples for ' . $task . PHP_EOL;
}

writeTitle('Task One');
TaskOne::execute('bitcoin take over the world maybe who knows perhaps');
TaskOne::execute('turns out random test cases are easier than writing out basic ones');

writeTitle('Task Two');
TaskTwo::execute([1, 2, 3]);
TaskTwo::execute(["x", "y", ["z"]]);
TaskTwo::execute([1, 2, [3, 4, [5]]]);

writeTitle('Task Three');
TaskThree::execute('din');
TaskThree::execute('recede');
TaskThree::execute('Success');
TaskThree::execute('(( @');

writeTitle('Task Four');
TaskFour::execute('3(ab)');
TaskFour::execute('2(a3(b))');

writeTitle('Task Five');
TaskFive::execute([-6, -3, -2, -1, 0, 1, 3, 4, 5, 7, 8, 9, 10, 11, 14, 15, 17, 18, 19, 20]);

writeTitle('Task Six');
TaskSix::execute([[1, 2, 3], [4, 5, 6], [7, 8, 9]]);
TaskSix::execute([[1, 2, 3], [8, 9, 4], [7, 6, 5]]);
