<?php
/* Основной класс */

abstract class Animal {

    static $id = 1;  // Статический ключ

    public $animalID = 0;  // Номер животного

    /** 
     * Количество собранной продукции 
     */
    public abstract function getProduct();

    /** 
     * Возвращаем класс 
     */
    public function getNameOfClass() 
    {
        return static::class;
    }
}
