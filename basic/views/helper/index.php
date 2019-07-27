
<?php
use yii\helpers\Html;
use yii\helpers\Inflector;

$l="Одна из главных целей Yii – производительность.
Yii — не проект одного человека. Он поддерживается и развивается сильной командой1 и большим сообществом разработчиков, которые ей помогают. Авторы фреймворка следят за тенденциями веб разработки и
развитием других проектов. Наиболее подходящие возможности и лучшие практики регулярно внедряются в фреймворк в виде простых и
элегантных интерфейсов";
echo $l;
$l2=\yii\helpers\StringHelper::countWords($l);
for ($k=0; $k<$l2; $k=$k+30)
{
    echo "<br>";
    $text_explode = explode(' ', $l);
    $output = array_slice($text_explode , $k, 30);
    $comma_separated = implode(" ", $output);
    $this->title = \yii\helpers\StringHelper::truncateWords($comma_separated, 7, '...');
    echo '<h1>'.Html::encode($this->title).'<h1>';
}

$d="created_at";
echo $d."<br>";
$d=Inflector::camelize($d);
echo $d."<br>";

//Купи слона
//Kupi slona
$d="Купи слона";
echo $d."<br>";
$d=Inflector::slug($d,' ', false);
echo $d;

?>


