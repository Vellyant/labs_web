<?
require_once($_SERVER['DOCUMENT_ROOT'] . "/site/core/index.php");
action::signOut();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>360 Ковид - Клинико-диагностические лаборатории</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>

</head>
   <body>
   
   <!--шапка-->
    <nav class="navbar bg-white border-bottom border-3">

        <div class="head-up ">
            <div class="container ">
                <h5>
                    <ul class="nav ">

                        <li class="nav-item ">

                            <u> <a class="nav-link" href="#"> <img src=" https://kdl.ru/images/ico/ico__region.svg">
                                    Волгоград</a> </u>
                        </li>
                        <li class="nav-item border-right   border-white">
                            <a class="nav-link border-end" href="#">8 8442 59 95 00 </a> 
                        </li>

                        <li class="nav-item border-right   border-white">
                            <a class="nav-link active border-end" href="#"> Адреса</a>
                        </li>
                        <li class="nav-item border-right   border-white">
                            <a class="nav-link border-end" href="#">Результаты</a>
                        </li>
                        <li class="nav-item border-right  border-white">
                            <a class="nav-link border-end" href="#">Корзина</a>
                        </li>
                        <li class="nav-item">
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
                            
                        </li>

                    </ul>
                </h5>
            </div>
        </div>
<!--логотип, поиск-->
        <div class="head-down">
            <div class="container">

                <ul class="nav justify-content-flex">
                    <li class="nav-item">
                        <img src="./inc/images/logo.svg" alt="logo">
                    </li>
                    <li class="nav-item">
                        <!--поиск-->
                        <form class="input-group">
                            <input class="bg-light form-control border-4 " type="text" placeholder="Поиск по анализам">
                            <button class="btn btn-primary" type="button" src="./inc/images/search.svg">

                            </button>

                            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                                aria-labelledby="offcanvasNavbarLabel">
                                <div class="offcanvas-header ">

                                    <button type="button " class="btn-close" data-bs-dismiss="offcanvas"
                                        aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body ">


                                    <h3>Пациентам</h3> <br>
                                    <h3>Популярные комплексы и услуги</h3><br>
                                    <h3>Связаться с нами</h3><br>
                                    <h3>Врачам</h3><br>
                                    <h3> О нас</h3><br>
                                    <h3> Организациям</h3>

                                </div>
                            </div>
                        </form>
                    </li>

                </ul>



            </div>


            <h5>

                <div class="goods-navbar ">
                    <div class="container  mt-3 mb-3 ">
                        <ul class="nav justify-content-center">
                            <li class="nav-item ">
                                <a class="nav-link" href="#">ВЫЕЗД НА ДОМ</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="analizes.php">АНАЛИЗЫ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">АКЦИИ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">СВЯЗАТЬСЯ С НАМИ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">COVID-19</a>
                            </li>


                        </ul>
                    </div>
                </div>
            </h5>



    </nav>
 
</body>
</html>