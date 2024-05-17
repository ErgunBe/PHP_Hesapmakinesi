<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
        div
        {
            margin: auto;
            margin-top: 20px;
            height: auto;
            width: 500px;
            color: white;
            border: 2px solid black;
            padding: 25px;
            background: red;
            text-align: center;
            margin-left: 50px;
        }
        a
        {
            color: white;
        }
        a:hover
        {
            color: white;
            text-decoration: none;
        }

    </style>

    </head>

    <body>
        <?php
        $sayi1 = $_GET["sayi1"];
        $sayi2 = $_GET["sayi2"];
        $secim = $_GET["secim"];
        $sonuc = 0;

        if (isset($secim)) 
        {
            if ($secim =='+') 
            {
                $sonuc = $sayi1+$sayi2;
            }
            elseif ($secim == '-') 
            {
                $sonuc = $sayi1-$sayi2;
            }
            elseif ($secim =='*') 
            {
                $sayi1*$sayi2;
            }
            
            elseif ($secim == '/') 
            {
                $sonuc = $sayi1/$sayi2;
            }

        }

         echo "<div><h1 align='center'>$sayi1 $secim $sayi2 = $sonuc</h1>
         <button class='btn btn-primary'><a href='hesapla.php'>
         Hesap Makinesine Dönüş</a></button></div>";

        ?>
    </body>
</html>