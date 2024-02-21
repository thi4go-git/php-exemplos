<?php

echo NULL;

$nome = NULL;

if (is_null($nome)) {
  echo "O valor é nulo 1!";
}

$nome = "Matheus";

echo ('<br>');

if (!is_null($nome)) {
  echo "O valor não é nulo! $nome";
}