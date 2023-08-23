 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
 </head>
 <body>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="img" id="">
        <input type="submit" value="upload" name="submit">
    </form>
 </body>
 </html>

   <?php
        if(isset($_POST['submit'])){
            $name= $_FILES['img']['name'];
            $tmp_name= $_FILES['img']['tmp_name'];
            move_uploaded_file($tmp_name, "uploaded/".$name);
        }
   ?>

   <img src="uploaded/<?php if (isset($_POST['submit'])){ printf($name);} ?>" alt="image">