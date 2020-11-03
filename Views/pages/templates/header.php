<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo self::titulo; ?></title>
    <link href="<?php echo INCLUDE_PATH_FULL ?>css/header.css" rel="stylesheet" type="text/css">
    <?php if($arr['titulo']== 'home'){
        echo '<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>';
    } ?>
    <link href="<?php echo INCLUDE_PATH_FULL ?>css/<?php echo $arr['titulo']; ?>.css" rel="stylesheet" type="text/css">
</head>
<body>
    <header>
        <div class="center">
            <div class="logo">
                <h2>Pimenta's Company</h2>
            </div>
            <nav class="menu">
                <?php
                    foreach ($this->menuItems as $key => $value) {
                        echo '<a href="'.INCLUDE_PATH.$value.'">'.$value.'</a>';
                    }
                ?>
            </nav>
        </div> 
    </header>