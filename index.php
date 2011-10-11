<?php
$string = '<html>';

$string .= '<head>';
//scripts
//styles
//$string .= '<link rel="stylesheet" href="/style/adframe.css" type="text/css" />';
$string .= '</head>';

$string .= '<body>';
$string .= '<div style="font: 12px arial; color: blue; float: left; width: 150px">';
$string .= 'Advertisment 1';
$string .= '</div>';
$string .= '<div style="font: 12px arial; color: red; float: left; width: 150px">';
$string .= 'Advertisment 2';
$string .= '</div>';
$string .= '<div style="font: 12px arial; color: green; float: right; width: 150px">';
$string .= 'Advertisment 3';
$string .= '</div>';
$string .= '</body>';

$string .= '</html>';

echo $string;
?>