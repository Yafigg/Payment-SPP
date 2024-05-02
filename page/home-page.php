<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/home-page.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
      rel="stylesheet" />

    <title>Home Page</title>
</head>
<body>
    <div class="nav">
        <div class="right-links">
            <a href="#">Change Profile</a>
            <a href="#"><button type="submit" name="submit" class="btn2" onclick="window.location.href='payment-page.php'">Log Out</button></a>
        </div>
    </div>
    <main>
        <div class="main-box top">
            <div class="top">
                <div class="box">
                    <p>Hello <b>$username</b>, Welcome</p>
                </div>
                <div class="box">
                    <p>Your Email Is <b>$email</b>, Welcome</p>
                </div>
            </div>
            <div class="block-header">
    <h2>DATA TUNGGAKAN</h2>
    <small>Pembaruan transaksi terakhir tanggal: <span id="update"></span></small>
    <!-- Widgets -->
    <div class="row clearfix">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="info-box-2 bg-blue-grey">
                <span class="icon"><ion-icon name="cash-outline"></ion-icon></span>
                <div class="content">
                    <div class="text">SPP</div>
                    <div class="number count-to" id="spp">Rp 0,-</div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="info-box-2 bg-light-blue">
                <span class="icon"><ion-icon name="cash-outline"></ion-icon></span>
                <div class="content">
                    <div class="text">DSP</div>
                    <div class="number count-to" id="dsp">Rp 0,-</div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="info-box-2 bg-purple">
                <span class="icon"><ion-icon name="cash-outline"></ion-icon></span>
                <div class="content">
                    <div class="text">PDD</div>
                    <div class="number count-to" id="pdd">Rp 0,-<br>
                        <div style="font-size: 10px">Kelebihan Pembayaran</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="info-box-2 bg-teal">
                <span class="icon"><ion-icon name="cash-outline"></ion-icon></span>
                <div class="content">
                    <div class="text">LAINNYA</div>
                    <div class="number count-to" id="lainnya">Rp 0,-</div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="info-box-2 bg-deep-orange">
                <span class="icon"><ion-icon name="stats-chart-outline"></ion-icon></span>
                <div class="content">
                    <div class="text">TOTAL TUNGGAKAN</div>
                    <div class="number count-to" id="total_tunggak">Rp. 0,-</div>
                </div>
            </div>
        </div>
    </div>
    <button type="submit" name="submit" class="btn" onclick="window.location.href='payment-page.php'">Bayar Sekarang</button>
</div>
    </main>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>