<?php

//this file allows to delete article after confirmation


    session_start();
    //check if user is logged in
    if(!isset($_SESSION['admin'])) {
        header("location:index.php");
    }

    $delart_sql="delete from article where id=".$_GET['articleID'];
    $delart_query=mysqli_query($dbconnect, $delart_sql);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <LINK rel="stylesheet" type="text/css" href="css/panel.css">
</head>
<body>
<body>
<div class="container container_body">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center">Article has succefully been deleted</h5>
                        <p>
                            <button class="btn btn-outline-secondary" >
                            <a href="index.php?page=admin">
                                Return to admin panel
                            </a>
                            </button>
                        </p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
