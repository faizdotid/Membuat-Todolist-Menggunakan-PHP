<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../BussinesLogic/ShowTodoList.php";
require_once __DIR__ . "/../View/ViewAddTodoList.php";
require_once __DIR__ . "/../View/ViewRemoveTodoList.php";
require_once __DIR__ . "/../Helper/Input.php";

function viewShowTodoList() {
    showTodoList();
    $menu = <<<MENU
    1. Tambah Todo
    2. Hapus Todo
    3. Keluar

    MENU;
    echo $menu;
    (int) $pilihanMu = input("Pilihan");
    switch ($pilihanMu) {
        case 1:
            viewAddTodoList();
            break;
        case 2:
            viewRemoveTodoList();
            break;
        case 3:
            echo "Selamat pergi" . PHP_EOL;
            exit();
            break;
        default:
            echo "Pilihan tidak tersedia" . PHP_EOL;
            break;
        }
    viewShowTodoList();
}