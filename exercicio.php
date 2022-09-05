<body>
    <p>
        Array: 
        <?php
            $numeros = array(20,15,30,17,8);
            function ImprimirArray($texto){
                echo $texto;
            }
            for($i=0;$i<5;$i++){
                ImprimirArray("\$numeros[".$i."] = ".$numeros[$i]." | ");
            }
            echo "</br>";
        ?>
    </p>    
    <p> 
        Soma do array: 
        <?php
            echo "</br>";
            $soma = 0;
            for($i=0;$i<5;$i++){
                $soma+=$numeros[$i];
            }
            echo "\$soma é ".$soma;
            echo "</br>";
            /*Correção:
                function SomarArray($arrayParametro){
                    $soma = 0;
                    for($i = 0; $i < count($arrayParametro); $i++){
                        $soma += $arrayParametro[$i];
                    }
                    return $soma
                }
            */
        ?>
    </p>    
    <p> 
        Tabuada do 144: 
        <?php
            echo "</br>";
            for($i=1;$i<11;$i++){
                $produto=144*$i;
                echo "144 * ".$i." = ".$produto." | ";
            }
            echo "</br>";
            /*Correção: 
                for($i = 0; $i <= 10; $i++){
                    echo "<br> 144 X ".$i." = ".(144*$i)."<br>";
                }
             */
        ?>
    </p>    
    <p>
        Números pares de 251 a 544: 
        <?php
            echo "</br>";
            $num=251;
            for($i=251;$i<545;$i++){
                if($num%2==0){
                    echo $num." ";
                }
                $num++;
            }
            echo "</br>";
            /*Correção: 
                for($i = 251; $i <= 544; $i++){
                    if($i % 2 == 0){
                        echo "<br>".$i." é par";
                    }
                }
            */
        ?>
    </p>    
    <p> 
        Novos itens do array $numeros: 
        <?php
            echo "</br>";
            array_push($numeros, rand(-10,10));
            array_push($numeros, rand(-10,10));
            array_push($numeros, rand(-10,10));
            for($i=5;$i<8;$i++){
                ImprimirArray("\$numeros[".$i."] = ".$numeros[$i]." | ");
            }
            echo "</br>";
            /*Correção: 
                $meuArray[count($meuArray)] = rand(-10,10);
                Ou
                array_push($meuArray, rand(-10,10));
                $meuArray[count($meuArray)] = rand(-10,10);
                Imprimir($meuArray);
            */
        ?>
    </p>    
    <p>
        Número e porcentagem: 
        <?php
            echo "</br>";
            $no=rand(0,100);
            $percentage=rand(0,100);
            $total=$no*($percentage/100);
            echo $percentage."% de ".$no." = ".$total;
            echo "</br>";
            /**Para calcular porcentagem:
             * (num/100)*porcentagem
             * Ou
             * num*(porcentagem/100)
             */
            /*Correção: 
                
            */
        ?>
    </p>    
    <p>
        Do exercício 1: 
        <?php
            echo "</br>";
            $pares=0;
            $impares=0;
            $positivos=0;
            $negativos=0;
            for($i=0;$i<8;$i++){
                if($numeros[$i]%2==0){
                    $pares++;
                }else if($numeros[$i]%2!=0){
                    $impares++;
                }
            }
            for($i=0;$i<8;$i++){
                if($numeros[$i]>=0){
                    $positivos++;
                }else if($numeros[$i]<0){
                    $negativos++;
                }
            }
            echo "Número de \$pares = ".$pares." | ";
            echo "Número de \$impares = ".$impares." | ";
            echo "Número de \$positivos = ".$positivos." | ";
            echo "Número de \$negativos = ".$negativos;
            echo "</br>";
            /*Correção: 
                
            */
        ?>
    </p>    
    <p> 
        Média do array do exercício 1: 
        <?php
            echo "</br>";
            $count=0;
            $media=0;
            $sum=0;
            for($i=0;$i<8;$i++){
                $count++;
                $sum+=$numeros[$i];
            }
            $media=$sum/$count;
            echo "A média dos ".$i." números do array é ".$media;
            /*Correção: 
                
            */
        ?>
    </p>
</body>