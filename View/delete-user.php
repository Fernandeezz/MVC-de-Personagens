<?php
include_once'../Controller/controller.php';
if (isset($_GET['idUser'])) {
    $idUser = $_GET['idUser'];
    $userController = new ControllerUser();
    $userController->deleteUser($idUser);
}
?>