<?php

require_once('Order.php');

class OrderFactory
{
    private $customs;

    public function __construct($order)
    {
        $customs = [];
        $customs = $order;

        $this->customs = $customs;
    }

    public function build()
    {
        $build = new Order($this->customs);
        return $build->info();
    }
}