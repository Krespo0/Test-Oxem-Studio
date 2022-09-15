<?php
/* Класс корова  */ 

class cow extends Animal {

    /**
     * Уникальный номер коровы
     */ 
    function __construct() 
    {
        $this->animalID = parent::$id++;
    }

    /**
     * Количество молока получаемого одной коровой
     */ 
    public function getProduct() 
    {
        return rand(8, 12);
    }
}
