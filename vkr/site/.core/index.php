<?
if (session_status() !== PHP_SESSION_ACTIVE) session_start();
require_once($_SERVER['DOCUMENT_ROOT'] . "/site/.core/db.php") ;
require_once($_SERVER['DOCUMENT_ROOT'] . "/site/.core/companyTable.php") ;
require_once($_SERVER['DOCUMENT_ROOT'] . "/site/.core/userTable.php") ;
require_once($_SERVER['DOCUMENT_ROOT'] . "/site/.core/userLogic.php") ;
require_once($_SERVER['DOCUMENT_ROOT'] . "/site/.core/userAction.php") ;
require_once($_SERVER['DOCUMENT_ROOT'] . "/site/.core/productTable.php") ;
require_once($_SERVER['DOCUMENT_ROOT'] . "/site/.core/feed.php") ;
require_once($_SERVER['DOCUMENT_ROOT'] . "/site/.core/action.php") ;