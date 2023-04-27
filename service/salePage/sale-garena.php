<?php require("../../bootstrap-css-js.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../css/sale.css">
    <title>บัตรเติมเงิน garena | trem-mai.com</title>
</head>

<body>
    <header style="z-index:0;"><?php require("../header-sale.php"); ?></header>
    <div class="container">
        <main>
            <div class="container">


                <br>
                <div class="main-container">
                    <!-- main1 -->
                    <div class="pro-img">
                        <img src="../../img/game/1_garena.png" alt="">
                    </div>
                    <!-- end main1 -->
                    <!-- main2 -->
                    <div class="pro-inf">
                        <div class="pro-inf-name">
                            <h1>บัตรเติมเงิน garena</h1>
                        </div>

                        <div class="pro-inf-details">
                            <div class="sale-price">
                                <form action="">
                                    <input type="button" value="30 shells" id="btn1" data-name="บัตรเติมเงิน garena 30 shell" data-price="30.00" onclick="price(document.getElementById('btn1')); sumprice(); price_totail(); qty_totail(); " class="btn-price">
                                    <input type="button" value="50 shells" id="btn2" data-name="บัตรเติมเงิน garena 50 shell" data-price="49.00" onclick="price(document.getElementById('btn2')); sumprice(); price_totail(); qty_totail(); " class="btn-price">
                                    <input type="button" value="75 shells" id="btn3" data-name="บัตรเติมเงิน garena 75 shell" data-price="73.00" onclick="price(document.getElementById('btn3')); sumprice(); price_totail(); qty_totail(); " class="btn-price">
                                    <input type="button" value="100 shells" id="btn4" data-name="บัตรเติมเงิน garena 100 shell" data-price="98.00" onclick="price(document.getElementById('btn4')); sumprice(); price_totail(); qty_totail(); " class="btn-price">
                                    <input type="button" value="150 shells" id="btn5" data-name="บัตรเติมเงิน garena 150 shell" data-price="145.00" onclick="price(document.getElementById('btn5')); sumprice(); price_totail(); qty_totail(); " class="btn-price">
                                    <input type="button" value="450 shells" id="btn6" data-name="บัตรเติมเงิน garena 450 shell" data-price="440.12" onclick="price(document.getElementById('btn6')); sumprice(); price_totail(); qty_totail(); " class="btn-price">
                                    <input type="button" value="750 shells" id="btn7" data-name="บัตรเติมเงิน garena 750 shell" data-price="685.00" onclick="price(document.getElementById('btn7')); sumprice(); price_totail(); qty_totail(); " class="btn-price">
                                    <input type="button" value="1500 shells" id="btn8" data-name="บัตรเติมเงิน garena 1500 shell" data-price="1400.00" onclick="price(document.getElementById('btn8')); sumprice(); price_totail(); qty_totail(); " class="btn-price">
                                </form>
                            </div>
                            <hr>
                            <div class="sale-totail">
                                <div class="frm-sale-totail">
                                    <form name="FrmSale" id="FrmSale" action="pay.php" method="post" required>
                                        <span style="display:none;"> <label for="price">ชื่อสินค้า:</label> <input required type="text" name="namepro" id="namepro" class="inp-readonly" readonly></span>
                                        <label for="price">ราคา (หน่วย:THB):</label> <input required type="text" name="price" id="price" class="inp-readonly" readonly>
                                        <label for="qty">จำนวน :</label> <input required type="number" name="qty" id="qty" value="1" onkeyup="sumprice(); price_totail(); qty_totail();">
                                        <label for="QTYtotail">ราคาสุทธิ (หน่วย:THB):</label> <input required type="text" name="QTYtotail" id="QTYtotail" readonly class="inp-readonly">
                                    </form>
                                </div>


                                <div class="order-sale">
                                    <h4>สรุปการสั่งซื้อ</h4>
                                    <hr class="hr-dot">
                                    <p style="font-size: 22px;">
                                        ชื่อสินค้า:<span id="name-pro" style="font-weight: bold; color: #820303;"></span>
                                        <br>จำนวน: <span id="qty-pro" style="font-weight: bold; color: #820303;"></span> ชิ้น
                                        <br>ราคา: <span id="price-pro" style="font-weight: bold; color: #820303;"></span> บาท
                                        <hr class="hr-dot">
                                        <span>
                                            <h5 style="text-align:right; ">ราคาสุทธิ <span id="sum" style="font-weight: bold; color: #820303;"></span> THB</h5>
                                        </span>
                                        <hr class="hr-double">
                                    </p>



                                </div>

                                <div class="goto">
                                    <h4>ช่องทางการชำระ</h4>
                                    <hr class="hr-dot">
                                    <div class="pay" >
                                        <form name="frmPay" method="post" id="frmPay" >
                                            <h5 style="color:#6b6b6b;"><input type="radio"  name="pay" id="tw" value="1"   action="pay.php" style="display: none;" readonly> trem wallet (Commingsoon)</h5>
                                            <h5><input type="radio"  name="pay" id="pp" value="prompt pay" action="pay.php" required checked form="FrmSale"> prompt pay</h5>  
                                            
                                            
                                        </form>
<div class="btn-ss">
                                                <button type="submit" class="summit" form="FrmSale">ยืนยันการสั่ง</button>
                                            </div>
                                        
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <!-- end main2 -->
                </div>
            </div>
            
        </main>
    </div>
    <footer class="container"><?php require("../footer.php"); ?></footer>
</body>
<script src="js/price.js"></script>

</html>