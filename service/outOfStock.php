<!DOCTYPE html>
<html lang="en">
<?php require("../bootstrap-css-js.php"); ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/comming.css">
    <title>สินค้าหมด | trem-mai.com</title>
</head>
<body>
<header style="z-index:0;">
        <?php
            require("header-member.php");
        
        ?>
    </header>

    <div class="container">
        <main>
            <div class="container">
                <div class="main-con">
                    <img src="../img/out-of-stock.png" alt="">
                    <h1>
                    out of stock
                        
                    </h1>
                    <p style="text-align:center;">
                        ขณะนี้สินค้าหมด ขออภัยในความไม่สะดวก <br>
                        <a href="../index.php">กลับไปยังหน้าหลัก</a>
                    </p>
                    
                </div>
                
            </div>
        </main>
    </div>

    <div class="container">
        <footer>
            <?php
            require("footer.php");
            ?>
        </footer>
    </div>
</body>
</html>