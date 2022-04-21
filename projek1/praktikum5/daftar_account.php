<?php
require_once 'praktikum5/class_accout.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Account</title>
</head>

<body>

    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>No. Accouunt</th>
                <th>Pemilik</th>
                <th>Saldo</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;

            $arrAccount = [
                $Hilmi = new Account('ABC0001', 'Hilmi', 5500000),
                $Banu = new Account('ABC0002', 'Banu', 852000),
                $Samsul = new Account('ABC0001', 'Samsul', 740000)
            ];

            foreach ($arrAccount as $valueAccount) {
            ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $valueAccount->getProperties('nomor'); ?></td>
                    <td><?= $valueAccount->getProperties('nama'); ?></td>
                    <td><?= number_format($valueAccount->getProperties('saldo'), 2, ',', '.'); ?></td>
                </tr>
            <?php
                $no++;
            }
            ?>
        </tbody>
    </table>
</body>

</html>