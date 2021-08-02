<?php

require_once('OrderFactory.php');

$order = new OrderFactory(
            [
                [
                    '1', [
                        ["Soto Betawi (+Telor Dadar)", 2],
                        ["Soto Boyolali + Nasi", 2],
                        ["Nasi Box Paket A", 1],
                    ],
                ], [
                    '2', [
                        ["Ayam Goreng", 1],
                        ["Ayam Bakar + Nasi", 2],
                        ["Nasi Box Paket B", 1],
                    ],
                ], [
                    '3', [
                        ["Puyuh Bakar", 3],
                        ["Soto Boyolali + Nasi", 1],
                        ["Nasi Box Paket C", 1],
                    ]
                ]
            ]
        );
$data_pesanan = $order->build();

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
    <?php foreach($data_pesanan as $meja_pesanan) : ?>
    <h1>Daftar Pesanan Meja Nomor <?php echo $meja_pesanan[0] ?></h1>
    <table border=1>
        <tr>
            <th># (Nomor)</th>
            <th>Nama Menu</th>
            <th>Jumlah Beli</th>
        </tr>
        <?php $i = 0 ?>
        <?php foreach($meja_pesanan[1] as $pesanan_menu) : ?>
        <tr>
            <?php $i++; ?>
            <td><?php echo $i ?></td>
            <td><?php echo $pesanan_menu[0] ?></td>
            <td><?php echo $pesanan_menu[1] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <?php endforeach; ?>
</body>
</html>