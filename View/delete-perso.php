<?php
include_once '../Controller/controller.php';
if (isset($_GET['idPerso'])) {
    $idPerso = $_GET['idPerso'];
    $PersoController = new ControllerPerso();
    $PersoController->deletePerso($idPerso);
}
?>