<?php

require_once('OrderCustom.php');

class Order
{
    private $nama_menu;
    private $jumlah_beli;

    public function __construct(OrderCustom $options)
    {
        $this->nama_menu = $options->nama_menu;
        $this->jumlah_beli = $options->jumlah_beli;
    }

    public function info()
    {
        return "
            <td>$this->nama_menu</td>
            <td>$this->jumlah_beli</td>
        ";
    }
}