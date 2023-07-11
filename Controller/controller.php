<?php
include_once '../Models/crud.php';
include_once '../Models/validation.php';

class ControllerUser 
{ 
    private $crud;
    private $validation;

    public function __construct()
    {
        $this->crud = new Crud();
        $this->validation = new Validation();
    }

    public function addUser() 
    {
        if (isset($_POST['Submit'])) {
            $nomeUser = $this->crud->escape_string($_POST['nomeUser']);
            $idadeUser = $this->crud->escape_string($_POST['idadeUser']);
            $emailUser = $this->crud->escape_string($_POST['emailUser']);

            $msg = $this->validation->check_empty($_POST, array('nomeUser', 'idadeUser', 'emailUser'));
            if ($msg == null) {
                $result = $this->crud->execute("INSERT INTO users(nomeUser, idadeUser, emailUser) VALUES('$nomeUser','$idadeUser','$emailUser')");
                header("Location:../View/view.php");
            }
            else {
                header("Location:../View/add-user.php"); 
        }
        }
    }

    public function viewUsers() 
    {
        $query = "SELECT * FROM users ORDER BY idUser";
        $result = $this->crud->getData($query);
        return $result;
    }

    public function deleteUser($idUser) 
    {
        $table = 'users';
        $query = "DELETE FROM $table WHERE idUser = $idUser";
        $result = $this->crud->delete($query);
        if ($result) {
            $table = 'users';
            $query = "ALTER TABLE $table AUTO_INCREMENT = 0;";
            $result = $this->crud->delete($query);
            header("Location:../View/view.php");
        }
        if ($result) {
            $table = 'opinion';
            $query = "ALTER TABLE $table AUTO_INCREMENT = 0;";
            $result = $this->crud->delete($query);
            header("Location:../View/view.php");
        }
    }

    public function updateUser($idUser, $nomeUser, $idadeUser, $emailUser) 
    {
        $nomeUser = $this->crud->escape_string($nomeUser);
        $idadeUser = $this->crud->escape_string($idadeUser);
        $emailUser = $this->crud->escape_string($emailUser);

        $msg = $this->validation->check_empty($_POST, array('nomeUser', 'idadeUser', 'emailUser'));
        if ($msg == null) {
            $query = "UPDATE users SET nomeUser='$nomeUser', idadeUser='$idadeUser', emailUser='$emailUser' WHERE idUser=$idUser";
            $result = $this->crud->execute($query);
            if ($result) {
                header("Location:../View/view.php");
            }
            else {
                header("Location:../View/edit-user.php");
            }
        }
    }

    public function getUserById($idUser) 
    {
        $idUser = $this->crud->escape_string($idUser);

        $query = "SELECT * FROM users WHERE idUser=$idUser";
        $result = $this->crud->getData($query);

        if (!empty($result)) {
            return $result[0];
        }
        else {
            return null;
        }
    }
    }

class ControllerPerso 
{
    private $crud;
    private $validation;

    public function __construct()
    {
        $this->crud = new Crud();
        $this->validation = new Validation();
    }

    public function addPerso() 
    {
        if (isset($_POST['Submit'])) {
            $nomePerso = $this->crud->escape_string($_POST['nomePerso']);
            $anoPerso = $this->crud->escape_string($_POST['anoPerso']);

            $msg = $this->validation->check_empty($_POST, array('nomePerso', 'anoPerso'));
            if ($msg == null) {
                $result = $this->crud->execute("INSERT INTO Perso(nomePerso, anoPerso) VALUES('$nomePerso','$anoPerso')");
                header("Location:../View/view.php");
            }
            else {
                header("Location:../View/add-perso.php");
            }
        }
    }

    public function viewPerso() 
    {
        $query = "SELECT * FROM Perso ORDER BY idPerso";
        $result = $this->crud->getData($query);
        return $result;
    }

