<?php

require_once "../View/ViewAddTodoList.php";
require_once "../BussinesLogic/ShowTodoList.php";
require_once "../BussinesLogic/AddTodoList.php";

addTodoList("Faizal");
addTodoList("Nur");
addTodoList("Pratama");

viewAddTodoList();

showTodoList();