<?php
//require_once($_SERVER['DOCUMENT_ROOT'] . "/site/print_data.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/site/.core/db.php");
/*
$statement = 'SELECT enterprises.photo, enterprises.name,enterprises.description,enterprises.annual_production,regions.name_region 
    FROM enterprises INNER JOIN regions ON enterprises.id_region = regions.id 
    WHERE ' . $data_post;
$enterprises = database::prepare($statement);
$enterprises->execute();
$enterprises->fetch(PDO::FETCH_ASSOC);
*/


function print_data(){
   
  if (empty($data_post))
    $statement = 'SELECT enterprises.photo, enterprises.name,enterprises.description,enterprises.annual_production,regions.name_region 
     FROM enterprises INNER JOIN regions ON enterprises.id_region = regions.id';
   
   else
   $statement = 'SELECT enterprises.photo, enterprises.name,enterprises.description,enterprises.annual_production,regions.name_region 
    FROM enterprises INNER JOIN regions ON enterprises.id_region = regions.id 
    WHERE ' . $data_post;
  
    $enterprises = database::prepare($statement);
    $enterprises->execute();
    $enterprises->fetch(PDO::FETCH_ASSOC); //как массив
    $i = 0;
    foreach ($enterprises as $enterprise) {
      $img[$i] = $enterprise['photo'];
      $name_company[$i] = $enterprise['name'];
      $region[$i] = $enterprise['name_region'];
      $description[$i] = $enterprise['description'];
      $annual_production[$i] = $enterprise['annual_production'];
      $i++;
    }
    //$count=count($enterprise);
    $count=$i;
  
    for ($i = 0; $i < $count; $i++) {
      $img_path =  "inc/logo_enterprises/" . $img[$i];
      echo "<tr><td><img src=\"$img_path\" width=\"100\">
    </td>
    <td>$name_company[$i]</td>
    <td>$region[$i]</td>
    <td>$description[$i]</td>
    <td>$annual_production[$i]</td></tr>";
    }
    }