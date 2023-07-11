<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="" type="image/png" href="img/"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <title>Usuário</title>
</head> 
<body>
    <?php
    include_once '../Controller/controller.php';
    if (isset($_GET['idUser'])) {
        $idUser = $_GET['idUser'];
        $userController = new ControllerUser();
        $user = $userController->getUserById($idUser);
    if (!$user) {
        echo 'Usuário não encontrado';
        exit;
    }
    if (isset($_POST['Submit'])) {
        $nomeUser = $_POST['nomeUser'];
        $idadeUser = $_POST['idadeUser'];
        $emailUser = $_POST['emailUser']; 
        $userController->updateUser($idUser, $nomeUser, $idadeUser, $emailUser);
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
                <td><input size="24" type="text" name="nomeUser" value="<?php echo $user['nomeUser']; ?>"></td>
            </tr>
            <tr>
                <td>Idade:</td>
                <td><input size="24" type="text" name="idadeUser" value="<?php echo $user['idadeUser']; ?>"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input size="24" type="text" name="emailUser" value="<?php echo $user['emailUser']; ?>"></td>
            </tr>
            <tr>
                <td><input class="MeuInput" type="submit" class="btn btn-primary" name="Submit" value="Atualizar"></td>
                <td><input class="MeuInput" type="submit" formaction='../View/view.php' value="Voltar"></td>
            </tr>
        </table>
    </form>
</body>
</html>