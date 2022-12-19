<?

require "routing.php";

get('/','views/home.php');
get('/add','views/add.php');
get('/create','views/create.php');
any('/404', '404.php');