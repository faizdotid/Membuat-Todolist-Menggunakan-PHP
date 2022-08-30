<?php

require_once "../Model/TodoList.php";
require_once "../BussinesLogic/AddTodoList.php";

addTodoList("Faizal");
addTodoList("Nur");
addTodoList("Pratama");

var_dump($todoList);