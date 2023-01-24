<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Himasika Store</title>
    <link rel="stylesheet" href="./vendor/bootstrap/css/bootstrap.css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel='stylesheet'>
    <link rel="stylesheet" href="./vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/store.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./vendor/font-awesome/css/font-awesome.min.css">
    <script src="./vendor/jquery/jquery-3.6.0.min.js"></script>
    <script src="./vendor/bootstrap/js/bootstrap.js"></script>
    <script src="./js/all_script.js"></script>
    <script src="https://kit.fontawesome.com/fc56662415.js" crossorigin="anonymous"></script>
</head>
<body>
    <!--HEADER-->  
    @extends('template.header')
    @section('header')
    @endsection
    <section class="store-section">
        <div class="top-container">
            <div class="store-title">
                <h3>Himasika Store</h3>
            </div>
            <div class="store-payment store-responsive">
                <a href="#" class="btn btn-payment" onclick="openPayment()">
                    <span class="icon-shopping-cart"></span>
                </a>
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
            <div class="item-container" id="item-buku"></div>
            <div class="item-container" id="item-seragam"></div>
            <div class="item-container" id="item-souvenir"></div>
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
            <h6>Detail Pesanan</h6>
            <div style="height: 120px; overflow-y: auto;">
                <table id="table-order">
                    <tr class="first-row">
                        <th>Nama barang</th>
                        <th>Jumlah</th>
                        <th>Total</th>
                    </tr>
                    <tr class="total-row">
                        <td id="total">Total harga</td>
                        <td></td>
                        <td id="total-price">Rp0</td>
                    </tr>
                </table> 
            </div>
            <h6>Konfirmasi Pembayaran</h6>
            <table id="table-confirm">
                <tr>
                    <td>Metode pembayaran</td>
                    <td><select class="payment-method">
                            <option>OVO</option>
                            <option>GoPay</option>
                            <option>DANA</option>
                            <option>LinkAja</option>
                        </select>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>Nomor tujuan</td>
                    <td>082321213637</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Nama tujuan</td>
                    <td>Himasika ITS</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Unggah bukti</td>
                    <td>
                        <form action="/upload_bukti.php">
                            <input type="file" accept=".jpg, .png, .jpeg" name="fileToUpload" id="fileToUpload">
                        </form>
                    </td>
                    <td></td>
                </tr>
            </table>
            <div class="done-payment">
                <button onclick="deleteRow()">Bersihkan</button>
                <form action="#"><button type="submit">Selesai</button></form>
            </div>
        </section>
    </section>
    <script src="./js/addtocart.js"></script>
    <!--FOOTER-->  
    @extends('template.footer')
    @section('footer')
    @endsection
</body>
</html>