<h1>
    <?php
        #Comentário
        //Comentário
        /*Bloco de Comentário*/
        echo "o_o";
        echo "<br>";
        echo "<h1>Meu HTML</h1>";
        $nome = "Carlos";
        $idade = 20;
        $altura = 1.78;
        $solteiro = true;

        $prova1 = 8;
        $prova2 = 7.5;
        $soma = $prova1 + $prova2;
        $media = $soma / 2;
        $faltas = 21;

        const nomeCompleto = "Carlos Eduardo Torrichelli de Souza Pinto";
        echo "<p>".nomeCompleto."</p>";
        echo "<br>";

        if($media>=6&&$faltas<=20){
            echo "Aprovado";
        }else{
            echo "Reprovado";
        }
        $valor = 10;
        $valor += 5;
        $valor -= 7;
        $valor *= 2;
        $valor /= 4;

        $cont = 0;
        $cont++;
        $cont--;
        echo "<br>";
        do{
            echo $cont;
            $cont++;
        }while($cont<5);
        echo "<br>";
        while($cont<10){
            echo $cont;
            $cont++;
        }
        echo "<br>";
        for($i=0;$i<5;$i++){
            $cont++;
            echo $cont;
        }
        echo "<br>";
        echo "<br>";
        $numero = 1;
        for($i=1;$i<=5197;$i++){
            if($numero%2==0){
                echo $numero." ";
            }
            $numero++;
        }
    ?>
</h1>