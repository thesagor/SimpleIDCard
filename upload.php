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
                <form action="" method="POST">
                    <label for="fname" class="label-inline">First name</label>
                    <input type="text" name="fname" id="fname">

                    <label for="email" class="label-inline">First name</label>
                    <input type="email" name="email" id="email">

                    <label for="pphoto"></label>
                    <input type="file" name="photo" id="pphoto">

                    <input type="submit" value="submit" name="submitBtn">
                </form>
            </div>
        </div>
    </div>
</body>
</html>