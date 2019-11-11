<?php
        
require_once 'connect.php';
$result = mysqli_query ($con, "SELECT * from `weatherparam` WHERE `id_city`=1");
while($name = mysqli_fetch_assoc($result)) {
    $cityName = $name['city_name'];
    $temp_c = $name['temp_c'];
    $humidity = $name['humidity'];
    $wind = $name['wind'];
    $pressure = $name['pressure'];
    $weatherArr = $name['icon_id'];
}
mysqli_close($con);
?>
<span class="nameCity"><?php 
require_once 'trans_func.php';
    print transliterateen($cityName);?></span>
    <hr>

    <div class="weatherAndTemp">   
    <span class="temp"> <?php if ($temp_c >= 0) {print '+';} else {print '-';}; print $temp_c; ?> C&deg; 
 
    </span> 
    <?php  
    echo '<img class="imgWeather" src="https://openweathermap.org/img/wn/' .
    $weatherArr . '@2x.png">'; 
    ?></div>

    <img class="icon" src="img/Humidity.png">  <span class="param"><?php print $humidity; ?>% </span><br>
    <img class="icon" src="img/wind.png"> <span class="param"><?php print $wind; ?> м/c </span><br>
    <img class="icon" src="img/pressure.png"> <span class="param"> 
    <?php 
        print round($pressure, 0);
    ?> мм рт. ст. </span>
