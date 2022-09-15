<?php
/* Класс курица  */

class chicken extends Animal{
    
    /**
     * Уникальный номер курицы
     */ 
    function __construct() 
    {
        $this->animalID = parent::$id++;
    }

    /**
     * Количество яиц получаемых одной курицей
     */ 
    public function getProduct() 
    {
        return rand(0,1);
    }
}
