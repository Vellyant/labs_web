<?
require_once($_SERVER['DOCUMENT_ROOT'] . "/site/.core/index.php");

action::signOut();

?>


<!doctype html>
<html lang="en">

<head>
  <title>Lab 3</title>
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <script src="js/bootstrap.bundle.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
</head>

<body class="d-flex flex-column h-100 vsc-initialized">
  <header>
    <nav class="navbar bg-light ">

      <div class="container">
       
        <span class="navbar-text fw-bold text-dark">
          Создание YML фидов
        </span>
        
        <?
          if (logic::authorized()) {
            $login = $_SESSION['USER_LOGIN'];
            echo "<form method='post'>
            $login 
            <input name='signOut' type='submit' class='btn btn-outline-danger mx-3' href='sign_in.php' role='button' value='Выйти'></form>";
          } 
          else echo "<a class='nav-link' href='sign_up.php'>Регистрация</a>
           <a class='btn btn-outline-success  me-2' href='sign_in.php' role='button'>Войти</a>";
          ?>
        
      </div>

    </nav>



    <nav class="navbar navbar-expand-lg bg-dark-blue">

      <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!--- меню слева -->
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
    
          <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link link-light" href="start_page.php">Главная</a>
          </li>

          <li class="nav-item">
            <a class="nav-link link-light" href="company.php">Компании</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link-light" href="list_products.php">Товары</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link-light" href="list_feed.php">Фиды YML</a>
          </li>
       
        </ul>
      </div>
    </nav>

  </header>