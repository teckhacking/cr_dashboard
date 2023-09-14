<?php
$con = mysqli_connect('localhost', 'root', '', 'filesystem');

if(!$con){
    echo $con;
    die();
}

?>