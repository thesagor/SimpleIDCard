<?php
    include_once "asset/functions.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP in select form</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">


</head>
<body>
    <div class="container">
        <div class="row">

            <?php
            if(isset($_REQUEST['submit'])){
                $fruits= $_REQUEST['selectfruits'];
            }

            ?>
            <div class="column column-50 column-offset-20">
                <h3>working with select fornm</h3>
                <form action="" method="POST">
                    <label for="select">Select your fruits</label>
                    <select name="selectfruits" id="fruits">
                        <option value="Selectform"> Select Your form</option>
                        <option value="mango"> Mango</option>
                        <option value="orange"> Orange</option>
                        <option value="banana"> Banana</option>
                        <option value="pineapple"> Pineapple</option>
                    </select>
                    <input type="submit" value="submit" name="submit">
                </form>
            </div>
        </div>
    </div>
</body>
</html>