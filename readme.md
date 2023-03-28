# Iniciar o projeto
php index.php

## CONDIÇÃO IF
Na condição if ($i == ceil($size/2) - 1 || $j == ceil($size/2)) { }, a variável $size representa o tamanho da cruz que queremos desenhar, ou seja, o número de linhas e colunas que a cruz terá. A função ceil() é usada para arredondar para cima o resultado da divisão $size/2, garantindo que tenhamos sempre um número inteiro como resultado.

No caso da variável $i, estamos verificando se ela é igual a ceil($size/2) - 1. Isso é necessário para desenhar a parte vertical da cruz, que deve ser desenhada na coluna central da matriz de desenho.

O valor ceil($size/2) - 1 é usado porque as posições da matriz começam em zero, e a coluna central da matriz tem o índice $j igual a ceil($size/2) - 1. Por isso, a condição $i == ceil($size/2) - 1 verifica se estamos na linha correspondente à coluna central.

Já a variável $j é usada para desenhar a parte horizontal da cruz, que deve ser desenhada na linha central da matriz de desenho. Por isso, a condição $j == ceil($size/2) verifica se estamos na coluna correspondente à linha central.

Se uma das duas condições for verdadeira, o código dentro do if será executado e o caractere de desenho correspondente será exibido na posição correspondente da matriz de desenho.

## INTERAÇÃO FOR
A variável $j é inicializada com o valor 1 e a condição $j <= $size verifica se o valor de $j ainda é menor ou igual ao tamanho da matriz de desenho (representado pela variável $size). Enquanto essa condição for verdadeira, o bloco de código dentro do for será executado.

Dentro do bloco de código do for, podemos fazer referência à variável $j para acessar a coluna atual da matriz de desenho. Por exemplo, na condição if ($i == $j) { }, estamos verificando se a linha atual ($i) é igual à coluna atual ($j), o que indica que estamos na diagonal principal da matriz de desenho.

Ao final de cada iteração do for, a variável $j é incrementada em 1 (por meio do operador ++), o que faz com que a próxima coluna da matriz de desenho seja processada na próxima iteração. Quando o valor de $j alcançar o valor de $size + 1, o loop for será encerrado.



# Criação do X

Nessa solução, utilizamos dois loops for aninhados para percorrer cada posição da cruz. Na condição do if, verificamos se a posição atual está na diagonal principal (ou seja, se a posição da linha é igual à posição da coluna) ou na diagonal secundária (ou seja, se a posição da linha é igual ao tamanho da cruz menos a posição da coluna mais um).

Quando a condição é verdadeira, imprimimos um asterisco. Caso contrário, imprimimos dois espaços em branco. Por fim, utilizamos a função echo para imprimir uma quebra de linha (\n) após imprimir cada linha da cruz.


# Criação da Cruz
Essas linhas de código são responsáveis por desenhar a cruz. Primeiro, abrimos um loop for que itera pelas linhas da cruz. Em seguida, abrimos outro loop for que itera pelas colunas da cruz.

Dentro do segundo loop for, verificamos se a posição atual é uma posição em que um asterisco deve ser impresso. A condição que usamos para verificar isso é if ($i == ceil($size/2) - 1 || $j == ceil($size/2)). Esta condição verifica se a linha atual é a linha central (ou seja, a linha cujo índice é igual a ceil($size/2) - 1, onde ceil é uma função PHP que arredonda para cima) ou se a coluna atual é a coluna central (ou seja, a coluna cujo índice é igual a ceil($size/2)).

Se a condição for verdadeira, imprimimos um asterisco (echo "*";). Caso contrário, imprimimos dois espaços em branco (echo ".";).

Por fim, imprimimos uma quebra de linha (echo "\n";) para que a próxima linha da cruz seja impressa na linha seguinte.
