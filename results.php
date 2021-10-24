<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orel & Reshka</title>
</head>

<body>
    <h1>Results</h1>
    <p>
        <?php
    $level = $_POST["level"];
    $count = $_POST["count"];
    $win = $_POST["win"];
    $diff = $_POST["diff"];
    $money = $_POST["money"];
    if($count / 2 < $win){
      if($level == "easy"){
        $money += 10;
      } else if ($level == "medium"){
        $money += 50;
      } else if ($level == "hard"){
        $money += 1000;
      }
      if($level == "easy" && $diff == 0){
        $diff += 1;
        echo("Вітаю, тепер вам достеприй рівень medium");
      }else if($level == "medium" && $diff == 1){
        $diff += 1;
        echo("Вітаю, тепер вам достеприй рівень hard");
      }
    }else{
      echo("На жаль, Ви програли:(");
    }
    echo ("<p>На Вашому рахунку: ". $money ." </p>");
  ?>
    </p>
    <form action="index.php" method="POST">
        <input type="hidden" name="diff" value="<?php echo($diff); ?>">
        <input type="hidden" name="money" value="<?php echo($money); ?>">
        <input type="submit" value="Зіграти ще раз.">
    </form>
</body>

</html>