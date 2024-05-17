<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <style>
            div
            {
                margin: auto;
                margin-top: 20px;
                height: auto;
                width: 500px;
                color: forestgreen;
                border: 2px solid black;
                padding: 25px;
                background: honeydew;

            }
        </style>
    </head>

    <body>
        <div>
            <form action="hesapMakinesi.php" name="hesapla" method="get">
                <h3 align = "center">hesap makinesi uygulaması</h3>
                <table cellpadding="5px" width = "450px">
                    <tr>
                        <td>Birinci sayı</td>
                        <td><input type="text" name = "sayi1" class="form-control" placeholder="1.sayıyı giriniz"></td>
                    </tr>

                    <tr>
                        <td>ikinci sayı</td>
                        <td><input type="text" name = "sayi2" class ="form-control" placeholder="2.sayıyı giriniz"></td>
                    </tr>
                    
                    <tr>
                        <td>yapılacak işlem</td>
                        <td><select name="secim" class="form-control">
                            <option value="+">topla</option>
                            <option value="-">fark</option>
                            <option value="*">çarpım</option>
                            <option value="/">bölüm</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                    <td colspan="2"><input

                   type="submit" value="HESAPLA" style="width:215px" class="btn btn-outline-primary">

                   <input type="reset"value="Temizle" style="width:220px" class="btn btn-outline-danger"></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>
