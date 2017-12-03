<?php

include("simple_html_dom.php");
$id =  $_POST["id_product"];
$html = file_get_html('https://www.ceneo.pl/'.$id.'#tab=reviews');
$html1 = file_get_html('https://www.ceneo.pl/'.$id.'#tab=spec');
foreach($html->find('h1.product-name') as $a);
foreach($html->find('span[class="prod-review"]') as $number_review){
	$liczba_opini = $number_review->find('span[itemprop="reviewCount"]',0)->plaintext; // Parse liczba opini
} 

$liczba_opini_dziel = $liczba_opini / 10; // dzielenie opini przez 10
$liczba_stron = ceil($liczba_opini_dziel); // zaokroąglanie liczby powyzej w gory > liczba stron opini art.

foreach($html1->find('article.product-top') as $extract_top);
foreach($html1->find('div.product-full-description') as $extract_content);
	echo $extract_top;
	echo $extract_content;

foreach($html->find('ol[class="product-reviews js_product-reviews js_reviews-hook"]') as $firstElement);
// $opinie[] = $firstElement->find('li[class="review-box js_product-review"]',0)->outertext; php
	echo "<br> <h2>Opinie</h2> <br> <hr> <br>";
	echo $firstElement->outertext;

for($numer_strony=2; $numer_strony<=$liczba_stron; $numer_strony++){
$strona[$numer_strony] = file_get_html('https://www.ceneo.pl/'.$id.'/opinie-'.$numer_strony.'');
foreach($strona[$numer_strony]->find('ol[class="product-reviews js_product-reviews js_reviews-hook"]') as $firstElement1[]);
}
for ($i=0; $i <$liczba_stron ; $i++){ 
echo $firstElement1[$i];
}


?>