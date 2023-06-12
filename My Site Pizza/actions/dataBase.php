<?php
try{
    // don't forget 
    session_start();
    $bdd = new PDO('mysql:host=localhost;dbname=mysitepizza;charset=utf8;', 'root', 'root');
}catch(Exception $e){
    die('There is problem here :'.$e->getMessage());
}
