<?

function getHead($title){
	require './common/head.php';
	echo "<title>$title</title>";
}

function getHeader($name = "header"){
	require "./common/$name.php";
}

function getR($r){
	foreach($r as $name=>$key){
		echo "<option value='$key'>$name</option>";
	}
}