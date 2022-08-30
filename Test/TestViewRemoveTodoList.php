<?php

require_once "../Model/TodoList.php";
require_once "../View/ViewRemoveTodoList.php";
require_once "../BussinesLogic/AddTodoList.php";
require_once "../BussinesLogic/ShowTodoList.php";

addTodoList("Mobil");
addTodoList("Motor");
addTodoList("Kereta");

showTodoList();

viewRemoveTodoList();

showTodoList();