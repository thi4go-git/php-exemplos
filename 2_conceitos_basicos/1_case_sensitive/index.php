<?php

// Não é case sensitive
echo "teste <br>";
echo "testando 2 <br>";
echo 'teste';
echo "testando 3 <br>";

// É case sensitive (Variáveis globais, a variável sempre começa com $)
$nome = "Matheus";
$NOME = "Teste";

echo $nome;
echo "<br>";
echo $NOME;