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

// [$nome, $nota, $idade] = $dados; // Esta atribuição múltipla vai falhar: as variáveis receberão NULL.
// var_dump($nome, $nota, $idade); // Os lists são indexados por inteiros, não por string.

// ['nome' => $nome, 'nota' => $nota, 'idade' => $idade] = $dados; // Esta atribuição múltipla vai funcionar: o índice é mapeado pra variável corretamente.

unset($nome, $nota, $idade); // Remove as variáveis.
extract($dados); // A função extract pega os índices de um array com chaves de string e extrai variáveis.
// NUNCA USE O COMANDO EXTRACT COM ARRAYS QUE VOCÊ NÃO CONFIA!!!

echo "Nome: $nome   Idade: $idade   Nota: $nota" . PHP_EOL;

// O comando compact faz o inverso: pega os nomes das variáveis 
// e cria um array com índice de string.
$ex1 = true;
$ex2 = 'Dois';
$ex3 = 3;
var_dump(compact('ex1', 'ex2', 'ex3'));

// Cópia do exercício:

// $contas = [
//     [
//         'titular' => 'Vinicius Dias',
//         'saldo' => 100
//     ],
//     [
//         'titular' => 'Maria Joaquina',
//         'saldo' => 1000
//     ],
//     [
//         'titular' => 'João da Silva',
//         'saldo' => 800
//     ],
// ];

// Como eu posso me aproveitar da função list para ter as variáveis $titular e $saldo definidas?

// foreach ($contas as ['titular' => $titular, 'saldo' => $saldo]) {
//     echo "$titular possui $saldo reais" . PHP_EOL;
// }

/** 
 * Alternativa correta! Desta forma para cada item do array $contas nós 
 * aplicaríamos a função list. Nesse caso nós estamos usando a sintaxe 
 * resumida usando colchetes, mas poderíamos sem problema usar a sintaxe 
 * mais verbosa com com list().
 */
