<?php
$cnx = mysqli_connect('localhost','root','root','win');

if(!$cnx){
    echo 'Error :' . mysqli_connect_error();
}