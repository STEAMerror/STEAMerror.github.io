
$(document).ready(function(){
   $.ajax({
        url:'php/widget.php',
		cache: false,
       success:function(data)
       {
              $(".animationWidget").html(data);
           }
    });
});