<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Adicionar Comentários</title>
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
    <div class="relative overflow-hidden bg-cover bg-no-repeat p-12 text-center" style="background-image: url('https://th.bing.com/th/id/R.4d65a3e6cd2fe424f821add3312d621c?rik=zAJ9Bkxbxxo25A&pid=ImgRaw&r=0'); height: 400px">
      <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-fixed" style="background-color: rgba(0, 0, 0, 0.6)">
        <div class="flex h-full items-center justify-center">
          <div class="text-white">
            <h2 class="mb-4 text-4xl font-semibold">Adicione a sua opinião sobre um personagem <br> do nosso Banco de Dados</b></h2>
          </div>
        </div>
      </div>
    </div>
  </header>

  <body>
    <?php
    include_once '../Controller/controller.php';
    include_once '../Models/dbConfig.php';
    $opinaController = new ControllerOpinion();
    if (isset($_POST['Submit'])) {
      $opinaController->addOpinion();
    }
    ?>
    <form method="post" name="form1" action="" style="margin-top: 3rem;">
      <center>
        <table width="50%" border="5" bgcolor="lightgray" align="center">
      </center>
      <tr align="center">
        <td width="118">
          <font size="3" face="Times New Roman">Nome do usuário:</font>
        </td>
        <td>
          <select name="emailUser">
            <option>Selecione o usuário</option>
            <?php
            $result_niveis_acessos = "SELECT * FROM users";
            $resultado_niveis_acesso = mysqli_query($conn, $result_niveis_acessos);
            while ($row_Perso = mysqli_fetch_assoc($resultado_niveis_acesso)) { ?>
              <option value="<?php echo $row_Perso['emailUser']; ?>"><?php echo $row_Perso['emailUser']; ?></option> <?php
                                                                                                                    }
                                                                                                                      ?>
          </select>
        </td>
      </tr>
      <tr align="center" width="90%">
        <td width="118">
          <font size="3" face="Times New Roman">Nome do Personagem:</font>
        </td>
        <td>
          <select name="nomePerso">
            <option>Selecione o Personagem</option>
            <?php
            $result_niveis_acessos = "SELECT * FROM Perso";
            $resultado_niveis_acesso = mysqli_query($conn, $result_niveis_acessos);
            while ($row_Perso = mysqli_fetch_assoc($resultado_niveis_acesso)) { ?>
              <option value="<?php echo $row_Perso['nomePerso']; ?>"><?php echo $row_Perso['nomePerso']; ?></option> <?php
                                                                                                                    }
                                                                                                                      ?>
          </select>
        </td>
      </tr>
      <tr align="center">
        <td>
          <font size="3" face="Times New Roman">Opinião:</font>
        </td>
        <td><textarea type="text" id="opinion" name="opiniao" rows="4" cols="54" input></textarea><br></td>

      </tr>
      <tr align="center">
        <td></td>
        <td>
          <input class="MeuInput" type="submit" name="Submit" value="Cadastrar">
          <input class="MeuInput" type="submit" formaction='../index.php' value="Voltar">
        </td>
      </tr>
      </table>
    </form>
    <br></br>
  <!--Copyright section-->
  <div class="p-4 text-center text-white" style="background-color: #0a4275">
    © 2023 Autora:
    <p>Fernanda Fernandes</p>
  </div>
  </footer>
  </body>
</html>