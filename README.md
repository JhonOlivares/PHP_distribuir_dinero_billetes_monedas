
```php

<?php

            //Distribuir un monto, en billetes y monedas del Sol peruano.

            $numeroreal = 13243.8;//aqui cambiar el valor- un decimal.
            $numero = $numeroreal;
            $parteDecimal = number_format((float)($numeroreal - floor($numeroreal)), 1, '.', '');//trabajando con decimales
            
            echo "Su vuelto es S./$numero repartidos en:";
            echo "<br>";
            echo "<br>";

            function Calcular($valorActual, $num)
            {
                $tipo = "Billetes";
                if($valorActual < 10)
                {
                    $tipo = "Monedas";
                }
                echo (floor($num/$valorActual)) . " $tipo de S./$valorActual";
                echo "<br>";
                return $num % $valorActual;
            }

            if($numero>=200){
                $numero = Calcular(200, $numero);
            }
            if($numero>=100){                
                $numero = Calcular(100, $numero);
            }
            if($numero>=50){                
                $numero = Calcular(50, $numero);
            }
            if($numero>=20){                
                $numero = Calcular(20, $numero);
            }
            if($numero>=10){                
                $numero = Calcular(10, $numero);                
            }
            echo '--------------------------'; echo '<br>';
            if($numero>=5){                
                $numero = Calcular(5, $numero);
            }
            if($numero>=2){                
                $numero = Calcular(2, $numero);
            }
            if($numero>=1){                
                $numero = Calcular(1, $numero);
            }

            //decimales-------------------------------------------------------------------

            echo '--------------------------'; echo '<br>';
            
            if($parteDecimal>=0.5){                
                echo "1 Moneda de S/0.5"; echo '<br>';
                $parteDecimal = number_format((float)($parteDecimal - 0.5), 1, '.', '');
            }
            
            if($parteDecimal==0.4){                
                echo "2 Monedas de S/0.2"; echo '<br>';
                $parteDecimal = 0;
            }
            
            if($parteDecimal >= 0.2){
                echo "1 Moneda de S/0.2"; echo '<br>';
                $parteDecimal = number_format((float)($parteDecimal - 0.2), 1, '.', '');
            }

            if($parteDecimal>=0.1){                
                echo "1 Moneda de S/0.1";
            }
?>
```