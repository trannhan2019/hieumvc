<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Ecommerce</title>
</head>
<body>
<?php
include_once ('inc/header.php');
?>

<?php
include_once ('system/libs/Main.php');
include_once ('system/libs/DController.php');

$url = isset($_GET['url']) ? $_GET['url']:NULL;
$url = rtrim($url,'/');
$url = explode('/',$url);

include_once ('app/controllers/'.$url[0].'.php');

$ctrler = new $url[0]();

?>

<?php
include_once ('inc/footer.php');
?>
</body>
</html>
