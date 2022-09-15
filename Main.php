<?php
include('Farm.php');

/* Количество животных и их регистрация */
$registr = Farm::registerAnimals(10, 20);

/* Количество произведенного товара за неделю */
Farm::takeAllProducts($registr);   

/* Покупаем животных */
$inputCow = 10 + readline("Введите число купленных коров: \n");
$inputChicken = 20 + readline("Введите число купленных куриц: \n");

/* Количество животных и регистрация после покупки */
$registr = Farm::registerAnimals($inputCow, $inputChicken);

/* Количество произведенного товара за неделю после покупки */
Farm::takeAllProducts($registr);