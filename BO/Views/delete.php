<?php

include $_SERVER['DOCUMENT_ROOT']."/web/BO/Controller/evenementController.php";
    $evenementController = new evenementController();
    $id = $_GET['id_e'];
    $evenementController->deleteById($id);
    header('location: table.php');

?>