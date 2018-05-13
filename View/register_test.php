<!DOCTYPE html>
<html lang="en">
<?php include_once "header.php"; ?>

<body>

  <div class="container">

    <div class="fonts">REGISTRATION</div>



    <form action="../Controller/controller.php?method=insertUser" method=post>
      <input type="text" placeholder="name" name="name" class="data" required autofocus /><br>
      <input type="text" placeholder="surname" name="surname" class="data" required autofocus /><br>
      <input type="email" placeholder="email" name="email" class="data" required /><br>
      <input type="password" placeholder="passowrd" name="password" class="data" required /><br>
      <input type="password" placeholder="repeat password" name="password2" class="data" required /><br>
      <input type="submit" class="button" value="SEND" /><br>
    </form>

  </div>


<?php include_once "footer.php"; ?>
</body>

</html>
