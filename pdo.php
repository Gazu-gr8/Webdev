<?php
/**
 * Created by PhpStorm.
 * User: cuiziang
 * Date: 2018-06-04
 * Time: 8:13 PM
 */
$pdo = new PDO('mysql:host=localhost;port="";dbname=users', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);