<?php require("../bootstrap-css-js.php"); ?>
<?php
// print_r($_POST);
$name = $_REQUEST['namepro'];
$price = $_REQUEST['price'];
$qty = $_REQUEST['qty'];
$QTYtotail = $_REQUEST['QTYtotail'];
$pay = $_REQUEST['pay'];

$_SESSION['name'] = $name;
$_SESSION['price'] = $price;
$_SESSION['qty'] = $qty;
$_SESSION['QTYtotail'] = $QTYtotail;
$_SESSION['pay'] = $pay;

require_once("lib/PromptPayQR.php");
$PromptPayQR = new PromptPayQR(); // new object
$PromptPayQR->size = 8; // Set QR code size to 8
$PromptPayQR->id = '0626424077'; // PromptPay ID
$PromptPayQR->amount = $QTYtotail; // Set amount (not necessary)
$qr = $PromptPayQR->generate();
$imgQR =  '<img src="' . $qr . '" />';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ชำระเงินคำสั่ง | trem-mai.com</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../css/pay.css">
</head>

<body>
    <header style="z-index:0;">
        <?php
        require("../header-sale.php");
        ?>
    </header>

    <div class="container">
        <main>
            <div class="container">
                <div class="main-pay">
                    <br>
                    <div class="main-pay-header">
                        <h3>ชำระเงินคำสั่งซื้อเลขที่ #2022020001</h3>
                    </div>
<hr>
                    <div class="main-pay-body">
                        <div class="pay-order">
                            <table>
                                <tr>
                                    <th>ชื่อสินค้า</th>
                                    <th>ราคา/หน่วย(บาท)</th>
                                    <th>จำนวน</th>
                                    <th>ราคารวม(บาท)</th>
                                <tr>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $name; ?></td>
                                            <td><?php echo $price; ?></td>
                                            <td><?php echo $qty; ?></td>
                                            <td><?php echo $QTYtotail; ?></td>
                                        </tr>
                                    </tbody>

                                    <tfoot>
                                        <tr>
                                            <td colspan="4" style="text-align: right; color:red;"><?php echo "ชำระด้วย " . $pay."<br>ราคาสุทธิ <b>" . $QTYtotail . "</b> บาท"; ?></td>
                                        </tr>
                                    </tfoot>

                            </table>

                            <div class="pay-order-foot">
                                
                                <div class="pay-text">
                                    <p style="font-size:12px; color:red;">
                                        <span style="font-size:16px;">*ขั้นตอนการชำระเงิน</span>
                                        <br>1.สแกน QR Code ด้านซ้ายเพื่อชำระเงินผ่านธนาคารใดก็ได้ <br>
                                        2.เมื่อชำระเงินเสร็จแล้วคลิ๊กปุ่ม <b>“ยืนยันการชำระเงิน”</b> รอแอดมินตรวจสอบสักครู่
                                    </p>
                                </div>
                                <div class="btn-summit">
                                    <a href="thanks.php">ยืนยันการชำระเงิน</a>
                                </div>
                                
                            </div>
                        </div>

                        <div class="pay-qrcode">
                            <div class="pay-qrcode-bg">
                                <div class="pay-qrcode-head">
                                    <img src="../../img/logo-thaiQR.png" alt="">
                                </div>

                                <div class="pay-qrcode-body">
                                    <img src="../../img/PromptPay-logo.png" alt="">
                                    <?php echo '<img src="' . $PromptPayQR->generate() . '" />' ?>
                                </div>

                                <div class="pay-qrcode-foot">
                                    <p align="center">เลขที่prompt pay: 0626424077<br>ชื่อบัญชี:สิริภูมิ หลิมสุนทร</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>

        </main>
    </div>
    <div class="container">
        <footer>
            <?php
            require("../footer.php");
            ?>
        </footer>
    </div>
</body>

</html>