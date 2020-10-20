<?php

    $price = 0;
    $cash = 0;
    $change = 0;
    $isCashValid = false;

    if(!empty($_GET['dish']) && !empty($_GET['cash'])){
        $cash=$_GET['cash'];
        $ordered = strtolower($_GET['dish']);

        switch($ordered){
            case 'pork':
                $price = 75.34;
            break;
            case 'chicken':
                $price = 100.00;
            break;
            case 'caldereta':
                $price = 70.00;
            break;
        }

        if ($cash >= $price){
            $change = $cash - $price;
            $isCashValid = true;
        }

    }


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Placed</title>
    <link rel="stylesheet" href="order.css">
</head>
<body>
    <section>
        <?php if(!empty($_GET['dish']) && !empty($_GET['cash']) && $isCashValid){ ?>
            <div class="order-info">
                <div class="info">
                    Entered Dish: 
                    <?php
                        echo $_GET["dish"]; 
                    ?>
                </div>
                <div class="info">
                    Price: 
                    <?php
                        echo $price; 
                    ?>
                </div>
                <div class="info">
                    Cash: 
                    <?php
                        echo $cash; 
                    ?>
                </div>
                <hr>
                <div class="info">
                    Change: 
                    <?php
                        echo $change; 
                    ?>
                </div>
            </div>
        <?php }else{?>

            <h1>something's wrong with your input</h1>

            <?php if(!$isCashValid){ ?>
                <h2> ,Cash not enough!</h2>
            <?php }?>

        <?php }?>
    </section>
</body>
</html>