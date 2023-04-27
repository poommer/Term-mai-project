<?php

//ลดราคา
$sels_1 = 2;
$sels_2 = 5;
$sels_3 = 10;



?>

<!DOCTYPE html>
<?php require("bootstrap-css-js.php"); ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/Rev.css">
    <link rel="shortcut icon" type="image/x-icon" href="/img/logo.ico" />
    <title>term-mai | เติมมั้ย</title>
</head>

<body>
    <header style="z-index:0;">
        <?php
        require("header-login.php");
        ?>
    </header>

    <div class="container">
        <main>
            <!-- img slide -->
            <div class="sb" style="padding: 5px;">
                <?php
                require("slidbar.php");
                ?>
            </div>
            <!----------------->
            <br>
            <div class="container">
                <section class="container">
                    <h1>บริการที่แนะนำ</h1>
                    <div class="container">
                        <div class="menu-re">


                            <div class="row">

                                <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                    <a href="service/salePage/sale-garena.php">
                                        <div class="box-1">
                                            <div class="container">
                                                <div>
                                                    <img src="img/game/1_garena.png" alt="" class="re-menu">
                                                </div>

                                            </div>

                                            <div class="sele">

                                                <?php
                                                echo "<p>- " . $sels_1 . "%</p>";
                                                ?>

                                            </div>

                                        </div>
                                    </a>
                                </div>

                                <!--menu2--->
                                <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                    <a href="service/salePage/sale-line.php">
                                        <div class="box-1">
                                            <div class="container">
                                                <div>
                                                    <img src="img/game/1_LINEprepaid.png" alt="" class="re-menu">
                                                </div>

                                            </div>

                                            <div class="sele">
                                                <?php
                                                echo "<p>- " . $sels_2 . "%</p>";
                                                ?>
                                            </div>
                                    </a>
                                </div>
                            </div>

                            <!--menu3--->
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                <a href="service/salePage/sale-true.php">
                                    <div class="box-1">
                                        <div class="container">
                                            <div>
                                                <img src="img/game/1_trueMoney.png" alt="" class="re-menu">
                                            </div>

                                        </div>

                                        <div class="sele">
                                            <?php
                                            echo "<p>- 2%</p>";
                                            ?>
                                        </div>
                                </a>
                            </div>
                        </div>

                        <!--menu4--->
                        <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <a href="service/salePage/sale-ragn.php">
                                <div class="box-1">
                                    <div class="container">
                                        <div>
                                            <img src="img/game/2_ragnarok.png" alt="" class="re-menu">
                                        </div>

                                    </div>

                                    <div class="sele">
                                        <?php
                                        echo "<p>- 2%</p>";
                                        ?>
                                    </div>
                            </a>
                        </div>
                    </div>

                    <!--menu5--->
                    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <a href="service/outOfStock.php">
                            <div class="box-1">
                                <div class="container">
                                    <div>
                                        <img src="img/game/2_freefire.png" alt="" class="re-menu">
                                    </div>

                                </div>

                                <div class="sele">
                                    <?php
                                    echo "<p>- 2%</p>";
                                    ?>
                                </div>
                        </a>
                    </div>
            </div>

            <!--menu6--->
            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6 col-sm-6" id="3201">
                <a href="service/outOfStock.php">
                    <div class="box-1">
                        <div class="container">
                            <div>
                                <img src="img/game/2_zepeto.png" alt="zepeto" class="re-menu">
                            </div>

                        </div>

                        <div class="sele">
                            <?php
                            echo "<p>- 2%</p>";
                            ?>
                        </div>
                </a>
            </div>
    </div>
    </div>
    </div>


    </section>

    <hr>

    <section class="container" id="bg-2">
        <h1 align="center">ทำไมถึงต้องใช้บริการเรา?</h1>
        <p align="center">มีเกมเมอร์หลายคนที่นิยมใช้เติมมั้ย เพื่อเติมเงินหรือซื้อบัตรเติมเกมโปรดต่าง ๆ มากมาย เมื่อสั่งซื้อเสร็จรับสินค้าได้เลยทันที</p>
        <div class="container">
            <div class="menu-re">


                <div class="row">

                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">


                        <div class="box-1">
                            <div class="container">
                                <div class="way-se">
                                    <a href="#3201">
                                        <div class="container-way">
                                            <img src="./img/icon/security.png" alt="">
                                            <h4>ปลอดภัย</h4>
                                            <small>ได้รับความไว้วางใจกว่า 1 ปี</small>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">

                        <div class="box-1">
                            <div class="container">
                                <div class="way-se">
                                    <a href="#3201">
                                        <div class="container-way">
                                            <img src="./img/icon/fast-time.png" alt="">
                                            <h4>รวดเร็ว</h4>
                                            <small>ไม่กี่คลิ๊กได้รับสินค้าทันที</small>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>




                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">

                        <div class="box-1">
                            <div class="container">
                                <div class="way-se">
                                    <a href="#3201">
                                        <div class="container-way">
                                            <img src="./img/icon/click.png" alt="">
                                            <h4>สะดวก</h4>
                                            <small>ไม่ต้องเดินทาง ไม่ต้องรอคิว</small>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>



                    <!-- <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6"> -->

                    <div class="box-1">
                        <div class="container">
                            <div class="way-se">
                                <a href="#3201">
                                    <div class="container-way">
                                        <img src="./img/icon/gift.png" alt="">
                                        <h4>คุ้มค่า</h4>
                                        <small>กับส่วนลดเพื่อคุณคนพิเศษ</small>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>


    </section>
    <hr>
    <section>
        <div class="re-head">
            <h1>รีวิวจากลูกค้าของเรา</h1>
            <a href="Rev.php">
                <h5>ดูทั้งหมด</h5>
            </a>
        </div>

        <div class="container-review">
            <div class="card-container">
                <div class="re-main">
                    <div class="card-head">
                        <img class="img-profile" src="img/profile/profile01.png" alt="profile" style="width: 52px; height: 52px;">
                        <p style="margin-left: 2px; font-size:18px;">LaoLakNaiNa😂💓 <br>
                            <span style="margin-left: 2px; font-size:12px;">25 Jan. 2023 , 12:10:25AM</span>
                        </p>
                    </div>
                    <div class="card-body">
                        <p>
                            มันดีเกินปุยมุ้ยอ่าาา มุแงงงง ชอบมากง่ะะ รักเยย ไอบ้าเอ่ยย😂😂😂💓💓💓💓💓
                        </p>
                    </div>

                </div>
            </div>

            <div class="card-container">
                <div class="re-main">
                    <div class="card-head">
                        <img class="img-profile" src="img/profile/profile01.png" alt="profile" style="width: 52px; height: 52px;">
                        <p style="margin-left: 2px; font-size:18px;">++AYINOMOTO++951 <br>
                            <span style="margin-left: 2px; font-size:12px;">23 Jan. 2023 , 1:10:25PM</span>
                        </p>
                    </div>
                    <div class="card-body">
                        <p>
                            เว็บนี่เพื่อแนะนำมาครับ ใช้ครั้งแรกก็ติดเลย รักเลย...
                        </p>
                    </div>

                </div>
            </div>

            <div class="card-container">
                <div class="re-main">
                    <div class="card-head">
                        <img class="img-profile" src="img/profile/profile02.png" alt="profile" style="width: 52px; height: 52px;">
                        <p style="margin-left: 2px; font-size:18px;">คูมครูแน็ท😊 <br>
                            <span style="margin-left: 2px; font-size:12px;">22 Jan. 2023 , 12:10:25AM</span>
                        </p>
                    </div>
                    <div class="card-body">
                        <p>
                        ฌoบมๅกฆฬ่ๅๅ ฌoบมๅกฆฬ่ๅๅ ฌoบมๅกฆฬ่ๅๅ ฌoบมๅกฆฬ่ๅๅ ฌoบมๅกฆฬ่ๅๅ ฌoบมๅกฆฬ่ๅๅ ฌoบมๅกฆฬ่ๅๅ ฌoบมๅกฆฬ่ๅๅ ฌoบมๅกฆฬ่ๅๅ
                        </p>
                    </div>

                </div>
            </div>

            <div class="card-container">
                <div class="re-main">
                    <div class="card-head">
                        <img class="img-profile" src="img/profile/profile02.jpg" alt="profile" style="width: 52px; height: 52px;">
                        <p style="margin-left: 2px; font-size:18px;">chingchang XXx <br>
                            <span style="margin-left: 2px; font-size:12px;">19 Jan. 2023 , 12:10:25AM</span>
                        </p>
                    </div>
                    <div class="card-body">
                        <p>
                        โคตรดีอ่ะ  โคตรดีอ่ะ โคตรดีอ่ะ  โคตรดีอ่ะ โคตรดีอ่ะ โคตรดีอ่ะ โคตรดีอ่ะ โคตรดีอ่ะ โคตรดีอ่ะ โคตรดีอ่ะ โคตรดีอ่ะ
                         โคตรดีอ่ะ โคตรดีอ่ะ โคตรดีอ่ะ โคตรดีอ่ะ โคตรดีอ่ะ โคตรดีอ่ะ โคตรดีอ่ะ โคตรดีอ่ะ โคตรดีอ่ะ โคตรดีอ่ะ โคตรดีอ่ะ
                         โคตรดีอ่ะ โคตรดีอ่ะ โคตรดีอ่ะ โคตรดีอ่ะ โคตรดีอ่ะ โคตรดีอ่ะ โคตรดีอ่ะ โคตรดีอ่ะ โคตรดีอ่ะ โคตรดีอ่ะ โคตรดีอ่ะ
                         โคตรดีอ่ะ โคตรดีอ่ะ โคตรดีอ่ะ โคตรดีอ่ะ โคตรดีอ่ะ โคตรดีอ่ะ โคตรดีอ่ะ โคตรดีอ่ะ โคตรดีอ่ะ โคตรดีอ่ะ โคตรดีอ่ะ
                        </p>
                    </div>

                </div>
            </div>

            <div class="card-container">
                <div class="re-main">
                    <div class="card-head">
                        <img class="img-profile" src="img/profile/profile01.png" alt="profile" style="width: 52px; height: 52px;">
                        <p style="margin-left: 2px; font-size:18px;">LaoLakNaiNa😂💓 <br>
                            <span style="margin-left: 2px; font-size:12px;">18 Jan. 2023 , 12:10:25AM</span>
                        </p>
                    </div>
                    <div class="card-body">
                        <p>
                            มันดีเกินปุยมุ้ยอ่าาา มุแงงงง ชอบมากง่ะะ รักเยย ไอบ้าเอ่ยย😂😂😂💓💓💓💓💓
                        </p>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <hr>

    <section>
        <h1 style="text-align:center; color:#626262;"> เกี่ยวกับเรา | เงื่อนไข&ข้อตกลง | นโยบายความเป็นส่วนตัว </h1>
        <p>
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        เกี่ยวกับเรา
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse bgg" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <span class="p-head">ก่อนผู้ซื้อจะทำการซื้อสินค้า</span>
                        <br><br>โปรดอ่านข้อตกลงและเงื่อนไขการใช้บริการและยอมรับในคำชี้แจงที่ทางร้านได้ระบุไว้ด้านล่างก่อน
                        <br>
                        <br>
                        <span class="p-head">เงื่อนไขการซื้อสินค้า</span>
                        <ul><br>
                            <li>
                                ร้านเป็นร้านจำหน่ายสินค้าในรูปแบบ Digital Product ต่างๆ ได้แก่ บัตรกิฟการ์ด, สำหรับขั้นตอนการซื้อสินค้า ทางร้านได้จัดทำตัวอย่าง และขั้นตอนพร้อมวิธีการซื้อสินค้าให้อย่างละเอียดครบถ้วน
                                ผู้ซื้อจึงควรศึกษาขั้นตอนอย่างละเอียดก่อนที่จะทำการชำระเงินซื้อสินค้า ทั้งนี้ ผู้ซื้อสามารถติตด่อปรึกษาทางร้านก่อนซื้อสินค้าได้ทั้งทาง เบอร์โทรศัพท์, inbox
                                เพจร้าน และ Line@
                            </li>

                            <li>
                                เปิดให้บริการทุกวัน เวลา 10.00น. - 22.00น. โดยเวลาดังกล่าวเป็นช่วงเวลาที่ทางร้านจะถาม-ตอบข้อความต่างๆ หากมีการแจ้งประกาศปิดร้าน ทางร้านจะแจ้งให้ทราบล่วงหน้าผ่านทางหน้าเว็บไซด์ ,
                                หน้าเพจ Facebook และ Line@ของทางร้าน
                            </li>

                            <li>
                                การซื้อสินค้าทุกชนิดจากร้าน ผู้ซื้อจะได้รับสินค้าทาง อีเมล โดยผู้ซื้อเองจะต้องเป็นผู้มาแจ้งชำระก่อน พร้อมด้วยรายละเอียดการแจ้งชำระต่างๆตามตัวอย่างที่แสดงบนเว็บไซด์
                            </li>

                            <li>
                                ขอสงวนสิทธ์ในการเปลี่ยนแปลงราคาสินค้า-บริการต่างๆโดยไม่ต้องแจ้งให้ทราบล่วงหน้า ผู้ซื้อจะต้องทำการตรวจสอบราคาสินค้าในเว็บไซด์ทุกครั้งก่อนทำการชำระเงิน หากยอดชำระไม่ครบ
                                จะต้องชำระเพิ่มให้ครบ และหากชำระเกิน จะไม่มีการทอนเงินหรือคำนวนส่วนลดใดๆทั้งสิ้นการชำระเงิน
                            </li>

                            <li>
                                ไม่รับชำระผ่านตู้บุญเติมทุกกรณี หากฝ่าฝืนพยายามโอนเข้ามาด้วยระบบ "บุญเติม" ทางร้านจะไม่รับผิดชอบ
                            </li>

                            <li>
                                ไม่รับชำระและไม่รับผิดชอบสำหรับการชำระเงินแบบโอนข้ามวัน เช่น โอนเงินจาก True Wallet > บัญชีธนาคาร (ต้องรอเงินเข้าปลายทาง) โอนเงินจาก Airpay > บัญชีธนาคาร (ต้องรอเงินเข้าปลายทาง)
                                หากผู้ซื้อได้ดำเนินการด้วยวิธีดังกล่าวไปแล้ว ผู้ซื้อจะต้องเป็นผู้แจ้งเวลาที่ยอดเงินเข้าบัญชีทางร้านด้วยตัวเอง ทางร้านจะไม่ตรวจสอบให้เนื่องจากตรวจสอบไม่ได้ และหากผู้ซื้อแจ้งเวลาเงินเข้าบัญชีทางร้านแล้ว
                                ทางร้านตรวจสอบไม่เจอยอดนั้นในเวลาดังกล่าว ทางร้านจะไม่ส่งสินค้าให้ จนกว่าผู้ซื้อจะแจ้งเวลาเงินเข้าที่ถูกต้องเท่านั้น
                            </li>

                            <li>
                                ไม่รับชำระเงินผ่านช่องทางอื่นๆนอกเหนือจากการโอนเงินธนาคาร, โอน True Wallet, โอน Airpay และบัตรทรูมันนี่ ทางร้านขอสงวนสิทธ์ในการรับผิดชอบ และจะไม่ตรวจสอบหากฝ่าฝืนหรือพยายามใช้ช่องทางอื่นในการชำระเงินเข้ามา
                                ตัวอย่างเช่น โอนเงินผ่านไปรษณีย์, ตู้บุญเติม และ อื่นๆที่ทางร้านไม่ได้ระบุเอาไว้
                            </li>

                            <li>
                                หากชำระด้วยการโอน True Wallet จะต้องโอนเงินเข้าบัญชี True Wallet ของร้านเท่านั้น
                            </li>

                            <li>
                                ผู้ซื้อจะต้องแสดงหลักฐานการชำระเงินทุกครั้ง เช่นโอนเงิน จะต้องมีสลิปใบเสร็จโอนเงิน (จากตู้หรือจากแอพฯก็ได้) โดยรายละเอียดในสลิปจะต้องประกอบด้วย วัน-เวลาโอน, ยอดโอน, ธนาคารที่โอน
                            </li>

                            <li>
                                ผู้ซื้อจะต้องชำระเงินให้พอดีกับราคาสินค้าที่ซื้อ ทางร้านจะไม่รับผิดชอบต่อยอดโอนเงินที่เกินมา และจะไม่มีการนำไปคำนวนส่วนลดใดๆทั้งสิ้น ผู้ซื้อควรตรวจสอบราคาสินค้าก่อนชำระทุกครั้ง
                            </li>

                            <li>
                                การแจ้งชำระ : ทางร้านจะไม่ส่งสินค้าหากผู้ซื้อแจ้งรายละเอียดการชำระไม่ครบถ้วนถึงแม้จะชำระเงินมาแล้วก็ตาม เช่น ไม่ลงสลิป, ไม่แจ้งชื่อสินค้า, แจ้งรายละเอียดไม่ครบตามตัวอย่าง เป็นต้น
                                ทางร้านจะตรวจสอบและสินค้าต่อเมื่อผู้ซื้อแจ้งชำระครบถ้วนเท่านั้น
                            </li>
                        </ul>

                        <br>

                        <span class="p-head">หน้าที่และขอบเขตการดูแลรับผิดชอบสินค้า (สินค้าทั่วไป)</span>
                        <ul><br>
                            <li>
                                งดให้บริการแก่ผู้ซื้อที่ใจร้อน เร่งรีบ รอคิวไม่ได้ รอร้านเปิดไม่ได้ ทางร้านมีสิทธ์แบนหรือบล็อคได้ทันทีโดยไม่ต้องรับผิดชอบกับเงินที่ชำระเข้ามาแล้ว
                            </li>

                            <li>
                                ผู้ซื้อตกลงและยินยอมหากจะไม่ได้รับสินค้าทันทีหลังแจ้งชำระ โดยทางร้านจะส่งสินค้าตามลำดับคิวผู้ซื้อ และอาจมีผู้ซื้อจำนวนมากในช่วงเวลานั้นๆ ผู้ซื้อยินดีรอรับสินค้าตามลำดับคิวที่เข้าใช้บริการอยู่ในเวลาเดียวกัน
                                • สินค้าทุกชนิด จะทำการส่งให้ในเวลาทำการ 10.00น. - 22.00น. ผู้ซื้อยอมรับเงื่อนไขนี้ และยินดีรอรับสินค้าในเวลาทำการ
                                • ขอสงวนสิทธ์ในการดูแลรับผิดชอบ หากผู้ซื้อนำสินค้าที่ซื้อไปแล้วไปใช้อย่างผิดวิธีเช่น ซื้อไอดีเกมแล้วนำไปใช้กับโปรแกรมช่วยเล่นทำให้ถูกระงับบัญชี หรือ ซื้อบัตรเติมเกมโซนอเมริกา แต่ใช้บัญชีโซนญี่ปุ่นทำให้ไม่สามารถใช้ได้ เป็นต้น
                            </li>

                            <li>
                                ไม่มีการการจองสินค้าทุกชนิด ไม่ว่าผู้ซื้อจะทำการหยิบสินค้าลงตะกร้าไปแล้วก็ตาม ลำดับการส่งสินค้า จะส่งให้ผู้ซื้อที่ทำการชำระเงินและชำระตามตัวอย่างครบถ้วนก่อนเท่านั้น
                            </li>

                            <li>
                                ร้านตรวจสอบและส่งสินค้าให้ผู้ซื้อทุกท่านโดยไม่มีการจัดแบ่งลำดับความสำคัญว่าจะเป็นสมาชิกเว็บไซด์ Termtang หรือไม่ก็ตาม ทางร้านยอมรับว่า สินค้าที่ส่งมอบให้ผู้ซื้ออาจมีปัญหาบ้าง เช่นสินค้าถูกใช้แล้ว, สินค้าไม่ตรงกับที่ซื้อ
                                หรือสินค้าอาจมีการถูกส่งซ้ำกับผู้ซื้อท่านอื่น แต่ทางร้านยินดีตรวจสอบอย่างละเอียด หากว่าความผิดดังกล่าวเกิดขึ้นจากร้าน Termtang จริง ทางร้านยินดีแก้ไขปัญหาให้กับผู้ซื้อ แต่หากความผิดไม่ได้เกิดขึ้นจากฝั่งทางร้าน
                                ทางร้านเองก็ขอสงวนสิทธ์ในการดูแลรับผิดชอบสินค้าและบริการดังกล่าว
                            </li>

                            <li>
                                ผู้ซื้อยอมรับว่าร้าน ไม่มีความผิดใดๆ หากได้รับสินค้าแล้ว แต่ไม่เข้าใจในตัวสินค้า เพราะทางร้านได้ให้สินค้าพร้อมตัวอย่างการใช้งานที่ครบถ้วนแล้ว
                            </li>

                            <li>
                                สงวนสิทธ์ไม่รับผิดชอบและไม่ส่งสินค้า หากผู้ซื้อชำระเงินตามวิธีตัวอย่างจากสื่ออื่นๆที่ไม่ได้จัดทำขึ้นโดยร้าน แล้วไม่ตรงตามตัวอย่างการชำระเงินของทางร้าน
                            </li>
                        </ul>

                        <br>

                        <span class="p-head">หน้าที่และขอบเขตการดูแลรับผิดชอบสินค้า (สินค้าทั่วไป)</span>
                        <ul><br>
                            <li>
                                ขอสงวนสิทธ์ในการคืนเงินและเปลี่ยนสินค้าอันเกิดจากความผิดพลาดของผู้ซื้อ เช่น ซื้อผิด, เปลี่ยนใจ, อยากเปลี่ยนสินค้า
                                รวมไปถึงซื้อไปแล้วไม่เข้าใจในตัวสินค้า-ใช้สินค้าไม่เป็น เป็นต้น
                            </li>

                            <li>
                                ทางร้านจะพิจารณาตรวจสอบเปลี่ยนสินค้าหรือคืนเงินให้แก่ผู้ซื้อในกรณีที่ความผิดพลาดนั้นเกิดจากฝั่งของทางร้านเอง
                                เช่น ส่งสินค้าซ้ำกับผู้ซื้อท่านอื่น สินค้ามีปัญหาใช้งานไม่ได้ เป็นต้น
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        เงื่อนไข&ข้อตกลง
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse bgg" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="coomingsoon">
                            <h1>coomming soon</h1>
                        </div>
                    </div>
                </div>
            </div>


            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        นโยบายความเป็นส่วนตัว
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse bgg" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="coomingsoon">
                            <h1>coomming soon</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </p>
    </section>
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