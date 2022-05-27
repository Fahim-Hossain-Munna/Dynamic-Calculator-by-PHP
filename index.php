<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
  <div class="one">
  <form action="connection.php" method="POST">
    <h1>PHP Calculator</h1>
    <label>Enter a Valid Number 1 :</label> 
    <input type="text" placeholder=" Enter Value One" name="one">
    <label>Enter a Valid Number 2 :</label>
    <input type="text" placeholder="Enter Value Two" name="two">
    <br></br>
    <button type="submit"  name="add">Addition(+)</button>
    <button type="submit"  name="substract">Subtraction(-)</button>
    <button type="submit"  name="sum">Multiplication(*)</button>
    <button type="submit" name="divided">Dividing(/)</button>

    </form>
  </div>
</body>
</html>