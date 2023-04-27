
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/signin.css">
    <title>Document</title>
</head>

<body>
    <?php if(isset($_SESSION['error'])): ?>
                    <div class="error">
                        <h3>
                            <?php 
                                echo $_SESSION['error'] ; 
                                unset($_SESSION['error']) ; 
                            ?>
                        </h3>
                    </div>
                <?php endif ?>
    <div class="container">
        <div class="frm-main">
            <header>
                <h1>
                <img src="img/logo.png" alt="" ><br>
                เข้าสู่ระบบเติมมั้ย
            </h1>
            </header>
            <div class="frm-body">
                
                <form action="signin_db.php" name="SignIn" method="post">
                    <div class="group-input">
                        <label for="email">Email:(member01@termmai.com)</label>
                        <input type="email" name="email" id="email" value="member01@termmai.com">
                    </div>
                    <div class="group-input" style="margin-top: 5px;">
                        <label for="password">รหัสผ่าน:(Mem_123)</label>
                        <input type="password" name="password" id="password" value="Mem_123">
                    </div>     
                <div class="frm-foot">
                    <input type="submit" name="btnSub" value="login" class="btnLogin">
                <p>คุณยังไม่มีบัญชี? <a href="register.php"> ลงทะเบียนเลย!</a></p>
                </div>
                </form>
            </div>
            


        </div>
    </div>
</body>

</html>