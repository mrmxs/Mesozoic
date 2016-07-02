<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mesozoic Blog | Feed</title>
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    </head>
    <body>
        <header class="navbar navbar-default navbar-fixed-top navbar-inverse">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">Mesozoic Blog</a>
            </div>
        </header>
        <div class='container'>
        
        
            <?php

$source_date = "30/06/2016";
$source_title = "Midi-контроллер как аллювий";
$source_text = "Конечно, нельзя не принять во внимание тот факт, что уравнение Эйлера представляет собой трансцендентальный псевдомицелий. Солифлюкция косвенно трансформирует угол крена. Аксиома силлогизма трудна в описании. Надо сказать, что дуализм нетривиален. Кластерное вибрато поразительно. Капилляр контролирует устойчивый волчок. Как уже указывалось, ортштейн дает экваториальный момент. Арпеджированная фактура, в силу третьего закона Ньютона, возможна. Как было показано выше, драм-машина индуктивно иссушает интеллигибельный нонаккорд.";

for ($index = 0; $index < 6; $index++) { 

    $date = $source_date;
    $title = $source_title;
    $text = $source_text;


    echo "<div class='post'>
      <em class='post_date'>$date</em>
      <h3 class='post_title'>$title</h3>
      <div class='post_text'><p>$text</p></div>
      <!--<hr/>-->
    </div>
    ";    
} 
            ?>
        </div>
        
        <footer class="navbar navbar-default navbar-fixed-bottom"> 
            <p class="container text-right">Mesozoic Blog <br> Copyright &copy; 2016</p>
        </footer>
    </body>
</html>

<!--
//https://yandex.ru/referats/
-->