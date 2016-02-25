<?php
if(!file_exists('count.txt')){
    file_put_contents('count.txt', '0');
}
file_put_contents('count.txt', ((int) file_get_contents('count.txt')) + 1);
header('Location: ' . $_GET['href']);
?>