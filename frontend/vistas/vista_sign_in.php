<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>

<body style="background: #242026;">
    <script src="./js/function.js"></script>
    <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Alert</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <b>ERROR </b>Contraseña incorrecta
                            </div>
                            <div class="modal-footer ">
                                <button type="button" id="submit1"  data-bs-dismiss="modal">Cerrar</button>

                            </div>
                        </div>
                    </div>
                </div>

    <div class="login-box">
        <h2>Sign In</h2>
        <form class="form" action="../modules/sign_in.php" method="POST">
            <div class="user-box">
                <input type="password" name="password" required="">
                <label for="">Password</label>
            </div>
            <div class="button-form">
              
                <button id="submit" type="submit"> Submit </button>

                <?php

                if (sizeof($_GET) != 0) {

                    if ($_GET['fallo'] == true) {
                        echo "<script>";
                        echo "$(function(){
                            showModal();
                        });";
                        echo "</script>";
                    }
                }

                ?>
                <div id="register">
                    Don't have an acconunt ?
                    <a href="./vista_sign_up.php">Register</a>
                </div>

            </div>

        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="./js/function.js"></script>
</body>

</html>