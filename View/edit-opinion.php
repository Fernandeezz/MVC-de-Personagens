<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="" type="image/png" href="img/"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <title>Opinião</title>
</head>
<body>
    <?php
    include_once '../Controller/controller.php';
    if (isset($_GET['idOpina'])) {
        $idOpinion = $_GET['idOpina'];
        $opinaController = new ControllerOpinion();
        $opina = $opinaController->getOpinionById($idOpinion);
    if (!$opina) {
        echo 'Usuário não encontrado';
        exit;
    }
    if (isset($_POST['Submit'])) {
        $nomePerso = $_POST['nomePerso'];
        $nomeUser = $_POST['emailUser'];
        $opiniao = $_POST['opiniao']; 
        $opinaController->updateOpinion($idOpinion, $nomePerso, $nomeUser, $opiniao);
    }
    } else {
        echo 'ID de usuário não fornecido';
        exit;
    }
    ?>
    <form name="form1" method="post" action="">
        <table border="0" class="tableFixHead">
            <tr>
                <td>Nome:</td>
                <td><input size="22" type="text" name="emailUser" value="<?php echo $opina['emailUser']; ?>"></td>
            </tr>
            <tr>
                <td>Poder:</td>
                <td><input size="22" type="text" name="nomePerso" value="<?php echo $opina['nomePerso']; ?>"></td>
            </tr>
            <tr>
                <td>Comentário:</td>
                <td><textarea type="text" id="opiniao" name="opiniao" rows="4" cols="24"><?php echo $opina['opiniao']; ?></textarea><br></td>
            </tr>
            <tr>
                <td><input class="MeuInput" type="submit" class="btn btn-primary" name="Submit" value="Atualizar"></td>
                <td><input class="MeuInput" type="submit" formaction='../View/view.php' value="Voltar"></td>
            </tr>
        </table>
    </form>
</body>
</html>



