<?php require_once 'classes/db.php'; $db = new DB(); require_once 'classes/users.php'; $user = new User(); ?>

<html>
<head>
    <title>Dobrodošli na Villa-Una oficijalnu stranicu</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">


    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/menu/menu.css">
    <link rel="stylesheet" href="css/footer/footer.css">

    <link rel="stylesheet" href="css/apartment/apartments.css">
    <link rel="stylesheet" href="swipe/dist/css/swiper.min.css">

    <link rel="stylesheet" href="css/menu/mobile_menu.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <a href="https://icons8.com/icon/41152/speed"></a>

    <script src="js/menu/menu.js"></script>
    <script src="js/map.js"></script>
</head>
<body>
<?php
if(isset($_SESSION['lang'])){
    if($_SESSION['lang'] == 'cro'){
        require_once 'parts/menu/menu.php';
    }else if($_SESSION['lang'] == 'en'){
        require_once 'parts/menu/menu_en.php';
    }else{
        require_once 'parts/menu/menu_de.php';
    }
}else{
    require_once 'parts/menu/menu.php';
}
?>

<?php
if(isset($_SESSION['lang'])){
    if($_SESSION['lang'] == 'cro'){
        ?>
        <div class="about_header about_header_2">
            <h2>Cijene apartmana </h2>
        </div>

        <div class="single_table">
            <div class="table_row table_row_h">
                <div class="table_col">
                    <p>Predsezona</p>
                </div>
                <div class="table_col">
                    <p>Vrijeme boravka</p>
                </div>
                <div class="table_col">
                    <p>Cijena po noćenju</p>
                </div>
                <div class="table_col">
                    <p>Cijena za 7 noćenja</p>
                </div>
                <div class="table_col table_col_last">
                    <p>Broj osoba</p>
                </div>
            </div>
            <div class="table_row">
                <div class="table_col">
                    <p>Apartman I</p>
                </div>
                <div class="table_col">
                    <p>01.05. – 30.06.</p>
                </div>
                <div class="table_col">
                    <p>50 Eur</p>
                </div>
                <div class="table_col">
                    <p>350 Eur</p>
                </div>
                <div class="table_col table_col_last">
                    <p>5</p>
                </div>
            </div>


            <div class="table_row table_row_hidden table_row_h">
                <div class="table_col">
                    <p>Predsezona</p>
                </div>
                <div class="table_col">
                    <p>Vrijeme boravka</p>
                </div>
                <div class="table_col">
                    <p>Cijena po noćenju</p>
                </div>
                <div class="table_col">
                    <p>Cijena za 7 noćenja</p>
                </div>
                <div class="table_col table_col_last">
                    <p>Broj osoba</p>
                </div>
            </div>


            <div class="table_row">
                <div class="table_col">
                    <p>Apartman II</p>
                </div>
                <div class="table_col">
                    <p>01.05. – 30.06.</p>
                </div>
                <div class="table_col">
                    <p>50 Eur</p>
                </div>
                <div class="table_col">
                    <p>350 Eur</p>
                </div>
                <div class="table_col table_col_last">
                    <p>6</p>
                </div>
            </div>


            <div class="table_row table_row_hidden table_row_h">
                <div class="table_col">
                    <p>Predsezona</p>
                </div>
                <div class="table_col">
                    <p>Vrijeme boravka</p>
                </div>
                <div class="table_col">
                    <p>Cijena po noćenju</p>
                </div>
                <div class="table_col">
                    <p>Cijena za 7 noćenja</p>
                </div>
                <div class="table_col table_col_last">
                    <p>Broj osoba</p>
                </div>
            </div>


            <div class="table_row">
                <div class="table_col">
                    <p>Studio Ap. 2</p>
                </div>
                <div class="table_col">
                    <p>01.05. – 30.06.</p>
                </div>
                <div class="table_col">
                    <p>30 Eur</p>
                </div>
                <div class="table_col">
                    <p>210 Eur</p>
                </div>
                <div class="table_col table_col_last">
                    <p>2 + 1</p>
                </div>
            </div>

        </div>

        <div class="single_table">
            <div class="table_row table_row_h">
                <div class="table_col">
                    <p>Sezona</p>
                </div>
                <div class="table_col">
                    <p>Vrijeme boravka</p>
                </div>
                <div class="table_col">
                    <p>Cijena po noćenju</p>
                </div>
                <div class="table_col">
                    <p>Cijena za 7 noćenja</p>
                </div>
                <div class="table_col table_col_last">
                    <p>Broj osoba</p>
                </div>
            </div>



            <div class="table_row">
                <div class="table_col">
                    <p>Apartman I</p>
                </div>
                <div class="table_col">
                    <p> 01.07. – 31.08.</p>
                </div>
                <div class="table_col">
                    <p>70 Eur</p>
                </div>
                <div class="table_col">
                    <p>490 Eur</p>
                </div>
                <div class="table_col table_col_last">
                    <p>5</p>
                </div>
            </div>


            <div class="table_row table_row_hidden table_row_h">
                <div class="table_col">
                    <p>Predsezona</p>
                </div>
                <div class="table_col">
                    <p>Vrijeme boravka</p>
                </div>
                <div class="table_col">
                    <p>Cijena po noćenju</p>
                </div>
                <div class="table_col">
                    <p>Cijena za 7 noćenja</p>
                </div>
                <div class="table_col table_col_last">
                    <p>Broj osoba</p>
                </div>
            </div>


            <div class="table_row">
                <div class="table_col">
                    <p>Apartman II</p>
                </div>
                <div class="table_col">
                    <p> 01.07. – 31.08.</p>
                </div>
                <div class="table_col">
                    <p>70 Eur</p>
                </div>
                <div class="table_col">
                    <p>490 Eur</p>
                </div>
                <div class="table_col table_col_last">
                    <p>6</p>
                </div>
            </div>


            <div class="table_row table_row_hidden table_row_h">
                <div class="table_col">
                    <p>Predsezona</p>
                </div>
                <div class="table_col">
                    <p>Vrijeme boravka</p>
                </div>
                <div class="table_col">
                    <p>Cijena po noćenju</p>
                </div>
                <div class="table_col">
                    <p>Cijena za 7 noćenja</p>
                </div>
                <div class="table_col table_col_last">
                    <p>Broj osoba</p>
                </div>
            </div>


            <div class="table_row">
                <div class="table_col">
                    <p>Studio Ap. 2</p>
                </div>
                <div class="table_col">
                    <p> 01.07. – 31.08.</p>
                </div>
                <div class="table_col">
                    <p>40 Eur</p>
                </div>
                <div class="table_col">
                    <p>280 Eur</p>
                </div>
                <div class="table_col table_col_last">
                    <p>2 + 1</p>
                </div>
            </div>

        </div>

        <div class="single_table">
            <div class="table_row table_row_h">
                <div class="table_col">
                    <p>Postsezona</p>
                </div>
                <div class="table_col">
                    <p>Vrijeme boravka</p>
                </div>
                <div class="table_col">
                    <p>Cijena po noćenju</p>
                </div>
                <div class="table_col">
                    <p>Cijena za 7 noćenja</p>
                </div>
                <div class="table_col table_col_last">
                    <p>Broj osoba</p>
                </div>
            </div>



            <div class="table_row">
                <div class="table_col">
                    <p>Apartman I</p>
                </div>
                <div class="table_col">
                    <p> 01.09. – 31.10..</p>
                </div>
                <div class="table_col">
                    <p>50 Eur</p>
                </div>
                <div class="table_col">
                    <p>350 Eur</p>
                </div>
                <div class="table_col table_col_last">
                    <p>5</p>
                </div>
            </div>


            <div class="table_row table_row_hidden table_row_h">
                <div class="table_col">
                    <p>Postsezona</p>
                </div>
                <div class="table_col">
                    <p>Vrijeme boravka</p>
                </div>
                <div class="table_col">
                    <p>Cijena po noćenju</p>
                </div>
                <div class="table_col">
                    <p>Cijena za 7 noćenja</p>
                </div>
                <div class="table_col table_col_last">
                    <p>Broj osoba</p>
                </div>
            </div>


            <div class="table_row">
                <div class="table_col">
                    <p>Apartman II</p>
                </div>
                <div class="table_col">
                    <p>01.09. – 31.10.</p>
                </div>
                <div class="table_col">
                    <p>50 Eur</p>
                </div>
                <div class="table_col">
                    <p>350 Eur</p>
                </div>
                <div class="table_col table_col_last">
                    <p>6</p>
                </div>
            </div>


            <div class="table_row table_row_hidden table_row_h">
                <div class="table_col">
                    <p>Postsezona</p>
                </div>
                <div class="table_col">
                    <p>Vrijeme boravka</p>
                </div>
                <div class="table_col">
                    <p>Cijena po noćenju</p>
                </div>
                <div class="table_col">
                    <p>Cijena za 7 noćenja</p>
                </div>
                <div class="table_col table_col_last">
                    <p>Broj osoba</p>
                </div>
            </div>


            <div class="table_row">
                <div class="table_col">
                    <p>Studio Ap. 2</p>
                </div>
                <div class="table_col">
                    <p>01.09. – 31.10.</p>
                </div>
                <div class="table_col">
                    <p>35 Eur</p>
                </div>
                <div class="table_col">
                    <p>245 Eur</p>
                </div>
                <div class="table_col table_col_last">
                    <p>2 + 1</p>
                </div>
            </div>

        </div>

        <?php
    }
    else if($_SESSION['lang'] == 'en'){
        ?>

        <div class="about_header about_header_2">
            <h2>The price list of apartments </h2>
        </div>

        <div class="single_table">
            <div class="table_row table_row_h">
                <div class="table_col">
                    <p>Pre-season:</p>
                </div>
                <div class="table_col">
                    <p>Period of residence</p>
                </div>
                <div class="table_col">
                    <p>Price per night</p>
                </div>
                <div class="table_col">
                    <p>Price for 7 nights</p>
                </div>
                <div class="table_col table_col_last">
                    <p>Number of persons</p>
                </div>
            </div>
            <div class="table_row">
                <div class="table_col">
                    <p>Apartment I</p>
                </div>
                <div class="table_col">
                    <p>01.05. – 30.06.</p>
                </div>
                <div class="table_col">
                    <p>50 Eur</p>
                </div>
                <div class="table_col">
                    <p>350 Eur</p>
                </div>
                <div class="table_col table_col_last">
                    <p>5</p>
                </div>
            </div>


            <div class="table_row table_row_hidden table_row_h">
                <div class="table_col">
                    <p>Pre-season:</p>
                </div>
                <div class="table_col">
                    <p>Period of residence</p>
                </div>
                <div class="table_col">
                    <p>Price per night</p>
                </div>
                <div class="table_col">
                    <p>Price for 7 nights</p>
                </div>
                <div class="table_col table_col_last">
                    <p>Number of persons</p>
                </div>
            </div>


            <div class="table_row">
                <div class="table_col">
                    <p>Apartment II</p>
                </div>
                <div class="table_col">
                    <p>01.05. – 30.06.</p>
                </div>
                <div class="table_col">
                    <p>50 Eur</p>
                </div>
                <div class="table_col">
                    <p>350 Eur</p>
                </div>
                <div class="table_col table_col_last">
                    <p>6</p>
                </div>
            </div>


            <div class="table_row table_row_hidden table_row_h">
                <div class="table_col">
                    <p>Predsezona</p>
                </div>
                <div class="table_col">
                    <p>Period of residence</p>
                </div>
                <div class="table_col">
                    <p>Price per night</p>
                </div>
                <div class="table_col">
                    <p>Price for 7 nights</p>
                </div>
                <div class="table_col table_col_last">
                    <p>Number of persons</p>
                </div>
            </div>


            <div class="table_row">
                <div class="table_col">
                    <p>Studio apartment</p>
                </div>
                <div class="table_col">
                    <p>01.05. – 30.06.</p>
                </div>
                <div class="table_col">
                    <p>30 Eur</p>
                </div>
                <div class="table_col">
                    <p>210 Eur</p>
                </div>
                <div class="table_col table_col_last">
                    <p>2 + 1</p>
                </div>
            </div>

        </div>

        <div class="single_table">
            <div class="table_row table_row_h">
                <div class="table_col">
                    <p>Season</p>
                </div>
                <div class="table_col">
                    <p>Period of residence</p>
                </div>
                <div class="table_col">
                    <p>Price per night</p>
                </div>
                <div class="table_col">
                    <p>Price for 7 nights</p>
                </div>
                <div class="table_col table_col_last">
                    <p>Number of persons</p>
                </div>
            </div>



            <div class="table_row">
                <div class="table_col">
                    <p>Apartment I</p>
                </div>
                <div class="table_col">
                    <p> 01.07. – 31.08.</p>
                </div>
                <div class="table_col">
                    <p>70 Eur</p>
                </div>
                <div class="table_col">
                    <p>490 Eur</p>
                </div>
                <div class="table_col table_col_last">
                    <p>5</p>
                </div>
            </div>


            <div class="table_row table_row_hidden table_row_h">
                <div class="table_col">
                    <p>Season</p>
                </div>
                <div class="table_col">
                    <p>Period of residence</p>
                </div>
                <div class="table_col">
                    <p>Price per night</p>
                </div>
                <div class="table_col">
                    <p>Price for 7 nights</p>
                </div>
                <div class="table_col table_col_last">
                    <p>Number of persons</p>
                </div>
            </div>


            <div class="table_row">
                <div class="table_col">
                    <p>Apartment II</p>
                </div>
                <div class="table_col">
                    <p> 01.07. – 31.08.</p>
                </div>
                <div class="table_col">
                    <p>70 Eur</p>
                </div>
                <div class="table_col">
                    <p>490 Eur</p>
                </div>
                <div class="table_col table_col_last">
                    <p>6</p>
                </div>
            </div>


            <div class="table_row table_row_hidden table_row_h">
                <div class="table_col">
                    <p>Season</p>
                </div>
                <div class="table_col">
                    <p>Period of residence</p>
                </div>
                <div class="table_col">
                    <p>Price per night</p>
                </div>
                <div class="table_col">
                    <p>Price for 7 nights</p>
                </div>
                <div class="table_col table_col_last">
                    <p>Number of persons</p>
                </div>
            </div>


            <div class="table_row">
                <div class="table_col">
                    <p>Studio apartment</p>
                </div>
                <div class="table_col">
                    <p> 01.07. – 31.08.</p>
                </div>
                <div class="table_col">
                    <p>40 Eur</p>
                </div>
                <div class="table_col">
                    <p>280 Eur</p>
                </div>
                <div class="table_col table_col_last">
                    <p>2 + 1</p>
                </div>
            </div>

        </div>



        <div class="single_table">
            <div class="table_row table_row_h">
                <div class="table_col">
                    <p> Post-season:</p>
                </div>
                <div class="table_col">
                    <p>Period of residence</p>
                </div>
                <div class="table_col">
                    <p>Price per night</p>
                </div>
                <div class="table_col">
                    <p>Price for 7 nights</p>
                </div>
                <div class="table_col table_col_last">
                    <p>Number of persons</p>
                </div>
            </div>



            <div class="table_row">
                <div class="table_col">
                    <p>Apartment I</p>
                </div>
                <div class="table_col">
                    <p> 01.09. – 31.10..</p>
                </div>
                <div class="table_col">
                    <p>50 Eur</p>
                </div>
                <div class="table_col">
                    <p>350 Eur</p>
                </div>
                <div class="table_col table_col_last">
                    <p>5</p>
                </div>
            </div>


            <div class="table_row table_row_hidden table_row_h">
                <div class="table_col">
                    <p> Post-season:</p>
                </div>
                <div class="table_col">
                    <p>Period of residence</p>
                </div>
                <div class="table_col">
                    <p>Price per night</p>
                </div>
                <div class="table_col">
                    <p>Price for 7 nights</p>
                </div>
                <div class="table_col table_col_last">
                    <p>Number of persons</p>
                </div>
            </div>


            <div class="table_row">
                <div class="table_col">
                    <p>Apartment II</p>
                </div>
                <div class="table_col">
                    <p>01.09. – 31.10.</p>
                </div>
                <div class="table_col">
                    <p>50 Eur</p>
                </div>
                <div class="table_col">
                    <p>350 Eur</p>
                </div>
                <div class="table_col table_col_last">
                    <p>6</p>
                </div>
            </div>


            <div class="table_row table_row_hidden table_row_h">
                <div class="table_col">
                    <p> Post-season:</p>
                </div>
                <div class="table_col">
                    <p>Period of residence</p>
                </div>
                <div class="table_col">
                    <p>Price per night</p>
                </div>
                <div class="table_col">
                    <p>Price for 7 nights</p>
                </div>
                <div class="table_col table_col_last">
                    <p>Number of persons</p>
                </div>
            </div>


            <div class="table_row">
                <div class="table_col">
                    <p>Studio apartment</p>
                </div>
                <div class="table_col">
                    <p>01.09. – 31.10.</p>
                </div>
                <div class="table_col">
                    <p>35 Eur</p>
                </div>
                <div class="table_col">
                    <p>245 Eur</p>
                </div>
                <div class="table_col table_col_last">
                    <p>2 + 1</p>
                </div>
            </div>

        </div>
        <?php
    }
    else{
        ?>
        <div class="about_header about_header_2">
            <h2>Die Appartementpreise </h2>
        </div>

        <div class="single_table">
            <div class="table_row table_row_h">
                <div class="table_col">
                    <p>Vorsaison</p>
                </div>
                <div class="table_col">
                    <p>Aufenthaltszeit</p>
                </div>
                <div class="table_col">
                    <p>Übernachtungspreis</p>
                </div>
                <div class="table_col">
                    <p>Preis für 7 Übernachtungen</p>
                </div>
                <div class="table_col table_col_last">
                    <p>Personen  Zahl</p>
                </div>
            </div>
            <div class="table_row">
                <div class="table_col">
                    <p>Appartement I</p>
                </div>
                <div class="table_col">
                    <p>01.05. – 30.06.</p>
                </div>
                <div class="table_col">
                    <p>50 Eur</p>
                </div>
                <div class="table_col">
                    <p>350 Eur</p>
                </div>
                <div class="table_col table_col_last">
                    <p>5</p>
                </div>
            </div>
            <div class="table_row table_row_hidden table_row_h">
                <div class="table_col">
                    <p>Vorsaison</p>
                </div>
                <div class="table_col">
                    <p>Aufenthaltszeit</p>
                </div>
                <div class="table_col">
                    <p>Übernachtungspreis</p>
                </div>
                <div class="table_col">
                    <p>Preis für 7 Übernachtungen</p>
                </div>
                <div class="table_col table_col_last">
                    <p>Personen  Zahl</p>
                </div>
            </div>
            <div class="table_row">
                <div class="table_col">
                    <p>Appartement II</p>
                </div>
                <div class="table_col">
                    <p>01.05. – 30.06.</p>
                </div>
                <div class="table_col">
                    <p>50 Eur</p>
                </div>
                <div class="table_col">
                    <p>350 Eur</p>
                </div>
                <div class="table_col table_col_last">
                    <p>6</p>
                </div>
            </div>
            <div class="table_row table_row_hidden table_row_h">
                <div class="table_col">
                    <p>Vorsaison</p>
                </div>
                <div class="table_col">
                    <p>Aufenthaltszeit</p>
                </div>
                <div class="table_col">
                    <p>Übernachtungspreis</p>
                </div>
                <div class="table_col">
                    <p>Preis für 7 Übernachtungen</p>
                </div>
                <div class="table_col table_col_last">
                    <p>Personen  Zahl</p>
                </div>
            </div>
            <div class="table_row">
                <div class="table_col">
                    <p>Studio Ap. 2</p>
                </div>
                <div class="table_col">
                    <p>01.05. – 30.06.</p>
                </div>
                <div class="table_col">
                    <p>30 Eur</p>
                </div>
                <div class="table_col">
                    <p>210 Eur</p>
                </div>
                <div class="table_col table_col_last">
                    <p>2 + 1</p>
                </div>
            </div>
        </div>

        <div class="single_table">
            <div class="table_row table_row_h">
                <div class="table_col">
                    <p>Saison</p>
                </div>
                <div class="table_col">
                    <p>Aufenthaltszeit</p>
                </div>
                <div class="table_col">
                    <p>Übernachtungspreis</p>
                </div>
                <div class="table_col">
                    <p>Preis für 7 Übernachtungen</p>
                </div>
                <div class="table_col table_col_last">
                    <p>Personen  Zahl</p>
                </div>
            </div>



            <div class="table_row">
                <div class="table_col">
                    <p>Appartement I</p>
                </div>
                <div class="table_col">
                    <p> 01.07. – 31.08.</p>
                </div>
                <div class="table_col">
                    <p>70 Eur</p>
                </div>
                <div class="table_col">
                    <p>490 Eur</p>
                </div>
                <div class="table_col table_col_last">
                    <p>5</p>
                </div>
            </div>


            <div class="table_row table_row_hidden table_row_h">
                <div class="table_col">
                    <p>Saison</p>
                </div>
                <div class="table_col">
                    <p>Aufenthaltszeit</p>
                </div>
                <div class="table_col">
                    <p>Übernachtungspreis</p>
                </div>
                <div class="table_col">
                    <p>Preis für 7 Übernachtungen</p>
                </div>
                <div class="table_col table_col_last">
                    <p>Personen  Zahl</p>
                </div>
            </div>


            <div class="table_row">
                <div class="table_col">
                    <p>Appartement II</p>
                </div>
                <div class="table_col">
                    <p> 01.07. – 31.08.</p>
                </div>
                <div class="table_col">
                    <p>70 Eur</p>
                </div>
                <div class="table_col">
                    <p>490 Eur</p>
                </div>
                <div class="table_col table_col_last">
                    <p>6</p>
                </div>
            </div>


            <div class="table_row table_row_hidden table_row_h">
                <div class="table_col">
                    <p>Saison</p>
                </div>
                <div class="table_col">
                    <p>Aufenthaltszeit</p>
                </div>
                <div class="table_col">
                    <p>Übernachtungspreis</p>
                </div>
                <div class="table_col">
                    <p>Preis für 7 Übernachtungen</p>
                </div>
                <div class="table_col table_col_last">
                    <p>Personen  Zahl</p>
                </div>
            </div>


            <div class="table_row">
                <div class="table_col">
                    <p>Studio Ap. 2</p>
                </div>
                <div class="table_col">
                    <p> 01.07. – 31.08.</p>
                </div>
                <div class="table_col">
                    <p>40 Eur</p>
                </div>
                <div class="table_col">
                    <p>280 Eur</p>
                </div>
                <div class="table_col table_col_last">
                    <p>2 + 1</p>
                </div>
            </div>

        </div>

        <div class="single_table">
            <div class="table_row table_row_h">
                <div class="table_col">
                    <p>Nachsaison</p>
                </div>
                <div class="table_col">
                    <p>Aufenthaltszeit</p>
                </div>
                <div class="table_col">
                    <p>Übernachtungspreis</p>
                </div>
                <div class="table_col">
                    <p>Preis für 7 Übernachtungen</p>
                </div>
                <div class="table_col table_col_last">
                    <p>Personen  Zahl</p>
                </div>
            </div>



            <div class="table_row">
                <div class="table_col">
                    <p>Appartement I</p>
                </div>
                <div class="table_col">
                    <p> 01.09. – 31.10..</p>
                </div>
                <div class="table_col">
                    <p>50 Eur</p>
                </div>
                <div class="table_col">
                    <p>350 Eur</p>
                </div>
                <div class="table_col table_col_last">
                    <p>5</p>
                </div>
            </div>


            <div class="table_row table_row_hidden table_row_h">
                <div class="table_col">
                    <p>Nachsaison</p>
                </div>
                <div class="table_col">
                    <p>Aufenthaltszeit</p>
                </div>
                <div class="table_col">
                    <p>Übernachtungspreis</p>
                </div>
                <div class="table_col">
                    <p>Preis für 7 Übernachtungen</p>
                </div>
                <div class="table_col table_col_last">
                    <p>Personen  Zahl</p>
                </div>
            </div>


            <div class="table_row">
                <div class="table_col">
                    <p>Appartement II</p>
                </div>
                <div class="table_col">
                    <p>01.09. – 31.10.</p>
                </div>
                <div class="table_col">
                    <p>50 Eur</p>
                </div>
                <div class="table_col">
                    <p>350 Eur</p>
                </div>
                <div class="table_col table_col_last">
                    <p>6</p>
                </div>
            </div>


            <div class="table_row table_row_hidden table_row_h">
                <div class="table_col">
                    <p>Nachsaison</p>
                </div>
                <div class="table_col">
                    <p>Aufenthaltszeit</p>
                </div>
                <div class="table_col">
                    <p>Übernachtungspreis</p>
                </div>
                <div class="table_col">
                    <p>Preis für 7 Übernachtungen</p>
                </div>
                <div class="table_col table_col_last">
                    <p>Personen  Zahl</p>
                </div>
            </div>


            <div class="table_row">
                <div class="table_col">
                    <p>Studio Ap. 2</p>
                </div>
                <div class="table_col">
                    <p>01.09. – 31.10.</p>
                </div>
                <div class="table_col">
                    <p>35 Eur</p>
                </div>
                <div class="table_col">
                    <p>245 Eur</p>
                </div>
                <div class="table_col table_col_last">
                    <p>2 + 1</p>
                </div>
            </div>

        </div>

        <?php
    }
}else{
    ?>
    <div class="about_header about_header_2">
        <h2>Cijene apartmana </h2>
    </div>

    <div class="single_table">
        <div class="table_row table_row_h">
            <div class="table_col">
                <p>Predsezona</p>
            </div>
            <div class="table_col">
                <p>Vrijeme boravka</p>
            </div>
            <div class="table_col">
                <p>Cijena po noćenju</p>
            </div>
            <div class="table_col">
                <p>Cijena za 7 noćenja</p>
            </div>
            <div class="table_col table_col_last">
                <p>Broj osoba</p>
            </div>
        </div>
        <div class="table_row">
            <div class="table_col">
                <p>Apartman I</p>
            </div>
            <div class="table_col">
                <p>01.05. – 30.06.</p>
            </div>
            <div class="table_col">
                <p>50 Eur</p>
            </div>
            <div class="table_col">
                <p>350 Eur</p>
            </div>
            <div class="table_col table_col_last">
                <p>5</p>
            </div>
        </div>


        <div class="table_row table_row_hidden table_row_h">
            <div class="table_col">
                <p>Predsezona</p>
            </div>
            <div class="table_col">
                <p>Vrijeme boravka</p>
            </div>
            <div class="table_col">
                <p>Cijena po noćenju</p>
            </div>
            <div class="table_col">
                <p>Cijena za 7 noćenja</p>
            </div>
            <div class="table_col table_col_last">
                <p>Broj osoba</p>
            </div>
        </div>


        <div class="table_row">
            <div class="table_col">
                <p>Apartman II</p>
            </div>
            <div class="table_col">
                <p>01.05. – 30.06.</p>
            </div>
            <div class="table_col">
                <p>50 Eur</p>
            </div>
            <div class="table_col">
                <p>350 Eur</p>
            </div>
            <div class="table_col table_col_last">
                <p>6</p>
            </div>
        </div>


        <div class="table_row table_row_hidden table_row_h">
            <div class="table_col">
                <p>Predsezona</p>
            </div>
            <div class="table_col">
                <p>Vrijeme boravka</p>
            </div>
            <div class="table_col">
                <p>Cijena po noćenju</p>
            </div>
            <div class="table_col">
                <p>Cijena za 7 noćenja</p>
            </div>
            <div class="table_col table_col_last">
                <p>Broj osoba</p>
            </div>
        </div>


        <div class="table_row">
            <div class="table_col">
                <p>Studio Ap. 2</p>
            </div>
            <div class="table_col">
                <p>01.05. – 30.06.</p>
            </div>
            <div class="table_col">
                <p>30 Eur</p>
            </div>
            <div class="table_col">
                <p>210 Eur</p>
            </div>
            <div class="table_col table_col_last">
                <p>2 + 1</p>
            </div>
        </div>

    </div>



    <div class="single_table">
        <div class="table_row table_row_h">
            <div class="table_col">
                <p>Sezona</p>
            </div>
            <div class="table_col">
                <p>Vrijeme boravka</p>
            </div>
            <div class="table_col">
                <p>Cijena po noćenju</p>
            </div>
            <div class="table_col">
                <p>Cijena za 7 noćenja</p>
            </div>
            <div class="table_col table_col_last">
                <p>Broj osoba</p>
            </div>
        </div>



        <div class="table_row">
            <div class="table_col">
                <p>Apartman I</p>
            </div>
            <div class="table_col">
                <p> 01.07. – 31.08.</p>
            </div>
            <div class="table_col">
                <p>70 Eur</p>
            </div>
            <div class="table_col">
                <p>490 Eur</p>
            </div>
            <div class="table_col table_col_last">
                <p>5</p>
            </div>
        </div>


        <div class="table_row table_row_hidden table_row_h">
            <div class="table_col">
                <p>Predsezona</p>
            </div>
            <div class="table_col">
                <p>Vrijeme boravka</p>
            </div>
            <div class="table_col">
                <p>Cijena po noćenju</p>
            </div>
            <div class="table_col">
                <p>Cijena za 7 noćenja</p>
            </div>
            <div class="table_col table_col_last">
                <p>Broj osoba</p>
            </div>
        </div>


        <div class="table_row">
            <div class="table_col">
                <p>Apartman II</p>
            </div>
            <div class="table_col">
                <p> 01.07. – 31.08.</p>
            </div>
            <div class="table_col">
                <p>70 Eur</p>
            </div>
            <div class="table_col">
                <p>490 Eur</p>
            </div>
            <div class="table_col table_col_last">
                <p>6</p>
            </div>
        </div>


        <div class="table_row table_row_hidden table_row_h">
            <div class="table_col">
                <p>Predsezona</p>
            </div>
            <div class="table_col">
                <p>Vrijeme boravka</p>
            </div>
            <div class="table_col">
                <p>Cijena po noćenju</p>
            </div>
            <div class="table_col">
                <p>Cijena za 7 noćenja</p>
            </div>
            <div class="table_col table_col_last">
                <p>Broj osoba</p>
            </div>
        </div>


        <div class="table_row">
            <div class="table_col">
                <p>Studio Ap. 2</p>
            </div>
            <div class="table_col">
                <p> 01.07. – 31.08.</p>
            </div>
            <div class="table_col">
                <p>40 Eur</p>
            </div>
            <div class="table_col">
                <p>280 Eur</p>
            </div>
            <div class="table_col table_col_last">
                <p>2 + 1</p>
            </div>
        </div>

    </div>



    <div class="single_table">
        <div class="table_row table_row_h">
            <div class="table_col">
                <p>Postsezona</p>
            </div>
            <div class="table_col">
                <p>Vrijeme boravka</p>
            </div>
            <div class="table_col">
                <p>Cijena po noćenju</p>
            </div>
            <div class="table_col">
                <p>Cijena za 7 noćenja</p>
            </div>
            <div class="table_col table_col_last">
                <p>Broj osoba</p>
            </div>
        </div>



        <div class="table_row">
            <div class="table_col">
                <p>Apartman I</p>
            </div>
            <div class="table_col">
                <p> 01.09. – 31.10..</p>
            </div>
            <div class="table_col">
                <p>50 Eur</p>
            </div>
            <div class="table_col">
                <p>350 Eur</p>
            </div>
            <div class="table_col table_col_last">
                <p>5</p>
            </div>
        </div>


        <div class="table_row table_row_hidden table_row_h">
            <div class="table_col">
                <p>Postsezona</p>
            </div>
            <div class="table_col">
                <p>Vrijeme boravka</p>
            </div>
            <div class="table_col">
                <p>Cijena po noćenju</p>
            </div>
            <div class="table_col">
                <p>Cijena za 7 noćenja</p>
            </div>
            <div class="table_col table_col_last">
                <p>Broj osoba</p>
            </div>
        </div>


        <div class="table_row">
            <div class="table_col">
                <p>Apartman II</p>
            </div>
            <div class="table_col">
                <p>01.09. – 31.10.</p>
            </div>
            <div class="table_col">
                <p>50 Eur</p>
            </div>
            <div class="table_col">
                <p>350 Eur</p>
            </div>
            <div class="table_col table_col_last">
                <p>6</p>
            </div>
        </div>


        <div class="table_row table_row_hidden table_row_h">
            <div class="table_col">
                <p>Postsezona</p>
            </div>
            <div class="table_col">
                <p>Vrijeme boravka</p>
            </div>
            <div class="table_col">
                <p>Cijena po noćenju</p>
            </div>
            <div class="table_col">
                <p>Cijena za 7 noćenja</p>
            </div>
            <div class="table_col table_col_last">
                <p>Broj osoba</p>
            </div>
        </div>


        <div class="table_row">
            <div class="table_col">
                <p>Studio Ap. 2</p>
            </div>
            <div class="table_col">
                <p>01.09. – 31.10.</p>
            </div>
            <div class="table_col">
                <p>35 Eur</p>
            </div>
            <div class="table_col">
                <p>245 Eur</p>
            </div>
            <div class="table_col table_col_last">
                <p>2 + 1</p>
            </div>
        </div>

    </div>

    <?php
}
?>











<?php
if(isset($_SESSION['lang'])){
    if($_SESSION['lang'] == 'cro'){
        require_once 'parts/footer/footer.php';
    }else if($_SESSION['lang'] == 'en'){
        require_once 'parts/footer/footer_en.php';
    }else{
        require_once 'parts/footer/footer_de.php';
    }
}else{
    require_once 'parts/footer/footer.php';
}
?>
</body>
</html>
