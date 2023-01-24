<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="./vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="./css/admin.css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <script src="./js/content_events.js"></script>
    <script src="./js/content_publication.js"></script>
    <script src="./js/addtocart.js"></script>
    <script src="./vendor/jquery/jquery-3.6.0.min.js"></script>
    <script src="./vendor/bootstrap/js/bootstrap.js"></script>
    <script src="https://kit.fontawesome.com/fc56662415.js" crossorigin="anonymous"></script>
</head>
<body>
    <section id="admin-board">
        <div class="topbar">
            <div class="title">Admin Page</div>
            <div class="logout">
                <button>Log Out</button>
            </div>
        </div>
        <div class="for">
            <h3>Event Page</h3>
            <div class="content" id="event">
                <form action="#" method="post">
                    <label for="img_event">Upload image:</label>
                    <br>
                    <input type="file" accept=".jpg, .png, .jpeg" name="img_event" id="img_event">
                    <br>
                    <br>
                    <label for="txt_event">Write the text:</label>
                    <br>
                    <textarea id="txt_event" cols="50" rows="4" name="txt_event"></textarea>
                    <br>
                    <input type="submit" name="event_form" value="Submit" class="submit-btn"></input>
                </form>
                <a href="#">View current list.</a>
                <br>
                <p>
                    *) Content automatically submitted to database. If you want to delete content, check in database
                    <br>
                    *) Content also submitted in directory: <b>./public/js/content_events.js</b>
                </p>
            </div>
        </div>
        <div class="for">
            <h3>Publication Page</h3>
            <div class="content" id="publication">
                <form action="#" method="post">
                    <label for="name_pub">Name</label>:
                    <input type="text" id="name_pub" name="name_pub">
                    <br>
                    <label for="nrp_pub">NRP</label>:
                    <input type="text" id="nrp_pub" name="nrp_pub">
                    <br>
                    <label for="file_pub">File</label>:
                    <input type="file" accept=".pdf" name="file_pub" id="file_pub">
                    <br>
                    <input type="submit" name="publication_form" value="Submit" class="submit-btn">
                </form>
                <a href="#">View current list.</a>
                <br>
                <p>
                    *) Make sure that your <b>Name</b> and <b>NRP</b> are correct.
                    <br>
                    *) Content also submitted in directory: <b>./public/js/content_publication.js</b>
                </p>
            </div>
        </div>
        <div class="for">
            <h3>Store Page</h3>
            <div class="content" id="store">
                <form action="#" method="post">
                    <label for="name_str">Product Name</label>:
                    <input type="text" id="name_str" name="name_str">
                    <br>
                    <label for="price_str">Price</label>:
                    <input type="number" id="price_str" name="price_str">
                    <br>
                    <label for="type_str">Product Type</label>:
                    <select name="type_str" id="type_str">
                        <option value="item1">Buku</option>
                        <option value="item2">Souvenir</option>
                        <option value="item3">Seragam</option>
                    </select>
                    <br>
                    <label for="file_str">Product Image</label>:
                    <input type="file" accept=".jpg, .png, .jpeg" name="file_str" id="file_str">
                    <br>
                    <input type="submit" name="store_form" value="Submit" class="submit-btn">
                </form>
                <a href="#">View current list.</a>
                <br>
                <p>
                    *) Input price without coma or dot.
                    <br>
                    *) For example, if product's price is <b>Rp45.500</b>, type 45500.
                    <br>
                    *) Content also submitted in directory: <b>./public/js/addtocart.js</b>
                </p>
            </div>
        </div>
    </section>
</body>
</html>