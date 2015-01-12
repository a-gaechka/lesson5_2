<?php
//POST
if ($_SERVER['REQUEST_METHOD']=='POST' && !isset($_POST['answer'])){
  header("HTTP/1.0 404 Not Found");
   echo '<h1>Page not found</h1>';
  exit();
}
$news='Четыре новосибирские компании вошли в сотню лучших работодателей
Выставка университетов США: открой новые горизонты
Оценку «неудовлетворительно» по качеству получает каждая 5-я квартира в новостройке
Студент-изобретатель раскрыл запутанное преступление
Хоккей: «Сибирь» выстояла против «Ак Барса» в пятом матче плей-офф
Здоровое питание: вегетарианская кулинария
День святого Патрика: угощения, пивной теннис и уличные гуляния с огнем
«Красный факел» пустит публику на ночные экскурсии за кулисы и по закоулкам столетнего здания
Звезды телешоу «Голос» Наргиз Закирова и Гела Гуралиа споют в «Маяковском»';
$news=  explode("\n", $news);
//print_r($news);


function output_news($news){
    $i=1;
    $k=0;
    foreach($news as $name){
        echo 'Новость'.' '.$i.' '.'<b>id=</b>'.' '.$k.' '.$name."<br/>";
        $i++;
        $k++;
    }
}
output_news($news);
echo "<br>";
?>

<!DOCTYPE HTML>
<html>
    <head>
     <meta charset="utf-8">
     <title>Урок 5</title>
    </head>
    <body>
        <form method="POST">
            <p><b>Введите id новости, которую хотите вывести:</b></p>
            <p><input type="text" name="answer" value=""><Br></p>
            <p><input type="submit" value="Вывести"></p>
        </form>
    </body>
</html>

<?php
print_r($_SERVER);

function output_specific_news_post($news){
    if (isset($_POST['answer']) && isset($news[$_POST['answer']])){
       echo 'Вывода новости по id:'.' '.$news[$_POST['answer']];
  } else{
       print_r($news);  
    }
    
}
output_specific_news_post($news);
echo "<br>";

?>