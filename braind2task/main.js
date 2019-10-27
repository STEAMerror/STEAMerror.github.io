var modal = document.getElementById('myModal');


var btn = document.getElementById("myBtn");


var span = document.getElementsByClassName("close")[0];

//Открывает модальное окно
btn.onclick = function() {
    modal.style.display = "block";
    disableScrolling();
}

//Закрывает модальное окно
span.onclick = function() {
    modal.style.display = "none";
    enableScrolling(); //Вызов функции, разрешающей прокрутку
}
//Закрывает окно при нажатии на фон
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
//Блокирует прокрутку страницы
function disableScrolling(){
    var x=window.scrollX;
    var y=window.scrollY;
    window.onscroll=function(){window.scrollTo(x, y);}; 
}
//Разрешает прокрутку страницы
function enableScrolling(){
    window.onscroll=function(){};
}