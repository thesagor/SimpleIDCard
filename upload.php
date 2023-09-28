

<?php
    $typecheck=array(
        'image/png',
        'image/jpg',
        'image/jpeg'
    );
    
    
        $number= count($_FILES['photo']['name']);
        for($i=0; $i<$number; $i++){

            if(in_array($_FILES['photo']['type'][$i],$typecheck) !==false && $_FILES['photo']['size'][$i]<5*1024*1024){
            move_uploaded_file($_FILES['photo']['tmp_name'][$i], "./uploaded/" .$_FILES['photo']['name'][$i]);
            }
        }

   /* if(in_array($_FILES['photo']['type'],$typecheck) !==false && $_FILES['photo']['size']<5*1024*1024){
        move_uploaded_file($_FILES['photo']['tmp_name'], "./uploaded/" .$_FILES['photo']['name']);
    } */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP in upload form</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">


</head>
<body>
    <div class="container">
        <div class="row">
            <div class="column column-50 column-offset-20">
                <pre>
                    <code>
                        <?php 
                            print_r($_POST);
                            print_r($_FILES);
                        
                        ?>
                    </code>
                </pre>

                <form action="" method="POST" enctype="multipart/form-data">
                    <label for="fname" class="label-inline">First name</label>
                    <input type="text" name="fname" id="fname">

                    <label for="email" class="label-inline">Email</label>
                    <input type="email" name="email" id="email">

                    <label for="pphoto"></label>
                    <input type="file" name="photo[]" id="photo1">
                    <input type="file" name="photo[]" id="photo2">
                    <input type="file" name="photo[]" id="photo3">

                    <input type="submit" value="submit" name="submitBtn">
                </form>
            </div>
        </div>        
    </div>
</body>
</html>