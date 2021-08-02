<?php

require_once('OrderCustom.php');
require_once('Order.php');

class OrderFactory
{
    private $customs;

    public function __construct($nama_menu, $jumlah_beli)
    {
        $customs = new OrderCustom();
        $customs->nama_menu = $nama_menu;
        $customs->jumlah_beli = $jumlah_beli;

        $this->customs = $customs;
    }

    public function build()
    {
        return new Order($this->customs);
    }
}