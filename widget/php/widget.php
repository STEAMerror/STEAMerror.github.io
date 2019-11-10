<?php
        $key = '3f8429473cc28d4460ea04104cd1ff2b'; 
        $responce = file_get_contents('https://api.openweathermap.org/data/2.5/weather?q=Oryol,ru&APPID='.$key);
        $responce = json_decode($responce, true);
        $weatherArr = $responce['weather'];
        $cityName = $responce['name'];
        $temp_k = $responce['main']['temp'];
        // $temp_f = $responce['main']['temp'];
        $temp_c = round($temp_k - 273.15);
        
        // $temp_c = ($temp_f - 32) / 9 * 5;
        $humidity = $responce['main']['humidity'];
        $wind = $responce['wind']['speed'];
        $pressure = $responce['main']['pressure'];
    ?>
    

    <span class="nameCity"><?php 
function transliterateen($input){
    $gost = array(
    "a"=>"а","b"=>"б","v"=>"в","g"=>"г","d"=>"д","e"=>"е","yo"=>"ё",
    "j"=>"ж","z"=>"з","i"=>"и","i"=>"й","k"=>"к",
    "l"=>"л","m"=>"м","n"=>"н","o"=>"о","p"=>"п","r"=>"р","s"=>"с","t"=>"т",
    "y"=>"у","f"=>"ф","h"=>"х","c"=>"ц",
    "ch"=>"ч","sh"=>"ш","sh"=>"щ","i"=>"ы","e"=>"е","u"=>"у","ya"=>"я","A"=>"А","B"=>"Б",
    "V"=>"В","G"=>"Г","D"=>"Д", "E"=>"Е","Yo"=>"Ё","J"=>"Ж","Z"=>"З","I"=>"И","I"=>"Й","K"=>"К","L"=>"Л","M"=>"М",
    "N"=>"Н","O"=>"О","P"=>"П",
    "R"=>"Р","S"=>"С","T"=>"Т","Y"=>"Ю","F"=>"Ф","H"=>"Х","C"=>"Ц","Ch"=>"Ч","Sh"=>"Ш",
    "Sh"=>"Щ","I"=>"Ы","E"=>"Е", "U"=>"У","Ya"=>"Я","'"=>"ь","'"=>"Ь","''"=>"ъ","''"=>"Ъ","j"=>"ї","i"=>"и","g"=>"ґ",
    "ye"=>"є","J"=>"Ї","I"=>"І",
    "G"=>"Ґ","YE"=>"Є"
    );
    return strtr($input, $gost);
    }
    print transliterateen($cityName);?></span>
    <hr>

    <div class="weatherAndTemp">   
    <span class="temp"> <?php if ($temp_c >= 0) {print '+';} else {print '-';}; print $temp_c; ?> C&deg; 
 
    </span> 
    <?php  
    echo '<img class="imgWeather" src="https://openweathermap.org/img/wn/' .
    $weatherArr [0]['icon'] . '@2x.png">'; 
    ?></div>

    <img class="icon" src="img/Humidity.png">  <span class="param"><?php print $humidity; ?>% </span><br>
    <img class="icon" src="img/wind.png"> <span class="param"><?php print $wind; ?> м/c </span><br>
    <img class="icon" src="img/pressure.png"> <span class="param"> 
    <?php 
        $pressure = $pressure * 0.75006375541921; 
        print round($pressure, 0);
    ?> мм рт. ст. </span>
