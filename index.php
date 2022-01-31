<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicios</title>
    <style type="text/css">
       div{
           color: green;
           margin-left: 36%;
       } 
       p{
           color: lightblue;
           text-align: center;
       }
       fieldset{
            border-color: lightblue;
            border-radius: 2em;
            padding: 3em;
            background-color: #000000;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3E%3Cg fill='%230e0d0e' fill-opacity='0.05'%3E%3Cpath fill-rule='evenodd' d='M0 0h4v4H0V0zm4 4h4v4H4V4z'/%3E%3C/g%3E%3C/svg%3E");
            border-radius: 1em;
            border-color: darkcyan;
            margin-top: 1em; 
        }
              
    </style>
</head>
<body>
    

<?php
    /*Essa função diferência os messes do ano com base no parâmetro $mês */
    function mesCorrespondente(int $mes):string{
        /*Como os meses do ano são um quantidade determinada e não escalavel optei pelo uso de "casos",
        desse modo simplificando o código e resolvendo a condição  */
        switch($mes){
            case 1:
                /*uma nova variável recebe o mes correto e recebe o tratamento a ser apresentado*/
                $mescerto = "O Mês Correspondente é : Janeiro";
                echo $mescerto;
                break;
            case 2:
                $mescerto = "O Mês Correspondente é : Fevereiro";
                echo $mescerto;
                break;       
            case 3:
                $mescerto = "O Mês Correspondente é : Março";
                echo $mescerto;
                break;
            case 4:
                $mescerto = "O Mês Correspondente é : Abril";
                echo $mescerto;
                break;
            case 5:
                $mescerto = "O Mês Correspondente é : Maio";
                echo $mescerto;
                break;        
            case 6:
                $mescerto = "O Mês Correspondente é : Junho";
                echo $mescerto;
                break;
            case 7:
                $mescerto = "O Mês Correspondente é : Julho";
                echo $mescerto;
                break;
            case 8:
                $mescerto = "O Mês Correspondente é : Agosto";
                echo $mescerto;
                break;       
            case 9:
                $mescerto = "O Mês Correspondente é : Setembro";
                echo $mescerto;
                break;
            case 10:
                $mescerto = "O Mês Correspondente é : Outubro";
                echo $mescerto;
                break;
            case 11:
                $mescerto = "O Mês Correspondente é : Novembro";
                echo $mescerto;
                break;        
            case 12:
                $mescerto = "O Mês Correspondente é : Dezembro";
                echo $mescerto;
                break;
            default:
                $mescerto = "Mês Desconhecido";
                echo $mescerto;
                break;    
        }
        /*A função retorna o mes correspondente*/
        return $mescerto;
    }
    
    /*Fim da Função 1- em Português */
    /*End of Function 1 - in Portuguese */

    /*This function differentiates the months of the year based on the parameter $month */
    function correspondingMonth(int $month):string{
        /*Since the months of the year are a determined and non-scalable amount, I chose to use "cases",
        thereby simplifying the code and solving the condition*/ 
        switch($month){
            case 1:
                /*a new variable receives the correct month and receives the treatment to be presented*/
                $rightmonth = "The Corresponding Month is: Janeiro";
                echo $rightmonth;
                break;
            case 2:
                $rightmonth = "The Corresponding Month is: Fevereiro";
                echo $rightmonth;
                break;       
            case 3:
                $rightmonth = "The Corresponding Month is: Março";
                echo $rightmonth;
                break;
            case 4:
                $rightmonth = "The Corresponding Month is: Abril";
                echo $rightmonth;
                break;
            case 5:
                $rightmonth = "The Corresponding Month is: Maio";
                echo $rightmonth;
                break;        
            case 6:
                $rightmonth = "The Corresponding Month is: Junho";
                echo $rightmonth;
                break;
            case 7:
                $rightmonth = "The Corresponding Month is: Julho";
                echo $rightmonth;
                break;
            case 8:
                $rightmonth = "The Corresponding Month is: Agosto";
                echo $rightmonth;
                break;       
            case 9:
                $rightmonth = "The Corresponding Month is: Setembro";
                echo $rightmonth;
                break;
            case 10:
                $rightmonth = "The Corresponding Month is: Outubro";
                echo $rightmonth;
                break;
            case 11:
                $rightmonth = "The Corresponding Month is: Novembro";
                echo $rightmonth;
                break;        
            case 12:
                $rightmonth = "The Corresponding Month is: Dezembro";
                echo $rightmonth;
                break;
            default:
                $rightmonth = "Unknown month";
                echo $rightmonth;
                break;    
        }
        /*Function returns the corresponding month*/
        return $rightmonth;
    }

    /*Fim da Função 1- em inglês */
    /*End of Function 1 - in English */

    //>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

    //inicio da função 2 - em Portugues
    //Start of function 2 - in Portuguese

    /* Função tem por objetivo o cálculo de media simples de qualquer array que possua mais de 3 itens  */
    function mediaSimples(array $notas){
       //Utilizei o "count" para facilitar a checagem de quantos elementos temos no array 
       $quantidade = count($notas);
       //verifica se a quantidade é maior que 3 elementos 
       if ($quantidade >= 3){
            //se tiver mais de 3 elementos, soma todos os valores contidos nos elementos e armazena na variável $total
            $total = array_sum($notas);
            //faz o calculo da media simples,  dividindo o total pelo número de elementos
            $media = $total / $quantidade;
            //apresenta o resultado 
            echo "Média Simples é igual a: ", $media; 
        }
        else{
            //caso o número de elementos seja inferior a 3, cria uma variável boleana com valor falso e apresenta ao user 
            $erro = false;
            //mostra o tipo e o valor da variável 
            echo var_dump($erro);
        }
    }

    //inicio da função 2 - em Inglês 
    //Start of function 2 - in English 

    function arithmeticAverage(array $integers){
        //I used "count" to facilitate checking how many elements we have in the array
        $amount = count($integers);
        //check if the quantity is greater than 3 elements 
        if ($amount >= 3){
            //if it has more than 3 elements, it sums all the values ​​contained in the elements and stores it in the variable $total
            $total = array_sum($integers);
            //makes the calculation of the average simple, dividing the total by the number of elements
            $average = $total / $amount;
            //presents the result 
            echo "Simple Average is equal to: ", $average; 
        }
        else{
            //if the number of elements is less than 3, it creates a boolean variable with a false value and presents it to the user
            $erro = false;
            //shows the type and value of the variable
            echo var_dump($erro);
        }
    }

    /*Fim da Função 1- em inglês */
    /*End of Function 1 - in English */

    //>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

    //inicio da função 3 - em Portugues
    //Start of function 3 - in Portuguese

    //Essa função tem por finalidade verificar quantos números Pares o array possui
    function parOuImpar(array $numeros){
        //contador de elementos do array
        $contador = count($numeros);
        //contador de pares
        $pares = 0;
        //contador de Impares
        $impares = 0;

        //para a $i menor que $contador a variável $i é incrementada e o laço continua   
        for ($i = 0; $i < $contador; $i++){
            //verifica se o número é menor que 0
            if ($numeros[$i] > 0){
                //verifica se o número é par 
                if ($numeros[$i] % 2 == 0){
                    $pares++;
                }
                //se não é par, logo é impar 
                else{
                    $impares++;
                }
            }
            //se o número não é maior que 0, logo ele é menor ou igual a 0
            else{
                echo "O Número é menor ou igual a 0, digite um valor válido <br>";
                $i = $contador;
            }    
        }
        //apresenta o resultado da função
        echo "Quantidade de Números Pares  : ",$pares ,"<br>";
        echo "Quantidade de Números Impares: ",$impares;
    }
     

    //inicio da função 3 - em Inglês
    //Start of function 3 - in English


    //This function is intended to check how many even numbers the array has
    function oddOrEven(array $number){
        //counter of array elements
        $counter = count($number);
        //counter of pairs
        $pair = 0;
        // Odds counter
        $odd = 0;

        //for $i less than $counter the variable $i is incremented and the loop continues
        for ($i = 0; $i < $counter; $i++){
            // check if the number is less than 0
            if ($number[$i] > 0){
                // check if the number is even
                if ($number[$i] % 2 == 0){
                    $pair++;
                }
                //if it's not even, then it's odd
                else{
                    $odd++;
                }
            }
            //if the number is not greater than 0, then it is less than or equal to 0
            else{
                echo "Number is less than or equal to 0, enter a valid value <br>";
                $i = $counter;
            }    
        }
        //displays the result of the function
        echo "Number of even numbers : ",$pair ,"<br>";
        echo "Number of Odd Numbers  : ",$odd;
    }

    /*Fim da Função 3- em inglês */
    /*End of Function 3 - in English */

    //>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

    //inicio da função 4 - em Portugues
    //Start of function 4 - in Portuguese

    //Essa função basicamente recebe o valor de uma string e devolve ela invertida 
    function inverterString(string $string){
        //usei o strrev que faz automaticamente a inversão de string
	    echo "O texto (", $string ,") invertido fica: ", strrev($string);
    }

    //inicio da função 4 - em Inglês
    //Start of function 4 - in English

    //This function basically takes the value of a string and returns it inverted
    function reverseString(string $string){
        //I used the strrev which automatically does the string inversion
        echo "the text (", $string ,")  inverted stays : ", strrev($string);
    }

    /*Fim da Função 4- em inglês */
    /*End of Function 4 - in English */
    
    //>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

    //inicio da função 5 - em Portugues
    //Start of function 5 - in Portuguese

    //Essa função visa localizar e substituir Caracteres do tipo vogal por "?"
    function substituirCaracteres(string $string):string{  
        //recebe todas as vogais em uma array
        $antes = array("a","e","i","o","u","A","E","I","O","U");
        //recebe o caractere que substituirá em uma variável
        $depois = "?";
        //recebe o resultado da substituição de Caracteres $antes por $depois dentro da $string 
         $final = str_replace($antes, $depois, $string);
        //apresenta o resultado da substituição
        echo "O Texto ($string) sem vogais fica assim: ", $final, "<br>";
    return $final;   
    }
    
    

    //inicio da função 5 - em Inglês
    //Start of function 5 - in English

    //This function aims to find and replace Characters of type vowel by "?"
    function replaceWowels(string $string):string{
        //receives all vowels in an array
        $before = array("a","e","i","o","u","A","E","I","O","U");
        //receives the character that will replace in a variable
        $after = "?";
        //receives the result of replacing Characters $before by $after within the $string
        $final = str_replace($before, $after, $string);
        //displays the replacement result
        echo "The Text ($string) without vowels it looks like this:  ", $final,"<br>";
    return $final;   
    }
    
    /*Fim da Função 5- em inglês */
    /*End of Function 5 - in English */
    
    //>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

    //inicio da função 6 - em Portugues
    //Start of function 6 - in Portuguese

    //Essa função serve para ordenar de forma crescente
    function ordenarArray(array $array):array{
        //organiza o array
        sort($array);
        //apresenta o array
        echo "O Array for ordenado de forma crescente:  <br>";
        print_r($array);
        echo "<br><br>";

    return($array);
    }


    //inicio da função 6 - em Inglês
    //Start of function 6 - in English

    //This function serves to sort ascending
    function arraySort(array $array):array{
        // arrange the array
        sort($array);
        //displays the array
        echo "The Array is sorted in ascending order:  <br>";
        print_r($array);
    return($array);
    }
    

    /*Fim da Função 6 - em inglês */
    /*End of Function 6 - in English */
    
    //>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

    //inicio da função 7 - em Portugues
    //Start of function 7 - in Portuguese

    //função apresenta o primeiro elemento não repetido
    function primeiroValorNaoRepetido(array $array):int{
        //conta a quantidade de elementos
        $contador = count($array);
        $i = 0;
        //enquanto o contador for maior que o $i de indicador ele continua buscando elementos repetidos
        while ($i < $contador){
            //verifica se há um elemento repetido, se sim ele remove ele e pula para o proximo 
            if ($array[$i] == $array[$i+1]){
                unset($array[$i]);
                $i= $i+2;
            }
            //se não há mais o que se repetir ele vai coletar para um outro array o primeiro elemento
            else{
                $prime = array();
                array_push($prime, $array[$i]);  
                $i++;
                $contador = count($prime);
            }
            
        }
        //apaga os números remanescentes que não serão usados 
        $contador = count($array);
        if ($contador > 1){
            array_pop($array);
        }
        //retorna o resultado
        $result = intval($prime[0]);
        echo $prime[0];

        return $result; 
    }
    
    
    //inicio da função 7 - em Inglês
    //Start of function 7 - in English

    //function displays the first non-repeating element
    function firstNonRepeatedValue(array $array):int{
        //count the number of elements 
        $counter = count($array);
        $i = 0;
        //as long as the counter is greater than the $i of the indicator it keeps looking for repeated elements
        while ($i < $counter){
            //checks if there is a repeated element, if so it removes it and skips to the next
            if ($array[$i] == $array[$i+1]){
               unset($array[$i]);
               $i= $i+2;
            }
            //if there is nothing else to repeat it will collect the first element to another array
            else{
                $prime = array();
                array_push($prime, $array[$i]);  
                $i++;
                $counter = count($prime);
           }
           
        }
        //erases the remaining numbers that will not be used
        $counter = count($array);
        if ($counter > 1){
            array_pop($array);
        }
        //return the result
        $result = intval($prime[0]);
        echo $prime[0];

        return $result;  
    }

    /*Fim da Função 7 - em inglês */
    /*End of Function 7 - in English */
    
    //>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

    //inicio da função 8 - em Portugues
    //Start of function 8 - in Portuguese

    function manipulacaoArquivo():string{

        $arq = "./data.dat";
        $pont = fopen($arq,'r');
        $linha = fgets($pont); 
        $i = 0;
        while ($linha){
            $linhas[$i++] = $linha;
            $linha = fgets($pont);
        }
        
        for($i=0;$i<count($linhas);$i++){
            echo ($linhas[$i]). "<br>";
        }
    }
    //parte de exibição das funções
    echo "<fieldset>";
    echo "<div>";
    echo "==========================================", '<br>';
    echo "________________EXERCÍCIO - 1_________________", '<br>';
    echo "==========================================", '<br>';
    echo "</div>";
    echo "<p>";
    mesCorrespondente(1);
    echo '<br><br>';
    correspondingMonth(13);
    echo '<br><br>';
    echo '<br><br>';
    echo "<p>";

    echo "<div>";
    echo "==========================================", '<br>';
    echo "________________EXERCÍCIO - 2_________________", '<br>';
    echo "==========================================", '<br>';
    echo "</div>";
    echo "<p>";
    mediaSimples([4, 6, 8]);
    echo '<br><br>';
    arithmeticAverage([1, 2]);
    echo '<br><br>';
    echo '<br><br>';
    echo "</p>";

    echo "<div>";
    echo "==========================================", '<br>';
    echo "________________EXERCÍCIO - 3_________________", '<br>';
    echo "==========================================", '<br>';
    echo "</div>";
    echo "<p>";
    parOuImpar([1, 2, 3, 4, 5]);
    echo '<br><br>';
    oddOrEven([1, 2, 3, 4, 5]);
    echo '<br><br>';
    echo '<br><br>';
    echo "</p>";

    echo "<div>";
    echo "==========================================", '<br>';
    echo "________________EXERCÍCIO - 4_________________", '<br>';
    echo "==========================================", '<br>';
    echo "</div>";
    echo "<p>";
    inverterString("bar");
    echo '<br><br>';
    reverseString("foo");
    echo '<br><br>';
    echo '<br><br>';
    echo "</p>";

    echo "<div>";
    echo "==========================================", '<br>';
    echo "________________EXERCÍCIO - 5_________________", '<br>';
    echo "==========================================", '<br>';
    echo "</div>";
    echo "<p>";
    substituirCaracteres("bar");
    echo '<br><br>';
    replaceWowels("foo");
    echo '<br><br>';
    echo '<br><br>';
    echo "</p>";

    echo "<div>";
    echo "==========================================", '<br>';
    echo "________________EXERCÍCIO - 6_________________", '<br>';
    echo "==========================================", '<br>';
    echo "</div>";
    echo "<p>";
    ordenarArray([5, 1, 0, 7, 3, 3]);
    echo '<br><br>';
    arraySort([5, 1, 0, 7, 3, 3]);
    echo '<br><br>';
    echo '<br><br>';
    echo "</p>";

    echo "<div>";
    echo "==========================================", '<br>';
    echo "________________EXERCÍCIO - 7_________________", '<br>';
    echo "==========================================", '<br>';
    echo "</div>";
    echo "<p>";
    primeiroValorNaoRepetido([2, 2, 3, 1, 1, 6]);
    echo '<br><br>';
    firstNonRepeatedValue([2, 2, 3, 1, 1, 6]);
    echo '<br><br>';
    echo '<br><br>';
    echo "</p>";

    echo "<div>";
    echo "==========================================", '<br>';
    echo "________________EXERCÍCIO - 8_________________", '<br>';
    echo "==========================================", '<br>';
    echo "</div>";
    echo "<p>";
    echo '<br><br>';
    echo "Não tive tempo de terminar... mas foi ótimo a aprendizagem que esses exercícios me proporcionaram ";
    echo '<br><br>';
    echo '<br><br>';
    echo "</p>";
    echo "</fieldset>";
?>  
</body>
</html>
    
    

   

  