<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <h3>PHP output</h3>
            <pre> <?php if(isset($_GET['submit'])):
             echo $_GET['name']; ?></pre> 

             <pre>
                <?php echo $_GET['mail']; endif; ?>
             </pre>

        </div>
        <div class="row">
            <div class="column column-50 column-offset-20">

                <form action="" method="GET">
                    <label for="name">Full name</label>
                    <input type="text" name="name" class="name">
                    <label for="mail">Email:</label>
                    <input type="text" name="mail">
                    <input type="submit" class="button button-outline" placeholder="Submit" value="click" name="submit">
                </form>

            </div>
        </div>
    </div>
</body>
</html>