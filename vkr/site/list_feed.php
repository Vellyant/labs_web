<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/site/.core/index.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/site/header.php");

$feeds = feed::get_feed();
?>


<main role="main">


  <div class="d-flex justify-content-center my-4">
    <a class="btn btn-success mx-3" href="create_feed.php">Создать фид</a>
  </div>

  <div class="container container-fluid my-5">

    <!--

    <div class="card my-3">
      <div class="card-header">
        <nav class="navbar bg-light">
          <form class="container-fluid justify-content-start">
            <button class="btn btn-sm btn-outline-secondary me-3" type="button">Скачать</button>
            <button class="btn btn-sm btn-outline-secondary me-3" type="button">Редактировать</button>
            <button class="btn btn-sm btn-outline-secondary me-3" type="button">Удалить</button>
          </form>
        </nav>
      </div>
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
      </div>
    </div>
-->
    <?php

    while ($feed = $feeds->fetch()) {
      $id = $feed['id_feed'];
      $name = $feed['name'];
      $date = $feed['date_edit'];
      $link = $feed['link'];
      $file =  $feed['file'];
      $fileName="$link/$file";

      
      echo $link;
      echo "<div class='card my-3'>
      <div class='card-header'>
        <nav class='navbar bg-light'>
          <form class='container-fluid justify-content-start'>
         <input type='hidden' value='$id'>
         <a href='$fileName' class='btn btn-sm btn-outline-secondary me-3' download>Скачать</a>
            <button class='btn btn-sm btn-outline-secondary me-3' type='button' name='action' value='edit'>Редактировать</button>
            <button class='btn btn-sm btn-outline-secondary me-3' type='button' name='action' value='delete'>Удалить</button>
          </form>
        </nav>
      </div>
      <div class='card-body'>
        <h5 class='card-title'>Файл - $name</h5>
        <p class='card-text'>Дата редактирования - $date</p>
      </div>
    </div>";
    }
    ?>


  </div>

</main>