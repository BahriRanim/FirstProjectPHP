<?php
    session_start();
    //check if user in logged in
    if(!isset($_SESSION['admin'])) {
        header("location:index.php");
    }


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
                    <h5 class="card-title text-center">Delete article</h5>
                    <?php
                        $delart_sql="select * from article";
                        $delart_query=mysqli_query($dbconnect, $delart_sql);
                        $delart_res=mysqli_fetch_assoc($delart_query);
                        do {
                            ?>
                                <p>
                                    <a href="index.php?page=confirmdel&articleID=<?php  echo $delart_res['id']; ?>">
                                        <?php
                                        echo $delart_res['title'];
                                        ?>
                                    </a>
                                </p>
                            <?php
                        } while ($delart_res=mysqli_fetch_assoc($delart_query));
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
