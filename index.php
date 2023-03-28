<?php

// Primeiramente, definimos o tamanho que será o desenho em uma variável $size. 
$size = 5;


// Loop para desenhar o X
echo "####################### DESENHO X ############################";
echo "\n";
// Este código desenha um x de tamanho $size. 
// O loop externo itera pelas linhas, 
// enquanto o loop interno itera pelas colunas. 
// Quando a coluna atual é igual à linha atual ou 
// à coluna correspondente à linha espelhada, 
// um asterisco é impresso. 
// Caso contrário, é impresso um espaço em branco.


// o primeiro loop percorre as linhas
for ($i = 1; $i <= $size; $i++) {

    // o segundo loop percorre as colunas
    for ($j = 1; $j <= $size; $j++) {


        // verificar se a posição atual está na diagonal principal ou 
        // na diagonal secundária. Essa verificação é feita comparando a posição da linha 
        // com a posição da coluna, e com o tamanho da cruz menos a posição da coluna mais um.


        // Se a condição for verdadeira, ou seja, se a posição atual estiver na diagonal principal ou secundária, 
        // imprimimos um asterisco. Caso contrário, imprimimos dois espaços em branco.

        if ($j == $i || $j == ($size - $i + 1)) {
            echo "*";
        } else {
            echo ".";
        }
    }

    // Por fim, utilizamos a função echo para imprimir uma quebra de linha (\n) 
    // após imprimir cada linha da cruz.
    
    echo "\n";
}

// Loop para desenhar a cruz
echo "######################## DESENHO CRUZ ###########################";
echo "\n";
 
// o primeiro loop percorre as linhas
for ($i = 1; $i <= $size; $i++) {
    
    // o segundo loop percorre as colunas
    for ($j = 1; $j <= $size; $j++) {

        if ($i == ceil($size/2) - 1 || $j == ceil($size/2)) {
    

            // A função ceil() é usada para arredondar para cima o resultado da divisão $size/2, 
            // garantindo que tenhamos sempre um número inteiro como resultado.

            // Nessa expressão, a condição será verdadeira se a variável $i for igual à variável $j 
            // (ou seja, se estivermos na diagonal principal) OU se a variável $i for igual ao tamanho da cruz 
            // menos a variável $j mais um (ou seja, se estivermos na diagonal secundária). 
            // Se uma dessas condições for verdadeira, o código dentro do if será executado.
    
            echo "*";
    
        } else {
            echo ".";
    
        }
    
    }
    echo "\n";
}


?>