<?php
    include_once "asset/functions.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Learning</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
</head>
<body>
    <div class="container">

        <div class="row">
            <div class="column column-50 column-offset-20">
                <form action="" method="POST">


                    <label for="name">Name:</label>
                    <input type="text" name="name">

                    <label for="mail">Email:</label>
                    <input type="email" name="mail" placeholder="email">

                    <label for="subtitle">Please choose some fruits</label>

                    <label for="apple" class="label-inline">Apple</label>
                    <input type="checkbox" value="Apple" name="fruits[]" <?php checkFruits('Apple') ?>>

                    <label for="apple" class="label-inline">banana</label>
                    <input type="checkbox" value="banana" name="fruits[]" <?php checkFruits('banana') ?>>

                    <label for="apple" class="label-inline">orange</label>
                    <input type="checkbox" value="orange" name="fruits[]" <?php checkFruits('orange') ?>>

                    <label for="apple" class="label-inline">jackfruits</label>
                    <input type="checkbox" value="jackfruits" name="fruits[]" <?php checkFruits('jackfruits') ?>></br>
                    
                    

                    <input type="submit" value="submit" name="submit">
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="column column-50">
                 <ol>
                    <?php 
                        

                        if(isset($_POST['submit'])){
                            $name= $_POST['name'];
                            $mail= $_POST['mail'];
                            //print_r($_REQUEST);
                            
                        ?>

                    <ol>
                        <li>Name: <?php echo $name ?></li>
                        <li>email: <?php echo $mail ?></li>
                    </ol>
                <?php }; ?>

                </ol>
            </div>
        </div>
</body>
</html>