<?php
declare(strict_types=1);
if(session_status()!==PHP_SESSION_ACTIVE) session_start();
$f=__DIR__.'/../config/config.local.php';
if(!file_exists($f)){http_response_code(500);exit('Copy config.example.php to config.local.php and add local DB credentials.');}
$c=require $f;$d=$c['db'];
$pdo=new PDO("mysql:host={$d['host']};dbname={$d['name']};charset={$d['charset']}",$d['user'],$d['pass'],[
PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC,PDO::ATTR_EMULATE_PREPARES=>false]);
function e(?string $v):string{return htmlspecialchars($v??'',ENT_QUOTES,'UTF-8');}
function redirect(string $p):never{header('Location: '.$p);exit;}
function cartCount():int{return array_sum($_SESSION['cart']??[]);}
