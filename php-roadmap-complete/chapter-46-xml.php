<?php
// Chapter 46: XML parsing (SimpleXML)
$xmlstr = '<root><user name="Amogh"/></root>';
$xml = simplexml_load_string($xmlstr);
echo 'User attribute: ' . $xml->user['name'] . "\n";
?>