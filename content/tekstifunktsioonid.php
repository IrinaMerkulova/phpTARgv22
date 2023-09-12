<?php
$tekst='Tore et on september';

echo $tekst;
echo "<br>";
// kõik tähed on väikesed
echo strtolower($tekst);
echo '<br>';
// kõik tähed on suured
echo strtoupper($tekst);
echo '<br>';
//iga sõna algab suure tähega
echo ucwords(strtolower($tekst));
echo '<br>';
//teksti pikkus
echo strlen($tekst);
echo '<br>';
// sõnade arv tekstis
echo str_word_count($tekst);

//eraldab lauses alates 4 kokku 5 tähte
echo substr($tekst, 3, 5);
echo '<br>';
//Esimesed 4 tähte
echo substr($tekst, 0, 4);

// esimese tühiku asukoht tekstis
echo "<br>";
echo "esimese tühiku asukoht tekstis ".strpos($tekst, " ");
echo "<br>";
$otsitav='on';
//leia on asukoht lauses
echo strpos($tekst, $otsitav);
echo "<br>";
// näita kõik sõnad peale esimest
echo substr($tekst, strpos($tekst, " "), strlen($tekst)-strpos($tekst, " "));
// Mõistatus - загадка
// Eesti linn.
// 5 подсказок при помощи разных текстовых функций.
// проверка - пользователь вводит город --/ страниуа показывает верно или нет
?>
<hr>
<h2>Mõistatus. Eesti linn</h2>
<?php
$linn='';
echo "<ol><li>Linnanimi pikkus on ".strlen($linn). "tähte</li>";
echo "</ol>";
highlight_file('tekstifunktsioonid.php');



