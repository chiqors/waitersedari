<?php

require_once('OrderFactory.php');

$commision1 = new OrderFactory("Soto Betawi (+Telor Dadar)", 2);
$order1 = $commision1->build();

$commision2 = new OrderFactory("Soto Boyolali + Nasi", 2);
$order2 = $commision2->build();

$commision3 = new OrderFactory("Nasi Box Paket A", 1);
$order3 = $commision3->build();

?>
<!---- Views ---->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FactoryMethod</title>
</head>
<body>
    <h1>Daftar Pesanan Meja No 1</h1>
    <table border=1>
        <tr>
            <th># Nomor</th>
            <th>Nama Menu</th>
            <th>Jumlah Beli</th>
        </tr>
        <tr>
            <td>1</td>
            <?php echo $order1->info(); ?>
        </tr>
        <tr>
            <td>2</td>
            <?php echo $order2->info(); ?>
        </tr>
        <tr>
            <td>3</td>
            <?php echo $order3->info(); ?>
        </tr>
    </table>
</body>
</html>