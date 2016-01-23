<?php
//http://www.hackingwithphp.com/12/3/3/searching-and-filtering-with-xpath
function gerarXML($str = '')
{
    $xml = new XMLWriter();
}

/**
 *
 * @param string $filename
 * @return SimpleXMLElement
 */
function loadXML($filename)
{
    //$xml = new SimpleXMLElement($strXML);
    //$xml = simplexml_load_string($strXML);
    $xml = simplexml_load_file($filename);

    return $xml;
}

$filename = 'output_OK_Q1360008_OMS.xml';
$xmlElement = loadXML($filename);
//Retorna um XML
//echo $xmlElement->asXML();

foreach ($xmlElement->order_list as $orderList)
{
    foreach ($orderList->order as $order)
    {
        echo "{$order->order_id}<br>";
    }
}
//Salva um arquivo XML
//$xmlElement->saveXML('criando_xml.xml');

/*
//Procura pela Promocao (tem que ter as duas tags combinadas)
$pathPromocao = "//apitem[service_type='PLAN'][item_action_type='MA']";
$xmlElementPromocao = $xmlElement->xpath($pathPromocao);
echo '<pre>';
print_r($xmlElementPromocao);
echo '</pre>';
*/

//Procura quem tem preco > 1000
//Procura na sequencia de TAGs indicadas
//$pathPreco = "/OMS/equipments/order_list/order/equipment_list/equipment[price > 1000]";
// ou
//Procura de forma global no documento (veja a utilizacao do "//")
$pathPreco = "//equipment[price > 1000]";
$xmlElementPreco = $xmlElement->xpath($pathPreco);
echo '<pre>';
print_r($xmlElementPreco);
echo '</pre>';

$xmlElement2 = loadXML('xpath.xml');
echo '<pre>';
//Busca nos atributos da TAG "resourse"
print_r($xmlElement2->xpath('*/resourse[@cost > 5]'));
echo '</pre>';