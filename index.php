<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Personagem Favorito</title>
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
              <a class="active disabled:text-white lg:px-8 [&.active]:text-white " aria-current="page" href="./View/add-user.php" data-te-nav-link-ref>
                Adicionar Usuário
              </a>
            </li>
            <!-- Features link -->
            <li class="mb-4 lg:mb-0 lg:px-8" data-te-nav-item-ref>
              <a class="p-0 text-white hover:text-white focus:text-neutral-700  [&.active]:text-black/90"  href="./View/view.php" data-te-nav-link-ref>Visualizar Banco de Dados</a>
            </li>
            <!-- Pricing link -->
            <li class="mb-4 lg:mb-0 lg:px-8" data-te-nav-item-ref>
              <a class="p-0 text-white hover:text-white focus:text-neutral-700   [&.active]:text-black/90 " href="./View/add-perso.php" data-te-nav-link-ref>Adicionar Personagem</a>
            </li>
            <li class="mb-4 lg:mb-0 lg:px-8" data-te-nav-item-ref>
              <a class="p-0 text-white hover:text-white focus:text-neutral-700   [&.active]:text-black/90 " href="./View/add-opinion.php" data-te-nav-link-ref>Adicionar Comentário</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Jumbotron -->
    <div class="relative overflow-hidden bg-cover bg-no-repeat p-12 text-center" style="background-image: url('https://wallup.net/wp-content/uploads/2019/09/345411-dc-comics-justice-league-superheroes-comics.jpg'); height: 400px">
      <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-fixed" style="background-color: rgba(0, 0, 0, 0.6)">
        <div class="flex h-full items-center justify-center">
          <div class="text-white">
            <h2 class="mb-4 text-4xl font-semibold">Adicione o seu <b> Personagem Favorito</b> no nosso Banco de Dados</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Jumbotron -->
  </header>
  <br></br>
  <div class="block rounded-lg bg-white p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
    <h5 class="mb-2 text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
      Como Funciona?
    </h5>
    <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
      Preencha o campo com os seus dados e nos informe o seu Personagem Favorito. <br>
      Também é possivel adicionar comentários sobre ele, desde que seja comentários respeitosos!
  </div>
  <hr class="my-12 h-0.5 border-t-0 bg-neutral-100 opacity-100 dark:opacity-50" />
  <div class="max-w-md mx-auto bg-white shadow-md overflow-hidden md:max-w-2xl">
    <div class="md:flex">
      <div class="md:shrink-0">
        <img class="h-48 w-full object-cover md:h-full md:w-80" src="img/logo fatec.jpg" alt="Modern building architecture">
      </div>
      <div class="p-8">
        <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Sobre o Projeto</div>
        <p class="mt-2 text-black">O projeto foi escolhido e desenvolvido na Faculdade de Tecnologia de Ferraz de Vasconcelos, com a supervisão do Professor Alexandro.
          <br></br>
          Tendo como principal motivo, relembrar-mos os nossos personagens animados faovirtos, independentes de ser vilão ou herói!
        </p>
      </div>
    </div>
  </div>
  </div>
  <br></br>
  <!--Copyright section-->
  <div class="p-4 text-center text-white" style="background-color: #0a4275">
    © 2023 Autora:
    <p>Fernanda Fernandes</p>
  </div>
  </footer>
  <script src="style.js"></script>
</body>

</html>