<?php
    require_once(__DIR__ . "/../model/Database.php");

     $path = "/gassamaj-blog/";
     
     $host = "localhost";
     $username = "root";
     $password = "root";
     $database = "blog_db";
     
     $connection =  new Database($host, $username, $password, $database);