
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona główna - Księgarnia Nowa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php require("html/header.php"); ?>

    <section class="page-title">
        <h1 class="main-h1">Ksiegarnia Nowa</h1>
        <a class="header-btn" href="#produkty">Zobacz produkty</a>
    </section>
    <div class="page-tab">
        <h3>Nasze książki</h3>
    </div>

    <section class="shop-items-container" id="produkty">
        
        

        <?php 
            $conn = new mysqli('localhost', 'root', '', 'sklep-ksiegarnia');

            if ($conn -> connect_error) {
                die("Połączenie zawiodło: " . $conn -> connect_error);
              }
              
              $sql = "SELECT * FROM ksiazki";
              $result = $conn -> query($sql);
              
              if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {

                echo "<div class=\"shop-item\">
                <img src=\"img/sklep-obrazek1.jpg\" alt=\"Zdjęcie przedmiotu w sklepie\">
                ";
                  
                echo "<h3>" . $row["nazwa"] . "</h3>";

                echo "<p>" . "Autor: " . $row["autor"] . "</p>";
                
                echo "<h6 class=\"cena\">" . $row['cena'] . "zł (z VAT)" . "</h6>";

                echo "<button class=\"btn_drop\" onclick=\"window.location.href='promocja.html'\">Dodaj do koszyka</button></div>";

                }
              } 
              else {
                echo "Błąd... BRAK BAZY";
              }
              
              $conn -> close();
              ?>
    </section>

    <?php 
     require("html/footer.html");
    ?>

</body>
</html>