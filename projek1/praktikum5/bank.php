<?php
require_once 'praktikum5/class_accout.php';

class AccountBank extends Account
{
    public function doTransfer($destination, $uangTranfer)
    {
        Account::withdraw($uangTranfer, false);
        $destination->deposit($uangTranfer, false);

        echo "Transfer sejumlah " .  number_format($uangTranfer, 2, ',', '.') . " dari $this->nama - $this->nomor ke $destination->nama - $destination->nomor sukses! </br>";
    }
}

$azzam = new AccountBank('ABC0010', 'Azzam', 3450000);
$anggi = new AccountBank('ABC0011', 'Anggi', 45000);
$hilmi = new AccountBank('ABC0012', 'Hilmi', 235000);

$azzam->deposit(1000000);
$azzam->cetak();

$azzam->doTransfer($anggi, 1000000);
$azzam->cetak();

$azzam->doTransfer($hilmi, 500000);
$azzam->cetak();

$anggi->cetak();
$hilmi->cetak();

?>