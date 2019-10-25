<div class="swapSlider">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>    
    </div>
<div class="slideshow-conteiner">
    <div class="mySlides fade">
        <div class="vapianoText">VAPIANO</div>
        <img class="sliderImg" src="img/cat1.jpg" height="600px" alt="">
    </div>

    <div class="mySlides fade">
        <div class="vapianoText">VAPIANO</div>
        <img class="sliderImg" src="img/cat2.jpg" height="600px" alt="">
       
    </div>

    <div class="mySlides fade">
        <div class="vapianoText">VAPIANO</div>
        <img class="sliderImg" src="img/cat3.jpg" height="600px" alt="">
    </div>
    <?php
        require_once "php/main-menu.php";
    ?>
    <a class="prev" onclick="plusSlides(-1)">&#10094</a>
    <a class="next" onclick="plusSlides(1)">&#10095</a>
    <br>

</div>