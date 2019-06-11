<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Item Checked Out</title>
</head>
<body>

    <?php
        $id=$_GET["id"];
        $numBuy=$_GET["numBuy"];
        $loc=$_GET["loc"];

        require_once("../../database/database_connections/ProductClass.php");
        $prod = new Product();

        $result = $prod->GetProductPrice($id);
        $row = $result->fetch();

        $singlePrice = $row['price'];
        $totalPrice = $numBuy * $row['price'];

        $result = $prod->GetProductName($id);
        $row = $result->fetch();

        $itemName = $row['name'];

        $result = $prod->GetProductStock($id);
        $row = $result->fetch();
        $inStock = $row['stock'];

        $prod->UpdateProductStock($id,($inStock-$numBuy));

    ?>

    <div>

        <h2>Dievery Location: <?php echo $loc ?></h2><br>

        <h2>Item Name: <?php echo $itemName ?></h2>
        <h2>Quantity Bought: <?php echo $numBuy ?></h2>
        <h2>Single Price: <?php echo $singlePrice ?></h2>
        <h2>Total Price: <?php echo $totalPrice ?></h2>

        <br><br><br>
        <h3>Cash will be recived on delivery.</h3>

    </div>

    <?php
        header("refresh:100,url=item_selected.php?id=".$id);
    ?>
    
</body>
</html>