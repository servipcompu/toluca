#!/bin/php
<?php
/**
 * Calcula la sucesi�n de Fibonacci hasta $n
 *
 * Este algoritmo es m�s eficiente que fibonacci.php,
 * el ejercicio que codificamos tan r�pidamente en pocos 
 * segundos en http://www.youtube.com/watch?v=iThjUV66fMU
 *  
 * Esta variante requiere que entiendas muy bien 
 * c�mo funcionan los bucles.
 *
 * Como dijimos en aquel video, lo importante es el n�mero 
 * de veces que se ejecuta el cuerpo del bucle. En este caso
 * podemos empezar con $i=2, de modo que el �ndice nos sirve 
 * para llevar el conteo de los elementos que hemos a�adido 
 * a $numbers.
 *
 * As� nos ahorramos tener que contar el n�mero de elementos
 * en cada iteraci�n como hicimos en fibonacci.php con 
 * la instrucci�n PHP: $last = count($numbers);
 *
 * @param int $n N�mero en�simo de Fibonacci
 * @return array Los $n primeros n�meros de Fibonacci
 */
function fibonacci($n)
{
    $numbers = [1,1];
    for($i=2;$i<$n;$i++)
    {        
        $numbers[] = $numbers[$i-1] + $numbers[$i-2];        
    }
    return $numbers;
}

print_r(fibonacci(10));
