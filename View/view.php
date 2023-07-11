<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Visualização de Banco de Dados</title>
</head>
<body>
  <header>
    <!-- Main navigation container -->
    <nav class="relative flex w-full flex-nowrap items-center justify-between bg-blue py-2 text-neutral-500 shadow-lg hover:text-neutral-700 focus:text-neutral-700 dark:bg-neutral-600 lg:flex-wrap lg:justify-start lg:py-4" data-te-navbar-ref style="background-color: #0a4275">
      <div class="flex w-full flex-wrap items-center justify-between px-3">
        <!-- Hamburger button for mobile view -->
        <button class="block border-0 bg-transparent px-2 text-neutral-500 hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 dark:text-neutral-200 lg:hidden" type="button" data-te-collapse-init data-te-target="#navbarSupportedContent3" aria-controls="navbarSupportedContent3" aria-expanded="false" aria-label="Toggle navigation">
          <!-- Hamburger icon -->
          <span class="[&>svg]:w-7">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-7 w-7">
              <path fill-rule="evenodd" d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
            </svg>
          </span>
        </button>
        <!-- Collapsible navbar container -->
        <div class="!visible mt-2 hidden flex-grow basis-[100%] items-center lg:mt-0 lg:!flex lg:basis-auto" id="navbarSupportedContent3" data-te-collapse-item>
          <!-- Navbar title -->
          <a class="lg:px-8 text-xl text-white" href="../index.php">Home</a>
          <!-- Left links -->
          <ul class="list-style-none mr-auto flex flex-col pl-0 lg:flex-row" data-te-navbar-nav-ref>
            <!-- Home link -->
            <li class="my-4 lg:my-0 lg:pr-2" data-te-nav-item-ref>
              <a class="active disabled:text-white lg:px-8 [&.active]:text-white " aria-current="page" href="../View/add-user.php" data-te-nav-link-ref>
                Adicionar Usuário
              </a>
            </li>
            <!-- Features link -->
            <li class="mb-4 lg:mb-0 lg:px-8" data-te-nav-item-ref>
              <a class="p-0 text-white hover:text-white focus:text-neutral-700  [&.active]:text-black/90"  href="../View/view.php" data-te-nav-link-ref>Visualizar Banco de Dados</a>
            </li>
            <!-- Pricing link -->
            <li class="mb-4 lg:mb-0 lg:px-8" data-te-nav-item-ref>
              <a class="p-0 text-white hover:text-white focus:text-neutral-700   [&.active]:text-black/90 " href="../View/add-perso.php" data-te-nav-link-ref>Adicionar Personagem</a>
            </li>
            <li class="mb-4 lg:mb-0 lg:px-8" data-te-nav-item-ref>
              <a class="p-0 text-white hover:text-white focus:text-neutral-700   [&.active]:text-black/90 " href="../View/add-opinion.php" data-te-nav-link-ref>Adicionar Comentário</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Jumbotron -->
    <div class="relative overflow-hidden bg-cover bg-no-repeat p-12 text-center" style="background-image: url('https://th.bing.com/th/id/R.4a9c2f3abe411098a4334162a721fe68?rik=iOquLSFpEoqdkA&pid=ImgRaw&r=0'); height: 400px">
      <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-fixed" style="background-color: rgba(0, 0, 0, 0.6)">
        <div class="flex h-full items-center justify-center">
          <div class="text-white">
            <h2 class="mb-4 text-4xl font-semibold">Visualize o nosso banco de dados e realize <br> as alterações necessárias</b></h2>
          </div>
        </div>
      </div>
    </div>
  </header>
<div>
    <?php
    include_once '../Controller/controller.php';
    $userController = new ControllerUser();
    $users = $userController->viewUsers();
    echo '</br>';
    echo '</br>';
    ?>
    <center>
        <table width="90%"  border="5" bgcolor="lightgray" align ="center"></center>
        <tr align="center">
        <h2 style="font-size: 25px; font-style: italic;">Tabela de Usuários</h2>
        </tr>
        <tr align="center">    
            <td>
                <font size="5" face="Times New Roman"><strong>Código</strong></font>
            </td>
            <td>
                <font size="5" face="Times New Roman"><strong>Nome</strong></font>
            </td>
            <td>
                <font size="5" face="Times New Roman"><strong>Idade</strong></font>
            </td>
            <td>
                <font size="5" face="Times New Roman"><strong>Email</strong></font>
            </td>
            <td>
                <font size="5" face="Times New Roman"><strong>Ações</strong></font>
            </td>
        </tr>
        <?php
        foreach ($users as $user){
            echo "<tr>";
            echo "<td align=center size='5' style='font-family: Times New Roman;''>" .$user['idUser']. "</td>";
            echo "<td align=center size='5' style='font-family: Times New Roman;''>" .$user['nomeUser']. "</td>";
            echo "<td align=center size='5' style='font-family: Times New Roman;''>" .$user['idadeUser']. "</td>";
            echo "<td align=center size='5' style='font-family: Times New Roman;''>" .$user['emailUser']. "</td>";
            echo "<td align=center size='5' style='font-family: Times New Roman; display: flex; justify-content: center;'>
            <a href=\"edit-user.php?idUser=$user[idUser]\"onClick=\"return confirm('Tem certeza de que deseja editar?')\">
            <img src='../img/update.png' width = '30' height = '30' alt='Editar'></a>
            <a href=\"delete-user.php?idUser=$user[idUser]\"onClick=\"return confirm('Tem certeza de que deseja excluir?')\">
            <img src='../img/delete.png' width = '30' height = '30' alt='Deletar'></a>
            <a href=\"../View/add-user.php?idUser=$user[idUser]\"onClick=\"return confirm('Tem certeza de que deseja adicionar?')\">
            <img src='../img/insert.png' width = '30' height = '30' alt='Adicionar'></a>
            </td>";
            echo "</tr>";
        }
        ?>         
    </table>
