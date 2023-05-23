<?php
    function connectToDB() {
        $host = 'devkinsta_db';
         $dbname = 'SimpleCMS';
         $dbuser = 'root';
        $dbpassword = 'GBhUwpF3t3QzDYbo' ;
        $database = new PDO ("mysql:host=$host;dbname=$dbname",
        $dbuser,
        $dbpassword);
    
        return $database;
    }