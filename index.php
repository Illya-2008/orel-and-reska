<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orel & Reshka</title>
</head>
<body>
  <h1>Вітаємо у грі Orel & Reshka!</h1>
    <?php
      if(isset($_POST["diff"])){
        $diff = $_POST["diff"];
      }else{
        $diff = 0;
      }
      if(isset($_POST["money"])){
        $money = $_POST["money"];
      }else{
        $money = 20;
      }
      echo("<p>Ваш баланс: ". $money ." грн</p>");
      $money -= 5;
    ?>
    <form action="game.php" method="POST">
          <input type="hidden" name="level" value="easy">
          <input type="hidden" name="count" value="0">
          <input type="hidden" name="win" value="0">
          <input type="hidden" name="diff" value="<?php echo($diff); ?>">
          <input type="hidden" name="money" value="<?php echo($money); ?>">
          <input type="submit" value="Easy">
    </form>
    <form action="game.php" method="POST">
          <input type="hidden" name="level" value="medium">
          <input type="hidden" name="count" value="0">
          <input type="hidden" name="win" value="0">
          <input type="hidden" name="diff" value="<?php echo($diff); ?>">
          <input type="hidden" name="money" value="<?php echo($money); ?>">
          <input type="submit" value="Medium" <?php if($diff < 1) echo("disabled"); ?>>
    </form>
    <form action="game.php" method="POST">
          <input type="hidden" name="level" value="hard">
          <input type="hidden" name="count" value="0">
          <input type="hidden" name="win" value="0">
          <input type="hidden" name="diff" value="<?php echo($diff); ?>">
          <input type="hidden" name="money" value="<?php echo($money); ?>">
          <input type="submit" value="Hard" <?php if($diff < 2) echo("disabled"); ?>>
    </form>
</body>
</html>