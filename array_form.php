<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method = "post">
    <input type="text" name="product" id="" placeholder= "INPUT PRODUCT">
    <input type="number" name="stocks" id="" placeholder = "STOCKS NUMBER">
     <input type="text" name="category" id="" placeholder = "CATEGORY">
    <input type="submit" value="submit">
    </form>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $product = [
        "goods" => $_POST["product"],
        "stock" => $_POST["stocks"],
        "category" => $_POST["category"]
    ];
  echo $product["goods"] ." has " .$product["stock"] ." in stock and its from the category of " .$product["category"];


}

?>