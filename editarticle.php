<?php

//this file allows to select article to edit


    session_start();
    //check if user in logged in
    if(!isset($_SESSION['admin'])) {
        header("location:index.php");
    }


    $editart_sql="select * from article";
    $editart_query=mysqli_query($dbconnect, $editart_sql);
    $editart_res=mysqli_fetch_assoc($editart_query);

    //when user enter to another article, session should be reset
    unset($_SESSION['editarticle']);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <LINK rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center">Edit article</h5>
                    <?php
                        do {
                            ?>
                                <p>
                                    <a href="index.php?page=editing&articleID=<?php echo $editart_res['id']; ?>">
                                        <?php
                                                echo $editart_res['title'];
                                        ?>
                                    </a>
                                </p>
                            <?php
                        } while ($editart_res=mysqli_fetch_assoc($editart_query))
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