    public function deletePerso($idPerso) 
    {
        $table = 'Perso';
        $query = "DELETE FROM $table WHERE idPerso = $idPerso";
        $result = $this->crud->delete($query);
        if ($result) {
            $table = 'Perso';
            $query = "ALTER TABLE $table AUTO_INCREMENT = 0;";
            $result = $this->crud->delete($query);
        }
        if ($result) {
            $table = 'opinion';
            $query = "ALTER TABLE $table AUTO_INCREMENT = 0;";
            $result = $this->crud->delete($query);
            header("Location:../View/view.php");
        }
    }

    public function updatePerso($idPerso, $nomePerso, $anoPerso) 
    {
        $nomePerso = $this->crud->escape_string($nomePerso);
        $anoPerso = $this->crud->escape_string($anoPerso);
        $msg = $this->validation->check_empty($_POST, array('nomePerso', 'anoPerso'));
        if ($msg == null) {
            $query = "UPDATE livros SET nomePerso='$nomePerso', anoPerso='$anoPerso' WHERE idPerso=$idPerso";
            $result = $this->crud->execute($query);

            if ($result) {
                header("Location:../View/view.php");
            }
            else {
                header("Location:../View/edit-perso.php");
            }
        }
    }

    public function getPersoById($idPerso) 
    {
        $idPerso = $this->crud->escape_string($idPerso);

        $query = "SELECT * FROM Perso WHERE idPerso=$idPerso";
        $result = $this->crud->getData($query);
        if (!empty($result)) {
            return $result[0];
        }
        else {
            return null;
        }
    }
}

class ControllerOpinion
{
    private $crud;
    private $validation;

    public function __construct()
    {
        $this->crud = new Crud();
        $this->validation = new Validation();
    }

    public function addOpinion() 
    {
        if (isset($_POST['Submit'])) {
            $nomePerso = $this->crud->escape_string($_POST['nomePerso']);
            $emailUser = $this->crud->escape_string($_POST['emailUser']);
            $opiniao = $this->crud->escape_string($_POST['opiniao']);
            $msg = $this->validation->check_empty($_POST, array('nomePerso', 'emailUser', 'opiniao'));
            if ($msg == null) {
                $result = $this->crud->execute("INSERT INTO opinion(nomePerso, emailUser, opiniao) VALUES('$nomePerso','$emailUser','$opiniao')");
                header("Location:../View/view.php");
            }
            else {
                header("Location:../View/add-opinion.php");
            }
        }
    }

    public function viewOpinion() 
    {
        $query = "SELECT * FROM opinion C INNER JOIN Perso B ON C.nomePerso = B.nomePerso INNER JOIN users A ON C.emailUser = A.emailUser;";
        $result = $this->crud->getData($query);
        return $result;
    }

    public function deleteOpinion($idOpinion) 
    {
        $table = 'opinion';
        $query = "DELETE FROM $table WHERE idOpina = $idOpinion";
        $result = $this->crud->delete($query);
        if ($result) {
            $table = 'opinion';
            $query = "ALTER TABLE $table AUTO_INCREMENT = 0;";
            $result = $this->crud->delete($query);
            header("Location:../View/view.php");
        }
    }

    public function updateOpinion($idOpinion, $nomePerso, $emailUser, $opiniao) 
    {
        $nomePerso = $this->crud->escape_string($nomePerso);
        $emailUser = $this->crud->escape_string($emailUser);
        $opiniao = $this->crud->escape_string($opiniao);
        $msg = $this->validation->check_empty($_POST, array('nomePerso', 'emailUser', 'opiniao'));
        if ($msg == null) {
            $query = "UPDATE opinion SET nomePerso='$nomePerso', emailUser='$emailUser', opiniao='$opiniao' WHERE idOpina=$idOpinion";
            $result = $this->crud->execute($query);
            if ($result) {
                header("Location:../View/view.php");
            }
            else {
                header("Location:../View/edit-opinion.php");
            }
        }
    }

    public function getOpinionById($idOpinion) 
    {
        $idOpinion = $this->crud->escape_string($idOpinion);
        $query = "SELECT * FROM opinion WHERE idOpina=$idOpinion";
        $result = $this->crud->getData($query);
        if (!empty($result)) {
            return $result[0];
        }
        else {
            return null;
        }
    }

}
?>
