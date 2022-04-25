<?php
// Uso do conceito de tuplas: conjunto de dados cuja ordem contém um significado.
$dados = ['Vinicius', 10, 24];
// $nome = $dados[0];
// $nota = $dados[1];
// $idade = $dados[2];

// O comando list() permite listar variáveis. Essa listagem permite uma atribuição múltipla.
list($nome, $nota, $idade) = $dados;
[$nome, $nota, $idade] = $dados; // Os colchetes funcionam como a função list().

echo "Nome: $nome   Idade: $idade   Nota: $nota" . PHP_EOL;

$dados = [
    'nome' => 'Vinicius', 
    'nota' => 10, 
    'idade' => 24
];

[$nome, $nota, $idade] = $dados; // Esta atribuição múltipla vai falhar: as variáveis receberão NULL.
var_dump($nome, $nota, $idade); // Os lists são indexados por inteiros, não por string.

['nome' => $nome, 'nota' => $nota, 'idade' => $idade] = $dados; // Esta atribuição múltipla vai funcionar: o índice é mapeado pra variável corretamente.
echo "Nome: $nome   Idade: $idade   Nota: $nota" . PHP_EOL;
