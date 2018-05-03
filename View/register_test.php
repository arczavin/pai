<!DOCTYPE html>
<html lang="en">
<?php include_once "header.php"; ?>

<head>
    <link type="text/css" rel="stylesheet" href="../Resources/css/style_test.css">
<style>
    /*
     h3 {
      color: orange; // prioryty before css style
    }
    */
</style>
</head>
<body>
    <div class="container">
        <br>
        <p id="para1">The id Selector (para1)</p>
        <p class="center">Red and center-aligned paragraph.</p>
        <p class="center large">This paragraph will be red, center-aligned, and in a large font-size.</p>

        <h3>DODAJ UZYTKOWNIKA</h3>

        <form action="../Controller/controller.php?method=insertUser" method=post>
            <input type="text" placeholder="imie" name="imie" class="data" required autofocus />
            <input type="text" placeholder="nazwisko" name="nazwisko" class="data" required autofocus />
            <input type="email" placeholder="email" name="email" class="data" required />
            <input type="password" placeholder="haslo" name="haslo" class="data" required />
            <input type="password" placeholder="powtorz haslo" name="haslo2" class="data" required />
            <input type="submit" class="data" value="DODAJ" />
        </form>
    </div>
</body>
<?php include_once "footer.php"; ?>
</html>
