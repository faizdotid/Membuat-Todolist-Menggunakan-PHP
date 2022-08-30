<?php

require_once "../Model/TodoList.php";
require_once "../BussinesLogic/ShowTodoList.php";

//array_push($todoList, 0, "Belajar PHP");
$todoList[1] = "Belajar OOP";
$todoList[2] = "Belajar PHP Database";
array_push($todoList, "Belajar PHP");

showTodoList();