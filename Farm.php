<?php
include('Animal.php');
include('Cow.php');
include('Chicken.php');
/* Фабрика животных */

class Farm {

    /** 
     * @return cow
     * Добавляем корову 
     */
    public function createCow(): cow 
    {
        return new cow;
    }

    /** 
     * @return chicken
     * Добавляем курицу 
     */
    public function createСhicken(): chicken 
    {
        return new chicken;
    }

    /**
     * @param int $cow 
     * @param int $chicken
     * @return array $register
     * Регистрируем всех животных
     */
    static function registerAnimals(int $count_cow, int $count_chicken): array 
    {
        $factory = new Farm();

        $registr = array();  // Хлев 

        for( $i=1; $i<=$count_cow; $i++ ) { 

            $registr[] = $factory->createCow();  // Регистрируем коров
        }
        
        for( $i=1; $i<=$count_chicken; $i++ ) {
        
            $registr[] = $factory->createСhicken();  // Регистрируем куриц
        }
        
        echo "Количество коров - " . $count_cow . " голов. \n";
        echo "Количество куриц - " . $count_chicken . " голов. \n";

        return $registr;
    }

    /**
     * @param array $registr
     * @return array $products
     * Получаем продукты
     */
    static function takeAllProducts(array $registr)
    {
        $milk = 0;
        $egg = 0;
        
        for ( $i=1; $i<=7; $i++ ) { 
            
            $milk_per_day = 0;
            $egg_per_day = 0; 

            foreach ($registr as $value) { 
                
                switch ($value->getNameOfClass()) {
        
                    case "cow":
                        $milk_per_day += $value->getProduct();
                        $milk += $value->getProduct();
                        break;
        
                    case "chicken":
                        $egg_per_day += $value->getProduct();
                        $egg += $value->getProduct();
                        break;
                }
            }
            echo "Количество молока за  " . $i . " день - " . $milk_per_day . " литров. \n";
            echo "Количество яиц за " . $i . " день - " . $egg_per_day . " штук. \n";
        }
        echo "Количество молока за неделю - " . $milk . " литров. \n";
        echo "Количество яиц за неделю - " . $egg . " штук. \n";
    }
}