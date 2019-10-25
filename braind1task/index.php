<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; Charset=UTF-8">  
    <title>First task</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="slider">
        <?php
            require_once "php/slider.php";
        ?>
    </div>
    <header>
        <?php
            require_once "php/header.php";
        ?>
    </header>

    <div class="main">
        <?php
            require_once "php/main-block.php"
        ?>
    </div>
    
    <footer>
        <?php
            require_once "php/footer.php";
        ?>
    </footer>
    <script ENGINE="text/javascript" src="js/main.js"></script>
</body>
</html>