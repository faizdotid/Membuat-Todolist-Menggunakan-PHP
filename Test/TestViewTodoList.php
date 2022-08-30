<?php

require_once "../View/ViewShowTodoList.php";
require_once "../BussinesLogic/AddTodoList.php";

addTodoList("Memancing");
addTodoList("Membaca");
addTodoList("Menulis");

viewShowTodoList();