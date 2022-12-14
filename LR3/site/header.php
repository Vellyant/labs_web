
  <!doctype html>
<html lang="en">
<head>
  <title>Lab 3</title>
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <script src="js/bootstrap.bundle.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
  </head>
  <body>
<header>
    <nav class="navbar bg-light ">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="inc/img/logo.png" alt="Logo" width="262" height="44" class="d-inline-block align-text-top">

        </a>
        <span class="navbar-text fw-bold text-dark">
          Покупка и продажа<br>
          оборудования для бизнеса
        </span>

        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Найти оборудование" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>

        <a class="nav-link" href="registration.php">Регистрация</a>
        <a class="btn btn-outline-success me-2" href="sign_in.php" role="button">Войти</a>
        
      </div>
    </nav>


    <nav class="navbar navbar-expand-lg bg-dark-blue">

      <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!--- меню слева -->
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle link-light" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                ОБОРУДОВАНИЕ
              </a>
              <ul class="dropdown-menu bg-blue-navbar">
                <li><a class="dropdown-item link-light" href="#">Перейти в раздел ></a></li>
                <li><a class="dropdown-item link-light" href="#">Автомобилестроение</a></li>
                <li><a class="dropdown-item link-light" href="#">Биотопливо и альтернативная энергетика</a></li>
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle link-light" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                ПРЕДПРИЯТИЯ
              </a>
              <ul class="dropdown-menu bg-blue-navbar">
                <li><a class="dropdown-item link-light" href="#">Перейти в раздел ></a></li>
                <li><a class="dropdown-item link-light" href="#">Автомобилестроение</a></li>
                <li><a class="dropdown-item link-light" href="#">Биотопливо и альтернативная энергетика</a></li>
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle link-light" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                ДОСКА ОБЪЯВЛЕНИЙ
              </a>
              <ul class="dropdown-menu bg-blue-navbar">
                <li><a class="dropdown-item link-light" href="#">Перейти в раздел ></a></li>
                <li><a class="dropdown-item link-light" href="#">Доска объявлений по пищевому оборудованию</a></li>
                <li><a class="dropdown-item link-light" href="#">Производство металлов / металлообрабатывающее
                    оборудование</a></li>
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle link-light" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                БИЗНЕС ИДЕИ
              </a>
              <ul class="dropdown-menu bg-blue-navbar">
                <li><a class="dropdown-item link-light" href="#">Перейти в раздел ></a></li>
                <li><a class="dropdown-item link-light" href="#">Автобизнес</a></li>
                <li><a class="dropdown-item link-light" href="#">Бизнес в интернете</a></li>
              </ul>
            </li>

            <li class="nav-item">
              <a class="nav-link link-light" href="#">МАГАЗИН ЗАЯВОК</a>
            </li>

          </ul>
        </div>
        <!--- меню справа -->
        <ul class="nav justify-content-end ">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle link-light" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Новости
            </a>
            <ul class="dropdown-menu bg-blue-navbar">
              <li><a class="dropdown-item link-light" href="#">Перейти в раздел ></a></li>
              <li><a class="dropdown-item link-light" href="#">Власть и бизнес</a></li>
              <li><a class="dropdown-item link-light" href="#">Финансы</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle link-light" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Статьи
            </a>
            <ul class="dropdown-menu bg-blue-navbar">
              <li><a class="dropdown-item link-light" href="#">Перейти в раздел ></a></li>
              <li><a class="dropdown-item link-light" href="#">Власть и бизнес</a></li>
              <li><a class="dropdown-item link-light" href="#">Финансы</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle link-light" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Интервью
            </a>
            <ul class="dropdown-menu bg-blue-navbar">
              <li><a class="dropdown-item link-light" href="#">Перейти в раздел ></a></li>
              <li><a class="dropdown-item link-light" href="#">Машиностроение и металлообработка</a></li>
              <li><a class="dropdown-item link-light" href="#">Деревообработка</a></li>
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link link-light" href="#">Реклама</a>
          </li>
        </ul>
      </div>
    </nav>

  </header>