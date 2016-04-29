<?php
/*
//fopen pode ser um arquivo ou uma URL (Nesse caso precisa do "allow_url_fopen = 1")
$fp = fopen('http://www.google.com', 'r');
file_put_contents('file_open.txt', $fp);
fclose($fp);

$handle = fopen('file_open.txt', 'r');
while (!feof($handle))
{
	echo htmlentities(fread($handle, 1024));
}
fclose($handle);
*/
//---------------------------------------------------------------------------------------
$fp = fopen('file.txt', 'w');//Se não existir, cria
fwrite($fp, 'texto que vai dentro do arquivo');
fclose($fp);
//---------------------------------------------------------------------------------------

//Escreve um array em formato CSV
$handle = fopen('arquivo_csv.csv', 'w');
//Array Simple, sem chave valor ou  multinivel
$arrFields = [['ricardo', 'mendes'],[ 'amanda', 'neris']];//[['nome' => 'ricardo', 'sobrenome' => 'Mendes'], ['nome' => 'Amanda', 'sobrenome' => 'Neris']];
foreach($arrFields as $fields)
	fputcsv($handle, $fields, ';');
fclose($handle);