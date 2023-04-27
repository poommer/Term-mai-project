<?php
session_start();

if(!isset($_SESSION['Email'])||!isset($_SESSION['username'])){
    $_SESSION['msg'] = "กรุณาเข้าสู่ระบบ" ;
    header('location:signin.php');
}

if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['Email']);
    header('location:signin.php');
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <div class="bar">
            <!-- logo -->
            <a href="index.php"><img src="img/logo.png" alt="" class="logo"></a>
            <!-- nav -->
            <nav>
            <ul>
                <li><a href="index.php">หน้าหลัก</a></li>
                <li><a href="service.php">บริการ</a></li>
                <li><a href="Rev.php">รีวิว</a></li>
                <li><a href="#">สุ่มรางวัล</a></li>
            </ul>
        </nav>
            <!-- profile -->
            <div class="profile">
                <!--  -->
                <?php if(isset($_SESSION['Email']) || isset($_SESSION['username'])): ?>
                
                <!--  -->
                <img class="img-profile" src="img/profile/profile01.png">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 16px; margin-top:auto; margin-bottom:auto; margin-left: 5px; color: #000;">
                        <?php echo $_SESSION['username']; ?>
                
                    </a>
                    
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">จัดการโปรไฟล์</a></li>
                        <li><a class="dropdown-item" href="#">คำสั่งซื้อของฉัน</a></li>
                        <li>
                            <hr class="dropdown-divider"> 
                        </li>
                        <span class="logout">
                            <li><a class="dropdown-item" id="logout" href="index.php?logout='1'">ออกจากระบบ</a></li>
                        </span>
                        <?php endif ?>
                    </ul>
                </li>
            </div>
        </div>

    </header>
</body>

</html>