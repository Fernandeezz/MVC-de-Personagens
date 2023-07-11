<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="" type="image/png" href="img/"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <title>Persos</title>
</head>
<body>
    <?php
    include_once '../Controller/controller.php';
    if (isset($_GET['idPerso'])) {
        $idPerso = $_GET['idPerso'];
        $PersoController = new ControllerPerso();
        $Perso = $PersoController->getPersoById($idPerso);
    if (!$Perso) {
        echo 'Personagem não encontrado';
        exit;
    }
    if (isset($_POST['Submit'])) {
        $nomePerso = $_POST['anoPerso'];
        $anoPerso = $_POST['anoPerso'];
        $PersoController->updatePerso($idPerso, $nomePerso, $anoPerso);
    }
    } else {
        echo 'ID de usuário não fornecido';
        exit;
    }
    ?>
    <form name="form1" method="post" action="">
        <table border="0" class="tableFixHead">
            <tr>
                <td>Nome do Personagem:</td>
                <td><input size="24" type="text" name="nomePerso" value="<?php echo $Perso['nomePerso']; ?>"></td>
            </tr>
            <tr>
                <td>Ano de lançamento do Personagem:</td>
                <td><input size="24" type="number" name="anoPerso" value="<?php echo $Perso['anoPerso']; ?>"></td>
            </tr>
            <tr>
                <td><input class="MeuInput" type="submit" class="btn btn-primary" name="Submit" value="Atualizar"></td>
                <td><input class="MeuInput" type="submit" formaction='../View/view.php' value="Voltar"></td>
            </tr>
        </table>
    </form>
</body>
</html>