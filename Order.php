<?php


class Order
{
    private $order;

    public function __construct($options)
    {
        $this->order = $options;
    }

    public function info()
    {
        return $this->order;
    }
}