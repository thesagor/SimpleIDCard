
<?php 

if(isset($_POST['submit']));

$name=$_POST['fullname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$website=$_POST['website'];
$idcard=$_POST['idcard'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<body class='bg-grid-line'>
    <div class='card'>
    <header>
        <h1>Skills</h1>
    </header>
    <article>
        <img alt='My Pic' id='thumb' src='https://s.cdpn.io/1202/timpietrusky_on_rampage_small_1.jpg'>
        <div class='area'>
        <ul>
            <li>
            Name: <?php echo strtoupper($name); ?>
            </li>
            <li>
            Email: <?php echo "$email"; ?>
            </li>
            <li>
            Phone:  <?php echo "$phone"; ?>
            </li>
            <li>
            Website: <?php echo "$website"; ?>
            </li>
            <li>
            ID: <?php echo "$idcard"; ?>
            </li>
        </ul>

        </div>
    </article>
    </div>
    </body>
</body>
</html>

