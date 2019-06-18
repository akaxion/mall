<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
include('check.php');

$databaseName = 'userdb';
$databaseUser = 'MySQL name';
$databasePassword = 'password';

$pdoDatabase = new PDO('mysql:host = localhost', $databaseUser, $databasePassword);
$pdoDatabase -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdoDatabase -> exec('DROP DATABASE IF EXISTS userdb');
$pdoDatabase -> exec('CREATE DATABASE IF NOT EXISTS userdb DEFAULT CHARSET = utf8 COLLATE=utf_8general_ci');


$pdo = new PDO('mysql:host = localhost; dbname = '.$databaseName, $databaseUser, $databasePassword);
$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$pdo ->exec('CREATE TABLE `users`'(
	))