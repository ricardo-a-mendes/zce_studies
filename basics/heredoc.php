<?php
header('Content-Type: text/html; charset=utf-8');

$texto = 'string';

//Como se fosse um texto escrito com aspa dupla
$str1 = <<<EOD
Exemplo de uma $texto
distribuída em várias linhas
utilizando a sintaxe heredoc.
EOD;

//Como se fosse um texto escrito com aspa dupla -> HEREDOC
$str2 = <<<"EOD"
Exemplo de uma $texto
distribuída em várias linhas
utilizando a sintaxe heredoc.
EOD;

//Como se fosse um texto escrito com aspa simples -> NOWDOC
$str3 = <<<'EOD'
Exemplo de uma $texto
distribuída em várias linhas
utilizando a sintaxe newedoc.
EOD;

//O final de um heredoc deve ser na primeira coluna da linha,
//o exemplo abaixo causa erro no parse da IDE
/*
$str4 = <<<'EOD'
Exemplo de uma $texto
distribuída em várias linhas
utilizando a sintaxe heredoc.
 EOD;
*/
echo $str1;
echo '<br>';
echo $str2;
echo '<br>';
echo $str3;
echo '<br>';

//Pode dar echo direto
echo <<<"EOD"
Exemplo de uma $texto
distribuída em várias linhas
utilizando a sintaxe heredoc.
EOD;
//Não pode haver espaco apos o ponto e virgula
//Deve haver uma quebra de linha apos o final do heredoc