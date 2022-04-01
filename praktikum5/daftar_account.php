<?php
require_once './class_accout.php';
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
                $bambang = new Account('ABC0001', 'Bambang', 7500000),
                $pamungkas = new Account('ABC0002', 'Pamungkas', 950000),
                $abdu = new Account('ABC0001', 'Abdu', 540000)
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