<html>
<head>
    <title>Prijavite se</title>

    <link rel="stylesheet" href="{{asset('/css/style.css')}}">

    <!-- font-family: 'Nunito', sans-serif; -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>
<div class="lijeva_slika">
    {!! Html::image(asset('/images/logo.png')) !!}
</div>
<div class="login_forma">
    <form action="/prijavi_me" method="post">
        <div class="forma">
            <input type="hidden" name="_token" value="iFj6lMUe2emCx0eHVkB5NgsF8exhzpDw13dwIpZk">
            <div class="red_forme">
                <h4>PRIJAVITE SE</h4>
            </div>

            <div class="input_okvir ">
                <div class="input_okvir_i">
                    <i class="fas fa-user"></i>
                </div>
                <input type="text" name="username" placeholder="Vaš username" value="" autocomplete="off">
            </div>
            <div class="input_okvir  ">
                <div class="input_okvir_i">
                    <i class="fas fa-unlock-alt"></i>
                </div>
                <input type="password" name="sifra" placeholder="Vaša šifra">
            </div>

            <div class="input_button">
                <input type="submit" value="PRIJAVITE SE">
            </div>
        </div>
    </form>
</div>
</body>
</html>
