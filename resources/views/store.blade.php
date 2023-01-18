<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Himasika Store</title>
    <link rel="stylesheet" href="./frontend/libraries/bootstrap/css/bootstrap.css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel='stylesheet'>
    <link rel="stylesheet" href="./frontend/libraries/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./frontend/libraries/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="./frontend/styles/header.css">
    <link rel="stylesheet" href="./frontend/styles/store.css">
    <link rel="stylesheet" href="./frontend/styles/footer.css">
    <script src="https://kit.fontawesome.com/fc56662415.js" crossorigin="anonymous"></script>
    <script src="./frontend/libraries/jquery/jquery-3.6.0.min.js"></script>
    <script src="./frontend/libraries/bootstrap/js/bootstrap.js"></script>
    <script src="./frontend/scripts/page-animation.js"></script>
    <script src="./frontend/scripts/store.js"></script>
</head>
<body>
    <!-- Header -->
    @extends('template.header')
    @section('header')
    @endsection

    <section class="store-section">
        <div class="top-container">
            <div class="store-title">
                <h3>Himasika Store</h3>
            </div>
            <div class="store-search">
                <input type="text" placeholder="Ayo cari disini...">
                <a href="#" class="btn btn-search">
                    <span class="icon-search"></span>
                </a>
            </div>
            <div class="store-payment">
                <a href="#" class="btn btn-payment" onclick="openPayment()">
                    <span class="icon-shopping-cart"></span>
                </a>
            </div>
        </div>
        <div class="container">
            <div class="item-bar">
                <a href="#" class="item-list-1">Buku</a>
                <a href="#" class="item-list-2">Seragam</a>
                <a href="#" class="item-list-3">Souvenir</a>
                <!--? you can include more item here !-->
            </div>
            <div class="item-container item-buku">
                <!--TODO --------------- item list buku ------------------------>
                <div class="item-list">
                    <img src="./frontend/images/store/mary_boas.jpg">
                    <p>Fisika Matematika</p>
                    <h6>Rp90.000</h6>
                    <button>Add-Cart</button>
                </div>
                <div class="item-list">
                    <img src="./frontend/images/store/fisdas1.jpg">
                    <p>Fisika Dasar 1</p>
                    <h6>Rp50.000</h6>
                    <button>Add-Cart</button>
                </div>
                <div class="item-list">
                    <img src="./frontend/images/store/optoelektronika.jpg">
                    <p>Diktat Optoelektronika</p>
                    <h6>Rp50.000</h6>
                    <button>Add-Cart</button>
                </div>
                <div class="item-list">
                    <img src="./frontend/images/store/fismod.jpg">
                    <p>Konsep Fisika Moderen</p>
                    <h6>Rp70.000</h6>
                    <button>Add-Cart</button>
                </div>
                <div class="item-list">
                    <img src="./frontend/images/store/kuantum.jpg">
                    <p>Fisika Kuantum</p>
                    <h6>Rp50.000</h6>
                    <button>Add-Cart</button>
                </div>
            </div>
            <div class="item-container item-seragam">
                <!--TODO --------------- item list seragam ------------------------>
                <div class="item-list">
                    <img src="./frontend/images/store/kemejaputih.png">
                    <p>Kemeja Putih</p>
                    <h6>Rp120.000</h6>
                    <button>Add-Cart</button>
                </div>
                <div class="item-list">
                    <img src="./frontend/images/store/celanakain.jpg">
                    <p>Celana kain hitam</p>
                    <h6>Rp150.000</h6>
                    <button>Add-Cart</button>
                </div>
                <div class="item-list">
                    <img src="./frontend/images/store/dasi.jpg">
                    <p>Dasi hitam</p>
                    <h6>Rp20.000</h6>
                    <button>Add-Cart</button>
                </div>
                <div class="item-list">
                    <img src="./frontend/images/store/pantofelpria.jpg">
                    <p>Sepatu pantofel Pria</p>
                    <h6>Rp190.000</h6>
                    <button>Add-Cart</button>
                </div>
                <div class="item-list">
                    <img src="./frontend/images/store/pantofelwanita.jpg">
                    <p>Sepatu pantofel wanita</p>
                    <h6>Rp190.000</h6>
                    <button>Add-Cart</button>
                </div>
            </div>
            <div class="item-container item-souvenir">
                <!--TODO --------------- item list souvenir ------------------------>
                <div class="item-list">
                    <img src="./frontend/images/store/topi.jpg">
                    <p>Topi</p>
                    <h6>Rp15.000</h6>
                    <button>Add-Cart</button>
                </div>
                <div class="item-list">
                    <img src="./frontend/images/store/jam.jpg">
                    <p>Jam dinding</p>
                    <h6>Rp30.000</h6>
                    <button>Add-Cart</button>
                </div>
                <div class="item-list">
                    <img src="./frontend/images/store/gantungankunci.jpg">
                    <p>Gantungan kunci</p>
                    <h6>Rp5.000</h6>
                    <button>Add-Cart</button>
                </div>
                <div class="item-list">
                    <img src="./frontend/images/store/bonekawisuda.jpg">
                    <p>Boneka wisuda</p>
                    <h6>Rp40.000</h6>
                    <button>Add-Cart</button>
                </div>
                <div class="item-list">
                    <img src="./frontend/images/store/buket.jpg">
                    <p>Buket wisuda</p>
                    <h6>Rp80.000</h6>
                    <button>Add-Cart</button>
                </div>
            </div>
        </div>
    </section> 
    <!--! ----------------------------- Payment Pop Up ----------------------------->
    <section id="payment-popup">
        <section id="payment-section">
            <div class="close-icon" onclick="closePayment()">
                <span class="fas fa-times"></span>
            </div>
            <div>
                <h5>Pembayaran</h5>
                <p>Pastikan pesanan anda sudah sesuai sebelum menyelesaikan pembayaran</p>
            </div>
        </section>
    </section>
    @extends('template.footer')
    @section('footer')
    @endsection
</body>
</html>