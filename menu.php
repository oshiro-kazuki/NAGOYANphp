<?php
  class Menu {
    protected $name;
    protected $image;
    protected $price;
    private $orderCount = 0;
    protected static $count = 0;

    public function __construct($name, $image, $price) {
      $this->name = $name;
      $this->image = $image;
      $this->price = $price;
      self::$count++;
    }

    public function getName() {
      return $this->name;
    }

    public function getImage() {
      return $this->image;
    }

    public function getPrice() {
      return $this->price;
    }

    public function getOrderCount() {
      return $this->orderCount;
    }

    public function setOrderCount($orderCount) {
      $this->orderCount = $orderCount;
    }

    public function getCount() {
      return self::$count;
    }

    public function getTaxInPrice() {
      return floor($this->price * 1.08);
    }

    public function getTotal() {
      return $this->getTaxInPrice() * $this->orderCount;
    }
  
  }
?>