</div>
<div>
    <?php
    include_once '../Controller/controller.php';
    $PersoController = new ControllerPerso();
    $Perso = $PersoController->viewPerso();
    echo '</br>';
    echo '</br>';
    ?>
    <br />
    <br />

    <center>
        <table width="90%"  border="5" bgcolor="lightgray" align ="center"></center>
        <tr align="center" >
            <h2 style="font-size: 25px; font-style: italic;">Tabela de Personagens</h2>
        </tr>
        <tr align="center">    
            <td>
                <font size="5" face="Times New Roman"><strong>Código</strong></font>
            </td>
            <td>
                <font size="5" face="Times New Roman"><strong>Nome do Personagem</strong></font>
            </td>
            <td>
                <font size="5" face="Times New Roman"><strong>Ano de Lançamento</strong></font>
            </td>
            <td>
                <font size="5" face="Times New Roman"><strong>Ações</strong></font>
            </td>
        </tr>
        <?php
        foreach ($Perso as $Persos){
            echo "<tr>";
            echo "<td align=center size='5' style='font-family: Times New Roman;''>" .$Persos['idPerso']. "</td>";
            echo "<td align=center size='5' style='font-family: Times New Roman;''>" .$Persos['nomePerso']. "</td>";
            echo "<td align=center size='5' style='font-family: Times New Roman;''>" .$Persos['anoPerso']. "</td>";
            echo "<td align=center size='5' style='font-family: Times New Roman; display: flex; justify-content: center;''>
            <a href=\"edit-perso.php?idPerso=$Persos[idPerso]\"onClick=\"return confirm('Tem certeza de que deseja editar?')\">
            <img src='../img/update.png' width = '30' height = '30' alt='Editar'></a>
            <a href=\"delete-perso.php?idPerso=$Persos[idPerso]\"onClick=\"return confirm('Tem certeza de que deseja excluir?')\">
            <img src='../img/delete.png' width = '30' height = '30' alt='Deletar'></a>
            <a href=\"../View/add-perso.php\"onClick=\"return confirm('Tem certeza de que deseja adicionar?')\">
            <img src='../img/insert.png' width = '30' height = '30' alt='Adicionar'></a>
            </td>";
            echo "</tr>";
        }
        ?>         
    </table>
</div>
<div>
    <?php
    include_once '../Controller/controller.php';
    $opinaController = new ControllerOpinion();
    $opina = $opinaController->viewOpinion();
    echo '</br>';
    echo '</br>';
    echo '</br>';
    echo '</br>';
    ?>
    <center>
        <table width="90%"  border="5" bgcolor="lightgray" align ="center"></center>
        <tr align="center" >
        <h2 style="font-size: 25px; font-style: italic;">Tabela de Comentários</h2>
        </tr>
        <tr align="center">    
            <td>
                <font size="5" face="Times New Roman"><strong>Código</strong></font>
            </td>
            <td>
                <font size="5" face="Times New Roman"><strong>Email do usuário</strong></font>
            </td>
            <td>
                <font size="5" face="Times New Roman"><strong>Nome do Personagem</strong></font>
            </td>
            <td>
                <font size="5" face="Times New Roman"><strong>Comentário</strong></font>
            </td>
            <td>
                <font size="5" face="Times New Roman"><strong>Ações</strong></font>
            </td>
        </tr>
        <?php
        foreach ($opina as $opina){
            echo "<tr>";
            echo "<td align=center size='5' style='font-family: Times New Roman;''>" .$opina['idOpina']. "</td>";
            echo "<td align=center size='5' style='font-family: Times New Roman;''>" .$opina['emailUser']. "</td>";
            echo "<td align=center size='5' style='font-family: Times New Roman;''>" .$opina['nomePerso']. "</td>";
            echo "<td align=center size='5' style='font-family: Times New Roman;''>" .$opina['opiniao']. "</td>";
            echo "<td align=center size='5' style='font-family: Times New Roman; display: flex; justify-content: center;''>
            <a href=\"edit-opinion.php?idOpina=$opina[idOpina]\"onClick=\"return confirm('Tem certeza de que deseja editar?')\">
            <img src='../img/update.png' width = '30' height = '30' alt='Editar'></a>
            <a href=\"delete-opinion.php?idOpina=$opina[idOpina]\"onClick=\"return confirm('Tem certeza de que deseja excluir?')\">
            <img src='../img/delete.png' width = '30' height = '30' alt='Deletar'></a>
            <a href=\"../View/add-opinion.php\"onClick=\"return confirm('Tem certeza de que deseja adicionar?')\">
            <img src='../img/insert.png' width = '30' height = '30' alt='Adicionar'></a>
            </td>";
            echo "</tr>";
        }
        ?>         
    </table>
    <?php
    echo '</br>';
    echo '</br>';
    ?>
</div>
</body>
</html>