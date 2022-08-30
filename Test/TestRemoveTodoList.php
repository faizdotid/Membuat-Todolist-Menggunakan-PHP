<?php


require_once "../Model/TodoList.php";
require_once "../BussinesLogic/RemoveTodoList.php";
require_once "../BussinesLogic/AddTodoList.php";
require_once "../BussinesLogic/ShowTodoList.php";

addTodoList("Faizal");
addTodoList("Nur");
addTodoList("Pratama");
showTodoList();
removeTodoList(5);
showTodoList();