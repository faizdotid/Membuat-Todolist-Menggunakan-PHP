<?php

/**
 * Menampilkan todo di list
 */
function showTodoList() {
    global $todoList;

    echo "TODOLIST" . PHP_EOL;

    foreach ($todoList as $todokey => $todovalue) {
        echo "$todokey . $todovalue" . PHP_EOL;
    }
}