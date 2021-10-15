<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vanphongpham</title>
</head>
<body>
  <div class="container">
    <?php
    spl_autoload_register(function($class){
        include_once('system/lba/'.$class.'.php');
    });
    include_once('app/config/config.php');
    $main = new Main();
     ?>
   
    </div>
</body>
</html>