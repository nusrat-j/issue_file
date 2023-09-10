
<?php
session_start();

$title = $_REQUEST ['title'];
$detail = $_REQUEST ['detail'];
$author = $_REQUEST ['author'];
$error = [];


//validation rules


if(empty($title)){
    $error['title_error'] = "Submit your Title";
}

if(empty($detail)){
    $error['detail_error'] = "Submit your Details";
}
else if(strlen($detail) > 50){
    $error ['detail_error'] =  "Detail must be 50 characters or less";
}
if(empty($author)){
    $error['author_error'] = "Submit Author's Name";
}


//used count

if(count($error) > 0 ){

     $_SESSION['userData'] = $_REQUEST;
   
    $_SESSION['form_error'] = $error;

    header("Location: ../post_system.php");
}

else{
	
}
