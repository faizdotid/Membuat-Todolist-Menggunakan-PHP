<?php

/**
 * Mengahpus todo di list
 */

function removeTodoList(int $number) {

    global $todoList;

    if ($number > sizeof($todoList)) {
        return false;
    }
    for ($i = $number; $i < sizeof($todoList); $i++) {
        $todoList[$i] = $todoList[$i +1];
    }
    unset($todoList[$number + 1]);
    return true;
}