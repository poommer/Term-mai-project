<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/register.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="frm-main">
            <header>
                <h1>
                <img src="img/logo.png" alt="" ><br>
                ลงทะเบียนเติมมั้ย
            </h1>
            </header>
            <div class="frm-body">
                
                <form action="signin.php" name="SignIn" method="post">
                    <label for="name">ชื่อ:</label>
                    <input type="text" name="" id="name" > 
                    <label for="lastname">นามสกุล:</label>
                    <input type="text" name="lastname" id="lastname" >    
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email">
                    <label for="tel">เบอร์โทร:</label>
                    <input type="text" name="tel" id="" > 
                    <label for="password">รหัสผ่าน:</label>
                    <input type="password" name="password" id="password">
                    <label for="password_com">ยืนยันรหัสผ่าน:</label>
                    <input type="password" name="password_com" id="password_com">
                <div class="frm-foot">
                    <input type="submit" name="btnSub" value="confirm" class="btnLogin">
                <p>คุณมีบัญชีแล้ว? <a href="signin.php"> เข้าสู่ระบบเลย!</a></p>
                </div>
                </form>
            </div>
            


        </div>
    </div>
</body>

</html>