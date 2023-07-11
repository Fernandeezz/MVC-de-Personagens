<?php
include_once '../Controller/controller.php';
if (isset($_GET['idOpina'])) {
    $idOpinion = $_GET['idOpina'];
    $opinaController = new ControllerOpinion();
    $opinaController->deleteOpinion($idOpinion);
}
?>