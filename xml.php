<?php
// set the output content type as xml
header('Content-Type: text/xml');
// create the new XML document
$dom = new DOMDocument();
// create the root <response> element
$response = $dom->createElement('response');
$dom->appendChild($response);
// create the <ads> element and append it as a child of <response>
$ads = $dom->createElement('ads');
$response->appendChild($ads);

$db = array('ad1'=>array('content'=>'Achieve your goal with COM1!!!',
                            'url'=>'www.com1.com',
                            'name'=>'COM1'),
            'ad2'=>array('content'=>'Achieve your goal with COM2!!!',
                            'url'=>'www.com2.com',
                            'name'=>'COM2'),
            'ad3'=>array('content'=>'Achieve your goal with COM3!!!',
                            'url'=>'www.com3.com',
                            'name'=>'COM3')
    );

foreach ($db as $key=>$value) {
    $ad = $dom->createElement('ad');
    $id = $dom->createElement('id', $key);
    $ad->appendChild($id);
    foreach ($value as $info=>$data) {
            $content = $dom->createElement($info,$data);
            $ad->appendChild($content);	
    }	
    $ads->appendChild($ad);
}

// build the XML structure in a string variable
$xmlString = $dom->saveXML();
// output the XML string
echo $xmlString;
?>
